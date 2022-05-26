<?php
$conn = mysqli_connect("localhost", "root", "", "admin_lte");

if(isset($_POST["action"])){
  // Choose a function depends on value of $_POST["action"]
  if($_POST["action"] == "delete"){
    delete();
  }
}

function delete(){
  global $conn;

  $m_id = $_POST["m_id"];


  $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM userpri WHERE m_id = $m_id"));

  // Data with female gender
  // if($rows["gender"] == "Female"){
  //   echo 0;
  //   exit;
  // }

  mysqli_query($conn, "DELETE FROM userpri WHERE m_id = $m_id");
  echo 1;
}
