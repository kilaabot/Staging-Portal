
<?php include('controller/process-monthly_accomplishment.php');?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>Grandin I Fast build Admin dashboard for any platform</title>
  <meta name="description" content="Grandin is a Dashboard & Admin Site Responsive Template by hencework." />
  <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Grandin Admin, Grandinadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
  <meta name="author" content="hencework"/>
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
    
  <!-- vector map CSS -->
    <link href="../vendors/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" type="text/css"/>

  <!-- Data table CSS -->
  <link href="../vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

  
  <!-- Custom CSS -->
  <link href="dist/css/style.css" rel="stylesheet" type="text/css">

  <!-- <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet"> -->

   <!-- Bootstrap Daterangepicker CSS -->
    <link href="../vendors/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css"/>

  



</head>



<body>

    <?php include('includes/view-menu.php');?>  

      
    <!-- Main Content -->
    <div class="page-wrapper">
      <div class="container-fluid">
        
        <!-- Title -->
        <div class="row heading-bg">
          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">Table</h5>
          </div>
          <!-- Breadcrumb -->
          <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li><a href="#"><span>table</span></a></li>
            <li class="active"><span>Monthly Accomplishment table</span></li>
            </ol>
          </div>
          <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->
        
        <!-- Row -->
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default card-view">
              <div class="panel-heading">
                <div class="pull-left">
                  <h6 class="panel-title txt-dark">Monthly Accomplishment Table</h6>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-wrapper collapse in">
                <div class="panel-body">



                  <div class="table-wrap">

                    <form>
                  <div class="form-group mb-30">
                    
                  <div class="input-group mb-15 col-md-3"> 

                    <span class="input-group-addon"><i class="zmdi zmdi-search"></i></span>

                    <input type="text" name="search" placeholder="Search" id="search" class="form-control">

                  

                  </div>

                  <div class="title-action-btn">

                  <a class="btn btn-success btn-lable-wrap left-label btn-sm" href="controller/export-monthly_accomplishment_excel.php"><span class="btn-label"><i class="fa fa-file-excel-o"></i> </span><span class="btn-text">Export To Excel</span></a>

                  </div>

                <!-- <button class="btn btn-success btn-outline btn-icon right-icon btn-rounded btn-sm"><span>Export to Excel</span><i class="fa fa-file-excel-o font-green"></i></button> -->

                  

          
                      
                  </div>

                  </form>

                    <div class="table-responsive">
                      <table id="monthly_table" class="table table-striped table-bordered mb-0">

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
                                          <th rowspan="4" style="text-align: center;">Options</th>
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
                        
                        <tbody id="monthlytablebody">
                                  <?php       

                                  

                    $query = 'SELECT * FROM monthly';
                              $result = mysqli_query($conn, $query) or die (mysqli_error($conn));
                        
                                while ($row = mysqli_fetch_assoc($result)) {
                                                   
                                  echo '<tr>';
                                  echo '<td>'. $row['id'].'</td>';
                                  echo '<td>'. $row['activity'].'</td>';
                                  echo '<td>'. $row['objectives'].'</td>';
                                  echo '<td>'. $row['daterange'].'</td>';
                                  echo '<td>'. $row['venue'].'</td>';
                                  echo '<td>'. $row['dswd_fo_m'].'</td>';
                                  echo '<td>'. $row['dswd_fo_f'].'</td>';
                                  echo '<td>'. $row['dswd_co_m'].'</td>';
                                  echo '<td>'. $row['dswd_co_f'].'</td>';
                                  echo '<td>'. $row['dswd_cntr_m'].'</td>';
                                  echo '<td>'. $row['dswd_cntr_f'].'</td>';
                                  echo '<td>'. $row['dswd_ip_m'].'</td>';
                                  echo '<td>'. $row['dswd_ip_f'].'</td>';
                                  echo '<td>'. $row['interm_lgu_m'].'</td>';
                                  echo '<td>'. $row['interm_lgu_f'].'</td>';
                                  echo '<td>'. $row['interm_nga_m'].'</td>';
                                  echo '<td>'. $row['interm_nga_f'].'</td>';
                                  echo '<td>'. $row['interm_ngo_m'].'</td>';
                                  echo '<td>'. $row['interm_ngo_f'].'</td>';
                                  echo '<td>'. $row['interm_po_m'].'</td>';
                                  echo '<td>'. $row['interm_po_f'].'</td>';
                                  echo '<td>'. $row['interm_vltr_m'].'</td>';
                                  echo '<td>'. $row['interm_vltr_f'].'</td>';
                                  echo '<td>'. $row['interm_ip_m'].'</td>';
                                  echo '<td>'. $row['interm_ip_f'].'</td>';
                                  echo '<td>'. $row['stakeh_acdm_m'].'</td>';
                                  echo '<td>'. $row['stakeh_acdm_f'].'</td>';
                                  echo '<td>'. $row['stakeh_rlgs_m'].'</td>';
                                  echo '<td>'. $row['stakeh_rlgs_f'].'</td>';
                                  echo '<td>'. $row['stakeh_buss_m'].'</td>';
                                  echo '<td>'. $row['stakeh_buss_f'].'</td>';
                                  echo '<td>'. $row['stakeh_mdia_m'].'</td>';
                                  echo '<td>'. $row['stakeh_mdia_f'].'</td>';
                                  echo '<td>'. $row['stakeh_ip_m'].'</td>';
                                  echo '<td>'. $row['stakeh_ip_f'].'</td>';
                                  echo '<td>'. $row['benefic_gen_m'].'</td>';
                                  echo '<td>'. $row['benefic_gen_f'].'</td>';
                                  echo '<td>'. $row['benefic_yth_m'].'</td>';
                                  echo '<td>'. $row['benefic_yth_f'].'</td>';
                                  echo '<td>'. $row['benefic_prnt_m'].'</td>';
                                  echo '<td>'. $row['benefic_prnt_f'].'</td>';
                                  echo '<td>'. $row['benefic_oth_m'].'</td>';
                                  echo '<td>'. $row['benefic_oth_f'].'</td>';
                                  echo '<td>'. $row['benefic_ip_m'].'</td>';
                                  echo '<td>'. $row['benefic_ip_f'].'</td>';
                                  echo '<td>'. $row['total'].'</td>';
                                  echo '<td>'. $row['sector_ip_m'].'</td>';
                                  echo '<td>'. $row['sector_ip_f'].'</td>';
                                  echo '<td>'. $row['sector_snr_m'].'</td>';
                                  echo '<td>'. $row['sector_snr_f'].'</td>';
                                  echo '<td>'. $row['sector_pwd_m'].'</td>';
                                  echo '<td>'. $row['sector_pwd_f'].'</td>';
                                  echo '<td>'. $row['sector_solp_m'].'</td>';
                                  echo '<td>'. $row['sector_solp_f'].'</td>';
                                  echo '<td>'. $row['eval_por_m'].'</td>';
                                  echo '<td>'. $row['eval_por_f'].'</td>';
                                  echo '<td>'. $row['eval_fair_m'].'</td>';
                                  echo '<td>'. $row['eval_fair_f'].'</td>';
                                  echo '<td>'. $row['eval_sati_m'].'</td>';
                                  echo '<td>'. $row['eval_sati_f'].'</td>';
                                  echo '<td>'. $row['eval_vs_m'].'</td>';
                                  echo '<td>'. $row['eval_vs_f'].'</td>';
                                  echo '<td>'. $row['eval_excl_m'].'</td>';
                                  echo '<td>'. $row['eval_excl_f'].'</td>';
                                  echo '<td>'. $row['fund_inter'].'</td>';
                                  echo '<td>'. $row['fund_exter'].'</td>';
                                  echo '<td>'. $row['remarks'].'</td>';

                                  echo ' <td class="text-nowrap"><a  class="mr-25" data-toggle="tooltip" type="button" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10 editbtn"></i> </a> ';

                                  // echo ' <td><a  class="mr-25" data-toggle="tooltip" type="button"><i class="fa fa-pencil text-inverse m-r-10 editbtn"></i></a>
                                  //  ';
                    echo '<a href="delete_monthly.php?type=monthly&delete & id=' . $row['id'] . '" type="button" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                        </td>';

                                  // echo '<td> <a type="button" class="btn btn-xs btn-warning editbtn"> UPDATE </a>'; 



                                  // echo ' <a  type="button" class="btn btn-xs btn-danger" href=href="delete_monthly.php?type=monthly&delete & id=' . $row['id'] . '">DELETE </a> </td>';
                                  echo '</tr> ';

                                     }
                                     ?> 
                        </tbody>

                      </table>
                    </div>
                  </div>  


                    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h5 class="modal-title" id="exampleModalLabel1">Update Monthly Accomplishment</h5>
                          </div>

                          <form role="form" method="POST" action="update_monthly.php">

                          <div class="modal-body">

                            <div class="form-group">
                              
                                    
                                            <input type="hidden" name="id" id="id">
                                     </div>

                               <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">TRAINING / ACTIVITY TITLE</label>
                                    <input type="text" name="activity" id="activity" class="form-control">
                                  </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">OBJECTIVES</label>
                                    <input type="text" name="objectives" id="objectives" class="form-control">
                                  </div>
                                </div>
                                <!--/span-->
                              </div>
                              <!-- /Row -->
                              <div class="row">
                              <!--  <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">DATE</label>
                                    <input class="form-control" id="daterange" type="text" name="daterange" />
                                  </div>
                                </div> -->

                                    <div class="col-md-6">
                                                    <div class="form-group">
                                                      <label class="control-label mb-10">DATE</label>
                                                      <input class="form-control" id="daterange" data-date-format='yy-mm-dd' type="text" name="daterange" required>
                                                    </div>
                                                  </div>

                                <!--/span-->
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Venue</label>
                                    <input type="text" name="venue" id="venue" class="form-control">
                                  </div>
                                </div>
                                <!--/span-->
                              </div>
                              <!-- /Row -->

                              <div class="seprator-block"></div>
                              
                                              <h6 class="txt-dark capitalize-font">NUMBER OF PARTICIPANTS / DSWD</h6>
                                              <hr class="light-grey-hr"/>

                                              <div class="row">
                                                <br>
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">FO</label>                   
                                                    <input type="number" id="dswd_fo_m" name="dswd_fo_m" class="form-control prc" placeholder="M">
                                                    <br>
                                                    <input type="number" id="dswd_fo_f" name="dswd_fo_f" class="form-control prc" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">CO</label>                   
                                                    <input type="number" id="dswd_co_m" name="dswd_co_m" class="form-control prc" placeholder="M">
                                                    <br>
                                                    <input type="number" id="dswd_co_f" name="dswd_co_f" class="form-control prc" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">Centers & Inst.</label>                    
                                                    <input type="number" id="dswd_cntr_m" name="dswd_cntr_m" class="form-control prc" placeholder="M">
                                                    <br>
                                                    <input type="number"  id="dswd_cntr_f" name="dswd_cntr_f" class="form-control prc" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">IP</label>                    
                                                    <input type="number" id="dswd_ip_m" name="dswd_ip_m" class="form-control prc" placeholder="M">
                                                    <br>
                                                    <input type="number"  id="dswd_ip_f" name="dswd_ip_f" class="form-control prc" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                              </div>
                                              <!-- /Row -->
                                              
                                              <div class="seprator-block"></div>

                                              <h6 class="txt-dark capitalize-font">NUMBER OF PARTICIPANTS / INTERMEDIARIES</h6>
                                              <hr class="light-grey-hr"/>

                                              <div class="row">
                                                <br>
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">LGU</label>                    
                                                    <input type="number"  id="interm_lgu_m" name="interm_lgu_m" class="form-control prc" placeholder="M">
                                                    <br>
                                                    <input type="number"  id="interm_lgu_f" name="interm_lgu_f" class="form-control prc" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">NGA</label>                    
                                                    <input type="number"  id="interm_nga_m" name="interm_nga_m" class="form-control prc" placeholder="M">
                                                    <br>
                                                    <input type="number"  id="interm_nga_f" name="interm_nga_f" class="form-control prc" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">NGO</label>                    
                                                    <input type="number"  id="interm_ngo_m" name="interm_ngo_m" class="form-control prc" placeholder="M">
                                                    <br>
                                                    <input type="number"  id="interm_ngo_f" name="interm_ngo_f" class="form-control prc" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">PO</label>                   
                                                    <input type="number"  id="interm_po_m" name="interm_po_m" class="form-control prc" placeholder="M">
                                                    <br>
                                                    <input type="number"  id="interm_po_f" name="interm_po_f" class="form-control prc" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">Volunteer</label>                    
                                                    <input type="number"  id="interm_vltr_m" name="interm_vltr_m" class="form-control prc" placeholder="M">
                                                    <br>
                                                    <input type="number"  id="interm_vltr_f" name="interm_vltr_f" class="form-control prc" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">IP</label>                   
                                                    <input type="number"  id="interm_ip_m" name="interm_ip_m" class="form-control prc" placeholder="M">
                                                    <br>
                                                    <input type="number"  id="interm_ip_f" name="interm_ip_f" class="form-control prc" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->

                                                </div>
                      
                                                <div class="seprator-block"></div>
                                              
                                              <h6 class="txt-dark capitalize-font">NUMBER OF PARTICIPANTS / STAKEHOLDERS</h6>
                                              <hr class="light-grey-hr"/>

                                              <div class="row">
                                                <br>
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">Academe</label>                    
                                                    <input type="number"  id="stakeh_acdm_m" name="stakeh_acdm_m" class="form-control prc" placeholder="M">
                                                    <br>
                                                    <input type="number"  id="stakeh_acdm_f" name="stakeh_acdm_f" class="form-control prc" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">Religous</label>                   
                                                    <input type="number"  id="stakeh_rlgs_m" name="stakeh_rlgs_m" class="form-control prc" placeholder="M">
                                                    <br>
                                                    <input type="number"  id="stakeh_rlgs_f" name="stakeh_rlgs_f" class="form-control prc" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">Business Sec.</label>                    
                                                    <input type="number"  id="stakeh_buss_m" name="stakeh_buss_m" class="form-control prc" placeholder="M">
                                                    <br>
                                                    <input type="number"  id="stakeh_buss_f" name="stakeh_buss_f" class="form-control prc" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">Media</label>                     
                                                    <input type="number"  id="stakeh_mdia_m" name="stakeh_mdia_m" class="form-control prc" placeholder="M">
                                                    <br>
                                                    <input type="number"  id="stakeh_mdia_f" name="stakeh_mdia_f" class="form-control prc" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">IP</label>                   
                                                    <input type="number"  id="stakeh_ip_m" name="stakeh_ip_m" class="form-control prc" placeholder="M">
                                                    <br>
                                                    <input type="number"  id="stakeh_ip_f" name="stakeh_ip_f" class="form-control prc" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                              </div>
                                              <!-- /Row -->

                                                <div class="seprator-block"></div>
                                              
                                              <h6 class="txt-dark capitalize-font">NUMBER OF PARTICIPANTS / BENEFICIARIES</h6>
                                              <hr class="light-grey-hr"/>

                                              <div class="row">
                                                <br>
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">General</label>                    
                                                    <input type="number"  id="benefic_gen_m" name="benefic_gen_m" class="form-control prc" placeholder="M">
                                                    <br>
                                                    <input type="number"  id="benefic_gen_f" name="benefic_gen_f" class="form-control prc" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">Youth</label>                    
                                                    <input type="number"  id="benefic_yth_m" name="benefic_yth_m" class="form-control prc" placeholder="M">
                                                    <br>
                                                    <input type="number"  id="benefic_yth_f" name="benefic_yth_f" class="form-control prc" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">Parent</label>                   
                                                    <input type="number"  id="benefic_prnt_m" name="benefic_prnt_m" class="form-control prc" placeholder="M">
                                                    <br>
                                                    <input type="number"  id="benefic_prnt_f" name="benefic_prnt_f" class="form-control prc" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">Others</label>                   
                                                    <input type="number"  id="benefic_oth_m" name="benefic_oth_m" class="form-control prc" placeholder="M">
                                                    <br>
                                                    <input type="number"  id="benefic_oth_f" name="benefic_oth_f" class="form-control prc" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">IP</label>                   
                                                    <input type="number"  id="benefic_ip_m" name="benefic_ip_m" class="form-control prc" placeholder="M">
                                                    <br>
                                                    <input type="number"  id="benefic_ip_f" name="benefic_ip_f" class="form-control prc" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                              </div>
                                              <!-- /Row -->


                                                <div class="seprator-block"></div>

                                                <div class="row">
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">TOTAL</label>                    
                                                    <input type="number"  id="total" name="total" class="form-control" readonly>

                                                  </div>
                                                </div>
                                                </div>

                                                <!-- /Row -->

                                              <div class="seprator-block"></div>

                                              <h6 class="txt-dark capitalize-font">SECTOR REPRESENTED</h6>
                                              <hr class="light-grey-hr"/>

                                              <div class="row">
                                                <br>
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">IP</label>                   
                                                    <input type="number" name="sector_ip_m" id="sector_ip_m" class="form-control" placeholder="M">
                                                    <br>
                                                    <input type="number" name="sector_ip_f" id="sector_ip_f" class="form-control" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">Senior Citizen</label>                   
                                                    <input type="number" name="sector_snr_m" id="sector_snr_m" class="form-control" placeholder="M">
                                                    <br>
                                                    <input type="number" name="sector_snr_f" id="sector_snr_f" class="form-control" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">PWD</label>                    
                                                    <input type="number"  name="sector_pwd_m" id="sector_pwd_m"  class="form-control" placeholder="M">
                                                    <br>
                                                    <input type="number"  name="sector_pwd_f" id="sector_pwd_f" class="form-control" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">Solo Parent</label>                    
                                                    <input type="number"  name="sector_solp_m" id="sector_solp_m" class="form-control" placeholder="M">
                                                    <br>
                                                    <input type="number"  name="sector_solp_f" id="sector_solp_f" class="form-control" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                      
                                              </div>
                                              <!-- /Row -->

                                              <div class="seprator-block"></div>

                                              <h6 class="txt-dark capitalize-font">EVALUATION RESULTS</h6>
                                              <hr class="light-grey-hr"/>

                                              <div class="row">
                                                <br>
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">Poor</label>                   
                                                    <input type="number"  name="eval_por_m" id="eval_por_m" class="form-control" placeholder="M">
                                                    <br>
                                                    <input type="number"  name="eval_por_f" id="eval_por_f" class="form-control" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">Fair</label>                   
                                                    <input type="number"  name="eval_fair_m" id="eval_fair_m" class="form-control" placeholder="M">
                                                    <br>
                                                    <input type="number"  name="eval_fair_f" id="eval_fair_f" class="form-control" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">Satisfactory</label>                   
                                                    <input type="number"  name="eval_sati_m" id="eval_sati_m" class="form-control" placeholder="M">
                                                    <br>
                                                    <input type="number"  name="eval_sati_f" id="eval_sati_f" class="form-control" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">VS</label>                   
                                                    <input type="number"  name="eval_vs_m" id="eval_vs_m" class="form-control" placeholder="M">
                                                    <br>
                                                    <input type="number"  name="eval_vs_f" id="eval_vs_f" class="form-control" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">Excellent</label>                    
                                                    <input type="number"  name="eval_excl_m" id="eval_excl_m" class="form-control" placeholder="M">
                                                    <br>
                                                    <input type="number"  name="eval_excl_f" id="eval_excl_f" class="form-control" placeholder="F">
                                                  </div>
                                                </div>
                                                <!--/span-->
                                      
                                              </div>
                                              <!-- /Row -->

                                              <div class="seprator-block"></div>

                                              <h6 class="txt-dark capitalize-font">FUND / RESOURCES UTILIZED</h6>
                                              <hr class="light-grey-hr"/>

                                              <div class="row">
                                                <br>
                                                <div class="col-md-4 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">Internal (DSWD)</label>              
                                                    <input type="text"  name="fund_inter" id="fund_inter" class="form-control">
                                                    
                                                  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-4 col-sm-12 col-xs-12 form-group mb-0">
                                                  <div class="form-group">
                                                    <label class="control-label mb-10">External (LGU,NGO)</label>           
                                                    <input type="text"  name="fund_exter" id="fund_exter" class="form-control">
                                                    
                                                  </div>
                                                </div>
                                                <!--/span-->
                                      
                                              </div>
                                              <!-- /Row -->
                                              
                                            <br>
                          

                              <div class="row">
                                <br>
                                <div class="col-md-6 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Remarks</label>              
                                    
                                    
                                    <textarea class="form-control" name="remarks" id="remarks" rows="5"></textarea>
                                    
                                  </div>
                                </div>
                                <!--/span-->
                      
                              </div>
                              <!-- /Row -->
                              <div class="seprator-block"></div>
                                
                  
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" name="updatedata" id="updatedata" class="btn btn-primary">Update</button>
                          </div>

                          </form>
                        </div>
                      </div>
                    </div>
                </div>


              </div>  
            </div>  
          </div>
        </div>
        <!-- /Row -->

      
      
      <!-- Footer -->
      
      <?php include('includes/view-footer.php');?>  

      <!-- /Footer -->
      
    </div>
    <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
  
  <!-- JavaScript -->
  
    <!-- jQuery -->
    <script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  
  <!-- Slimscroll JavaScript -->
  <script src="dist/js/jquery.slimscroll.js"></script>
  
  <!-- Owl JavaScript -->
  <script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
  
  <!-- Switchery JavaScript -->
  <script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>
  
  <!-- Fancy Dropdown JS -->
  <script src="dist/js/dropdown-bootstrap-extended.js"></script>
  
  <!-- Init JavaScript -->
  <script src="dist/js/init.js"></script>


  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<!-- 
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script> 
  
  <script src="../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="../vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="../vendors/bower_components/jszip/dist/jszip.min.js"></script>
  <script src="../vendors/bower_components/pdfmake/build/pdfmake.min.js"></script>
  <script src="../vendors/bower_components/pdfmake/build/vfs_fonts.js"></script>
  <script src="../vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="../vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>

     <!-- Bootstrap Daterangepicker JavaScript -->
    <script src="../vendors/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  
<!--  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script> -->


  <script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>

<script>
    
    $(document).ready(function(){
      $('#search').keyup(function(){
        search_table($(this).val());
      });

      function search_table(value){
        $('#monthlytablebody tr').each(function(){
          var found = 'false';
          $(this).each(function(){
            if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
              {
                found = 'true';
              } 
            });
            if (found == 'true') 
            {
              $(this).show();
            }
            else
            {
              $(this).hide();
            }
        
         });
      }
    
     });


  </script>



<!-- <script>
  $('#example2').dataTable({dom: 'lrt'});
</script> -->

  <script>
    
        $(document).ready(function() {
        $('#example2').DataTable();
    } );

  </script>

  <script>

$(document).ready(function () {
    $('.editbtn').on('click', function() {

        $('#editmodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {

          return $(this).text();
        }).get();

        $('#id').val(data[0]);
        $('#activity').val(data[1]);
        $('#objectives').val(data[2]);
        $('#daterange').val(data[3]);
        $('input[name="daterange"]').daterangepicker(data[3]);
        $('#venue').val(data[4]);
        $('#dswd_fo_m').val(data[5]);
        $('#dswd_fo_f').val(data[6]);
        $('#dswd_co_m').val(data[7]);
        $('#dswd_co_f').val(data[8]);
        $('#dswd_cntr_m').val(data[9]);
        $('#dswd_cntr_f').val(data[10]);
        $('#dswd_ip_m').val(data[11]);
        $('#dswd_ip_f').val(data[12]);
        $('#interm_lgu_m').val(data[13]);
        $('#interm_lgu_f').val(data[14]);
        $('#interm_nga_m').val(data[15]);
        $('#interm_nga_f').val(data[16]);
        $('#interm_ngo_m').val(data[17]);
        $('#interm_ngo_f').val(data[18]);
        $('#interm_po_m').val(data[19]);
        $('#interm_po_f').val(data[20]);
        $('#interm_vltr_m').val(data[21]);
        $('#interm_vltr_f').val(data[22]);
        $('#interm_ip_m').val(data[23]);
        $('#interm_ip_f').val(data[24]);
        $('#stakeh_acdm_m').val(data[25]);
        $('#stakeh_acdm_f').val(data[26]);
        $('#stakeh_rlgs_m').val(data[27]);
        $('#stakeh_rlgs_f').val(data[28]);
        $('#stakeh_buss_m').val(data[29]);
        $('#stakeh_buss_f').val(data[30]);
        $('#stakeh_mdia_m').val(data[31]);
        $('#stakeh_mdia_f').val(data[32]);
        $('#stakeh_ip_m').val(data[33]);
        $('#stakeh_ip_f').val(data[34]);
        $('#benefic_gen_m').val(data[35]);
        $('#benefic_gen_f').val(data[36]);
        $('#benefic_yth_m').val(data[37]);
        $('#benefic_yth_f').val(data[38]);
        $('#benefic_prnt_m').val(data[39]);
        $('#benefic_prnt_f').val(data[40]);
        $('#benefic_oth_m').val(data[41]);
        $('#benefic_oth_f').val(data[42]);
        $('#benefic_ip_m').val(data[43]);
        $('#benefic_ip_f').val(data[44]);
        $('#total').val(data[45]);
        $('#sector_ip_m').val(data[46]);
        $('#sector_ip_f').val(data[47]);
        $('#sector_snr_m').val(data[48]);
        $('#sector_snr_f').val(data[49]);
        $('#sector_pwd_m').val(data[50]);
        $('#sector_pwd_f').val(data[51]);
        $('#sector_solp_m').val(data[52]);
        $('#sector_solp_f').val(data[53]);
        $('#eval_por_m').val(data[54]);
        $('#eval_por_f').val(data[55]);
        $('#eval_fair_m').val(data[56]);
        $('#eval_fair_f').val(data[57]);
        $('#eval_sati_m').val(data[58]);
        $('#eval_sati_f').val(data[59]);
        $('#eval_vs_m').val(data[60]);
        $('#eval_vs_f').val(data[61]);
        $('#eval_excl_m').val(data[62]);
        $('#eval_excl_f').val(data[63]);
        $('#fund_inter').val(data[64]);
        $('#fund_exter').val(data[65]);
        $('#remarks').val(data[66]);
        


   });
});

</script>


    <script>
      
  $('.form-group').on('input','.prc',function(){
   var totalSum = 0;
   $('.form-group .prc').each(function(){
       var inputVal = $(this).val();
       if($.isNumeric(inputVal)){
           totalSum += parseFloat(inputVal);
         }
  });
   $('#total').val(totalSum)
  });
                            
    </script>




  <!-- <script src="dist/js/export-table-data.js"></script> -->
</body>

<!--  <script>
 $(document).ready(function() {
  $('#monthly_table').DataTable( {
    dom: 'Bfrtip'
    buttons: [
      'copy', 'csv', 'excel', 'pdf', 'print'
    ]
  } );
} );
 </script> -->


 <script>
  
$(document).ready(function() {
  $('#monthly_table').DataTable( {
    dom: 'Bfrtip',
      buttons: [],
    bFilter: false,
    bInfo: true,
    bPaginate: true

  } );
} );


 </script>

       <script>
    $(function() {
      $('input[name="daterange"]').daterangepicker({
        opens: 'left'
      }, function(start, end, label) {
      console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
      });
    });
    </script>

    <script type="text/javascript">
  
     $( "#datepicker" ).datepicker({
                showButtonPanel: true,
                changeMonth: true,
                dateFormat: 'yy-mm-dd'
            });
          
</script>

</html>
