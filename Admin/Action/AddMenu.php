<?php

use LDAP\Result;

require_once '../../Part/dbconfig.php';
?>

<?php

if (isset($_POST["SortOrder"])) {
    $SortOrder = $_POST["SortOrder"];
    $Title = $_POST["Title"];
    $IconClass = $_POST["IconClass"];

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    try {

        $sql = "INSERT INTO `Menu`(`Title`, `IconClass`, `SortOrder`)
        VALUES ('$Title','$IconClass',$SortOrder)";

        $query = $conn->prepare($sql);
        $query->execute();

        // $conn->exec($sql);

        header("Location:/mycms/Admin/Menulist");
    } catch (PDOException $e) {
        header("Location:/mycms/Admin/Menulist");
    }
}

$conn = null;
?>   