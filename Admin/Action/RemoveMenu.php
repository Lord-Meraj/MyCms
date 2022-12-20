<?php

use LDAP\Result;

require_once '../../Part/dbconfig.php';
?>

<?php
$id = intval($_GET['id']);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
try {

    // $sql = "DELETE FROM `menu` WHERE Id=$id";

    $query = $conn->prepare($sql);
    $query->execute();

    // $conn->exec($sql);

    echo "true";
} catch (PDOException $e) {
    echo "false";
    // header("Location:/mycms/Admin/Menulist");
}


$conn = null;
?>   