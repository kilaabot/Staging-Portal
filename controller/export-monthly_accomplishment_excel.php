<?php
include_once("../config/config.php");
$query = "SELECT * FROM monthly ORDER BY daterange DESC";
$results = mysqli_query($conn, $query) or die("database error:". mysqli_error($conn));
$allMonthlys = array();
while( $monthlys = mysqli_fetch_assoc($results) ) {
	$allMonthlys[] = $monthlys;
}
$startDateMessage = ''; 
$endDate = '';
$noResult ='';
if(isset($_POST["exportcsv"])){
 if(empty($_POST["fromDate"])){
  $startDateMessage = '<label class="text-danger">Select start date.</label>';
 }else if(empty($_POST["toDate"])){
  $endDate = '<label class="text-danger">Select end date.</label>';
 } else {  
  $monthlyQuery = "
	SELECT * FROM monthly 
	WHERE daterange >= '".$_POST["fromDate"]."' AND date <= '".$_POST["toDate"]."' MONTHLY BY date DESC";
  $monthlyResult = mysqli_query($conn, $monthlyQuery) or die("database error:". mysqli_error($conn));
  $filterMonthlys = array();
  while( $monthly = mysqli_fetch_assoc($monthlyResult) ) { 
	$filterMonthlys[] = $monthly;
  }
  if(count($filterMonthlys)) {
	  $fileName = "phpzag_export_".date('Ymd') . ".csv";
	  header("Content-Description: File Transfer");
	  header("Content-Disposition: attachment; filename=$fileName");
	  header("Content-Type: application/csv;");
	  $file = fopen('php://output', 'w');
	  $header = array("Id", "Name", "Item", "Value", "Date");
	  fputcsv($file, $header);  
	  foreach($filterMonthlys as $monthly) { 
	   $monthlyData = array();
	   $monthlyData[] = $monthly["id"];
	   $monthlyData[] = $monthly["activity"]; 
	   $monthlyData[] = $monthly["objectives"];
	   $monthlyata[] = $monthly["daterange"];
	   $monthlyData[] = $monthly["dswd_fo_m"];
	   $monthlyData[] = $monthly["dswd_fo_f"];
	   $monthlyData[] = $monthly["dswd_co_m"]; 
	   $monthlyData[] = $monthly["dswd_co_f"];
	   $monthlyata[] = $monthly["dswd_cntr_m"];
	   $monthlyData[] = $monthly["dswd_cntr_f"];
	   $monthlyData[] = $monthly["dswd_ip_m"];
	   $monthlyData[] = $monthly["dswd_ip_f"]; 
	   $monthlyData[] = $monthly["interm_lgu_m"];
	   $monthlyata[] = $monthly["interm_lgu_f"];
	   $monthlyData[] = $monthly["interm_nga_m"];
	   $monthlyData[] = $monthly["interm_nga_f"];
	   $monthlyData[] = $monthly["interm_ngo_m"]; 
	   $monthlyData[] = $monthly["interm_ngo_f"];
	   $monthlyata[] = $monthly["interm_po_m"];
	   $monthlyData[] = $monthly["interm_po_f"];
	   $monthlyData[] = $monthly["interm_vltr_m"];
	   $monthlyData[] = $monthly["interm_vltr_f"]; 
	   $monthlyData[] = $monthly["interm_ip_m"];
	   $monthlyata[] = $monthly["interm_ip_f"];
	   $monthlyData[] = $monthly["stakeh_acdm_m"];
	   $monthlyData[] = $monthly["stakeh_acdm_f"];
	   $monthlyData[] = $monthly["stakeh_rlgs_m"]; 
	   $monthlyData[] = $monthly["stakeh_rlgs_f"];
	   $monthlyata[] = $monthly["stakeh_buss_m"];
	   $monthlyData[] = $monthly["stakeh_buss_f"];
	   $monthlyData[] = $monthly["stakeh_mdia_m"];
	   $monthlyData[] = $monthly["stakeh_mdia_f"]; 
	   $monthlyData[] = $monthly["item"];
	   $monthlyata[] = $monthly["value"];
	   $monthlyData[] = $monthly["date"];
	   $monthlyData[] = $monthly["id"];
	   $monthlyData[] = $monthly["cname"]; 
	   $monthlyData[] = $monthly["item"];
	   $monthlyata[] = $monthly["value"];
	   $monthlyData[] = $monthly["date"];
	   $monthlyData[] = $monthly["id"];
	   $monthlyData[] = $monthly["cname"]; 
	   $monthlyData[] = $monthly["item"];
	   $monthlyata[] = $monthly["value"];
	   $monthlyData[] = $monthly["date"];
	   $monthlyData[] = $monthly["id"];
	   $monthlyData[] = $monthly["cname"]; 
	   $monthlyData[] = $monthly["item"];
	   $monthlyata[] = $monthly["value"];
	   $monthlyData[] = $monthly["date"];
	   $monthlyData[] = $monthly["id"];
	   $monthlyData[] = $monthly["cname"]; 
	   $monthlyData[] = $monthly["item"];
	   $monthlyata[] = $monthly["value"];
	   $monthlyData[] = $monthly["date"];
	   $monthlyData[] = $monthly["id"];
	   $monthlyData[] = $monthly["cname"]; 
	   $monthlyData[] = $monthly["item"];
	   $monthlyata[] = $monthly["value"];
	   $monthlyData[] = $monthly["date"];
	   $monthlyData[] = $monthly["id"];
	   $monthlyData[] = $monthly["cname"]; 
	   $monthlyData[] = $monthly["item"];
	   $monthlyata[] = $monthly["value"];
	   $monthlyData[] = $monthly["date"];
	   $monthlyata[] = $monthly["value"];
	   $monthlyData[] = $monthly["date"];

	   fputcsv($file, $orderData);
	  }
	  fclose($file);
	  exit;
  } else {
	 $noResult = '<label class="text-danger">There are no record exist with this date range to export. Please choose different date range.</label>';  
  }
 }
}
?>

