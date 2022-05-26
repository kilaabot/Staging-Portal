<?php
include "../config/config.php";
if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      // $connect = mysqli_connect("localhost", "root", "", "admin_lte");  
      $output = '';  
      $query = "  
           SELECT * FROM monthly  
           WHERE daterange BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      $result = mysqli_query($conn, $query);  
      $output .= '  
           <div class="table-wrap">
           <table class="table table-bordered">  
           <thead>
                 <tr>
                                                               <th rowspan="4">ID</th>
                                                               <th rowspan="4">Training/Activity</th>
                                                               <th rowspan="4">Objectives</th>
                                                               <th rowspan="4">Date</th>
                                                               <th rowspan="4">Venue</th>
                                                               <th colspan="40" style="text-align: center;">Number of Participants</th>
                                                               <th rowspan="4" style="text-align: center;">Total</th>
                                                               <th rowspan="2" colspan="8" style="text-align: center;">Sectors Representative</th>
                                                               <th rowspan="2" colspan="10" style="text-align: center;">Evaluation Results</th>
                                                               <th rowspan="2" colspan="2" style="text-align: center;">Fund/Resources utilized</th>
                                                               <th rowspan="4" style="text-align: center;">REMARKS (e.g changes of schedule, reason/s for conduct)</th>
                                                            
                                                             </tr>
                                                           
                                                             <tr>

                                                                 <!-- Number of Participants -->

                                                               <th colspan="8" style="text-align: center;">DSWD</th>
                                                               <th colspan="12" style="text-align: center;">Intermediaries</th>
                                                               <th colspan="10" style="text-align: center;">Stakeholders</th>
                                                               <th colspan="10" style="text-align: center;">Beneficiaries</th>

                                                               <!-- / Number of Participants -->

                                                             </tr>
                                                             <tr>

                                                                 <!-- DSWD -->

                                                               <th rowspan="1" colspan="2" style="text-align: center;">FO</th>
                                                               <th rowspan="1" colspan="2" style="text-align: center;">CO</th>
                                                               <th rowspan="1" colspan="2" style="text-align: center;">Centers & Inst.</th>
                                                               <th rowspan="1" colspan="2" style="text-align: center;">IP</th>

                                                               <!-- / DSWD -->

                                                               <!-- Intermediaries -->

                                                               <th rowspan="1" colspan="2" style="text-align: center;">LGU</th>
                                                               <th rowspan="1" colspan="2" style="text-align: center;">NGA</th>
                                                               <th rowspan="1" colspan="2" style="text-align: center;">NGO</th>
                                                               <th rowspan="1" colspan="2" style="text-align: center;">PO</th>
                                                               <th rowspan="1" colspan="2" style="text-align: center;">Volunteer</th>
                                                               <th rowspan="1" colspan="2" style="text-align: center;">IP</th>

                                                               <!-- / Intermediaries -->

                                                               <!-- Stakeholders -->

                                                               <th rowspan="1" colspan="2" style="text-align: center;">Academe</th>
                                                               <th rowspan="1" colspan="2" style="text-align: center;">Relegious</th>
                                                               <th rowspan="1" colspan="2" style="text-align: center;">Business Sector</th>
                                                               <th rowspan="1" colspan="2" style="text-align: center;">Media</th>
                                                               <th rowspan="1" colspan="2" style="text-align: center;">IP</th>

                                                               <!-- / Stakeholders -->

                                                               <!-- Beneficiaries -->

                                                               <th rowspan="1" colspan="2" style="text-align: center;">General</th>
                                                               <th rowspan="1" colspan="2" style="text-align: center;">Youth</th>
                                                               <th rowspan="1" colspan="2" style="text-align: center;">Parent</th>
                                                               <th rowspan="1" colspan="2" style="text-align: center;">Others</th>
                                                               <th rowspan="1" colspan="2"style="text-align: center;">IP</th>

                                                               <!-- / Beneficiaries -->

                                                                <!-- Sector Represented -->

                                                               <th rowspan="1" colspan="2"style="text-align: center;">IP</th>
                                                               <th rowspan="1" colspan="2" style="text-align: center;">Senior Citizen</th>
                                                               <th rowspan="1" colspan="2" style="text-align: center;">PWD</th>
                                                               <th rowspan="1" colspan="2" style="text-align: center;">Solo Parent</th>

                                                               <!-- / Sector Represented -->

                                                               <!-- Evaluation Results -->

                                                               <th rowspan="1" colspan="2" style="text-align: center;">Poor</th>
                                                               <th rowspan="1" colspan="2" style="text-align: center;">Fair</th>
                                                               <th rowspan="1" colspan="2" style="text-align: center;">Satisfactory</th>
                                                               <th rowspan="1" colspan="2" style="text-align: center;">VS</th>
                                                               <th rowspan="1" colspan="2" style="text-align: center;">Excellent</th>

                                                               <!-- / Evaluation Results -->

                                                               <!-- Fund/Resources Utilized -->

                                                               <th rowspan="2" style="text-align: center;">Internal (DSWD)</th>
                                                               <th rowspan="2" style="text-align: center;">External (LGU, NGO)</th>

                                                               <!-- / Fund/Resources Utilized -->
                                                              

                                                             </tr>

                                                                                <!-- DSWD -->

                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>
                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>
                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>
                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>
                                                                                <!-- / DSWD -->

                                                                               <!-- Intermediaries -->

                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>
                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>
                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>
                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>

                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>

                                                                                <!-- / Intermediaries -->

                                                                                <!-- Stakeholders -->

                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>
                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>
                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>
                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>

                                                                           <!-- / Stakeholders -->

                                                                           <!-- Beneficiaries -->

                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>

                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>

                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>

                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>

                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>

                                                                                <!-- / Beneficiaries -->

                                                                                <!-- Sector Represented -->

                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>

                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>

                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>

                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>

                                                                           <!-- / Sector Represented -->

                                                                           <!-- Evaluation Results -->

                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>

                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>

                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>

                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>

                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>

                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>

                                                                  <th rowspan="1" style="text-align: center;">M</th>
                                                                  <th rowspan="1" style="text-align: center;">F</th>

                                                                  <!-- / Evaluation Results -->
                </thead>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                <tbody>
                     <tr>  
                              <td>'. $row['id'].'</td>
                              <td>'. $row['activity'].'</td>
                              <td>'. $row['objectives'].'</td>
                              <td>'. $row['daterange'].'</td>
                              <td>'. $row['venue'].'</td>
                              <td>'. $row['dswd_fo_m'].'</td>
                              <td>'. $row['dswd_fo_f'].'</td>
                              <td>'. $row['dswd_co_m'].'</td>
                              <td>'. $row['dswd_co_f'].'</td>
                              <td>'. $row['dswd_cntr_m'].'</td>
                              <td>'. $row['dswd_cntr_f'].'</td>
                              <td>'. $row['dswd_ip_m'].'</td>
                              <td>'. $row['dswd_ip_f'].'</td>
                              <td>'. $row['interm_lgu_m'].'</td>
                              <td>'. $row['interm_lgu_f'].'</td>
                              <td>'. $row['interm_nga_m'].'</td>
                              <td>'. $row['interm_nga_f'].'</td>
                              <td>'. $row['interm_ngo_m'].'</td>
                              <td>'. $row['interm_ngo_f'].'</td>
                              <td>'. $row['interm_po_m'].'</td>
                              <td>'. $row['interm_po_f'].'</td>
                              <td>'. $row['interm_vltr_m'].'</td>
                              <td>'. $row['interm_vltr_f'].'</td>
                              <td>'. $row['interm_ip_m'].'</td>
                              <td>'. $row['interm_ip_f'].'</td>
                              <td>'. $row['stakeh_acdm_m'].'</td>
                              <td>'. $row['stakeh_acdm_f'].'</td>
                              <td>'. $row['stakeh_rlgs_m'].'</td>
                              <td>'. $row['stakeh_rlgs_f'].'</td>
                              <td>'. $row['stakeh_buss_m'].'</td>
                              <td>'. $row['stakeh_buss_f'].'</td>
                              <td>'. $row['stakeh_mdia_m'].'</td>
                              <td>'. $row['stakeh_mdia_f'].'</td>
                              <td>'. $row['stakeh_ip_m'].'</td>
                              <td>'. $row['stakeh_ip_f'].'</td>
                              <td>'. $row['benefic_gen_m'].'</td>
                              <td>'. $row['benefic_gen_f'].'</td>
                              <td>'. $row['benefic_yth_m'].'</td>
                              <td>'. $row['benefic_yth_f'].'</td>
                              <td>'. $row['benefic_prnt_m'].'</td>
                              <td>'. $row['benefic_prnt_f'].'</td>
                              <td>'. $row['benefic_oth_m'].'</td>
                              <td>'. $row['benefic_oth_f'].'</td>
                              <td>'. $row['benefic_ip_m'].'</td>
                              <td>'. $row['benefic_ip_f'].'</td>
                              <td>'. $row['total'].'</td>
                              <td>'. $row['sector_ip_m'].'</td>
                              <td>'. $row['sector_ip_f'].'</td>
                              <td>'. $row['sector_snr_m'].'</td>
                              <td>'. $row['sector_snr_f'].'</td>
                              <td>'. $row['sector_pwd_m'].'</td>
                              <td>'. $row['sector_pwd_f'].'</td>
                              <td>'. $row['sector_solp_m'].'</td>
                              <td>'. $row['sector_solp_f'].'</td>
                              <td>'. $row['eval_por_m'].'</td>
                              <td>'. $row['eval_por_f'].'</td>
                              <td>'. $row['eval_fair_m'].'</td>
                              <td>'. $row['eval_fair_f'].'</td>
                              <td>'. $row['eval_sati_m'].'</td>
                              <td>'. $row['eval_sati_f'].'</td> 
                              <td>'. $row['eval_vs_m'].'</td>
                              <td>'. $row['eval_vs_f'].'</td>
                              <td>'. $row['eval_excl_m'].'</td>
                              <td>'. $row['eval_excl_f'].'</td>
                              <td>'. $row['fund_inter'].'</td>
                              <td>'. $row['fund_exter'].'</td>
                              <td>'. $row['remarks'].'</td>  
                     </tr>  
               </tbody>
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>

          </div>'
                    ;  
      echo $output;  
 } 

?>