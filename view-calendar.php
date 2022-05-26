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

 
                              <!--  -->                      


        
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
        

        

                              <!--  -->


        <!-- Custom CSS --> 
        <link href="dist/css/style.css" rel="stylesheet" type="text/css">

        <!-- Custom JS --> 
        <script type="text/javascript" src="dist/js/fullcalendar/calendar.js"></script>


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

                                            <button type="button" class="btn btn-warning mr-10 crtevent" onClick="clearform();">Create</button>
                                    <input id="createdby" name="createdby" type="text" value="<?php echo $_SESSION['username']; ?>" hidden/> 
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
                                                    <form id="myForm" action="">  
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h5 class="modal-title" id="myModalLabel">Scheduling Form</h5>

                                                        <span id="message"></span>

                                                    </div>
                                                      
                                                           <div class="modal-body">
                                                                                              
                                                            <div class="form-group">
                                                                  <input type="hidden" name="id" id="id">
                                                                 <input id="createdby" name="createdby" type="text" value="<?php echo $_SESSION['username']; ?>" hidden/>
                                                            </div>

                                                            <div class="form-group">
                                                            <label for="title" class="control-label mb-10">Event Title: </label>
                                                            <input type="title" class="form-control " id="title" name="title" required />
                                                            <div class="help-block with-errors"></div>
                                                            </div>

                                                            <div class="form-group">
                                                            <label for="description" class="control-label mb-10">Description: </label>
                                                            <textarea type="text" class="form-control " id="description" rows="4" name="description" required></textarea> 
                                                            <div class="help-block with-errors"></div>
                                                            </div>


                                                            <div class="form-group">
                                                            <label class="control-label mb-10">Select Region</label>
                                                            <select class="select2 select2-multiple" multiple="multiple" data-placeholder="Choose">

                                                                 <?php 
                                                                include('config/config.php');

                                                                $query="SELECT DISTINCT region FROM users";
                                                                $result=mysqli_query($conn,$query);
                                                                while($row=mysqli_fetch_array($result)){

                                                                ?>

                                                              <!--   <optgroup label="Please Select Participants"> -->
                                                                    <option value="<?php echo $row['region'];?>"><?php echo $row['region'];?></option>
                                                            <?php } ?>
                                                      <!--           </optgroup> -->
                                                               
                                                            </select>


                                                            </div>

                                                            <div class="form-group">
                                                            <label for="description" class="control-label mb-10">Meeting Link: </label>
                                                            <input type="url" class="form-control " id="mlink" name="mlink" required />
                                                            <div class="help-block with-errors"></div>
                                                            </div>

                                                            <div class="form-group">
                                                            <label for="startTime" class="control-label mb-10">Event Start: </label>
                                                            <input type="datetime-local" class="form-control " id="startTime"  name="startTime" readonly />
                                                            <div class="help-block with-errors"></div>
                                                            </div>

                                                            <div class="form-group">
                                                            <label for="endTime" class="control-label mb-10">Event End: </label>
                                                            <input type="datetime-local" class="form-control " id="endTime" name="endTime" readonly />
                                                            <div class="help-block with-errors"></div>
                                                            </div>

                                                            </div>

                                                            <div class="modal-footer"  >
                                                                <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                                                <button type="submit" class="btn btn-primary" id="submitButton">Save</button>
                                                            </div>
                                                </div>


                                        </form>

                                        </div>
                                 <!-- /.modal-content -->
                                </div>
                            <!-- /.modal -->
 
                              <!-- End Add Event Modal -->

 


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
                                                                    <input type="text" class="form-control modal-title " id="title" name="title" />
                                                                    <div class="input-group-addon"><i class=" ti-light-bulb"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="description" class="col-sm-3 control-label">Description</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                            
                                                                 <textarea type="text" class="form-control " id="description" rows="4" name="description" ></textarea>
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
                                                                    <input type="url" class="form-control " id="mlink" name="mlink" />
                                                                    <div class="input-group-addon"><i class="fa fa-external-link"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" hidden>

                                                            <input type="text" class="form-control " id="startTime" name="startTime"  readonly>
                                                            <input type="text" class="form-control " id="endTime" name="endTime"  readonly>
                                                           
                                                        </div>


                                                      
                                                    </div>
                                                 </div>
                                            </div>
                                        </div>
                    

      <input type="hidden" class="form-control" id="eventID" name="eventID">

        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
            <button type="submit" class="btn btn-danger" id="deleteButton">Delete</button>
            <button type="submit" class="btn btn-success" id="updateevent"  name="updateevent">Save Changes</button>
        </div>


    </div>
</form>
</div>
</div>
<!--Modal-->


 <!-- End View Event Modal -->


                            </div>
                                       
                        <!-- /Row -->
                </div>
                
                <!-- Footer -->
                <?php include('includes/view-footer.php') ?> 
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


             function clearform()
{
    document.getElementById("mlink").value=""; //don't forget to set the textbox id
    document.getElementById("description").value="";
    document.getElementById("title").value="";
    document.getElementById("startTime").value="";
    document.getElementById("endTime").value="";
}


   
  </script>


  
        <!-- jQuery -->
        <script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>
        
        <!-- Bootstrap Core JavaScript -->
        <script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <!-- Calender JavaScripts -->
        <script src="../vendors/jquery-ui.min.js"></script>
        <script src="../vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>

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



        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-21769945-4', 'auto');  
  ga('send', 'pageview');

</script>



 </body>

</html>