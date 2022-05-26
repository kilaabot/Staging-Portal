<?php include('config/dbcon.php'); 



error_reporting(0);

session_start();

// if(empty($_SESSION['role']) || $_SESSION['role'] !== 'Administrator') {
//     //block user access
//     header('Location: index.php'); 
// }

$region=$row['region'];


// Add User

if (isset($_POST['submit_user'])) {
       $username = $_POST['adUsername'];
       $email = $_POST['adEmail'];
       $role = $_POST['adRole'];
       $region = $_POST['adRegion'];
       $regioninfo = $_POST['adRegioninfo'];
       $status = $_POST['adStatus'];
       $password = md5($_POST['adPassword']);
       $cpassword = md5($_POST['adCpassword']);

       if ($password == $cpassword) {
              $sql = "SELECT * FROM users WHERE email='$email'";
              $result = mysqli_query($conn, $sql);
              if (!$result->num_rows > 0) {
                     $sql = "INSERT INTO users (username, email, role, password, region, regioninfo, status)
                                   VALUES ('$username', '$email', '$role', '$password', '$region', '$regioninfo', '$status')";
                     $result = mysqli_query($conn, $sql);
                     if ($result) {
                            // echo '<script> class="btn btn-success toastrDefaultSuccess"</script>';
                            // echo "<script></script>";
                            // $_SESSION['status'] = "Wow! User Registration Completed";
                            // $_SESSION['status_code'] = "success";
                            // header('location: view-accounts.php');

                            echo "<script>alert('Wow! Insert User Completed')</script>";

                            $username = "";
                            $email = "";
                            $role = "";
                            $region = "";
                            $regioninfo = "";
                            $status = "";
                            $_POST['adUsername'] = "";
                            $_POST['adEmail'] = "";
                            $_POST['adRole'] = "";
                            $_POST['adRegion'] = "";
                            $_POST['adRegioninfo'] = "";
                            $_POST['adStatus'] = "";
                            $_POST['adPassword'] = "";
                            $_POST['adCpassword'] = "";

                     } else {
                            echo "<script>alert('Woops! Something Wrong Went.')</script>";
                           
                            // header('location: view-accounts.php');
                     }
              } else {
                     echo "<script>alert('Woops! Email Already Exists.')</script>";
                      // $_SESSION['status'] = "AWoops! Email Already Exists";
                            // $_SESSION['status_code'] = "error";
                            // header('location: view-accounts.php');
              }
              
       } else {
              echo "<script>alert('Password Not Matched.')</script>";
               // $_SESSION['status'] = "Password Not Matched";
                            // $_SESSION['status_code'] = "error";
                            // header('location: view-accounts.php');
       }
}


// End Add User

// Update User 

    if(isset($_POST['updateuser']))
    {
        $id = $_POST['id'];

        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $region = $_POST['region'];
        $status = $_POST['status'];
        $regioninfo = $_POST['regioninfo'];


        $query = "UPDATE users SET email='$email', username='$username', password='$password', role='$role', region='$region', regioninfo='$regioninfo', status='$status' WHERE id='$id' ";

        $query_run = mysqli_query($conn, $query);

        if($query_run)

        {
            echo '<script> alert("Successfully Updated !!"); </script>'; 
        }else {
            echo '<script> alert("Data Not Updated !!"); </script>'; 
        }  
   }
   
 // End Update User
 // Delete User 

    if(isset($_GET['deleteuser'])){

        $id = $_GET['deleteuser'];

        $query = "DELETE FROM users WHERE  id='$id' ";

        $query_run = mysqli_query($conn, $query);

        if($query_run) {
              echo '<script> alert("Successfully deleted !!"); 
                     window.location = "view-accounts.php";

              </script>'; 
            
        }else{
            echo '<script> alert("Data Not Deleted !!"); </script>';
            die(mysqli_error($conn));
        }  
   }
 
// End Delete user
?>



<?php 



include ('includes/view-header.php');
?>



<?php 
include ('config/dbcon.php');
?>
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
				
			<form method="POST" name="sample" id="form">	 
				<div class="row">
					
					<!-- Bordered Table -->
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Users Table</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
								  	<button type="button" class="btn btn-success mr-10 addbtn svs">Add User</button>
								  	<!-- <button class="btn btn-success mr-10" id="submit" name="submit">Add User 2</button> -->

								<div class="table-wrap mt-40">
									


									<form>
									<div class="form-group mb-30">
										
									<div class="input-group mb-15 col-md-3"> <span class="input-group-addon"><i class="zmdi zmdi-search"></i></span>
										<input type="text" name="search" placeholder="Search" id="search" class="form-control " >
									</div>

									</div>

									</form>

										<div class="table-responsive">
										  <table class="table table-striped table-bordered mb-0" id="account_table">
											<thead>
											  <tr>
											  <th hidden>id</th>
												<th>Email</th>
												<th>Username</th>
												<th>Password</th>
												<th>Role</th>
												<th>Region</th>
												<th>Region Info</th>
												<th>Status</th>
												<th style="color: blue;">Action</th>
											  </tr>
											</thead>
											<tbody id="usertablebody">

											      <?php       

											      include('config/connection.php');
											
										$query = 'SELECT * FROM users';
			                    		$result = mysqli_query($db, $query) or die (mysqli_error($db));
			                  
			                        	while ($row = mysqli_fetch_assoc($result)) {
			                                             
			                            echo '<tr>';
			                            echo '<td hidden>'. $row['id'].'</td>';
			                            echo '<td>'. $row['email'].'</td>';
			                            echo '<td>'. $row['username'].'</td>';
			                            echo '<td>'. $row['password'].'</td>';
			                            echo '<td>'. $row['role'].'</td>';
			                            echo '<td>'. $row['region'].'</td>';
			                            echo '<td>'. $row['regioninfo'].'</td>';

			                            if($row['status']=='active') 
         								echo "<td ><span class='label label-success'>". $row['status']."</span></td>"; 
  										else if($row['status']=='inactive')// [val2]can be 'rejected'
        	 							echo "<td ><span class='label label-danger'>". $row['status']."</span></td>"; 
			                            echo '<td class="text-nowrap"><a  class="mr-25" data-toggle="tooltip" type="button" data-original-title="Edit" ><i class="fa fa-pencil text-inverse m-r-10 editbtn "></i></a> ';
										echo '<a href="view-accounts.php?deleteuser=' . $row['id'] . '" type="button" id="toastrDefaultSuccess" data-toggle="tooltip" data-original-title="Close"><i class="fa fa-close text-danger"></i></a></td>';
										echo '</tr>';

			                               }
			                               ?> 
											</tbody>
										  </table>
										</div>
									</div>

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
														<label for="adEmail" class="control-label mb-10">Email:</label>
														<input type="email" name="adEmail" id="adEmail" class="form-control" value="<?php echo $email; ?>" required>
													</div>

													<div class="form-group">
														<label for="adUsername" class="control-label mb-10">Username:</label>
														<input type="text" name="adUsername" id="adUsername" class="form-control" value="<?php echo $username; ?>" required>
													</div>

													<div class="form-group">
														<label for="adPassword" class="control-label mb-10">Password:</label>
														<input type="password" name="adPassword" id="adPassword" class="form-control" value="<?php echo $_POST['password']; ?>" required>
													</div>

													<div class="form-group">
														<label for="adCpassword" class="control-label mb-10">Confirm Password:</label>
														<input type="password" name="adCpassword" id="adCpassword" class="form-control" value="<?php echo $_POST['cpassword']; ?>" required>
													</div> 

													<div class="form-group">
														<label class="control-label mb-10">Role</label>
															<select class="form-control" name="adRole" id="adRole" value="<?php echo $role; ?>">
																<?php 
																		
																		include('config/config.php');
																		$query="SELECT DISTINCT m_info FROM userpri";
																		$result=mysqli_query($conn,$query);
																		while($row=mysqli_fetch_array($result)){

																	?>
															<option value="<?php echo $row['m_info'];?>"><?php echo $row['m_info'];?></option>
															<?php } ?>
															</select>
													</div>


													<div class="form-group">
													<label for="adRegion" class="control-label mb-10">Region</label>
													<select class="form-control" name="adRegion" id="adRegion" required value="<?php echo $region; ?>">
														<option value="npmo">NPMO</option>
														<option value="rpmo">RPMO</option>
													</select>
													</div>

													<div class="form-group">
													<label for="adRegioninfo" class="control-label mb-10">Region Info:</label>
													<input type="text" name="adRegioninfo" id="adRegioninfo" class="form-control" value="<?php echo $regioninfo; ?>">
													</div>

													<div class="form-group">
													<label for="adStatus" class="control-label mb-10">Status</label>
													<select class="form-control" name="adStatus" id="adStatus" required value="<?php echo $active; ?>">
														<option value="active">Active</option>
														<option value="inactive">Inactive</option>
													</select>
													</div>

														</div>
																	
														<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														<button type="submit" id="submit_user" name="submit_user" class="btn btn-success svs">Save</button>					
														</div>
															</form>
													</div>
												</div>
												<!-- /.modal-content -->
											</div>
											<!-- /.modal-dialog -->
										</div>
									<!-- ################################### END ADD ACCOUNT MODAL / FORM ##############################	 -->		


								<!-- ################################### ADD EDIT MODAL / FORM ##############################	 -->

										<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
														<h5 class="modal-title" id="myLargeModalLabel">Add User</h5>
													</div>

													<form action="controller/process-accounts.php" method="POST">

														<div class="modal-body">

							<div class="form-group">
								<input type="hidden" name="edId" id="edId">
							</div>

					<div class="form-group">
						<label for="edEmail" class="control-label mb-10">Email:</label>
						<input type="text" name="edEmail" class="form-control" id="edEmail" required>
					</div>

					<div class="form-group">
						<label for="edUsername" class="control-label mb-10">Username:</label>
						<input type="text" name="edUsername" class="form-control" id="edUsername" required>
					</div> 

					<div class="form-group">
						<label for="edPassword" class="control-label mb-10">Password:</label>
						<input type="text" name="edPassword" class="form-control" id="edPassword" required>
					</div>
															
					<div class="form-group">
						<label class="control-label mb-10">Role</label>
						<select id="edRole" name="edRole" class="form-control" required>
							<?php 
																		
							include('config/config.php');
							$query="SELECT DISTINCT m_info FROM userpri";
							$result=mysqli_query($conn,$query);
							while($row=mysqli_fetch_array($result)){

							?>
						<option value="<?php echo $row['m_info'];?>"><?php echo $row['m_info'];?></option>
						    <?php } ?>
						</select>
					</div>


					<div class="form-group">
						<label class="control-label mb-10">Role</label>
						<select id="edRegion" name="edRegion" class="form-control" required>
							<option value="" disabled selected >--Select your Region--</option>
							<option <?=($row['region'] == 'npmo' ? 'selected=""' : '')?> value="npmo">npmo</option>
							<option <?=($row['region'] == 'rpmo' ? 'selected=""' : '')?> value="rpmo">rpmo</option>
						</select>
					</div>

					<div class="form-group">
						<label for="edRegioninfo" class="control-label mb-10">Region Info:</label>
						<input type="text" name="edRegioninfo" id="edRegioninfo" class="form-control" readonly>
					</div>

				<div class="form-group">
						<label class="control-label mb-10">Status</label>
						<select id="edStatus" name="edStatus" class="form-control" required>
							<option value="" disabled selected >--Select your Status--</option>
							<option <?=($row['status'] == 'active' ? 'selected=""' : '')?> value="active">Active</option>
							<option <?=($row['status'] == 'inactive' ? 'selected=""' : '')?> value="inactive">Inactive</option>
						</select>

					</div>

					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button name="updateuser" id="updateuser" type="submit" class="btn btn-primary">Update</button>
					</div>

													
															</form>
													</div>
												</div>
												<!-- /.modal-content -->
											</div>
											<!-- /.modal-dialog -->
										</div>
									<!-- ################################### END EDIT ACCOUNT MODAL / FORM ##############################	 -->		

									


	
								</div>
							</div>
						</div>

					</form>
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
	<!-- JavaScript -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
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
	<!-- <script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script> -->
	
	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
	
	<!-- Init JavaScript -->
	<script src="dist/js/init.js"></script>

	<!-- Sweet-Alert  -->
	<script src="../vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script>
		
	<script src="dist/js/sweetalert-data.js"></script>

	<!-- SweetAlert2 -->
<script src="../plugins/sweetalert2/sweetalert2.min.js"></script>

<!-- Toastr -->
<script src="../plugins/toastr/toastr.min.js"></script>

<!-- Bootstrap 4 -->
<!-- <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->


<!-- Account Page -->



<script>

	// Search User

	$(document).ready(function(){
			$('#search').keyup(function(){
				search_table($(this).val());
			});

			function search_table(value){
				$('#usertablebody tr').each(function(){
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



	// Add Button Modal

	$(document).ready(function () {
    	$(document).on('click', '.addbtn', function(){
        $('#addmodal').modal('show');


   });
});

// 	$(document).ready(function () {
//     	$(document).on('click', '.btninfo', function(){

//           $('#edRegioninfo').prop("readOnly", true);




//    });
// });



	$(document).ready(function () {
    	$(document).on('click', '.editbtn', function(){

        $('#editmodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {

          return $(this).text();
        }).get();

        $('#edId').val(data[0]);
        $('#edEmail').val(data[1]);
        $('#edUsername').val(data[2]);
        $('#edPassword').val(data[3]);
        $('#edRole').val(data[4]);
        $('#edRegion').val(data[5]);
        $('#edRegioninfo').val(data[6]);
        $('#edStatus').val(data[7]);



$(document).ready(function() {

  $('#edRegion').change(function() {
    if ($(this).val() == 'rpmo') {
      $('#edRegioninfo').prop("readOnly", false);
      $('#edRegioninfo').val("", false);
    } else {
      $('#edRegioninfo').prop("readOnly", true);
          $('#edRegioninfo').val("", false);
    }
  });

});

});
    	});





$('.svs').click(function(){

  $('#adEmail').val("");
   $('#adUsername').val("");
     $('#adPassword').val("");
   $('#adCpassword').val("");
     $('#adRole').val("");
   $('#adRegion').val("");
     $('#adRegioninfo').val("");
   $('#adStatus').val("");

});








	</script>
<!-- 	<script >
		
  $(function () {
        $("#region").change(function () {
            if ($(this).val() == 'npmo') {
                $("#regioninfo").removeAttr("disabled");
                $("#regioninfo").focus();
            } else {
                $("#regioninfo").attr("disabled", "disabled");
            }
        });
    });




	</script> -->

<!-- 
<input type="checkbox" id="id_of_your_checkbox" />
<input type="button" id="id_of_your_button" value="OK" />

    $('#id_of_your_checkbox').click(function() {
        if ($(this).is(':checked')) {
            $('#id_of_your_button').attr('disabled', 'disabled');
        } else {
            $('#id_of_your_button').removeAttr('disabled');
        }
    });
 -->


	 

<!-- Data table JavaScript -->
	<script src="../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="../vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="../vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js"></script>
	<script src="../vendors/bower_components/jszip/dist/jszip.min.js"></script>
	<script src="../vendors/bower_components/pdfmake/build/pdfmake.min.js"></script>
	<script src="../vendors/bower_components/pdfmake/build/vfs_fonts.js"></script>
	<script src="../vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
	<script src="../vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
	<script src="dist/js/export-table-data.js"></script>


</body>

</html>