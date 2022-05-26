
<?php include('config/connection.php'); 


?>

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

	<!-- Data table CSS -->
	<link href="../vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
	
	<!-- Custom CSS -->
	<link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	
             <?php include('includes/view-menu.php'); ?>

		<!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Documents Gallery</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>Tools</span></a></li>
							<li class="active"><span>Documents Gallery</span></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->


			<!-- Row -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
										<h6 class="panel-title txt-dark">Manage Documents</h6>
									<div class="align-items-center" style="text-align:center;">
									
											<div class="form-wrap mt-40" >

												 <form action="controller/process-monthly_import.php" method="POST" enctype="multipart/form-data">


																<div class="fileupload btn btn-primary btn-anim btn-rounded btn-outline" style="width:20em; text-align: center;"><i class="fa fa-upload"></i><span class="btn-text">Choose File</span>
																	<input type="file" class="upload" name="import_file" > 


																</div>
<!-- 
																<button class="btn btn-success btn-block btn-rounded btn-outline  btn-success">rounded outline block btn</button> -->


																<button type="submit" name="save_excel_data" class="btn btn-primary mt-3 btn-rounded">Import</button>
															</form>

											</div>

									</div>


								

								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted text-center"><code>Note: </code>Double check your import data :) </p>		

										                <?php
                if(isset($_SESSION['message']))
                {
                    echo "<h4>".$_SESSION['message']."</h4>";
                    unset($_SESSION['message']);
                }
                ?>

									<div class="pull-left">
										<button class="btn btn-success btn-lable-wrap left-label" name="submits" id="submits"> <span class="btn-label"><i class="glyphicon glyphicon-download-alt"></i> </span><span class="btn-text">Import Template</span></button>
									</div>
								<div class="panel-wrapper collapse in">
								<div class="panel-body">

									<div class="table-wrap mt-40">
									<div class="form-group mb-30">
										
									<div class="input-group mb-15 col-md-3"> <span class="input-group-addon"><i class="zmdi zmdi-search"></i></span>
										<input type="text" name="search" placeholder="Search" id="search" class="form-control " >


									</div>




									</div>
										<div class="table-responsive">
										  <table class="table table-hover table-bordered mb-0" id="documents_table">
											
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

                                                            <tbody id="monthlytablebody">
                                  <?php       

                                  

                    $query = 'SELECT * FROM monthly';
                              $result = mysqli_query($db, $query) or die (mysqli_error($db));
                        
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

                                
                                  echo '</tr> ';

                                     }
                                     ?> 
                        </tbody>

													  </table>
													</div>
												</div>

												<!-- /Modal Delete Upload-->


										<!-- Modal Upload -->

										<div class="modal fade" id="deleteuploadmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
														<!-- <h5 class="modal-title" id="exampleModalLabel1">Link Document to Asset</h5> -->
													</div>
													<div class="modal-body">
															<form class="form" action="controller/delete-uploaddoc.php" name="form" method="post" >

								                                <div class="form-group row" >
								                                  
								                                    <div class="col-sm-7">
								                                        <input id="delete_id" name="delete_id" type="text" />
								                                       <h4>Do you want to Delete This Documents ??</h4>
								                                    </div>
								                                </div>
								                           
												
														<div class="modal-footer">
											
							                            <button type="submit" id="deleteupload" name="deleteupload"  class="btn btn-primary"><i class="la la-upload"></i>Yes !! Delete IT</button>
							                           
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
							</div>
						</div>
					</div>
					<!-- /Row -->

		

					
					<!-- Modal Upload -->

										<div class="modal fade" id="uploadmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
														<h5 class="modal-title" id="exampleModalLabel1">Link Document to Asset</h5>
													</div>
													<div class="modal-body">
															<form class="form" action="" name="form" method="post" enctype="multipart/form-data">

																								

								                                <div class="form-group row" hidden>
								                                    <label class="col-sm-4 col-form-label text-sm-end required" for="uploadby">Upload by</label>
								                                    <div class="col-sm-7">
								                                        <input class="form-control" id="uploadby" name="uploadby" type="text" value="<?php echo $_SESSION['username']; ?>" />
								                                        <span class="field-validation-valid"></span>
								                                    </div>
								                                </div>
								                                <div class="form-group row">
								                                    <label class="col-sm-4 col-form-label text-sm-end required" for="Description">Description<code>*</code></label>
								                                    <div class="col-sm-7">
								                                        <input class="form-control" data-val="true" data-val-length="Maximum length is 100." data-val-length-max="100" data-val-required="Description is required." id="description" maxlength="100" name="description" type="text" value="" />
								                                        <span class="field-validation-valid" data-valmsg-for="Description" data-valmsg-replace="true"></span>
								                                    </div>
								                                </div>
								                                <div class="form-group row align-items-center">
								                                    <label class="col-sm-4 col-form-label text-sm-end required" for="file">Document<code>*</code></label>
								                                    <div class="col-sm-7">
								                                        <input class="form-control" data-val="true" data-val-required="Document is required." id="file" name="file" type="file" value="" />
								                                        <span class="field-validation-valid" data-valmsg-for="file" data-valmsg-replace="true"></span>
								                                        
								                                    </div>
								                                </div>
								                           
												
														<div class="modal-footer">
															<hr class="light-grey-hr"/>
							                            <button type="submit" id="submit" name="submit"  class="btn btn-primary"><i class="la la-upload"></i>Upload</button>
							                           
							                            </div>
							                             </form>
												</div>
											</div>
										</div>
										</div>
					<!-- /Modal -->



				
			<!-- Footer -->
			   <?php include('includes/view-footer.php'); ?>
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
    
	<!-- Data table JavaScript -->
	<script src="../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="dist/js/dataTables-data.js"></script>
	
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
	<script src="../dist/js/upload-documents.js"></script>


<!-- 	<script src="dist/js/modal-data.js"></script> -->


<script>
	

  $(document).ready(function(){
      $('#search').keyup(function(){
        search_table($(this).val());
      });

      function search_table(value){
        $('#doctablebody tr').each(function(){
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

// $(document).ready(function() {
// 	$('#documents_table').DataTable( {
// 		dom: 'Bfrtip',
// 		buttons: [],
// 		bFilter: false,
// 		bInfo: true,
// 		bPaginate: true

// 	} );
// } );

</script>

</body>

</html>
			
