<?php
$conn=new PDO('mysql:host=localhost; dbname=admin_lte', 'root', '') or die(mysql_error());

if(isset($_POST['submit'])!=""){
  $name=$_FILES['file']['name'];
  $size=$_FILES['file']['size'];
  $filetype=$_FILES['file']['type'];
  $temp=$_FILES['file']['tmp_name'];
  $description=$_POST['description'];
  $uploadby=$_POST['uploadby'];
  $uploaddate=date("Y-m-d");

  // $link=$_POST['link'];
  $fname = date("YmdHis").'_'.$name;
  $chk = $conn->query("SELECT * FROM  documents where name = '$name' ")->rowCount();
  if($chk){
    $i = 1;
    $c = 0;
  while($c == 0){
      $i++;
      $reversedParts = explode('.', strrev($name), 2);
      $tname = (strrev($reversedParts[1]))."_".($i).'.'.(strrev($reversedParts[0]));
    // var_dump($tname);exit;
      $chk2 = $conn->query("SELECT * FROM  documents where name = '$tname' ")->rowCount();
      if($chk2 == 0){
        $c = 1;
        $name = $tname;
      }
    }
}
 $move =  move_uploaded_file($temp,"uploaded_files/".$fname);
 if($move){
  $query=$conn->query("insert into documents(name,fname,uploadby,description,filetype,uploaddate)values('$name','$fname','$uploadby','$description','$filetype','$uploaddate')");
  if($query){
      
        echo '<script> alert("Successfully Uploaded !!"); 
            window.location = "view-documents_gallery.php";
                </script>'; 
//   header("location:view-documents_gallery.php");
  }
  else{
  die(mysql_error());
  }
 }
}
?>

