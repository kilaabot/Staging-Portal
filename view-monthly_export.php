<?php

include('config/connection.php'); 

?>

<?php  
 $connect = mysqli_connect("localhost", "root", "", "admin_lte");  
 $query = "SELECT * FROM monthly ORDER BY id desc";  
 $result = mysqli_query($connect, $query);  
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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
 <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />   -->
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  

  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  

  	<!-- Jasny-bootstrap CSS -->
	<link href="../vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>

		<link rel="stylesheet" type="text/css" href="dist/css/jquery-ui.css"/>

</head>

<body>

  <?php include('includes/view-menu.php')?>
		
		<!-- Main Content -->
		<div class="page-wrapper">
			<div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">Data table</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#"><span>table</span></a></li>
						<li class="active"><span>data-table</span></li>
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
									<h6 class="panel-title txt-dark">Export Table</h6>
								</div>
									<div class="clearfix"></div> 
										<br>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
												<!-- <div class="clearfix"></div> -->
											<form class="form-inline" method="POST" action="controller/export-monthlytableexcel_range.php">
											   <div class="form-group mr-15">
													<label class="control-label mr-10" for="from_date">From</label>
													<input type="text" class="form-control" name="from_date" id="from_date" placeholder="Start" required />
												
												</div>
												<div class="form-group mr-15 ">
													<label class="control-label mr-10" for="to_date">To</label>
													<input type="text" class="form-control" name="to_date" id="to_date" placeholder="End" required/>
												
												</div>

												<a type="button" name="filter" id="filter" class="btn btn-primary btn-anim btn-fltr"><i class="fa fa-search"></i><span class="btn-text">Filter</span></a>

												<button class="btn btn-success btn-lable-wrap left-label btn-excl" name="exportexcl" id="exportexcl"> <span class="btn-label"><i class="fa fa-file-excel-o"></i> </span><span class="btn-text">Export To Excel</span></button>

												<a type="button" name="exportpdf" id="exportpdf" class="btn btn-danger btn-lable-wrap left-label btn-pdf" href="export-pdf_monthly.php" target="_blank"><span class="btn-label"><i class="fa fa-file-pdf-o"></i> </span><span class="btn-text">Export To PDF</span></a>

											</form>
										</div>
									</div>
								</div>
							</div> 

							<hr class="light-grey-hr"/>

							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive" id="monthly_table_export">
											<table id="monthly_table" class="table table-striped table-bordered mb-0" >
												<thead>
													<?php include('models/monthly-table.php')  ?>
											    </thead>
											    <tbody>
											    	<?php include('models/monthly-table_body.php')  ?>
												</tbody>
											</table>
										</div>
									</div>	
								</div>	
							</div>	
						</div>	
					</div>
				</div>

				
					


			</div>
			
			<!-- Footer -->
			<?php include('includes/view-footer.php');?>  
			<!-- /Footer -->
			
		</div>
		<!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->
	
  <!-- jQuery -->
<!--   <script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script> -->

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

	<!-- Moment JavaScript -->
	<script type="text/javascript" src="../vendors/bower_components/moment/min/moment-with-locales.min.js"></script>
	
	<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>





	

		  <!-- Script -->
        <script type='text/javascript' >
        $(document).ready(function(){
            // From datepicker
            $("#from_date").datepicker({ 
                dateFormat: 'yy-mm-dd',changeYear: true,
                onSelect: function (selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() + 1);
                    $("#to_date").datepicker("option", "minDate", dt);
                }
            });

            // To datepicker
            $("#to_date").datepicker({
                dateFormat: 'yy-mm-dd',changeYear: true,
                onSelect: function (selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() - 1);
                    $("#from_date").datepicker("option", "maxDate", dt);
                }
            });





        });
        </script>

	
	
</body>

</html>

<script>  
      $(document).ready(function(){  
           $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
           });  
           $(function(){  
                $("#from_date").datepicker();  
                $("#to_date").datepicker();  
           });  
           $('#filter').click(function(){  
                var from_date = $('#from_date').val();  
                var to_date = $('#to_date').val();  
                if(from_date != '' && to_date != '')  
                {  
                     $.ajax({  
                          url:"controller/export-monthlytableexcel_range.php",  
                          method:"POST",  
                          data:{from_date:from_date, to_date:to_date},  
                          success:function(data)  
                          {  
                               $('#monthly_table_export').html(data);  
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });  
      });  


 </script>

 <script>
      

        $(document).ready(function() {
     $('#monthly_table').DataTable( {
          dom: 'Bfrtip',
          buttons: [],
          bFilter: false,
          bInfo: true ,
          bPaginate: false

     } );
} );

 </script>



