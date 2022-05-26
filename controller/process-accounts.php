<?php include('../config/dbcon.php'); 



error_reporting(0);

session_start();

$region=$row['region'];


// Update User 

    if(isset($_POST['updateuser']))
    {
        $id = $_POST['edId'];
        $email = $_POST['edEmail'];
        $username = $_POST['edUsername'];
        $password = $_POST['edPassword'];
        $role = $_POST['edRole'];
        $region = $_POST['edRegion'];
        $status = $_POST['edStatus'];
        $regioninfo = $_POST['edRegioninfo'];

        $query = "UPDATE users SET email='$email', username='$username', password='$password', role='$role', region='$region', regioninfo='$regioninfo', status='$status' WHERE id='$id' ";

        $query_run = mysqli_query($conn, $query);

        if($query_run)

        {
            echo '<script> alert("Successfully Updated !!");
                window.location = "../view-accounts.php"; </script>'; 
        }else {
            echo '<script> alert("Data Not Updated !!"); </script>'; 
        }  
   }
   
 // End Update User
 // Delete User 

    if(isset($_GET['deleteuser'])){

        $id = $_GET['deleteuser'];

        $query = "DELETE FROM users WHERE  id='$id' ";

        $query_run = mysqli_query($conn, $query);

        if($query_run) {
              echo '<script> alert("Successfully deleted !!"); 
                     window.location = "view-accounts.php";

              </script>'; 
            
        }else{
            echo '<script> alert("Data Not Deleted !!"); </script>';
            die(mysqli_error($conn));
        }  
   }
 
// End Delete user
?>
