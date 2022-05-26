<?php include('controller/process-calendar.php') ?>

<!DOCTYPE html>
<html>
 <head>
        <meta charset="UTF-8" />
        <title>Grandin I Fast build Admin dashboard for any platform</title>
        <meta name="description" content="Grandin is a Dashboard & Admin Site Responsive Template by hencework." />
        <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Grandin Admin, Grandinadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
        <meta name="author" content="hencework"/>
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <!-- Calendar CSS -->
        <link href="../vendors/bower_components/fullcalendar/dist/fullcalendar.css" rel="stylesheet" type="text/css"/>

        <!-- FullCalendar -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

        <!-- Custom CSS -->
        <link href="dist/css/style.css" rel="stylesheet" type="text/css">

        <!-- Custom JS -->
        <script type="text/javascript" src="js/script.js"></script>

                <!-- Bootstrap Datetimepicker CSS -->
        <link href="../vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
        
        <!-- Bootstrap Daterangepicker CSS -->
        <link href="../vendors/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css"/>

 </head>
 <body>

    <?php include('includes/view-menu.php') ?> 
            <!-- Main Content -->
            <div class="page-wrapper">
                <div class="container-fluid">
                    
                    <!-- Title -->
                    <div class="row heading-bg">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                          <h5 class="txt-dark">calendar</h5>
                        </div>
                        <!-- Breadcrumb -->
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                          <ol class="breadcrumb">
                            <li><a href="index.html">Dashboard</a></li>
                            <li><a href="#"><span>apps</span></a></li>
                            <li class="active"><span>calendar</span></li>
                          </ol>
                        </div>
                        <!-- /Breadcrumb -->
                    </div>
                    <!-- /Title -->
                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default card-view">
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <div class="add-event-wrap">

                                            <button type="button" class="btn btn-warning mr-10 crtevent">Create</button>
                                
                                        </div>
                                        <div class="calendar-wrap mt-40">
                                          <div id="calendar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div> 

                                
<!-- Add Event Modal -->
                                        <div id="createEventModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                                            <div class="modal-dialog" style="margin-top: 200px;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h5 class="modal-title" id="myModalLabel">Scheduling Form</h5>
                                                    </div>
                                                      

                                                            <div class="modal-body">
                                                                                                
                                                            <div class="form-group">
                                                                  <input type="hidden" name="id" id="id">
                                                                 <input id="createdby" name="createdby" type="text" value="<?php echo $_SESSION['username']; ?>" hidden/>
                                                                <input type="hidden" id="startTime" />
                                                                <input type="hidden" id="startTime1" />
                                                         
                                                            </div>

                                                       <!--      <div class="form-group">
                                                                <input type="date" id="startTime" class="form-control" name="startTime" />
                                                                <input type="time" id="startTime1" class="form-control" name="startTime1" />
                                                            </div>
                                                              <div class="form-group">
                                                                <input type="date" id="endTime" class="form-control" name="endTime" />
                                                                <input type="time" id="endTime1" class="form-control" name="endTime1" />
                                                            </div> -->

                                                            <div class="form-group">
                                                                <input type="text" name="title" class="form-control" id="title" placeholder="Add Tittle" value="">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="mlink" class="form-control" id="mlink" placeholder="Meeting Link" value="">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="description" class="form-control" id="description" placeholder="Description" value="">
                                                            </div>



                                                            <div class="form-group">
                                                                <label class="control-label" for="when">Event Start</label>
                                                                <div class="controls controls-row" id="when" style="margin-top:5px;">
                                                                </div>
                                                            </div>
                                                 <!--            <div class="form-group">
                                                                <label class="control-label" for="when">Event Until</label>
                                                                <input type="datetime-local" class="form-control" id="endTime" name="endTime" value="" />
                                                            </div> -->

                                                            </div>


                                                              <div class="modal-footer">
                                                                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                                                    <button type="submit" class="btn btn-primary" id="submitButton">Save</button>
                                                                </div>
                                                                </div>

                                                  



                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal -->
 

                              <!-- End Add Event Modal -->

                              <!-- Add Event Modal -->
<!--                                         <div id="createEventModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                                            <div class="modal-dialog" style="margin-top: 200px;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h5 class="modal-title" id="myModalLabel">Scheduling Form</h5>
                                                    </div>
                                                      

                                                            <div class="modal-body">
                                                                                                
                                                            <div class="form-group">
                                                                  <input type="hidden" name="id" id="id">
                                                                 <input id="createdby" name="createdby" type="text" value="<?php echo $_SESSION['username']; ?>" hidden/>
                                                                <input type="hidden" id="startTime"/>
                                                                <input type="hidden" id="endTime"/>

                                                            </div>


                                                            <div class="form-group">
                                                                <input type="text" name="title" class="form-control" id="title" placeholder="Add Tittle" value="">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="mlink" class="form-control" id="mlink" placeholder="Meeting Link" value="">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="description" class="form-control" id="description" placeholder="Description" value="">
                                                            </div>



                                                            <div class="form-group">
                                                                <label class="control-label" for="when">Event Start</label>
                                                                <input type="datetime-local" class="form-control" id="startTime" name="startTime" value="" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label" for="when">Event End</label>
                                                                <input type="datetime-local" class="form-control" id="endTime" name="endTime" value="" />
                                                            </div>

                                                            </div>


                                                              <div class="modal-footer">
                                                                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                                                    <button type="submit" class="btn btn-primary" id="submitButton">Save</button>
                                                                </div>
                                                                </div>

                                                  



                                                </div> -->
                                                <!-- /.modal-content -->
                            <!--                 </div> -->
                                            <!-- /.modal -->
 

                              <!-- End Add Event Modal -->

                               <!-- View Event Modal -->

<div id="calendarModal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" style="margin-top: 200px;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                 <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Person's Info</h6>
        </div>



        <div id="modalBody" class="modal-body">

               <div class="row">
                                            <div class="col-sm-12 col-xs-12">
                                                <div class="form-wrap">
                                                    <div class="form-horizontal">
                                                        <div class="form-group">
                                                            <label for="exampleInputuname_4" class="col-sm-3 control-label">Title</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control modal-title" id="modalTitle1" name="modalTitle1" readonly />
                                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="modalDescription" class="col-sm-3 control-label">Description</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control modal-description" id="modalDescription" name="modalDescription" readonly />
                                                                    <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="form-group">
                                                            <label for="modalCreatedby" class="col-sm-3 control-label">Created By</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" id="modalCreatedby" name="modalCreatedby" readonly>
                                                                    <div class="input-group-addon"><i class="icon-globe"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="modalMlink" class="col-sm-3 control-label">Meeting Link</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" id="modalMlink" name="modalMlink" readonly>
                                                                    <div class="input-group-addon"><i class="icon-globe"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="modalStarttime" class="col-sm-3 control-label">Start Date</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <input type="datetime-local" class="form-control" id="modalStarttime" name="modalStarttime" />
                                                                    <div class="input-group-addon"><i class="icon-lock"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group"> 
                                                            <label  for="exampleInputpwd_6" class="col-sm-3 control-label">End Date</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" id="modalEndtime" name="modalEndtime" />
                                                                    <div class="input-group-addon"><i class="icon-lock"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>
                                            </div>
                                        </div>
            



        <input type="hidden" id="eventID"/>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
            <button type="submit" class="btn btn-danger" id="deleteButton">Delete</button>
            <button type="submit" class="btn btn-primary" id="editbutton">Edit</button>
            <button type="submit" class="btn btn-primary" id="updatebutton" style="display:none;">Update</button>
        </div>





     
    </div>
</div>
</div>
<!--Modal-->


 <!-- End View Event Modal -->


                            </div>
                                       
                        <!-- /Row -->
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

  <script>

        $(document).ready(function () {
        $(document).on('click', '.crtevent', function(){
        $('#createEventModal').modal('show');

   });
});

  </script>
  
        <!-- Bootstrap Core JavaScript -->
        <script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <!-- Calender JavaScripts -->
  <!--       <script src="../vendors/bower_components/moment/min/moment.min.js"></script> -->
        <script src="../vendors/jquery-ui.min.js"></script>
     <!--    <script src="../vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script> -->
       <script src="dist/js/fullcalendar-data.js"></script>
        
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
    $(function() {
      $('input[name="daterange"]').daterangepicker({
        opens: 'left'
      }, function(start, end, label) {
      console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
      });
    });
    </script>

        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-21769945-4', 'auto');
  ga('send', 'pageview');

</script>

        <!-- Bootstrap Datetimepicker JavaScript -->
        <script type="text/javascript" src="../vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
        
        <!-- Bootstrap Daterangepicker JavaScript -->
        <script src="../vendors/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>


        <script type="text/javascript">
            
//             $('#calendar').fullCalendar({
//     dayClick: function(date, allDay, jsEvent, view) {
//         if(allDay){
//             alert('That is not a valid time slot!');
//             return;
//         } else {
//             // run your code here if a slot with valid time was selected.
//         }
//     }
// });
        </script>

 </body>

</html>