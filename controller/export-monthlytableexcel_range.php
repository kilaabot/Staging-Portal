<?php
include "../config/config.php";
$filename = 'Monthly_Accomplishment_'.time().'.csv';

// POST values
$from_date = $_POST['from_date'];
$to_date = $_POST['to_date'];

// Select query
$query = "SELECT * FROM monthly ORDER BY id asc";

if(isset($_POST['from_date']) && isset($_POST['to_date'])){
	$query = "SELECT * FROM monthly where daterange between '".$from_date."' and '".$to_date."' ORDER BY id asc";
}

$result = mysqli_query($conn,$query);
$monthly_arr = array();

// file creation
$file = fopen("php://output","w");

// Header row - Remove this code if you don't want a header row in the export file.

$monthly_arr = array(
    "ID",
    "Activity",
    "Date",
    "Venue",
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
    "Total",
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
    "Internal",
    "External",
    "Remarks"); 



fputcsv($file,$monthly_arr);   
while($row = mysqli_fetch_assoc($result)){
            $id             = $row['id'];
            $activity       = $row['activity'];
            $objectives     = $row['objectives'];
            $daterange      = $row['daterange'];
            $venue          = $row['venue'];
            $dswd_fo_m      = $row['dswd_fo_m'];
            $dswd_fo_f      = $row['dswd_fo_f'];
            $dswd_co_m      = $row['dswd_co_m'];
            $dswd_co_f      = $row['dswd_co_f'];
            $dswd_cntr_m    = $row['dswd_cntr_m'];
            $dswd_cntr_f    = $row['dswd_cntr_f'];
            $dswd_ip_m      = $row['dswd_ip_m'];
            $dswd_ip_f      = $row['dswd_ip_f'];
            $interm_lgu_m   = $row['interm_lgu_m'];
            $interm_lgu_f   = $row['interm_lgu_f'];
            $interm_nga_m   = $row['interm_nga_m'];
            $interm_nga_f   = $row['interm_nga_f'];
            $interm_ngo_m   = $row['interm_ngo_m'];
            $interm_ngo_f   = $row['interm_ngo_f'];
            $interm_po_m    = $row['interm_po_m'];
            $interm_po_f    = $row['interm_po_f'];
            $interm_vltr_m  = $row['interm_vltr_m'];
            $interm_vltr_f  = $row['interm_vltr_f'];
            $interm_ip_m    = $row['interm_ip_m'];
            $interm_ip_f    = $row['interm_ip_f'];
            $stakeh_acdm_m  = $row['stakeh_acdm_m'];
            $stakeh_acdm_f  = $row['stakeh_acdm_f'];
            $stakeh_rlgs_m  = $row['stakeh_rlgs_m'];
            $stakeh_rlgs_f  = $row['stakeh_rlgs_f'];
            $stakeh_buss_m  = $row['stakeh_buss_m'];
            $stakeh_buss_f  = $row['stakeh_buss_f'];
            $stakeh_mdia_m  = $row['stakeh_mdia_m'];
            $stakeh_mdia_f  = $row['stakeh_mdia_f'];
            $stakeh_ip_m   = $row['stakeh_ip_m'];
            $stakeh_ip_f   = $row['stakeh_ip_f']; 
            $benefic_gen_m = $row['benefic_gen_m']; 
            $benefic_gen_f = $row['benefic_gen_f']; 
            $benefic_yth_m = $row['benefic_yth_m']; 
            $benefic_yth_f = $row['benefic_yth_f']; 
            $benefic_prnt_m = $row['benefic_prnt_m']; 
            $benefic_prnt_f = $row['benefic_prnt_f'];
            $benefic_oth_m = $row['benefic_oth_m'];
            $benefic_oth_f = $row['benefic_oth_f']; 
            $benefic_ip_m  = $row['benefic_ip_m']; 
            $benefic_ip_f  = $row['benefic_ip_f']; 
            $total         = $row['total']; 
            $sector_ip_m   = $row['sector_ip_m']; 
            $sector_ip_f   = $row['sector_ip_f']; 
            $sector_snr_m  = $row['sector_snr_m']; 
            $sector_snr_f  = $row['sector_snr_f']; 
            $sector_pwd_m  = $row['sector_pwd_m']; 
            $sector_pwd_f  = $row['sector_pwd_f']; 
            $sector_solp_m = $row['sector_solp_m']; 
            $sector_solp_f = $row['sector_solp_f'];
            $eval_por_m    = $row['eval_por_m']; 
            $eval_por_f    = $row['eval_por_f']; 
            $eval_fair_m   = $row['eval_fair_m']; 
            $eval_fair_f   = $row['eval_fair_f']; 
            $eval_sati_m   = $row['eval_sati_m']; 
            $eval_sati_f   = $row['eval_sati_f']; 
            $eval_vs_m     = $row['eval_vs_m']; 
            $eval_vs_f     = $row['eval_vs_f']; 
            $eval_excl_m   = $row['eval_excl_m']; 
            $eval_excl_f   = $row['eval_excl_f']; 
            $fund_inter    = $row['fund_inter']; 
            $fund_exter    = $row['fund_exter']; 
            $remarks        = $row['remarks'];

    // Write to file 
    $monthly_arr = array(
            $id,             
            $activity,
            $objectives,
            $daterange,
            $venue,
            $dswd_fo_m,
            $dswd_fo_f,
            $dswd_co_m,
            $dswd_co_f,
            $dswd_cntr_m,
            $dswd_cntr_f,    
            $dswd_ip_m,      
            $dswd_ip_f,      
            $interm_lgu_m,   
            $interm_lgu_f,   
            $interm_nga_m,   
            $interm_nga_f,   
            $interm_ngo_m,   
            $interm_ngo_f,   
            $interm_po_m,    
            $interm_po_f,    
            $interm_vltr_m,  
            $interm_vltr_f,  
            $interm_ip_m,    
            $interm_ip_f,    
            $stakeh_acdm_m,  
            $stakeh_acdm_f,  
            $stakeh_rlgs_m,  
            $stakeh_rlgs_f,  
            $stakeh_buss_m,  
            $stakeh_buss_f,  
            $stakeh_mdia_m,  
            $stakeh_mdia_f,  
            $stakeh_ip_m,    
            $stakeh_ip_f,    
            $benefic_gen_m,  
            $benefic_gen_f,  
            $benefic_yth_m,  
            $benefic_yth_f,  
            $benefic_prnt_m, 
            $benefic_prnt_f,
            $benefic_oth_m, 
            $benefic_oth_f,  
            $benefic_ip_m,   
            $benefic_ip_f,   
            $total,          
            $sector_ip_m,    
            $sector_ip_f,    
            $sector_snr_m,   
            $sector_snr_f,   
            $sector_pwd_m,   
            $sector_pwd_f,   
            $sector_solp_m,  
            $sector_solp_f, 
            $eval_por_m,     
            $eval_por_f,     
            $eval_fair_m,    
            $eval_fair_f,    
            $eval_sati_m,    
            $eval_sati_f,    
            $eval_vs_m,      
            $eval_vs_f,      
            $eval_excl_m,    
            $eval_excl_f,    
            $fund_inter,     
            $fund_exter,     
            $remarks
    );
    fputcsv($file,$monthly_arr);   
}

fclose($file); 

// download
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=$filename");
header("Content-Type: application/csv; "); 

// readfile($filename);

// deleting file
// unlink($filename);
exit();
