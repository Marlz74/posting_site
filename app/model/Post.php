<?php
    class Post{
        private $db;
        public function __construct(){
            $this->db=new Db();

        }
        public function getPost(){
            $this->db->query('SELECT *, post.id as postId,users.id as userId, post.created_at as createdAt
             FROM post INNER JOIN users ON post.userid=users.id ORDER BY post.created_at');
            $this->db->execute();

            if($this->db->rowCount()>0){
                return $this->db->resultSet();
            }else{
                return false;
            }

        }

        public function addPost($post){
            $this->db->query("INSERT INTO post (userid,title,body) VALUES (?,?,?)");
            $this->db->bind(1,$post['userid']);
            $this->db->bind(2,$post['title']);
            $this->db->bind(3,$post['body']);
            return $this->db->execute()?true:false;
                
            
        }
        
    }