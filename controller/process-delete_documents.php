<?php
require_once('../config/connection.php');

$get_id=$_GET['id'];

// sql to delete a record
$sql =$conn->query("Delete from documents where id = '$get_id'");

// use exec() because no results are returned
// $conn->exec($sql);

if ($sql) {


            echo '<script> alert("Data Deleted !!"); 
            	 window.location = "../view-documents_gallery.php";
      
            	</script>'; 
          
	// code...
}else{
	 echo '<script> alert("Failed to Delete"); </script>'; 

}
?>