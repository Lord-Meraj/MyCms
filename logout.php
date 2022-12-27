<?php

use LDAP\Result;
?>
<div class="Content">
    <div class="maindata p-5">
        <?php
        require_once 'Part/Header.php';


        $cookie_name = "Userlogin";
        if (isset($_COOKIE[$cookie_name])) {
            setcookie($cookie_name, null, -1,'/');
            session_destroy();
            header("Location:/mycms/login");
        }
        require_once 'Part/Menu.php';


        ?>
    </div>
</div>
<?php
require_once 'Part/Footer.php';
?>