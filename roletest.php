                    <input type="hidden" class="decid" id="id" name="id">

  <table id="example2" class="table table-bordered">
                <thead>
                  <th>Series No.</th>
                  <th>Account Type</th>
                </thead>
                <tbody>
                  <?php
                    if(isset($_POST['seriesno'])){
                    $id=$_POST['seriesno'];
                    $sql = "SELECT * FROM accounttype where seriesno='$id'";
                    $query = sqlsrv_query($conn, $sql, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET));
                    while($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                      echo "
                        <tr>
                        <td>".$row['seriesno']."</td>
                          <td>".$row['accounttype']."</td>
                        </tr>
                      ";
                    }
                    }

                  ?>
                </tbody>
              </table>