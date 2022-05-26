<?php

include "../config/config.php";

 
// Add

if(!empty($_POST["m_info1"])) {
  $query = "SELECT * FROM userpri WHERE m_info='" . $_POST["m_info1"] . "'";
  $result = mysqli_query($conn,$query);
  $count = mysqli_num_rows($result);
  if($count>0) {
    echo "<span style='color:red'> Role Already Exist .</span>";
    echo "<script>$('#updaterole').prop('disabled',true);</script>";
  }else{
    // echo "<span style='color:green'> User available for Registration .</span>";
    echo "<script>$('#updaterole').prop('disabled',false);</script>";
  }
}


if(!empty($_POST["m_module"])) {

  echo "<span style='color:red'> Please select an item in the list .</span>";
    echo "<script>$('#btnadd').prop('disabled',true);</script>";
} else  {

  echo "<script>$('#btnadd').prop('disabled',false);</script>";
}

// End Add


// Edit 

if(!empty($_POST["m_info"])) {
  $query = "SELECT * FROM userpri WHERE m_info='" . $_POST["m_info"] . "'";
  $result = mysqli_query($conn,$query);
  $count = mysqli_num_rows($result);
  if($count>0) {
    echo "<span style='color:red'> Role Already Exist .</span>";
    echo "<script>$('#save_module').prop('disabled',true);</script>";
  } else {

     echo "<script>$('#save_module').prop('disabled',false);</script>";

  }

}


// End Edit 

?>