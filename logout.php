<?php

use LDAP\Result;
?>
<div class="Content">
    <div class="maindata p-5">
        <?php
        require_once 'Part/Header.php';


        $cookie_name = "Userlogin";
        if (isset($_COOKIE[$cookie_name])) {
            // $cookie_value = $results[0]->Fname . " " . $results[0]->Lname;
            // $cookie_value = "Meraj Parhizkari";
            setcookie($cookie_name, null, -1,'/');
            header("Location:/mycms/login");
        }
        require_once 'Part/Menu.php';


        ?>
    </div>
</div>
<?php
require_once 'Part/Footer.php';
?>