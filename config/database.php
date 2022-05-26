<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "admin_lte";

$connection = mysqli_connect($server, $user, $pass, $database);

if (!$connection) {
    die("<script>alert('Connection Failed.')</script>");
}

?>


                                              
                                            