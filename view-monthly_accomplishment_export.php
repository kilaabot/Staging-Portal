<?php
include('controller/process-monthly_daterange_excel.php');
include('config/connection.php');
?>
<!DOCTYPE html>
<html>
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
   <link href="../vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
    
    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">

<!-- jQuery -->
  <title>phpzag.com: Demo Export Data to CSV with Date Filter using PHP</title> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<!--   <script src="js/datepicker.js"></script> -->


<style>
.input-daterange input {
  text-align: left;
}
</style>

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

                           <form method="POST">

                              <div class="input-daterange">
                                 <div class="col-md-2">
                                From<input type="text" name="fromDate" class="form-control" value="<?php echo date("Y-m-d"); ?>" readonly />
                                <?php echo $startDateMessage; ?>
                                 </div>
                                 <div class="col-md-2">
                                To<input type="text" name="toDate" class="form-control" value="<?php echo date("Y-m-d"); ?>" readonly />
                                <?php echo $endDate; ?>
                                 </div>
                                </div>
                                <div class="col-md-2"><div>&nbsp;</div>
                                 <input type="submit" name="filter" value="filter" class="btn btn-warning" />
                                </div>
                                <div class="col-md-2 pull-right" ><div>&nbsp;</div>
                                 <input type="submit" name="exportcsv" value="Export to CSV" class="btn btn-success" />
                                </div>
                                   <div class="col-md-2 pull-right"><div>&nbsp;</div>
                                 <input type="submit" name="exportpdf" value="Export to PDF" class="btn btn-danger" />
                                </div>

                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
<!-- 
                              <hr class="light-grey-hr"/>
 -->
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
          <!-- /Row -->




        </div>  
</div>
<!-- 
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script> -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <!-- jQuery -->
<!--     <script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>
     -->
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
  
  $(document).ready(function(){
 $('.input-daterange').datepicker({
  todayBtn:'linked',
  format: "yyyy-mm-dd",
  autoclose: true
 });
});

</script>

</body>
</html>

