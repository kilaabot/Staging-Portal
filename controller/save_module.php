<?php

include '../config/config.php';

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

 
if(isset($_POST['save_module']))
{
	// $rollnos = $_POST['rollno'];
	// $names = $_POST['name'];

    $m_modules    = $_POST['m_module']; 
    $m_ctrls     = $_POST['m_ctrl']; 
    $m_info     = $_POST['m_info'];

	$name_no = array_combine($m_modules, $m_ctrls);



foreach ($name_no as $m_modules => $m_ctrls) {
	// echo "$m_module -> $m_ctrl";

	$res = mysqli_query($conn,"insert into userpri(m_module,m_ctrl,m_info) values('$m_modules','$m_ctrls','$m_info')");
		if(!$res)
			echo "Record not Inserted";
		else
			echo "<script>
		window.location = '../view-role_createnew.php';</script>";
		?><br/><?php

	}

	mysqli_close($conn);
	
}



?>
