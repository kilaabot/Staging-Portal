<?php 
session_start();

if (!isset($_SESSION['username'])) { 
    header("Location: view-login.php");
}

include("config/database.php");


$createdbylms = $_SESSION['username'];  // set your username id settings
$datetime_string = date('c',time());    
    
if(isset($_POST['action']) or isset($_GET['view']))
{
    if(isset($_GET['view']))
    {
        header('Content-Type: application/json');
        $start = mysqli_real_escape_string($connection,$_GET["start"]);
        $end = mysqli_real_escape_string($connection,$_GET["end"]);
        
        $result = mysqli_query($connection,"SELECT `id`, `title` ,`createdby` ,`description` ,`mlink` ,`start`,`end` FROM  `events` where (date(start) >= '$start' AND date(start) <= '$end') and createdbylms='".$createdbylms."'");
        while($row = mysqli_fetch_assoc($result))
        {
            $events[] = $row; 
        }
        echo json_encode($events); 
        exit; 
    }


    elseif($_POST['action'] == "add")
    {   



        mysqli_query($connection,"INSERT INTO `events` (
                    `title` ,
                    `createdby` ,
                    `description` ,
                    `mlink` ,
                    `start` ,
                    `end` ,
                    `createdbylms` 
                    )
                    VALUES (
                    '".mysqli_real_escape_string($connection,$_POST["title"])."',
                    '".mysqli_real_escape_string($connection,$_POST["createdby"])."',
                    '".mysqli_real_escape_string($connection,$_POST["description"])."',
                    '".mysqli_real_escape_string($connection,$_POST["mlink"])."',
                    '".mysqli_real_escape_string($connection,date('Y-m-d H:i:s',strtotime($_POST["start"])))."',
                    '".mysqli_real_escape_string($connection,date('Y-m-d H:i:s',strtotime($_POST["end"])))."',
                    '".mysqli_real_escape_string($connection,$createdbylms)."'
                    )");
        header('Content-Type: application/json');

        echo '{"id":"'.mysqli_insert_id($connection).'"}';
        exit;

        


    }
    elseif($_POST['action'] == "update")
    {
        mysqli_query($connection,"UPDATE `events` set 
            `title` = '".mysqli_real_escape_string($connection,$_POST["title"])."',
            `start` = '".mysqli_real_escape_string($connection,date('Y-m-d H:i:s',strtotime($_POST["start"])))."', 
            `end` = '".mysqli_real_escape_string($connection,date('Y-m-d H:i:s',strtotime($_POST["end"])))."'
            where createdbylms = '".mysqli_real_escape_string($connection,$createdbylms)."' and id = '".mysqli_real_escape_string($connection,$_POST["id"])."'");
        exit;
    }
    elseif($_POST['action'] == "delete") 
    {
        mysqli_query($connection,"DELETE from `events` where createdbylms = '".mysqli_real_escape_string($connection,$createdbylms)."' and id = '".mysqli_real_escape_string($connection,$_POST["id"])."'");
        if (mysqli_affected_rows($connection) > 0) {
            echo "1";
        }
        exit;
    }
}



if(isset($_POST['updateevent']))
    {
        $id = $_POST['eventID'];

        $title = $_POST['title'];
        $description = $_POST['description'];
        $mlink = $_POST['mlink'];

        $query = "UPDATE events SET title='$title', description='$description', mlink='$mlink' WHERE id='$id' ";

        $query_run = mysqli_query($connection, $query);

         echo '<script> alert("Successfully Updated !!"); 
                     window.location = "view-calendar.php";

              </script>'; 

              exit;
   }


?>