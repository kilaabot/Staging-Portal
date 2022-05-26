<?php 
 


if (!isset($_SESSION['username'])) {
    header("Location: view-login.php");
}

?>

<?php
 $db = mysqli_connect('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'admin_lte' ) or die(mysqli_error($db));
?>

<?php 

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "admin_lte";

$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}


//Bert 