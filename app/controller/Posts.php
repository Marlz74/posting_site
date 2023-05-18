<?php
    class Posts extends Controller{
        private $postModel;
        public function __construct(){
            !isloggedin()?urlRedirect('users/signin'):'';
            $this->postModel=$this->model('Post');
        }

        public function index(){

            $post=$this->postModel->getPost();
            $status=!$post?null:1;
            $data=[
                'post'=>$post,
                'status'=>$status
            ];
            $this->view('post/index',$data);
        }
        public function add(){
            

            if($_SERVER['REQUEST_METHOD']=='POST'){
                $data=[
                    'title'=>sanitize_data($_POST['title']),
                    'body'=>sanitize_data($_POST['body']),
                    'title_err'=>'',
                    'body_err'=>''
                ];
                $data['title_err']=empty($data['title'])?'Enter title':'';
                $data['body_err']=empty($data['body'])?'Write Post':'';

                if(empty($data['title_err']) && empty($data['body_err'])){
                    $data['userid']=$_SESSION['user_id'];
                    if($this->postModel->addPost($data)){
                        $_SESSION['flash_alert']=true;
                        $_SESSION['flash_message']='Post uploaded sucessfully';
                    }else{
                        $_SESSION['flash_alert']=null;
                        $_SESSION['flash_message']='An unexpected error occured';
                    }
                    $this->view('post/add',$data);
                }else{
                    $this->view('post/add',$data);
                }

                
            }else{
                $data=[
                    'title'=>'',
                    'body'=>'',
                    'title_err'=>'',
                    'body_err'=>''
                ];
                $this->view('post/add',$data);
            }
        }

        public function show($id='',$say=''){
            if(empty($say)){

                print_r( $id); die();
            }

        }
    }