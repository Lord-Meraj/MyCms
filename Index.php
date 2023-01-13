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
        <h2 class="m-4 text-success">خوش آمدید <span>
                <?php echo $_COOKIE["Userlogin"] ?>
            </span></h2>
        <?php } ?>
    </div>
    <div class="container">
        <div class="detail m-4">
            <h3 class="mb-2">خانه‌های لوکس و فوق العاده مدرن</h3>
            <p>خانه های لوکس و رویایی در نوع خود بی‌نظیرند و طرفداران خاص خودشان را دارند. علاقه مندان به این سبک از خانه‌ها معمولا به دنبال گزینه‌های استثنایی و بی‌نظیر و تک هستند.</p>
        </div>
    </div>
    <div class="owl-carousel owl-theme">
        <?php 
        for ($i=1; $i <= 6; $i++) { 
            ?>
        <div class="item"><img src="/MYCMS/src/images/home/<?php echo($i) ?>.jpg" alt=""></div>
        <?php 
    }
        ?>
    </div>
</div>
<?php
require_once 'Part/Footer.php';
?>