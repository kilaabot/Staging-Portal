<?php include('config/connection.php'); ?>
<?php include('controller/process-upload_documents.php'); ?>

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
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Manage Documents</h6>
											<div class="form-wrap mt-40">
											<a data-toggle="modal" data-target="#uploadmodal" class="btn btn-success btn-sm "><i class="fa fa-upload"></i> Upload Document </a>
											</div>
									</div>
									<div class="clearfix"></div>

								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted">Easily keep the documents accessible. </p>				

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
											  <th style="text-align: center;" hidden>id</th>
												<th style="text-align: center;">File Name</th>
												<th style="text-align: center;">Description</th>
												<th style="text-align: center;">File Type</th>
												<th style="text-align: center;">Upload By</th>
												<th style="text-align: center;">Upload Date</th>
									
												<th style="text-align: center;">Action</th>
											  </tr>
											</thead>
											<tbody id="doctablebody">
											 		<?php
																$query=$conn->query("select * from documents order by id desc");
																while($row=$query->fetch()){
																	$id=$row['id'];
																	$name=$row['name'];
																	$description=$row['description'];
																	$filetype=$row['filetype'];
																	$uploadby=$row['uploadby'];
																	$uploaddate=$row['uploaddate'];
														
							
																	
													?>
													<tr>
													<td hidden>
														&nbsp;<?php echo $id ;?>
													</td>
													<td>
														&nbsp;<?php echo $name ;?>
													</td>
													<td style="text-align: center;">
														&nbsp;<?php echo $description ;?>
													</td >
													<td style="text-align: center;">
														&nbsp;<?php echo $filetype ;?>
													</td>
													<td style="text-align: center;">
														&nbsp;<?php echo $uploadby ;?>
													</td>
													<td style="text-align: center;">
														&nbsp;<?php echo $uploaddate ;?>
													</td>
											
													<td style="text-align: center;" class="text-nowrap">
													


																<a href="controller/process-download_documents.php?filename=<?php echo $name;?>&f=<?php echo $row['fname'] ?>" type="button" id="toastrDefaultSuccess" data-toggle="tooltip" data-original-title="Download" class="mr-25" data-toggle="tooltip"><i class="fa fa-download text-inverse m-r-10 "></i></a>


																<a href="controller/process-delete_documents.php<?php echo '?id='.$id; ?>" type="button" id="toastrDefaultSuccess" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o text-danger"></i></a>




													</td>
												</tr>
												<?php }?>
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
			
