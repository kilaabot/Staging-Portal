
<?php
// including the database connection file
include_once("config/config.php");

// //getting id from url
$m_id = $_GET['m_id'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM userpri WHERE m_id=$m_id");


while($res = mysqli_fetch_array($result))
{
    $m_module = $res['m_module'];
    $m_info = $res['m_info'];
    $m_info1 = $res['m_info'];
     $m_ctrl = $res['m_ctrl'];


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
                        <li class="active"><span>Edit Role Access</span></li>
                      </ol>
                    </div>
                    <!-- /Breadcrumb -->
                </div>
                <!-- /Title -->
                
<!-- <form id="moduleform" role="form" method="post" name="sample" action="controller/process-module.php?action=add"> -->
<!--    <form method="POST" name="sample" action="controller/save_module.php"> -->
                
                <div class="row">
                    <form method="POST" name="sample" action="controller/process-role.php">
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
                                               
                                                      <br>
                                                    <label class="control-label mb-10 col-sm-2">Description:<code>*</code></label>

                                                <div class="col-sm-10" >
                                                     <input type="text"  class="form-control" id="m_info1"  placeholder="Description" name="m_info1" value="<?php echo $m_info1;?>" onInput="checkUsername()" required>
                                                      <input type="hidden" id="m_info" name="m_info" value="<?php echo $m_info;?>">
                                                      <br>
                                                             <span id="check-username"></span>
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
                    <div class="col-sm-12" id="divID"> 
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
                                                                <select class="form-control selectbox" name="m_module" id="mySelect" onInput="checkModuleE()">
                                                                <?php 
                                                                include('config/config.php');

                                                                $query="select * from modules";
                                                                $result=mysqli_query($conn,$query);
                                                                while($row=mysqli_fetch_array($result)){

                                                                ?>
                                                            <option value="<?php echo $row['m_desc'];?>"><?php echo $row['m_desc'];?></option>
                                                        <?php } ?>
                                                            </select>

                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label mb-10">Control:</label>
                                                        
                                                            <select class="form-control" name="m_ctrl" id="myCtrl" required>
                                                                <option>View</option>
                                                                <option>View/Add</option>
                                                                <option>View/Add/Edit</option>
                                                                <option>Full Control</option>
                                                             </select>
                                                        </div>

                                                        <span id="check-module"></span>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                                    <!--    <button type="submit" class="btn btn-primary" data-dismiss="modal">Add</button> -->
                                                    <input type="button" name="add" value="Add" id="btnaddE" class="btn btn-primary" data-dismiss="modal" onclick="addModule();">
                                                    </div>
                                                    
                                                </div>
                                        
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.Add Module modal -->
                                    <div class="table-wrap mt-40" id="testref">
                                        <div class="table-responsive">
                                          <table class="table table-bordered mb-0" id="tbl">
                                            <thead>
                                      
                                                <th>DESCRIPTION</th>
                                                <th>CONTROL</th>
                                                <th>ACTION</th>

                                             
                                            </thead>


                                            <tbody id="tbls">
                                            
                                                <?php
                                        
                                                     $query = "SELECT * FROM userpri WHERE m_info='$m_info1'";
                                                    $result =mysqli_query($conn, $query) or die (mysqli_error($conn));

                                                    while($row=mysqli_fetch_array($result)){
                                                        ?>
                                                        <tr id="tb-<?php echo $row['m_id']; ?>">
                                                    
                                                            <td align="center" hidden ><input type="checkbox" class="chec" value="<?php echo $row['m_id']; ?>" name="m_id[]"></td>
                                                    
                                                            <td ><input type="text" name="m_modules" class="selectbox" style="border: none;"  value="<?php echo $row['m_module']; ?>"></td>

                                                            <td ><input type="text" name="m_ctrls" style="border: none;" value="<?php echo $row['m_ctrl']; ?>"></td>

                                                            <td><button type="button" class=" btn btn-danger validate" >Remove</button></td>
                                            
                                                        </tr>
                                                    
                                                        <?php
                                                    }
                                                
                                                ?>

                                            </tbody>
                             
                                          </table>
                                        </div>
                                    </div>
                                    <br>

                                        <div class="form-group">
                                            <a href="#" id="addMedit" class="btn btn-primary btn-outline btn-icon right-icon  addmodulemdl" onclick="reset()"><span>Add Module</span> <i class="fa fa-plus-circle"></i> </a>

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
                                        <button type="submit" name="updaterole" id="updaterole" class="btn btn-success btn-outline btn-icon right-icon addbtn"><span>Save</span> <i class="ti ti-save"></i> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Bordered Table 3-->
                      </form>  
                </div>
                     
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
        
  //////////////////////////////////////////////////////////
        function addModule(){

           
            var m_module = document.sample.m_module.value;
            var m_ctrl = document.sample.m_ctrl.value;

            var tr = document.createElement('tr');
        
            var td1 = tr.appendChild(document.createElement('td'));
            var td2 = tr.appendChild(document.createElement('td'));
            var td3 = tr.appendChild(document.createElement('td'));



            td1.innerHTML = '<input type="hidden"  name="m_module[]" class="selectbox tbin" value="'+m_module+'">'+m_module;
            td2.innerHTML = '<input type="hidden" name="m_ctrl[]"  value="'+m_ctrl+'">'+m_ctrl;
            td3.innerHTML = '<input type="button" name="del" onclick="delModule(this);" class="btn btn-danger" value="Remove">'

            document.getElementById("tbls").appendChild(tr);

             $('#updaterole').prop('disabled', false);
            
        }

        function delModule(Stud){

            var s = Stud.parentNode.parentNode;
            s.parentNode.removeChild(s);


        }

  //////////////////////////////////////////////////////////


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


  //////////////////////////////////////////////////////////

$(document).ready(function(){
            $('#m_info').keyup(function(){
                search_table($(this).val());
            });

            function search_table(value){
                $('#tbls tr').each(function(){
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


  //////////////////////////////////////////////////////////


$('td .btn').on("click", function() {
  $(this).closest('tr').find('.chec').prop("checked", true);
})

$(function() {
  $(".validate").click(function() {
    var i = $(this).closest("tr").attr("id");
    $("#" + i).hide();
    delModule(this);
  });
});


  //////////////////////////////////////////////////////////


function checkUsername() {
    
    jQuery.ajax({
    url: "controller/process-check_availability.php",
    data:'m_info1='+$("#m_info1").val(),
    type: "POST",
    success:function(data){
        $("#check-username").html(data);
    },
    error:function (){}
    });
}

function checkModuleE() {
    
    jQuery.ajax({
    url: "controller/process-check_availability.php",
    data:'mySelect='+$("#mySelect").val(),
    type: "POST",
    success:function(data){
        $("#check-module").html(data);
    },
    error:function (){}
    });
}


  //////////////////////////////////////////////////////////

function reset() {
  $('#mySelect').val("")
   $('#myCtrl').val("");
    $('#btnaddE').prop('disabled',true);

}



  //////////////////////////////////////////////////////////

setInterval(CheckTables, 100);

function CheckTables() {
    $("table").each(function (index) {
        $(this).find('tbody:not(:empty)').parent().show();
        $(this).find('tbody:empty').parent().hide();
    });

    if (($("tbody").is(":empty")))
        $("#updaterole").prop('disabled', true);
         

    // Ignores whitespace
    if (($.trim($("tbody").html()) == ""))
        $("#updaterole").prop('disabled', true);  

    
}


  //////////////////////////////////////////////////////////
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



    </script>


</body>

</html>
