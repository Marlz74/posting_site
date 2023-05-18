
<?php
    require_once APPROOT."/views/inc/header.php";
    
?>
    <div class="container">
    <?php require_once APPROOT.'/views/inc/navbar.php'; ?>
        
        <div class="flex-space-around m-t2">
            <h2>POST</h2>
            <div class="flex-space-betwn">
                <a href="<?= URLROOT ?>posts/index" class="btn">View POST</a>
                <a href="<?= URLROOT ?>posts/add" class="btn">ADD POST</a>

            </div>
        </div>
        <?php isset($_SESSION['flash_alert'])? flashMessage($_SESSION['flash_alert'],$_SESSION['flash_message']):''; ?>
        <div class="wrap m-t2">
            <form action="<?= URLROOT?>posts/add" method="POST" >
                <div class="post_title">
                    <input type="text" name="title" placeholder="Enter Post title" value="<?=$data['title']?>"> <br>
                    <small><?=empty($data['title_err'])?'':$data['title_err'];?></small>
                </div>
                <div class="post_body">
                    <textarea name="body" placeholder="Write post" value='value="<?=$data['body']?>'></textarea><br>
                    <small><?=empty($data['body_err'])?'':$data['body_err'];?></small>
                </div>
                <div class="flex-center">
                    <button type="submit" class="btn">Post</button>
                </div>

        
            </form>
        </div>
    
        
        


    </div>

    <?php
    require_once APPROOT."/views/inc/footer.php";