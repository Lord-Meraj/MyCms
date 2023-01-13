<?php

use LDAP\Result;
?>
<div class="Content">
    <div class="maindata p-5">
<?php
    require_once 'Part/Header.php';
if (isset($_POST["Email"])) {
    $Email = $_POST["Email"];
    $Pass = $_POST["Pass"];


    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    try {

        $sql = "Select * from users WHERE Email='$Email' && Pass='$Pass'";



        $query = $conn->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
       if(isset($results[0])){
           $cookie_name = "Userlogin";
           if (!isset($_COOKIE[$cookie_name])) {
               $cookie_value = $results[0]->Fname." ".$results[0]->Lname;
               setcookie($cookie_name, $cookie_value, time() + 240, "/");
               $_SESSION["UserRoleId"] = $results[0]->RoleID;
            header("Location:/mycms");
            }
        }else{
            echo "<h4 class='text-danger'>نام کاربری یا رمز عبور اشتباه است !</h4>";
        }


        // header("Location:/mycms/");
    } catch (PDOException $e) {
        header("Location:/mycms/login");
    }
}

require_once 'Part/Menu.php';


?>

        <form action="/MYCMS/Login.php" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">ایمیل</label>
                        <input type="text" name="Email" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">رمز عبور</label>
                        <input type="password" name="Pass" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success ms-auto me-auto d-block mt-4">ورود</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
require_once 'Part/Footer.php';
?>