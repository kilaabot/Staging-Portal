<?php include('config/config.php') ?>


<?php  
error_reporting(1);

require __DIR__ . '/drive/google-drive-api/vendor/autoload.php';




$success_msg="";
$failure_msg="";

 



putenv('GOOGLE_APPLICATION_CREDENTIALS=drive/credentials-folder.json');
$client = new Google_Client();
$client->addScope(Google_Service_Drive::DRIVE);
$client->useApplicationDefaultCredentials();

$driveService = new Google_Service_Drive($client);



if(isset($_POST['create_folder_btn']))
{

// $folderId=$_POST['folder_id'];
$folderId = '1tZps8Is_mbBIBZ3CLefp-rhleU0v7MJm';   
$folder_name=$_POST['folder_name'];
$folder_share_with=explode(",",$_POST['folder_share_with'].",".$_POST['admin']);
$folder_permission=$_POST['folder_permission'];

  //======= creating folder in root folder===================
// $folderId = 'drive folder(Upload-Test) id';  
$fileMetadata = new Google_Service_Drive_DriveFile(array(
    'name' => $folder_name,
    'mimeType' => 'application/vnd.google-apps.folder',
    'parents' => array($folderId) //to create sub dir. under summary folder

  ));

$file = $driveService->files->create($fileMetadata, array(
    'fields' => 'id'));
$success_msg.="<a target='_blank' href='https://drive.google.com/drive/folders/1cabAG9GZG6wbW75BXfEAXr8q3doPaklH/".$file->id."'>View Folder</a><br>";
// ================== ends ================================
// ===========    file sharing  ================================
$fileId = $file->id;
$driveService->getClient()->setUseBatch(true);
try {
    $batch = $driveService->createBatch();



$emailAddress=$folder_share_with;
$type=$folder_permission;


foreach ($emailAddress as $email) {

  $userPermission = new Google_Service_Drive_Permission(array(
        'type' => 'user',
        'role' => $type, 
        'emailAddress' => $email
    ));



    $request = $driveService->permissions->create(
        $fileId, $userPermission, array('fields' => 'id'));
    $batch->add($request, 'user');
      $results = $batch->execute();
}

  

    foreach ($results as $result) {
        if ($result instanceof Google_Service_Exception) {
            // Handle error
            // printf($result);
            $failure_msg.=$result;
        } else {
          $success_msg.="Permission ID: ".$result->id."<br>";
            // printf("Permission ID: %s\n", );
        }
    }
} finally {
    $driveService->getClient()->setUseBatch(false);
}


// ====================== ends ==================================






function listAllFiles($driveService){

  $parameters = array(
    'maxResults' => '100'
    );

    $results = $driveService->files->listFiles($parameters);

    echo '<table>';

    foreach($results->getItems() as $file){

      echo '<tr><td><img src="'. $file->iconLink .'"/> ' . $file->title . '</td></tr>';
    
    }

    echo '</table>';

}



    

}




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

    <!-- Bootstrap Dropify CSS --> 
    <link href="../vendors/bower_components/dropify/dist/css/dropify.min.css" rel="stylesheet" type="text/css"/>


    
    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    

          
      <!-- Sidebar L / R -->

      <?php include('includes/view-menu.php') ?>
          
      <!-- End Sidebar L / R -->
      
      
      <!-- Main Content -->
      <div class="page-wrapper">
        <div class="container-fluid">
          <!-- Title -->
          <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
              <h5 class="txt-dark">file manager</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
              <ol class="breadcrumb">
              <li><a href="index.html">Dashboard</a></li>
              <li><a href="#"><span>apps</span></a></li>
              <li class="active"><span>file manager</span></li>
              </ol>
            </div>
            <!-- /Breadcrumb -->
          </div>
          <!-- /Title -->
          <!-- Row -->
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default card-view pa-0">
                <div class="panel-wrapper collapse in">
                  <div class="panel-body pa-0">
                    <div class="">
                      <div class="col-lg-3 col-md-4 file-directory pa-0">
                        <div class="ibox float-e-margins">
                          <div class="ibox-content">
                            <div class="file-manager">

                              <div class="mt-20 mb-20 ml-15 mr-15"> 
                                <div class="panel-wrapper collapse in">
                                  <form action="drive/process-upload.php" method="post" enctype="multipart/form-data" >
                                <div class="mt-20">
                                  <input type="file" name="file" id="input-file-now" class="dropify" />
                                </div>  
                                <div class="mt-10">
                                  <input type="submit" name="submit" class="btn btn-primary" value="Upload">
                                </div>
                              
                                    </form>
                                      <div class="mt-10">         
                                   <input type="submit" name="create_folder_btn" class="btn btn-success crtfldr" value="Create Folder">
                                </div>
                                </div>
                              </div>


                            
                              

                              
                              <h6 class="mb-10 pl-15">Folders</h6> 



 

<div class="col-md-7">
                                  <div class="form-group">
                               





                              <?php  




     $service = new Google_Service_Drive($GLOBALS['client']);

    $parameters['q'] = "mimeType='application/vnd.google-apps.folder' and '1tZps8Is_mbBIBZ3CLefp-rhleU0v7MJm' in parents and trashed=false";
    $files = $service->files->listFiles($parameters);
    
    echo "<select class='form-control' data-placeholder='Choose a Category' tabindex='1' id='selectfolder'>";
    foreach( $files as $k => $file ){
        echo "<option value='{$file['id']}'>
        
            {$file['name']}";

        echo "</option>";



    }
    echo "</select>"; 


      echo "<div class='mt-10' >";
              echo "<input type='text' name='folderid' class='form-control' id='folderid'  value=''>";
        echo "</div>" ;
                  
 
?>  


  

                         <form action="view-file_manager.php?submitt=1" method="post" enctype="multipart/form-data">
                                 
                
                                      <div class="mt-10">
                                      <input type="submit" name="submitt" id="submitt" class="btn btn-warning" value="Open">
                                    </div> 

                                  </form>




                                  </div>
                                </div>
                      

                              
                              <div class="clearfix"></div>
                            </div>
                          </div>
                        </div>
                      </div>

                                            <!-- Add Event Modal -->
        <div id="createFolderModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
            <div class="modal-dialog" style="margin-top: 200px;">
                                                   
               <div class="modal-content">

                   <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h5 class="modal-title" id="myModalLabel">Create Folder</h5>

                       <span id="message"></span>

                      </div>
                                                                              
                        <form role="form" method="POST" action="<?=$post_url?>">

                         <div class="modal-body">
                                                                                              


                          <div class="form-group">
                          <label for="folder_name" class="control-label mb-10">Folder Title: </label>
                          <input type="text" class="form-control " id="folder_name" name="folder_name" required />
                          <div class="help-block with-errors"></div>
                          </div>

                          <div class="form-group" hidden>
                                                           
                          <input type="hidden" class="form-control " id="admin" name="admin" value="llpineda@dswd.gov.ph" />
                                            
                          </div>

                                                        
     
          <div class="form-group">
          
            <select name="folder_share_with" id="folder_share_with" class="form-control input-lg"  tabindex="5" required>
              <option value=" ">Shared With</option>
            
              <option value="llpineda@dswd.gov.ph">D-eviloper</option>
             
            </select>
          </div>
 
       
          <div class="form-group">
          
            <select name="folder_id" id="folder_id" class="form-control input-lg"  tabindex="5" required>
            
              <option value="Upload-Test">Upload-Test</option>
             
            </select>
          </div>
    
       
          <div class="form-group">
            
            <select class="form-control input-lg"  name="folder_permission" id="folder_permission" required>
                    <option value="">Select Permission Type</option>
                    <!-- <option value="owner">organizer/owner</option> -->
                    <option value="fileOrganizer">fileOrganizer</option>
                    <option value="writer">writer</option>
                    <option value="commenter">commenter</option>
                    <option value="reader">reader</option>
                  </select>
          </div>

                                      
            </div>

      <div class="modal-footer"  >
             <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
            <button type="submit" class="btn btn-primary"  name="create_folder_btn" id="create_folder_btn">Create</button>
                </div>
        </form>     

               </div>

                                        </div>
                                 <!-- /.modal-content -->
                                </div>
                            <!-- /.modal -->
 
                              <!-- End Add Event Modal -->

                      
                      <div class="col-lg-9 col-md-8 file-sec pt-20">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="row">





<!--                               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                <div class="file">
                                  <a href="#">
                                    
                                    <div class="icon">
                                      <i class="zmdi zmdi-file-text"></i>
                                    </div>
                                    <div class="file-name">
                                      Document_2016.doc
                                      <br>
                                      <span>Added: Jan 11, 2016</span>
                                    </div>
                                  </a>
                                </div>
                              </div>


                              
                              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                <div class="file">
                                  <a href="#">
                                    
                                    <div class="icon">
                                      <i class="img-responsive zmdi zmdi-collection-video"></i>
                                    </div>
                                    <div class="file-name">
                                      Monica's birthday.mpg4
                                      <br>
                                      <span>Added: Fab 18, 2016</span>
                                    </div>
                                  </a>
                                </div>
                              </div>
                              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
                                
                                  <div class="file">
                                    <a href="#">
                                    
                                    <div class="icon">
                                      <i class="zmdi zmdi-chart"></i>
                                    </div>
                                    <div class="file-name">
                                      Annual report 2016.xls
                                      <br>
                                      <span>Added: Fab 22, 2016</span>
                                    </div>
                                      </a>
                                  </div>
                              </div> -->
                            </div>
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

        </div>
        <!-- Footer -->
        <footer class="footer container-fluid pl-30 pr-30">
          <div class="row">
            <div class="col-sm-12">
              <p>2022 &copy; Portal</p>
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

    <!-- Bootstrap Daterangepicker JavaScript -->
    <script src="../vendors/bower_components/dropify/dist/js/dropify.min.js"></script>

    <!-- Form Flie Upload Data JavaScript -->
    <script src="dist/js/form-file-upload-data.js"></script>
    
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
      

              $(document).ready(function () {
        $(document).on('click', '.crtfldr', function(){
        $('#createFolderModal').modal('show');

   });
});


document.getElementById("selectfolder").onchange = function() {
  var e = document.getElementById("selectfolder");
  var strUser = e.options[e.selectedIndex].value;
  document.getElementById("folderid").value = strUser;
};

// jQuery

$('body').on('change', '#selectfolder', function() {
$('#folderid2').val($('#selectfolder option:selected').val());
});



    </script>
    
  </body>

        <?php if(isset($_POST['create_folder_btn']) ) { ?>
  <script type="text/javascript">
function reload_func(){ window.location="view-file_manager.php"; }
  </script>
<?php } ?>


</script>


</html>