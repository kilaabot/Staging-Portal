
<?php  

include('../config/config.php'); 


//UPDATE ROLE

   if(isset($_POST['updaterole']))
    {


         $m_info = $_POST['m_info1'];
         $m_info2 = $_POST['m_info'];

        $query = "UPDATE userpri SET m_info='$m_info' WHERE m_info='$m_info2' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run )

        {
            echo '<script> 
                             window.location = "../view-roles.php";

                  </script>'; 
        }else {
            echo '<script> alert("Data Not Updated !!");
                             window.location = "../view-roles.php";
                 </script>'; 
        }  
   }




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

  //INSERT ROLE

    if(isset($_POST['updaterole']))
{

    $m_modules    = $_POST['m_module']; 
    $m_ctrls     = $_POST['m_ctrl']; 
    $m_info     = $_POST['m_info1'];

    $name_no = array_combine($m_modules, $m_ctrls);
    

    foreach ($name_no as $m_module => $m_ctrl):

    echo "$m_module -> $m_ctrl";

    $query2 = "INSERT INTO userpri (m_module,m_ctrl,m_info) VALUES ('$m_module','$m_ctrl','$m_info')";

    $query_run2 = mysqli_query($conn, $query2);

       if ($query_run2) {

    echo '<script> 
    window.location = "../view-roles.php"; 
                                  </script>'; 

        } else {
        echo "<script>alert('Woops! Something Wrong Went.')</script>";
        }

     endforeach;
    mysqli_close($conn);
    
}


?>