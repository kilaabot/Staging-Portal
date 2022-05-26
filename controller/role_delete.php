<?php 

// DELETE ROLE

    if(isset($_POST['m_id'])){

    foreach ($_POST['m_id'] as $m_id):

    $query1 = "DELETE FROM userpri WHERE m_id='$m_id'";

    $query_run1 = mysqli_query($conn, $query1);

    if ($query_run1) {

    echo '<script> 
    window.location = "../view-roles.php"; 
                                  </script>'; 

        } else {
        echo "<script>alert('Woops! Something Wrong Went.')</script>";
        }

        endforeach;

    }



?>
