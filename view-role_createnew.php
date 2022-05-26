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
				
			 	<form method="POST" name="sample" id="addForm">
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
													<input type="text" class="form-control" id="m_info" placeholder="Description" name="m_info" onInput="checkRole()" required>
													<br>
                          <span id="check-role"></span>
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
																<select class="form-control selectbox" name="m_module" id="mySelect" onInput="checkRole()" required>
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
							 							
														  <select class="form-control" name="m_ctrl" id="myCtrl">
														  	 <option></option>
															  <option>View</option>
															  <option>View/Add</option>
															  <option>View/Add/Edit</option>
															  <option>Full Control</option>
														  </select>
														</div>

														<br>
                          <span id="check-item"></span>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
													<!-- 	<button type="submit" class="btn btn-primary" data-dismiss="modal">Add</button> -->
													<input type="submit" name="add" value="Add" id="btnadd" class="btn btn-primary" data-dismiss="modal" onclick="addModule();" disabled="true">
										<!-- 			<input type="submit" name="add" value="Add" id="btnadd" class="btn btn-primary" data-dismiss="modal" > -->
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
										<button formaction="controller/save_module.php" class="btn btn-success btn-outline btn-icon right-icon" name="save_module" id="save_module" ><span>Save</span> <i class="ti ti-save"></i> </button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Bordered Table 3-->
				</div>
			 </form>		

		
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
		
   function addModule(){

            var m_module = document.sample.m_module.value;
            var m_ctrl = document.sample.m_ctrl.value;

            var tr = document.createElement('tr');
        
            var td1 = tr.appendChild(document.createElement('td'));
            var td2 = tr.appendChild(document.createElement('td'));
            var td3 = tr.appendChild(document.createElement('td'));



            td1.innerHTML = '<input type="hidden" id="m_moduledd" name="m_module[]" class="selectbox" required value="'+m_module+'">'+m_module;
            td2.innerHTML = '<input type="hidden" name="m_ctrl[]" value="'+m_ctrl+'">'+m_ctrl;
            td3.innerHTML = '<input type="button" name="del" onclick="delModule(this);" class="btn btn-danger" id="delrole" value="Remove">'

            document.getElementById("tbls").appendChild(tr);
            
        }

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






function reset() {
  $('#mySelect').val("");//$('#jenis').prop('selectedIndex', 0); if you want to choose first <option>
   $('#myCtrl').val("");
    $('#btnadd').prop('disabled',true);

}


function checkRole() {
    
    jQuery.ajax({
    url: "controller/process-check_availability.php",
    data:'m_info='+$("#m_info").val(),
    type: "POST",
    success:function(data){
        $("#check-role").html(data);
    },
    error:function (){}
    });
}


function checkModuleData() {
    
    jQuery.ajax({
    url: "controller/process-check_availability.php",
    data:'mySelect='+$("#mySelect").val(),
    type: "POST",
    success:function(data){
        $("#check-item").html(data);
    },
    error:function (){}
    });
}


	</script>

	 <script>


	 	$(document).ready(function(){

    $("#btnadd").click(function(){ 
                 /* your code for adding the row*/
                 buttonEnabler(); 
                 });


 


    function buttonEnabler(){
    var rowCount = $('#tbls tbody tr').length;
    if(rowCount < 1){
               $('#save_module').prop('disabled', false);

        } else {
        	
               $('#save_module').prop('disabled', true);
               }
    }



    });

setInterval(CheckTables, 100);

function CheckTables() {
    $("table").each(function (index) {
        $(this).find('tbody:not(:empty)').parent().show();
        $(this).find('tbody:empty').parent().hide();
    });

    if (($("tbody").is(":empty")))
        $("#save_module").prop('disabled', true);
      /*   $('#upload-table').attr('disabled', false); */
        

    // Ignores whitespace
    if (($.trim($("tbody").html()) == ""))
        $("#save_module").prop('disabled', true);  
      /*   $('#upload-table').attr('disabled', false); */
    
}


</script>



	
</body>

</html>