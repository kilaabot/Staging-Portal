
<?php

include('config/config.php'); 

// EDIT MONTHLY ACCOMPLISHMENT

    if(isset($_POST['updatedata']))
    {
            $id             = $_POST['id'];
            $activity       = $_POST['activity'];
            $objectives     = $_POST['objectives'];
            $daterange      = $_POST['daterange'];
            $venue          = $_POST['venue'];
            $dswd_fo_m      = $_POST['dswd_fo_m'];
            $dswd_fo_f      = $_POST['dswd_fo_f'];
            $dswd_co_m      = $_POST['dswd_co_m'];
            $dswd_co_f      = $_POST['dswd_co_f'];
            $dswd_cntr_m    = $_POST['dswd_cntr_m'];
            $dswd_cntr_f    = $_POST['dswd_cntr_f'];
            $dswd_ip_m      = $_POST['dswd_ip_m'];
            $dswd_ip_f      = $_POST['dswd_ip_f'];
            $interm_lgu_m   = $_POST['interm_lgu_m'];
            $interm_lgu_f   = $_POST['interm_lgu_f'];
            $interm_nga_m   = $_POST['interm_nga_m'];
            $interm_nga_f   = $_POST['interm_nga_f'];
            $interm_ngo_m   = $_POST['interm_ngo_m'];
            $interm_ngo_f   = $_POST['interm_ngo_f'];
            $interm_po_m    = $_POST['interm_po_m'];
            $interm_po_f    = $_POST['interm_po_f'];
            $interm_vltr_m  = $_POST['interm_vltr_m'];
            $interm_vltr_f  = $_POST['interm_vltr_f'];
            $interm_ip_m    = $_POST['interm_ip_m'];
            $interm_ip_f    = $_POST['interm_ip_f'];
            $stakeh_acdm_m  = $_POST['stakeh_acdm_m'];
            $stakeh_acdm_f  = $_POST['stakeh_acdm_f'];
            $stakeh_rlgs_m  = $_POST['stakeh_rlgs_m'];
            $stakeh_rlgs_f  = $_POST['stakeh_rlgs_f'];
            $stakeh_buss_m  = $_POST['stakeh_buss_m'];
            $stakeh_buss_f  = $_POST['stakeh_buss_f'];
            $stakeh_mdia_m  = $_POST['stakeh_mdia_m'];
            $stakeh_mdia_f  = $_POST['stakeh_mdia_f'];
            $stakeh_ip_m    = $_POST['stakeh_ip_m'];
            $stakeh_ip_f    = $_POST['stakeh_ip_f'];
            $benefic_gen_m  = $_POST['benefic_gen_m'];
            $benefic_gen_f  = $_POST['benefic_gen_f'];
            $benefic_yth_m  = $_POST['benefic_yth_m'];
            $benefic_yth_f  = $_POST['benefic_yth_f'];
            $benefic_prnt_m = $_POST['benefic_prnt_m'];
            $benefic_prnt_f = $_POST['benefic_prnt_f'];
            $benefic_oth_m  = $_POST['benefic_oth_m'];
            $benefic_oth_f  = $_POST['benefic_oth_f'];
            $benefic_ip_m   = $_POST['benefic_ip_m'];
            $benefic_ip_f   = $_POST['benefic_ip_f'];
            $total          = $_POST['total'];
            $sector_ip_m    = $_POST['sector_ip_m'];
            $sector_ip_f    = $_POST['sector_ip_f'];
            $sector_snr_m   = $_POST['sector_snr_m'];
            $sector_snr_f   = $_POST['sector_snr_f'];
            $sector_pwd_m   = $_POST['sector_pwd_m'];
            $sector_pwd_f   = $_POST['sector_pwd_f'];
            $sector_solp_m  = $_POST['sector_solp_m'];
            $sector_solp_f  = $_POST['sector_solp_f'];
            $eval_por_m     = $_POST['eval_por_m'];
            $eval_por_f     = $_POST['eval_por_f'];
            $eval_fair_m    = $_POST['eval_fair_m'];
            $eval_fair_f    = $_POST['eval_fair_f'];
            $eval_sati_m    = $_POST['eval_sati_m'];
            $eval_sati_f    = $_POST['eval_sati_f'];
            $eval_vs_m      = $_POST['eval_vs_m'];
            $eval_vs_f      = $_POST['eval_vs_f'];
            $eval_excl_m    = $_POST['eval_excl_m'];
            $eval_excl_f    = $_POST['eval_excl_f'];
            $fund_inter     = $_POST['fund_inter'];
            $fund_exter     = $_POST['fund_exter'];
            $remarks        = $_POST['remarks'];


        $query = "UPDATE monthly SET activity='$activity',objectives='$objectives',daterange='$daterange',venue='$venue',dswd_fo_m='$dswd_fo_m',dswd_fo_f='$dswd_fo_f',dswd_co_m='$dswd_co_m',dswd_co_f='$dswd_co_f',dswd_cntr_m='$dswd_cntr_m',dswd_cntr_f='$dswd_cntr_f',dswd_ip_m='$dswd_ip_m',dswd_ip_f='$dswd_ip_f',interm_lgu_m='$interm_lgu_m',interm_lgu_f='$interm_lgu_f',interm_nga_m='$interm_nga_m',interm_nga_f='$interm_nga_f',interm_ngo_m='$interm_ngo_m',interm_ngo_f='$interm_ngo_f',interm_po_m='$interm_po_m',interm_po_f='$interm_po_f',interm_vltr_m='$interm_vltr_m',interm_vltr_f='$interm_vltr_f',interm_ip_m='$interm_ip_m',interm_ip_f='$interm_ip_f',stakeh_acdm_m='$stakeh_acdm_m',stakeh_acdm_f='$stakeh_acdm_f',stakeh_rlgs_m='$stakeh_rlgs_m',stakeh_rlgs_f='$stakeh_rlgs_f',stakeh_buss_m='$stakeh_buss_m',stakeh_buss_f='$stakeh_buss_f',stakeh_mdia_m='$stakeh_mdia_m',stakeh_mdia_f='$stakeh_mdia_f',stakeh_ip_m='$stakeh_ip_m',stakeh_ip_f='$stakeh_ip_f',benefic_gen_m='$benefic_gen_m',benefic_gen_f='$benefic_gen_f',benefic_yth_m='$benefic_yth_m',benefic_yth_f='$benefic_yth_f',benefic_prnt_m='$benefic_prnt_m',benefic_prnt_f='$benefic_prnt_f',benefic_oth_m='$benefic_oth_m',benefic_oth_f='$benefic_oth_f',benefic_ip_m='$benefic_ip_m',benefic_ip_f='$benefic_ip_f',total='$total',sector_ip_m='$sector_ip_m',sector_ip_f='$sector_ip_f',sector_snr_m='$sector_snr_m',sector_snr_f='$sector_snr_f',sector_pwd_m='$sector_pwd_m',sector_pwd_f='$sector_pwd_f',sector_solp_m='$sector_solp_m',sector_solp_f='$sector_solp_f',eval_por_m='$eval_por_m',eval_por_f='$eval_por_f',eval_fair_m='$eval_fair_m',eval_fair_f='$eval_fair_f',eval_sati_m='$eval_sati_m',eval_sati_f='$eval_sati_f',eval_vs_m='$eval_vs_m',eval_vs_f='$eval_vs_f',eval_excl_m='$eval_excl_m',eval_excl_f='$eval_excl_f',fund_inter='$fund_inter',fund_exter='$fund_exter',remarks='$remarks' WHERE id='$id' ";

        $query_run = mysqli_query($conn, $query);

        if($query_run)

        {

             echo '<script> alert("Successfully Updated !!
"); </script>';  
            // header("location:../view-monthly_accomplishment.php");

        }

        else 
          {

              echo '<script> alert("Failed to Update !!"); </script>'; 

          }  

      }   

// END EDIT MONTHLY ACCOMPLISHMENT

// DELETE MONTHLY ACCOMPLISHMENT


    if(isset($_GET['deletemonthly'])){

        $id = $_GET['deletemonthly'];

        $query = "DELETE FROM monthly WHERE  id='$id' ";

        $query_run = mysqli_query($conn, $query);

        if($query_run) {
               echo '<script> alert("Successfully Deleted !!
");  
                     window.location = "view-monthly_accomplishment.php";

              </script>'; 
            
        }else{
        echo '<script> alert("Failed to Delete !!"); </script>'; 
            die(mysqli_error($conn));
        }  
   }
   
// END DELETE MONTHLY ACCOMPLISHMENT   

    ?>  





 


