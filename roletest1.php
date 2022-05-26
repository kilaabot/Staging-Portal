<?php include('config/config.php'); ?>

<form method="POST" action="roletest.php">
          <table id="example1" class="table table-bordered">
            <thead>
              <th>Series No.</th>
              <th>Account Type</th>
              <th>Tools</th>
            </thead>
            <tbody>
              <?php
                $sql = "SELECT * FROM userpri";
                $query = mysqli_query($conn, $sql, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET));
                while($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                  echo "
                    <tr>
                    <td>".$row['seriesno']."</td>
                      <td>".$row['accounttype']."</td>
                      <td>
                        <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['seriesno']."'><i class='fa fa-edit'></i> Edit</button>
                        <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['seriesno']."'><i class='fa fa-trash'></i> Delete</button>
                      </td>
                    </tr>
                  ";
                }
              ?>
            </tbody>
          </table>
          </form>