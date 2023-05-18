<nav class="flex-space-betwn m-b2">
    <section><small>SDMarlz</small></section>
    <div class="navlink flex-space-betwn">
        <a href="<?=URLROOT ?>pages/index">Home</a>
        <a href="<?=URLROOT ?>pages/about">About</a>
        <?php if(isset($_SESSION['user_id'])):?>
        <a href="<?=URLROOT ?>users/signout">Sign out</a>
        <?php else : ?>
        <a href="<?=URLROOT ?>users/register">Register</a>
        <a href="<?=URLROOT ?>users/signin">Sign in</a>
        <?php endif ; ?>
    </div>

</nav>