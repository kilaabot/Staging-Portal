<?php 
include 'config/config.php';
error_reporting(0);
?>
<?php include('includes/view-header.php');?>  
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
						<li class="active"><span>users table</span></li>
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
									<h6 class="panel-title txt-dark">Export Table</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
											<div class="title-action-btn" style="margin-bottom: 10px;">
												
											</div>

								<div class="table-wrap mt-40">

										<div class="table-responsive">

										  <table class="table table-striped table-bordered mb-0" id="account_table">
											<thead>
											  <tr>
											  	<th>id</th>
												<th>Email</th>
												<th>Username</th>
												<th>Password</th>
												<th>Role</th>
												<th>Region</th>
												<th>Region Info</th>
												
											  </tr>
											</thead>
											<tbody id="usertablebody">

											      <?php       
										$query = 'SELECT * FROM users';
			                    		$result = mysqli_query($db, $query) or die (mysqli_error($db));
			                  
			                        	while ($row = mysqli_fetch_assoc($result)) {
			                                             
			                            echo '<tr>';
			                            echo '<td>'. $row['id'].'</td>';
			                            echo '<td>'. $row['email'].'</td>';
			                            echo '<td>'. $row['username'].'</td>';
			                            echo '<td>'. $row['password'].'</td>';
			                            echo '<td>'. $row['role'].'</td>';
			                            echo '<td>'. $row['region'].'</td>';
			                            echo '<td>'. $row['regioninfo'].'</td>';
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
					
				</div>
			<!-- /Row -->

					
			</div>
			<!-- Footer -->
			<?php include('includes/view-footer.php');?>  
			<!-- /Footer -->
			
		</div>
		<!-- /Main Content -->
    </div>

<!-- JS Script -->
<?php include('includes/scripts.php');?>  



<!-- Data table JavaScript -->
	<script src="../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="../vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="../vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js"></script>
	<script src="../vendors/bower_components/jszip/dist/jszip.min.js"></script>
	<script src="../vendors/bower_components/pdfmake/build/pdfmake.min.js"></script>
	<script src="../vendors/bower_components/pdfmake/build/vfs_fonts.js"></script>
	<script src="../vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
	<script src="../vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
	<!-- <script src="dist/js/export-table-data.js"></script> -->


<script>
	


	$(document).ready(function() {
	$('#account_table').DataTable( {
		dom: 'Bfrtip',
		buttons: [
    { extend: 'excel',
    	className: 'btn btn-success btn-lable-wrap left-label btn-eexcl',

    	text: '<span class="btn-label"><i class="fa fa-file-excel-o"></i></span><span class="btn-text">'+'Export To Excel'+'</span>',
    	title: 'Portal Users',

   


		},
    { extend: 'pdf', 
    orientation: 'portrait', 
    pageSize: 'Legal', 
    className: 'btn btn-danger btn-lable-wrap left-label btn-ppdf', 
    text: '<span class="btn-label"><i class="fa fa-file-pdf-o"></i> </span><span class="btn-text">'+'Export To PDF'+'</span>', 
    exportOptions: { columns: [  1, 2, 3, 4, 5, 6] }, 
    customize: function(doc) { doc.defaultStyle.alignment = 'center'},   
    title: 'Portal Users',
  },
    
 


		],
		bFilter: false,
		bInfo: true, 
		bPaginate: true

	} );
} );




</script>

</body>

</html>