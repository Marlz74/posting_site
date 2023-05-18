
<?php
    require_once APPROOT."/views/inc/header.php";
    
?>
    <div class="container">
    <?php require_once APPROOT.'/views/inc/navbar.php'; ?>
        
        <div class="flex-space-around m-t2">
            <h2>POST</h2>
            <a href="<?= URLROOT ?>posts/add" class="btn">ADD POST</a>
        </div>
    
        
        
        <?php if(!is_null($data['status'])): ?>
        <?php foreach($data['post'] as $post): ?>
            <div class="card m-t1 m-b1">
                <p><?= $post->body ?></p>
                 <small>Author :&nbsp; <?= $post->name; ?> &NonBreakingSpace;| &NonBreakingSpace;<?= $post->createdAt ?> </small> <br>
                 <small><a href="<?= URLROOT ?>posts/show/<?=$post->postId?>">See more..</a></small>

            </div>
        <?php endforeach?>
        <?php else :?>
            <div class="card m-t1 m-b1">
                <h2>No post has been made..</h2>
            </div>
        <?php endif?>


    </div>

    <?php
    require_once APPROOT."/views/inc/footer.php";