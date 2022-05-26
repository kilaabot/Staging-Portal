<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Testt</title>
</head>
<body>

                                                <?php

                                                include('config/config.php');

                                             
                                        
                                                $query = "SELECT * FROM userpri WHERE m_info='$m_info1'";
                                                $result = mysqli_query($conn, $query) or die (mysqli_error($conn));

                                                while($row=mysqli_fetch_array($result)){
                                                ?>

                                                <tr id="<?php echo $row['m_id'];?>">
                                                
                                                    
                                                <td align="center" hidden ><input type="text" class="chec"  value="" name="chec" id="chec"></td>

                                                <td><button type="button" class="btn btn-danger validate">Remove</button></td>
                                            
                                            
                                                </tr>
                                                    

                                                    
                                                <?php 

                                                }
                                                
                                                ?>






</body>
</html>