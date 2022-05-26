   
    <?php
    
    // ADD MONTHLY ACCOMPLISHMENT
    
            include '../config/config.php';
            
            $m_infos     = $_POST['m_info'];
            $m_module     = $_POST['m_module'];
            $m_ctrl     = $_POST['m_ctrl'];

          switch($_GET['action']){
            case 'add':     
                $query = "INSERT INTO userpri (m_info, m_module, m_ctrl) VALUES ('".$m_infos."','".$m_module."','".$m_ctrl."')";
                                      
                mysqli_query($conn,$query)or die ('Failed to Insert in Database !!');
              
            break;
                  
            }

        ?>

      <script type="text/javascript">
      alert("Successfully Added !!");
      window.location = "../view-role_createnew.php";
      
// END ADD MONTHLY ACCOMPLISHMENT
    </script>    