<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: view-login.php");
}


include('controller/process-calendar_dashboard.php')
?>


                               
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Portal</title>
    <meta name="description" content="Grandin is a Dashboard & Admin Site Responsive Template by hencework." />
    <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Grandin Admin, Grandinadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="hencework"/>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
    <!-- Data table CSS -->
    <link href="../vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    
    <!-- Toast CSS -->
    <link href="../vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
    
    <!-- Calendar CSS -->
    <link href="../vendors/bower_components/fullcalendar/dist/fullcalendar.css" rel="stylesheet" type="text/css"/>



        <!-- FullCalendar -->
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>



        <!-- select2 CSS -->
        <link href="../vendors/bower_components/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css"/>
        
        <!-- switchery CSS -->
        <link href="../vendors/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" type="text/css"/>
        
        <!-- bootstrap-select CSS -->
        <link href="../vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
        
        <!-- bootstrap-tagsinput CSS -->
        <link href="../vendors/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
        
        <!-- multi-select CSS -->
        <link href="../vendors/bower_components/multiselect/css/multi-select.css" rel="stylesheet" type="text/css"/>
        

   

        <!-- Custom JS -->
      <script src="dist/js/fullcalendar/dashboard-script.js"></script> 

          <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
   
        
</head>

<body>
    
            
        <?php include('includes/view-menu.php');?>  
        
        

        <!-- Main Content -->
        <div class="page-wrapper">
            <div class="container-fluid pt-25">
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-default card-view pa-0 bg-gradient">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body pa-0">
                                    <div class="sm-data-box">
                                        <div class="container-fluid">
                                            <div class="row">

                                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">

                                                               <?php

                                                        include('config/config.php');

                                                $query = "SELECT id FROM users ORDER BY id";
                                                $query_run = mysqli_query($conn, $query);

                                                $row = mysqli_num_rows($query_run);

                                                echo '<span class="txt-light block counter"><span class="counter-anim">'.$row.'</span></span>
                                                
                                                    <span class="weight-500 uppercase-font block font-13 txt-light">Users</span>'


                                                
                                                ?>


                                                

                                                </div>
                                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                    <i class="icon-people  data-right-rep-icon txt-light"></i>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-default card-view pa-0 bg-gradient1">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body pa-0">
                                    <div class="sm-data-box">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">

                                                <?php

                                                        include('config/config.php');

                                                $query = "SELECT id FROM monthly ORDER BY id";
                                                $query_run = mysqli_query($conn, $query);

                                                $row = mysqli_num_rows($query_run);
                                                


                                                echo  '<span class="txt-light block counter"><span class="counter-anim">'.$row.'</span></span>

                                                        <span class="weight-500 uppercase-font block txt-light">Data</span>'
                                                
                                                ?>
                                                
                                                </div>
                                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                    <i class="icon-envelope-letter data-right-rep-icon txt-light"></i>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-default card-view pa-0 bg-gradient2">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body pa-0">
                                    <div class="sm-data-box">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-xs-6 text-center pl-0 pr-0 txt-light data-wrap-left">


                                                <?php

                                                        include('config/config.php');

                                                $query = "SELECT id FROM documents ORDER BY id";
                                                $query_run = mysqli_query($conn, $query);

                                                $row = mysqli_num_rows($query_run);
                                                


                                                echo  ' <span class="block counter"><span class="counter-anim">'.$row.'</span></span>
                                                        <span class="weight-500 uppercase-font block">Documents</span>'
                                                
                                                ?>
                                                   
                                                </div>
                                                <div class="col-xs-6 text-center  pl-0 pr-0 txt-light data-wrap-right">
                                                    <i class=" icon-book-open data-right-rep-icon"></i>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-default card-view pa-0 bg-gradient3">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body pa-0">
                                    <div class="sm-data-box">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                                    <span class="txt-light block counter"><span class="counter-anim">0.0</span>%</span>
                                                    <span class="weight-500 uppercase-font block txt-light">Not Available</span>
                                                </div>
                                                <div class="col-xs-6 text-center  pl-0 pr-0 pt-25  data-wrap-right">
                                                    <div id="sparkline_4" class="sp-small-chart" ></div>
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
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default card-view">
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">Schedule Events</h6>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="pull-left inline-block full-screen mr-15">
                                        <i class="zmdi zmdi-fullscreen"></i>
                                    </a>
                                </div>
                            </div>
                          
                               <div class="panel-body">
                                   <div class="calendar-wrap mt-40">
                                          <div id="calendar"></div>
                                        </div>
                                </div>

                                  <!-- View Event Modal -->

                        <div id="calendarModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" style="margin-top: 200px;">
                        <div class="modal-content">
                         
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h6 class="txt-dark capitalize-font"><i class="ti ti-info-alt mr-10"></i>Event's Info</h6>
                                    <span id="message"></span>
                                </div>
                                    <form action="" method="POST" id="sample_form">
                                <div id="modalBody" class="modal-body">

                                       <div class="row">
                                            <div class="col-sm-12 col-xs-12">
                                                <div class="form-wrap">
                                                    <div class="form-horizontal">

                                                        <div class="form-group">
                                                            <label for="title" class="col-sm-3 control-label">Title</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control modal-title " id="title" name="title" readonly/>
                                                                    <div class="input-group-addon"><i class=" ti-light-bulb"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="description" class="col-sm-3 control-label">Description</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                            
                                                                 <textarea type="text" class="form-control " id="description" rows="4" name="description" readonly></textarea>
                                                                    <div class="input-group-addon"><i class="fa fa-wpforms"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="form-group">
                                                            <label for="createdby" class="col-sm-3 control-label">Created By</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control " id="createdby" name="createdby" readonly />
                                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mlink" class="col-sm-3 control-label">Meeting Link</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <input type="url" class="form-control " id="mlink" name="mlink" readonly/>
                                                                    <div class="input-group-addon"><i class="fa fa-external-link"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
<!--                                                         <div class="form-group" >

                                                            <input type="text" class="form-control " id="startTime" name="startTime"  readonly>
                                                            <input type="text" class="form-control " id="endTime" name="endTime"  readonly>
                                                           
                                                        </div> -->

                                                        <div class="form-group">
                                                            <label for="startTime" class="col-sm-3 control-label">Region</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group" >
                                                                     <select class="select2 select2-multiple" multiple="multiple" data-placeholder="Choose" >


                                                               
                                                            </select>
                                                                    <div class="input-group-addon"><i class="fa fa-external-link"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>  
  

                                                        <div class="form-group">
                                                            <label for="startTime" class="col-sm-3 control-label">Start Date</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control " id="startTime" name="startTime"  readonly>
                                                                    <div class="input-group-addon"><i class="fa fa-external-link"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="endTime" class="col-sm-3 control-label">End Date</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                   <input type="text" class="form-control " id="endTime" name="endTime"  readonly>
                                                                    <div class="input-group-addon"><i class="fa fa-external-link"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                 </div>
                                            </div>
                                        </div>
                                            <input type="hidden" class="form-control" id="eventID" name="eventID">

                                        </div>
                                        </form>
                                        </div>
                                        </div>
                                        <!--Modal-->
                                        <!-- End View Event Modal -->
                    </div>

                           
                        </div>
                    </div>
                
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="panel panel-default card-view">
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">Yellow Card Issued</h6>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body row pa-0">
                                    <div class="table-wrap">
                                        <div class="table-responsive">
                                            <table class="table display product-overview border-none" id="employee_table">
                                                <thead>
                                                    <tr>
                                                        <th>Employee ID</th>
                                                        <th>Name</th>
                                                        <th>Reason</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>#85457896</td>
                                                        <td>Anthony Davie</td>
                                                        <td>Cinnabar</td>
                                                        <td>Oct 25</td>
                                                        <td>
                                                            <span class="label label-success ">done</span>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="pr-10" data-toggle="tooltip" title="completed" ><i class="zmdi zmdi-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#85457895</td>
                                                        <td>David Perry</td>
                                                        <td>Felix PSD</td>
                                                        <td>Oct 25</td>
                                                        <td>
                                                            <span class="label label-danger">pending</span>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="pr-10" data-toggle="tooltip" title="completed" ><i class="zmdi zmdi-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#85457896</td>
                                                        <td>Anthony Davie</td>
                                                        <td>Cinnabar</td>
                                                        <td>Oct 25</td>
                                                        <td>
                                                            <span class="label label-success ">done</span>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="pr-10" data-toggle="tooltip" title="completed" ><i class="zmdi zmdi-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#85457894</td>
                                                        <td>Davie</td>
                                                        <td>iphone</td>
                                                        <td>Oct 25</td>
                                                        <td>
                                                            <span class="label label-success ">done</span>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="pr-10" data-toggle="tooltip" title="completed" ><i class="zmdi zmdi-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#85457896</td>
                                                        <td>Anthony</td>
                                                        <td>Cinnabar</td>
                                                        <td>Nov 25</td>
                                                        <td>
                                                            <span class="label label-success ">done</span>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="pr-10" data-toggle="tooltip" title="completed" ><i class="zmdi zmdi-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#85457898</td>
                                                        <td>Anthony Davie</td>
                                                        <td>Doodle</td>
                                                        <td>Dec 25</td>
                                                        <td>
                                                            <span class="label label-success ">done</span>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="pr-10" data-toggle="tooltip" title="completed" ><i class="zmdi zmdi-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete"></i></a></td>
                                                    </tr>
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
                
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="panel panel-default card-view">
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">Key Metrics</h6>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div  class="panel-body">
                                    <span class="font-12 head-font txt-dark">Employee Turnover<span class="pull-right">85%</span></span>
                                    <div class="progress mt-10 mb-30">
                                        <div class="progress-bar progress-bar-info" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                                    </div>
                                    <span class="font-12 head-font txt-dark">Speed to Hire (Days)<span class="pull-right">80%</span></span>
                                    <div class="progress mt-10 mb-30">
                                        <div class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 80%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                                    </div>
                                    <span class="font-12 head-font txt-dark">Promotion Rates<span class="pull-right">70%</span></span>
                                    <div class="progress mt-10 mb-30">
                                        <div class="progress-bar progress-bar-danger" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 70%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                                    </div>
                                    <span class="font-12 head-font txt-dark">Success Rate<span class="pull-right">45%</span></span>
                                    <div class="progress mt-10 mb-30">
                                        <div class="progress-bar progress-bar-inverse" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                                    </div>
                                    <span class="font-12 head-font txt-dark">Performance<span class="pull-right">80%</span></span>
                                    <div class="progress mt-10 mb-30">
                                        <div class="progress-bar progress-bar-success" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%" role="progressbar"> <span class="sr-only">80% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="panel panel-default card-view panel-refresh">
                            <div class="refresh-container">
                                <div class="la-anim-1"></div>
                            </div>
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">Employee Churn </h6>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="pull-left inline-block refresh">
                                        <i class="zmdi zmdi-replay"></i>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <div id="e_chart_2" class="" style="height:330px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                                                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="panel panel-default card-view panel-refresh">
                            <div class="refresh-container">
                                <div class="la-anim-1"></div>
                            </div>
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">Total Employees</h6>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="pull-left inline-block refresh mr-15">
                                        <i class="zmdi zmdi-replay"></i>
                                    </a>
                                    <div class="pull-left inline-block dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
                                        <ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
                                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Edit</a></li>
                                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Delete</a></li>
                                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>New</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <div id="e_chart_1" class="" style="height:242px;"></div>
                                    <div class="label-chatrs mt-15">
                                        <div class="mb-5">
                                            <span class="clabels inline-block bg-blue mr-5"></span>
                                            <span class="clabels-text font-12 inline-block txt-dark capitalize-font">Actions pending</span>
                                        </div>
                                        <div class="mb-5">
                                            <span class="clabels inline-block bg-pink mr-5"></span>
                                            <span class="clabels-text font-12 inline-block txt-dark capitalize-font">decision pending</span>
                                        </div>
                                        <div class="">
                                            <span class="clabels inline-block bg-light-blue mr-5"></span>
                                            <span class="clabels-text font-12 inline-block txt-dark capitalize-font">chage request pending</span>
                                        </div>                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="panel panel-default card-view panel-refresh">
                            <div class="refresh-container">
                                <div class="la-anim-1"></div>
                            </div>
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">Open Positions</h6>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="pull-left inline-block refresh">
                                        <i class="zmdi zmdi-replay"></i>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <div id="e_chart_4" class="" style="height:330px;"></div>   
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
    
    <!-- jQuery -->
    <script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <!-- Data table JavaScript -->
    <script src="../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    
    <!-- Slimscroll JavaScript -->
    <script src="dist/js/jquery.slimscroll.js"></script>
    
    <!-- simpleWeather JavaScript -->
    <script src="../vendors/bower_components/moment/min/moment.min.js"></script>
    <script src="../vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
    <script src="dist/js/simpleweather-data.js"></script>
    
    <!-- Progressbar Animation JavaScript -->
    <script src="../vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="../vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script>
    
    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>
    
    <!-- Sparkline JavaScript -->
    <script src="../vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
    
    <!-- Owl JavaScript -->
    <script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
    
    <!-- Toast JavaScript -->
    <script src="../vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
    
    <!-- EChartJS JavaScript -->
    <script src="../vendors/bower_components/echarts/dist/echarts-en.min.js"></script>
    <script src="../vendors/echarts-liquidfill.min.js"></script>
    
    <!-- Switchery JavaScript -->
    <script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>
    
    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>
    <script src="dist/js/dashboard-data.js"></script>

    <!-- Calender JavaScripts -->
    <script src="../vendors/bower_components/moment/min/moment.min.js"></script>
    <script src="../vendors/jquery-ui.min.js"></script>
    <script src="../vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>


        <!-- Select2 JavaScript -->
        <script src="../vendors/bower_components/select2/dist/js/select2.full.min.js"></script>
        
        <!-- Bootstrap Select JavaScript -->
        <script src="../vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        
        <!-- Bootstrap Tagsinput JavaScript -->
        <script src="../vendors/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
        
        <!-- Bootstrap Touchspin JavaScript -->
        <script src="../vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
        
        <!-- Multiselect JavaScript -->
        <script src="../vendors/bower_components/multiselect/js/jquery.multi-select.js"></script>
         
        <!-- Bootstrap Switch JavaScript -->
        <script src="../vendors/bower_components/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
        
        <!-- Form Advance Init JavaScript -->
        <script src="dist/js/form-advance-data.js"></script>

</body>

</html>
