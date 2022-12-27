<?php
require_once 'Part/Header.php';
require_once 'Part/Menu.php';
?>
<div class="Content">
    <div class="maindata p-5">
        <h1>صفحه اصلی</h1>
        <?php
        if (isset($_COOKIE["Userlogin"])) {
        ?>
        <h2>خوش آمدید <span>
                <?php echo $_COOKIE["Userlogin"] ?>
            </span></h2>
        <?php } ?>
    </div>
</div>
<?php
require_once 'Part/Footer.php';
?>