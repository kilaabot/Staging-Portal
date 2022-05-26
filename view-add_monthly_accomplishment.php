


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
		
		<!-- Bootstrap Daterangepicker CSS -->
		<link href="../vendors/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css"/>
		 
		<!-- Jasny-bootstrap CSS -->
		<link href="../vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		
		<!-- Custom CSS -->
		<link href="dist/css/style.css" rel="stylesheet" type="text/css">


	</head>
	<body>
	
			<?php include('includes/view-menu.php');?>  
		
				
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Monthly Accomplishment</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>form</span></a></li>
							<li class="active"><span>Monthly Accomplishment</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->

        <!--   <div class="row">
              
              <button type="button" class="btn btn-success mr-10 editbtn" >Add User</button>

          </div> -->


					<!-- Row -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark"></h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													 <form id="quickForm" role="form" method="post" action="controller/process-add_monthly_accomplishment.php?action=add">
														<div class="form-body">

															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">TRAINING / ACTIVITY TITLE</label>
																		<input type="text" name="activity" id="activity" class="form-control" required>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">OBJECTIVES</label>
																		<input type="text" name="objectives" id="objectives" class="form-control" required>
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															<div class="row">
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
																		<input type="text" name="venue" id="venue" class="form-control" required>
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
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">FO</label>                   
                                    <input type="number" id="dswd_fo_m" name="dswd_fo_m" class="form-control prc" placeholder="M">
                                    <br>
                                    <input type="number" id="dswd_fo_f" name="dswd_fo_f" class="form-control prc" placeholder="F">
                                  </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">CO</label>                   
                                    <input type="number" id="dswd_co_m" name="dswd_co_m" class="form-control prc" placeholder="M">
                                    <br>
                                    <input type="number" id="dswd_co_f" name="dswd_co_f" class="form-control prc" placeholder="F">
                                  </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Centers & Inst.</label>                    
                                    <input type="number" id="dswd_cntr_m" name="dswd_cntr_m" class="form-control prc" placeholder="M">
                                    <br>
                                    <input type="number"  id="dswd_cntr_f" name="dswd_cntr_f" class="form-control prc" placeholder="F">
                                  </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">IP</label>                    
                                    <input type="number" id="dswd_ip_M" name="dswd_ip_m" class="form-control prc" placeholder="M">
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
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">LGU</label>                    
                                    <input type="number"  id="interm_lgu_m" name="interm_lgu_m" class="form-control prc" placeholder="M">
                                    <br>
                                    <input type="number"  id="interm_lgu_f" name="interm_lgu_f" class="form-control prc" placeholder="F">
                                  </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">NGA</label>                    
                                    <input type="number"  id="interm_nga_m" name="interm_nga_m" class="form-control prc" placeholder="M">
                                    <br>
                                    <input type="number"  id="interm_nga_f" name="interm_nga_f" class="form-control prc" placeholder="F">
                                  </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">NGO</label>                    
                                    <input type="number"  id="interm_ngo_m" name="interm_ngo_m" class="form-control prc" placeholder="M">
                                    <br>
                                    <input type="number"  id="interm_ngo_f" name="interm_ngo_f" class="form-control prc" placeholder="F">
                                  </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">PO</label>                   
                                    <input type="number"  id="interm_po_m" name="interm_po_m" class="form-control prc" placeholder="M">
                                    <br>
                                    <input type="number"  id="interm_po_f" name="interm_po_f" class="form-control prc" placeholder="F">
                                  </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Volunteer</label>                    
                                    <input type="number"  id="interm_vltr_m" name="interm_vltr_m" class="form-control prc" placeholder="M">
                                    <br>
                                    <input type="number"  id="interm_vltr_f" name="interm_vltr_f" class="form-control prc" placeholder="F">
                                  </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
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
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Academe</label>                    
                                    <input type="number"  id="stakeh_acdm_m" name="stakeh_acdm_m" class="form-control prc" placeholder="M">
                                    <br>
                                    <input type="number"  id="stakeh_acdm_f" name="stakeh_acdm_f" class="form-control prc" placeholder="F">
                                  </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Religous</label>                   
                                    <input type="number"  id="stakeh_rlgs_m" name="stakeh_rlgs_m" class="form-control prc" placeholder="M">
                                    <br>
                                    <input type="number"  id="stakeh_rlgs_f" name="stakeh_rlgs_f" class="form-control prc" placeholder="F">
                                  </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Business Sec.</label>                    
                                    <input type="number"  id="stakeh_buss_m" name="stakeh_buss_m" class="form-control prc" placeholder="M">
                                    <br>
                                    <input type="number"  id="stakeh_buss_f" name="stakeh_buss_f" class="form-control prc" placeholder="F">
                                  </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Media</label>                    
                                    <input type="number"  id="stakeh_mdia_m" name="stakeh_mdia_m" class="form-control prc" placeholder="M">
                                    <br>
                                    <input type="number"  id="stakeh_mdia_f" name="stakeh_mdia_f" class="form-control prc" placeholder="F">
                                  </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
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
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">General</label>                    
                                    <input type="number"  id="benefic_gen_m" name="benefic_gen_m" class="form-control prc" placeholder="M">
                                    <br>
                                    <input type="number"  id="benefic_gen_f" name="benefic_gen_f" class="form-control prc" placeholder="F">
                                  </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Youth</label>                    
                                    <input type="number"  id="benefic_yth_m" name="benefic_yth_m" class="form-control prc" placeholder="M">
                                    <br>
                                    <input type="number"  id="benefic_yth_f" name="benefic_yth_f" class="form-control prc" placeholder="F">
                                  </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Parent</label>                   
                                    <input type="number"  id="benefic_prnt_m" name="benefic_prnt_m" class="form-control prc" placeholder="M">
                                    <br>
                                    <input type="number"  id="benefic_prnt_f" name="benefic_prnt_f" class="form-control prc" placeholder="F">
                                  </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Others</label>                   
                                    <input type="number"  id="benefic_oth_m" name="benefic_oth_m" class="form-control prc" placeholder="M">
                                    <br>
                                    <input type="number"  id="benefic_oth_f" name="benefic_oth_f" class="form-control prc" placeholder="F">
                                  </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
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
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">TOTAL</label>                    
                                    <input type="number" id="total" name="total" class="form-control" readonly="readonly">

                                  </div>
                                </div>
                                </div>

                                <!-- /Row -->

                              <div class="seprator-block"></div>

                              <h6 class="txt-dark capitalize-font">SECTOR REPRESENTED</h6>
                              <hr class="light-grey-hr"/>

                              <div class="row">
                                <br>
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">IP</label>                   
                                    <input type="number" name="sector_ip_m" id="sector_ip_m" class="form-control" placeholder="M">
                                    <br>
                                    <input type="number" name="sector_ip_f" id="sector_ip_f" class="form-control" placeholder="F">
                                  </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Senior Citizen</label>                   
                                    <input type="number" name="sector_snr_m" id="sector_snr_m" class="form-control" placeholder="M">
                                    <br>
                                    <input type="number" name="sector_snr_f" id="sector_snr_f" class="form-control" placeholder="F">
                                  </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">PWD</label>                    
                                    <input type="number"  name="sector_pwd_m" id="sector_pwd_m"  class="form-control" placeholder="M">
                                    <br>
                                    <input type="number"  name="sector_pwd_f" id="sector_pwd_f" class="form-control" placeholder="F">
                                  </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
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
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Poor</label>                   
                                    <input type="number"  name="eval_por_m" id="eval_por_m" class="form-control" placeholder="M">
                                    <br>
                                    <input type="number"  name="eval_por_f" id="eval_por_f" class="form-control" placeholder="F">
                                  </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Fair</label>                   
                                    <input type="number"  name="eval_fair_m" id="eval_fair_m" class="form-control" placeholder="M">
                                    <br>
                                    <input type="number"  name="eval_fair_f" id="eval_fair_f" class="form-control" placeholder="F">
                                  </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Satisfactory</label>                   
                                    <input type="number"  name="eval_sati_m" id="eval_sati_m" class="form-control" placeholder="M">
                                    <br>
                                    <input type="number"  name="eval_sati_f" id="eval_sati_f" class="form-control" placeholder="F">
                                  </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">VS</label>                   
                                    <input type="number"  name="eval_vs_m" id="eval_vs_m" class="form-control" placeholder="M">
                                    <br>
                                    <input type="number"  name="eval_vs_f" id="eval_vs_f" class="form-control" placeholder="F">
                                  </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group mb-0">
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
                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
                                  <div class="form-group">
                                    <label class="control-label mb-10">Internal (DSWD)</label>              
                                    <input type="text"  name="fund_inter" id="fund_inter" class="form-control">
                                    
                                  </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-3 col-sm-12 col-xs-12 form-group mb-0">
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
																<div class="col-md-5 col-sm-12 col-xs-12 form-group mb-0">
																	<div class="form-group">
																		<label class="control-label mb-10">REMARKS</label>							
																		<textarea  name="remarks" id="remarks" class="form-control" rows="5" required></textarea>
																		<!-- <input type="text" name="remarks" id="remarks" class="form-control" required> -->
																		
																	</div>
																</div>
																<!--/span-->
											
															</div>
															<!-- /Row -->
															<div class="seprator-block"></div>
																
															<div class="">
															<button type="submit" name="add_data" class="btn btn-primary">Save</button>
															</div>

															<!-- /Row -->

														
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
					
				</div>
				
				<!-- Footer -->
				<?php include('includes/view-footer.php');?>  
				<!-- /Footer -->
				
			</div>
			<!-- /Main Content -->
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->

		<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <!-- jQuery -->
    <script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <!-- Moment JavaScript -->
    <script type="text/javascript" src="../vendors/bower_components/moment/min/moment-with-locales.min.js"></script>
    
    <!-- Bootstrap Daterangepicker JavaScript -->
    <script src="../vendors/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Slimscroll JavaScript -->
    <script src="dist/js/jquery.slimscroll.js"></script>
  
    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>
    
    <!-- Owl JavaScript -->
    <script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
  
    <!-- Switchery JavaScript -->
    <script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>
  
    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>


    
      <script>
    $(function() {
      $('input[name="daterange"]').daterangepicker({
        opens: 'left'
      }, function(start, end, label) {
      console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
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



<!-- 
    <script type="text/javascript">
      
      $ (document).ready(function(){

   $('.prc').blur(function () {
      var sumdata = 0;
      $('.prc').each(function () {
         if($(this).val()!="")
         {
            sumdata += parseFloat($(this).val());
         }
      }) ;
         $ ("#total").html (sumdata);
   });
});
    </script> -->


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
        // $('#daterange').val(data[3]);
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


<script type="text/javascript">
  
     $( "#datepicker" ).datepicker({
                showButtonPanel: true,
                changeMonth: true,
                dateFormat: 'yy-mm-dd'
            });
          
</script>

		


	</body>
</html>