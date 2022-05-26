<?php
include_once("config/config.php");
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
	WHERE daterange >= '".$_POST["fromDate"]."' AND daterange <= '".$_POST["toDate"]."' ORDER BY daterange DESC";
  $monthlyResult = mysqli_query($conn, $monthlyQuery) or die("database error:". mysqli_error($conn));
  $filterMonthlys = array();
  while( $monthly = mysqli_fetch_assoc($monthlyResult) ) {
	$filterMonthlys[] = $monthly;
  }
  if(count($filterMonthlys)) {
	  $fileName = "phpzag_export_".time().".csv";
	  header("Content-Description: File Transfer");
	  header("Content-Disposition: attachment; filename=$fileName");
	  header("Content-Type: application/csv;");
	  $file = fopen('php://output', 'w');
	  $header = array("ID",
    "Activity",
    "Date",
    "Objectives",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "M",
    "F",
    "Remarks");

	  fputcsv($file, $header);  
	  foreach($filterMonthlys as $monthly) { 
	   $monthlyData = array();
	   $monthlyData[] = $monthly["id"];
	   $monthlyData[] = $monthly["activity"]; 
	   $monthlyData[] = $monthly["objectives"];
	   $monthlyata[] = $monthly["daterange"];
	   $monthlyata[] = $monthly["venue"];
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
	   $monthlyData[] = $monthly["stakeh_ip_m"];
	   $monthlyata[] = $monthly["stakeh_ip_f"];
	   $monthlyData[] = $monthly["benefic_gen_m"];
	   $monthlyData[] = $monthly["benefic_gen_f"];
	   $monthlyData[] = $monthly["benefic_yth_m"]; 
	   $monthlyData[] = $monthly["benefic_yth_f"];
	   $monthlyata[] = $monthly["benefic_prnt_m"];
	   $monthlyData[] = $monthly["benefic_prnt_f"];
	   $monthlyData[] = $monthly["benefic_oth_m"];
	   $monthlyData[] = $monthly["benefic_oth_f"]; 
	   $monthlyData[] = $monthly["benefic_ip_m"];
	   $monthlyata[] = $monthly["benefic_ip_f"];
	   $monthlyData[] = $monthly["total"];
	   $monthlyData[] = $monthly["sector_ip_m"];
	   $monthlyData[] = $monthly["sector_ip_f"]; 
	   $monthlyData[] = $monthly["sector_snr_m"];
	   $monthlyata[] = $monthly["sector_snr_f"];
	   $monthlyData[] = $monthly["sector_pwd_m"];
	   $monthlyData[] = $monthly["sector_pwd_f"];
	   $monthlyData[] = $monthly["sector_solp_m"]; 
	   $monthlyData[] = $monthly["sector_solp_f"];
	   $monthlyata[] = $monthly["eval_por_m"];
	   $monthlyData[] = $monthly["eval_por_f"];
	   $monthlyData[] = $monthly["eval_fair_m"];
	   $monthlyData[] = $monthly["eval_fair_f"]; 
	   $monthlyData[] = $monthly["eval_sati_m"];
	   $monthlyata[] = $monthly["eval_sati_f"];
	   $monthlyData[] = $monthly["eval_vs_m"];
	   $monthlyData[] = $monthly["eval_vs_f"];
	   $monthlyData[] = $monthly["eval_excl_m"]; 
	   $monthlyData[] = $monthly["eval_excl_f"];
	   $monthlyata[] = $monthly["fund_inter"];
	   $monthlyData[] = $monthly["fund_exter"];
	   $monthlyata[] = $monthly["remarks"];


	   fputcsv($file, $monthlyData);
	  }
	  fclose($file);
	  exit;
  } else {
	 $noResult = '<label class="text-danger">There are no record exist with this date range to export. Please choose different date range.</label>';  
  }
 }
}
?>