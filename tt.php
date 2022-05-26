<?php
// including the database connection file
include_once("config/config.php");


//getting id from url
$module_control = $_GET['module_control'];

$query = 'SELECT m_info, m_id, m_ctrl, m_module,GROUP_CONCAT(m_module," → ",m_ctrl SEPARATOR " \n ") as "module_control", GROUP_CONCAT(m_id) as "c_id" FROM userpri GROUP BY m_info';


$result = mysqli_query($conn, $query) or die (mysqli_error($conn));

while($row = mysqli_fetch_array($result))
{
    $c_id = $row['c_id'];
    $m_ctrl = $row['m_ctrl'];
    $module_control = $row['module_control'];
}
?>
<html>
<head>  
    <title>Edit Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="view-roles_edit.php">
        <table border="0">
            <tr>
                <td ><input style="white-space: pre-line;" type="text" class="form-control" name="module_control" value="<?php echo $_GET['module_control'];?>"></td>

                <td><input type="submit" name="update" value="Update"></td>
            </tr>

        </table>
    </form>
</body>
</html>
