<?php include('config/database.php');?> 
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
					 <h5 class="txt-dark">Create New Role</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					 <ol class="breadcrumb">
						<li><a href="index.php">Dashboard</a></li>
						<li><a href="view-roles.php"><span>Role</span></a></li>
						<li class="active"><span>Create New Role</span></li>
					 </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
<!-- <form id="moduleform" role="form" method="post" name="sample" action="controller/process-module.php?action=add"> -->
<!-- 	<form method="POST" name="sample" action="controller/save_module.php"> -->
			 	<form method="POST" name="sample" id="form">
				<div class="row">
					
					<!-- Bordered Table 1-->
					<div class="col-sm-12">
						<div class="panel panel-default card-view">

							<div class="panel-wrapper collapse in">
								<div class="panel-body">
					<!-- Row -->
					<div class="row">
						<div class="col-sm-6">
								<div class="panel-wrapper collapse in">
									<div class="panel-body">

												<div class="form-group">
													<label class="control-label mb-10 col-sm-2">Description:<code>*</code></label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="m_info" placeholder="Description" name="m_info" required>
												</div>
												</div>

									</div>
								</div>
						</div>
					</div>	
					<!-- /Row -->
									
								</div>
							</div>
						</div>
					</div>
					<!-- /Bordered Table 1-->

					<!-- Bordered Table 2 -->
					<div class="col-sm-12" id="modtable"> 
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Modules:<code>*</code></h6>
								</div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<!-- Add Module modal content -->
										<div id="addmodulemodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog" style="margin-top: 200px;">
													
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
														<h5 class="modal-title" id="myModalLabel">Add Module</h5>
													</div>
											
													<div class="modal-body">

														<div class="form-group">
															<label for="email" class="control-label mb-10">Module:<code>*</code></label>
																<select class="form-control selectbox" name="m_module" id="mySelect" required>
																<?php 
																include('config/config.php');

																$query="select * from modules";
																$result=mysqli_query($conn,$query);
																while($row=mysqli_fetch_array($result)){

																?>


															<option value="<?php echo $row['m_desc'];?>"><?php echo $row['m_desc'] ;?> </option>




														<?php } ?>
														  </select>

														</div>
														<div class="form-group" >
															<label class="control-label mb-10">Control:</label>
														
														  <select class="form-control" name="m_ctrl" id="myCtrl" required>
														  	 <option></option>
															  <option>View</option>
															  <option>View/Add</option>
															  <option>View/Add/Edit</option>
															  <option>Full Control</option>
														  </select>
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
													<!-- 	<button type="submit" class="btn btn-primary" data-dismiss="modal">Add</button> -->
												<!-- 	<input type="submit" name="add" value="Add" id="btnadd" class="btn btn-primary" data-dismiss="modal" onclick="addModule();"> -->
													<input type="submit" name="add" value="Add" id="btnadd" class="btn btn-primary" data-dismiss="modal" >
													</div>
													
												</div>
								
												<!-- /.modal-content -->
											</div>
											<!-- /.modal-dialog -->
										</div>
										<!-- /.Add Module modal -->
									<div class="table-wrap mt-40">
										<div class="table-responsive">
										 <table class="table table-hover table-bordered mb-0" border="1" id="tbl">
											<thead>
											 	<th>DESCRIPTION</th>
												<th>CONTROL</th>
												<th>ACTION</th>
											 
											</thead>
											<tbody id="tbls" class="selectbox">

								
											</tbody>

										 </table>
										</div>
									</div>
									<br>

						<!-- 			<input type="text" class="selectbox"> -->


										<div class="form-group">
											<a href="#" class="btn btn-primary btn-outline btn-icon right-icon addmodulemdl" onclick="reset()" ><span>Add Module</span> <i class="fa fa-plus-circle"></i> </a>

									  </div>


								</div>
							</div>
						</div>
					</div>
					<!-- /Bordered Table 2-->

					<!-- Bordered Table 3-->
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
										<div class="form-group">
											<a href="view-roles.php" class="btn btn-danger btn-outline mr-10"><span>Cancel</span> </a>
										<button formaction="controller/save_module.php" class="btn btn-success btn-outline btn-icon right-icon" name="save_module" ><span>Save</span> <i class="ti ti-save"></i> </button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Bordered Table 3-->
				</div>
			 </form>		

						<select id="jenis" name="jenis" class="select2">
							
    <option value="SURAT">SURAT</option>
    <option value="UNDANGAN">UNDANGAN</option>
    <option value="NOTA DINAS">NOTA DINAS</option>
</select>
<!-- <button id="reset" onclick="reset()">reset</button> -->

<input type="button" name="reset" id="reset" onclick="reset()" value="reset">

<br>	
			</div>
			
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

  	$(document).on('click', '.addmodulemdl', function(){
    $('#addmodulemodal').modal('show');
    

 });
});



	</script>


	<script type="text/javascript">
		


		function delModule(Stud){
			var s = Stud.parentNode.parentNode;
			s.parentNode.removeChild(s);




		}




$(document).on('click', '.selectbox', function () {		 
  var selected = new Array();
  $('.selectbox').each(function (index) {       
     selected.push($(this).val());
	});
 	$("option").show();
	for (var i = 0; i < selected.length; i++) {
    if(selected[i] != "0") {
		   $("select option[value='" + selected[i] + "']").hide();      
    }
	}
});





// var $selects = $(".selectbox");
// var $opts = $selects.first().children().clone();


// $selects.change(function () {
//     var selectedIndex = $(this).index();
//     var myVal = $(this).val();
//     if (myVal !='0') {
//          $selects.not(this).children('[value="'+myVal+'"]').remove();
//     }else{
//         var replaceVal=$(this).data('currVal');
//         $selects.not(this).append( $opts.filter( '[value="'+replaceVal+'"]').clone())
//     }
//     $(this).data('currVal', myVal);

// });


// $('#btnadd').click(function(){
//     $('select').val('');
// });
// $('#btnadd').click(function(){
//     $('select').val($('select').children().eq(0).val());
// });

// let btnClear = document.querySelector('input');
// let inputs = document.querySelector('input');

// btnClear.addEventlisterner('click', () = >{

// 	inputs.forEach(input => input.value = '');


// });
	

function reset() {
  $('#mySelect').val("");//$('#jenis').prop('selectedIndex', 0); if you want to choose first <option>
   $('#myCtrl').val("");
}



	</script>

	<script type="text/javascript">
		
		$('#form').submit(function() {
    if ($.trim($("#myCtrl").val()) === "") {
        alert('you did not fill out one of the fields');
        return false;
    }
});
	</script>

	
</body>

</html>