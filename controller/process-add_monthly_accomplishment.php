   
    <?php
    
    // ADD MONTHLY ACCOMPLISHMENT
    
            include '../config/config.php';
            
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
  
        
          switch($_GET['action']){
            case 'add':     
                $query = "INSERT INTO monthly
                                   (activity, objectives, daterange, venue, dswd_fo_m, dswd_fo_f, dswd_co_m, dswd_co_f, dswd_cntr_m, dswd_cntr_f, dswd_ip_m, dswd_ip_f, interm_lgu_m, interm_lgu_f, interm_nga_m, interm_nga_f, interm_ngo_m, interm_ngo_f, interm_po_m, interm_po_f, interm_vltr_m, interm_vltr_f, interm_ip_m, interm_ip_f, stakeh_acdm_m, stakeh_acdm_f, stakeh_rlgs_m, stakeh_rlgs_f, stakeh_buss_m, stakeh_buss_f, stakeh_mdia_m, stakeh_mdia_f, stakeh_ip_m, stakeh_ip_f, benefic_gen_m, benefic_gen_f, benefic_yth_m, benefic_yth_f, benefic_prnt_m, benefic_prnt_f, benefic_oth_m, benefic_oth_f, benefic_ip_m, benefic_ip_f, total, sector_ip_m, sector_ip_f, sector_snr_m, sector_snr_f, sector_pwd_m, sector_pwd_f, sector_solp_m, sector_solp_f, eval_por_m, eval_por_f, eval_fair_m, eval_fair_f, eval_sati_m, eval_sati_f, eval_vs_m, eval_vs_f, eval_excl_m, eval_excl_f, fund_inter, fund_exter, remarks)

                              VALUES ('".$activity."',
                                      '".$objectives."',
                                      '".$daterange."',
                                      '".$venue."',
                                      '".$dswd_fo_m."',
                                      '".$dswd_fo_f."',
                                      '".$dswd_co_m."',
                                      '".$dswd_co_f."',
                                      '".$dswd_cntr_m."',
                                      '".$dswd_cntr_f."',
                                      '".$dswd_ip_m."',
                                      '".$dswd_ip_f."',
                                      '".$interm_lgu_m."',
                                      '".$interm_lgu_f."',
                                      '".$interm_nga_m."',
                                      '".$interm_nga_f."',
                                      '".$interm_ngo_m."',
                                      '".$interm_ngo_f."',
                                      '".$interm_po_m."',
                                      '".$interm_po_f."',
                                      '".$interm_vltr_m."',
                                      '".$interm_vltr_f."',
                                      '".$interm_ip_m."',
                                      '".$interm_ip_f."',
                                      '".$stakeh_acdm_m."',
                                      '".$stakeh_acdm_f."',
                                      '".$stakeh_rlgs_m."',
                                      '".$stakeh_rlgs_f."',
                                      '".$stakeh_buss_m."',
                                      '".$stakeh_buss_f."',
                                      '".$stakeh_mdia_m."',
                                      '".$stakeh_mdia_f."',
                                      '".$stakeh_ip_m."',
                                      '".$stakeh_ip_f."',
                                      '".$benefic_gen_m."',
                                      '".$benefic_gen_f."',
                                      '".$benefic_yth_m."',
                                      '".$benefic_yth_f."',
                                      '".$benefic_prnt_m."',
                                      '".$benefic_prnt_f."',
                                      '".$benefic_oth_m."',
                                      '".$benefic_oth_f."',
                                      '".$benefic_ip_m."',
                                      '".$benefic_ip_f."',
                                      '".$total."',
                                      '".$sector_ip_m."',
                                      '".$sector_ip_f."',
                                      '".$sector_snr_m."',
                                      '".$sector_snr_f."',
                                      '".$sector_pwd_m."',
                                      '".$sector_pwd_f."',
                                      '".$sector_solp_m."',
                                      '".$sector_solp_f."',
                                      '".$eval_por_m."',
                                      '".$eval_por_f."',
                                      '".$eval_fair_m."',
                                      '".$eval_fair_f."',
                                      '".$eval_sati_m."',
                                      '".$eval_sati_f."',
                                      '".$eval_vs_m."',
                                      '".$eval_vs_f."',
                                      '".$eval_excl_m."',
                                      '".$eval_excl_f."',
                                      '".$fund_inter."',
                                      '".$fund_exter."',
                                      '".$remarks."')";
                                      
                mysqli_query($conn,$query)or die ('Failed to Insert in Database !!');
              
            break;
                  
            }

        ?>



      <script type="text/javascript">
      alert("Successfully Added !!");
      window.location = "../view-add_monthly_accomplishment.php";
      
// END ADD MONTHLY ACCOMPLISHMENT
    </script>    