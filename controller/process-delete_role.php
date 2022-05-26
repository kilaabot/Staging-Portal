<?php 

include('../config/config.php'); 
 
    if(isset($_GET['delRole'])){

        $m_info = $_GET['delRole'];

        $query = "DELETE FROM userpri WHERE  m_info='$m_info' ";

        $query_run = mysqli_query($conn, $query);

        if($query_run) {
              echo '<script> alert("Successfully deleted !!"); 
                     window.location = "../view-roles.php";

              </script>'; 
            
        }else{
            echo '<script> alert("Data Not Deleted !!"); </script>';
            die(mysqli_error($conn));
        }  
   }



?>