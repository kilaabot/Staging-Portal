<?php
//including the database connection file
include_once("config/config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($conn, "SELECT * FROM userpri ORDER BY m_id DESC"); // using mysqli_query instead
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
					  <h5 class="txt-dark">basic table</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.php">Dashboard</a></li>
						<li><a href="#"><span>Security</span></a></li>
						<li class="active"><span>Roles</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				

				
				<div class="row">
					
					<!-- Bordered Table -->
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Roles / Permision</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<a href="view-role_createnew.php" class="btn btn-success mr-10" name="m_role" id="m_role" >Create New Role</a>

									<div class="table-wrap mt-40">
										<div class="table-responsive">
										  <table class="table table-hover table-bordered mb-0" id="tablerole">
											<thead>
											  <tr>
												<th>ROLE DESCRIPTION</th>
												<th>MODULE  [CONTROL]</th>
												<th style="text-align: center;">Action</th>
											  </tr>
											</thead>
											<tbody>	
 
										<?php
										 include('config/config.php');   

										$query = 'SELECT m_info, m_id, m_ctrl, m_module,GROUP_CONCAT(m_module," → ",m_ctrl SEPARATOR " \n ") as "module_control", GROUP_CONCAT(m_id) as "c_id" FROM userpri GROUP BY m_info';


			                    		$result = mysqli_query($conn, $query) or die (mysqli_error($conn));

			   
			                  
			                        	while ($row = mysqli_fetch_assoc($result )) {

			  
			                                             
			                            echo '<tr>';
			                            echo '<td>'. $row['m_info'].'</td>';
			                            echo '<td style="white-space: pre-line; font-weight: bold;">'. $row['module_control'].'</td>';

																	echo ' <td align="center"><a class="mr-25" href="view-roles_edit.php?m_id='.$row['m_id'].'" data-toggle="tooltip" type="button" data-original-title="Edit" ><i class="fa fa-pencil text-inverse m-r-10 "></i></a> ';
			                         
																	echo '<a href="controller/process-delete_role.php?delRole=' . $row['m_info'] . '" type="button" id="toastrDefaultSuccess" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-close text-danger"></i></a></td>';

																	echo '</tr>';
			                            
			                             }
			                               ?> 
											</tbody>
										  </table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Bordered Table -->	

									<!-- ################################### ADD ACCOUNT MODAL / FORM ##############################	 -->

										<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
														<h5 class="modal-title" id="myLargeModalLabel">Add User</h5>
													</div>

													<form action="" method="POST" class="login-email">	

														<div class="modal-body">

													<div class="form-group">
														<label for="edInfo" class="control-label mb-10">Description:</label>
														<input type="text" name="edInfo" id="edInfo" class="form-control" required>
													</div>

											<div class="table-responsive">
										  <table class="table table-bordered mb-0">
											<thead>
											  <tr>
											  <th>Description</th>
												<th>Module</th>
												<th>Control</th>
												<th style="color: blue;">Action</th>
											  </tr>
											</thead>
											<tbody id="RoleTBody">
												<td><input type="text" id="module_control" name="module_control" class="table table-responsive" disabled></td>
												<td><input type="text" id="m_ctrl" name="m_ctrl" class="table table-responsive" disabled></td>
								
											</tbody>
										  </table>
										</div>


														</div>
																	
														<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														<button type="submit" id="submit_user" name="submit_user" class="btn btn-success">Save</button>					
														</div>
															</form>
													</div>
												</div>
												<!-- /.modal-content -->
											</div>
											<!-- /.modal-dialog -->
										</div>
									<!-- ################################### END ADD ACCOUNT MODAL / FORM ##############################	 -->		

					
				</div>
								
			</div>
			
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>2018 &copy; Grandin. Pampered by Hencework</p>
					</div>
				</div>
			</footer>
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
	
	<!-- Piety JavaScript -->
	<script src="../vendors/bower_components/peity/jquery.peity.min.js"></script>
	<script src="dist/js/peity-data.js"></script>
	
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

	<script>
			
	$(document).ready(function () {
    	$(document).on('click', '.addmodal', function(){

        $('#addmodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {

          return $(this).text();
        }).get();

        $('#m_info').val(data[0]);
        $('#m_ctrl').val(data[1]);
        $('#module_control').val(data[2]);
       

});

});



	</script>

	<script type="text/javascript">
		

		function addModule(){

			var	module_control = document.sample.module_control.value;
			var	m_ctrl = document.sample.m_ctrl.value;

			var	tr = document.createElement('tr');
		
			var td1 = tr.appendChild(document.createElement('td'));
			var td2 = tr.appendChild(document.createElement('td'));
			var td3 = tr.appendChild(document.createElement('td'));

			td1.innerHTML = '<input type="text" name="module_control" id="module_control" required>'+module_control;
			td2.innerHTML = '<input type="text" name="m_ctrl" id="m_ctrl" required>'+m_ctrl;
			td3.innerHTML = '<input type="button" name="del" onclick="delModule(this);" class="btn btn-danger" value="Remove">'

			document.getElementById("tbl").appendChild(tr);
			
		}

		function delModule(Stud){
			var s = Stud.parentNode.parentNode;
			s.parentNode.removeChild(s);
		}





	</script>

	
</body>

</html>
