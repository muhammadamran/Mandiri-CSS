<?php

include "include/connection.php";
include "include/restrict.php";
if(isset($_POST["create"]))    
{    

  $uk_name        = $_POST['uk_name'];
  $desc           = $_POST['desc'];
  $remark         = $_POST['remark'];

  $query = mysql_query("INSERT into tb_unit_kerja_master values(' ','$uk_name','$desc','$remark')");
  if ($query) {
    header("Location: ./mdr_admin_unitkerja.php");  
  } else {
    echo "error transmit data".mysql_error();
  }

} 

if(isset($_POST["update"]))    
{    
  $uid                = $_POST['uid'];
  $username           = $_POST['username'];
  $region             = $_POST['region'];
  $dept1              = $_POST['dept1'];
  
  if (empty($_POST['role_new'])) {
    $role_to_sql    = $_POST['role_old'];
  } else {
    $role_to_sql    = $_POST['role_new'];
  }

  $cek = mysql_query("SELECT * FROM tb_user WHERE user_id ='$uid'");
  $num = mysql_num_rows($cek);
  if($num == 1){
    $query = mysql_query("update tb_user set user_role ='$role_to_sql', user_region = '$region' , user_dept = '$dept1' where user_id ='$uid'");
    if($query){
      header("Location: ./admin_usrmanage.php");                                                  
    } else {
      echo "Updated Failed - Please contact your Administrator";
    }
  } else {
    echo "Records cannot be found!! Please contact your System Administrator" ;
  }

}

if(isset($_POST["pass"]))    
{    
  $uid                = $_POST['uid'];
  $username           = $_POST['username'];
  $pass               = $_POST['new_pass'];

  $cek = mysql_query("SELECT * FROM tb_user WHERE user_id ='$uid'");
  $num = mysql_num_rows($cek);
  if($num == 1){
    $query = mysql_query("update tb_user set user_password ='$pass' where user_id ='$uid'");
    if($query){
      header("Location: ./admin_usrmanage.php");                                                  
    } else {
      echo "Updated Failed - Please contact your Administrator";
    }
  } else {
    echo "Records cannot be found!! Please contact your System Administrator" ;
  }

}

if(isset($_POST['delete']))
{

$uid    = $_POST['uid'];


if($uid){
        $query = mysql_query("DELETE FROM tb_user WHERE user_id = '$uid' ");
            if($query){
                 header("Location: ./admin_usrmanage.php");                    
            } else {
                echo "Operation Failed! Please contact your Administrator".mysql_errno();
            }
    } else {
        echo "Operation Failed! Please contact your Administrator".mysql_errno();
    }

}

?>

<!DOCTYPE html>
<html>
<?php include 'include/head.php';?>
<body class="skin-blue">
  <div class="wrapper">
    <?php include 'include/header.php';?>
    <?php include 'include/sidebar_all.php';?>

    <?php

            mysql_connect($dbhost, $dbuser, $dbpassword);
            mysql_select_db($dbname); 
            $role = mysql_query("SELECT * FROM tb_user WHERE user_name = '$_SESSION[username]' ");
            $role2 = mysql_fetch_array($role);

            if ($role2['user_role'] != 'Administrator')  {
                 include './notif_denied.php';  
            } else {
      ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          UnitKerja Management
          <small>Administration Section</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <ol class="breadcrumb">
                  <li><a href="./index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                  <li><a href="#">Administration Section</a></li>
                  <li class="active">UnitKerja Management</li>
                </ol>
                <hr>
                <td><button class="btn btn-block btn-default" data-toggle="modal" data-target="#myModal">Add New Record</button></td>
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><b>[UnitKerja List] </b> Add New Record</h4>
                      </div>
                      <div class="modal-body">
                        <form method="post" action=" ">
                          <div class="form-group">
                            <label>UnitKerja *</label>
                            <input type="text" name="uk_name" class="form-control" placeholder="user name" required>
                          </div>
                          <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="desc" class="form-control" placeholder="">
                          </div>
                          <div class="form-group">
                            <label>Remark</label>
                            <input type="text" name="remark" class="form-control" placeholder="">
                          </div>
                          <button type="submit" name="create" class="btn btn-default">Submit</button>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>

              </div><!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>UK_ID</th>
                      <th>UnitKerja</th>
                      <th>Desc.</th>
                      <th>Remark</th>                      
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
                        // Check connection
                    if (mysqli_connect_errno())
                    {
                      echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                    $result = mysqli_query($con,"SELECT * FROM tb_unit_kerja_master ORDER BY uk_name DESC");

                    if(mysqli_num_rows($result)>0){

                      while($row = mysqli_fetch_array($result))
                      {
                        echo "<tr>";
                        echo "<td>" . $row['uk_id'] . "</td>";
                        echo "<td style='text-transform: uppercase;'>" . $row['uk_name'] . "</td>";
                        echo "<td>" . $row['uk_description'] . "</td>";
                        echo "<td>" . $row['uk_remark'] . "</td>";                        
                        echo "<td align= ''>
                        <a href='#' data-toggle='modal' data-target='#edit$row[uk_id]' title='Edit'><span class='label label-success'>Edit</span></a>
                        <a href='#' data-toggle='modal' data-target='#pass$row[uk_id]' title='Change Password'><span class='label label-success'>Change Password</span></a>
                        <a href='#' data-toggle='modal' data-target='#delete$row[uk_id]' title='Delete'><span class='label label-success'>Delete</span></a>
                      </td>";
                      echo "</tr>";
                    ?>
                      <div class="modal fade" id="edit<?php echo $row['user_id'];?>" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title"><b>[User List] </b> Update User</h4>
                            </div>
                            <div class="modal-body">
                              <form method="post" action=" ">
                                <div class="form-group">
                                  <label>User Name</label>
                                  <input type="text" name="username" class="form-control" placeholder="client name" value="<?php echo $row['user_name'];?>" required readonly>
                                  <input type="hidden" name="uid" class="form-control" placeholder="client name" value="<?php echo $row['user_id'];?>" required>
                                </div>
                                <div class="form-group">
                                  <label>User Role</label>                                  
                                  <div class="form-group">
                                  <p><i> New Role </i> </p>
                                    <select name="role_new" class="form-control">
                                      <option style="background-color: yellow;" value="<?php echo $row['user_role'];?>"><?php echo $row['user_role'];?></option>
                                      <option value=" ">--- SELECT ---</option>
                                      <option value="Administrator">Administrator</option>
                                      <option value="Billing">Billing</option>
                                      <option value="CG/Finance">CG/Finance</option>
                                      <option value="Special">Special</option>
                                      <option value="Guest">Guest</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                  <p><i> Region </i> </p>
                                    <select name="region" class="form-control">
                                      <option style="background-color: yellow;" value="<?php echo $row['user_region'];?>"><?php echo $row['user_region'];?></option>
                                      <option value=" ">--- SELECT ---</option>
                                      <option value="JKT">JKT</option>
                                      <option value="SUB">SUB</option>
                                      <option value="SRG">SRG</option>
                                      <option value="BTH">BTH</option>
                                      <option value="MES">MES</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                  <p><i> Department </i> </p>
                                    <select name="dept1" class="form-control">
                                      <option style="background-color: yellow;" value="<?php echo $row['user_dept'];?>"><?php echo $row['user_dept'];?></option>
                                      <option value=" ">--- SELECT ---</option>
                                      <option value="ALL">ALL</option>
                                      <option value="Sales">Sales</option>
                                      <option value="Finance">Finance</option>
                                      <option value="CCS">CCS</option>
                                    </select>
                                  </div>
                                </div>
                                <button type="submit" name="update" class="btn btn-default">Update</button>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="modal fade" id="pass<?php echo $row['user_id'];?>" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title"><b>[User List] </b> Change Password</h4>
                            </div>
                            <div class="modal-body">
                              <form method="post" action=" ">
                                <div class="form-group">
                                  <label>User Name</label>
                                  <input type="text" name="username" class="form-control" placeholder="client name" value="<?php echo $row['user_name'];?>" required readonly>
                                  <input type="hidden" name="uid" class="form-control" placeholder="client name" value="<?php echo $row['user_id'];?>" required>
                                </div>
                                <div class="form-group">
                                  <label>New Password</label>
                                  <input type="password" name="new_pass" class="form-control" placeholder="new password" required>
                                </div>
                                <button type="submit" name="pass" class="btn btn-default">Change Password</button>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="modal fade" id="delete<?php echo $row['user_id'];?>" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title"><b>[user List] </b> Delete User</h4>
                            </div>
                            <div class="modal-body">
                              <form method="post" action=" ">
                                <div class="form-group">
                                  <label>Are you sure delete this user?</label>
                                  <h6>User Name : <?php echo $row['user_name'];?></h6>
                                  <input type="hidden" name="uid" class="form-control" placeholder="client name" value="<?php echo $row['user_id'];?>" required>
                                </div>
                                <button type="submit" name="delete" class="btn btn-default">Yes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                    <?php

                    }
                  } 
                  mysqli_close($con);
                  ?>
                </tbody>
              </table>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->
                                                                                                                       
  <?php } ?>
  <?php include 'include/footer.php';?>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.3 -->
<script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- DATA TABES SCRIPT -->
<script src="assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src='assets/plugins/fastclick/fastclick.min.js'></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/app.min.js" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js" type="text/javascript"></script>
<!-- page script -->
<script type="text/javascript">
  $(function () {
    $("#example1").dataTable();
    $('#example2').dataTable({
      "bPaginate": true,
      "bLengthChange": false,
      "bFilter": false,
      "bSort": true,
      "bInfo": true,
      "bAutoWidth": false
    });
  });
</script>

</body>
</html>

