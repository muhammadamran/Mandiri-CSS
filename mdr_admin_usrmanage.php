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
      header("Location: ./mdr_admin_usrmanage.php");                                                  
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
      header("Location: ./mdr_admin_usrmanage.php");                                                  
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
     header("Location: ./mdr_admin_usrmanage.php");                    
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

    if ($role2['user_role'] != 'Administrator' && $role2['user_role'] != 'EAM')  {
     include './notif_denied.php';  
    } else {
    ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
        <ol class="breadcrumb">
          <li><a href="./index.php"> <b>Home</b></a></li>
          <li><a href="./mdr_admin_usrmanage.php"><b>Admin Tools</b></a></li>
          <li class="active"><b>User Management</b></li>
        </ol>
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <td><button class="btn btn-block btn-warning btn-flat" data-toggle="modal" data-target="#myModal">Add New User</button></td>
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div>
                          <img src="assets/images/mandiri-logo.png" width="120px">
                        </div><hr>
                        <div>
                          <h4>Data User Management</h4>
                        </div>
                      </div>
                      <div class="modal-body">
                        <form method="post" action="input_index.php" enctype="multipart/form-data">
                          <div class="form-group">
                            <!-- <label>Change Photo Profile</label> -->
                            <input type="hidden" name="user_foto" class="form-control" value="user.png">
                          </div>
                          <div class="form-group">
                            <label>Username</label>
                            <input type="text" placeholder="Username..." name="user_name" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="user_password" class="form-control" value="1234" readonly="readonly">
                            <input type="hidden" name="user_created" class="form-control" value="<?php echo(date('Y-m-d')); ?>">
                          </div>
                          <div class="form-group">
                            <label>Role</label>
                            <select name="user_role" class="form-control">
                              <option>--Select Role--</option>
                              <option value="Administrator">Administrator</option>
                              <option value="DH">DH</option>
                              <option value="GH">GH</option>
                              <option value="EAM">EAM</option>
                              <option value="Reviewer">Reviewer</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="FirstName" placeholder="First Name..." class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="LastName" placeholder="Last Name..." class="form-control">
                          </div>
                          <div class="form-group">
                            <label>NIP</label>
                            <input type="text" name="NIP" placeholder="NIP..." class="form-control">
                          </div>
                          <div class="form-group">
                            <input type="hidden" value="IDN" name="user_region" placeholder="Region..." class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Unit Kerja</label>
                            <!-- <input type="text" name="user_dept" class="form-control" value="<?php echo $row['user_dept'];?>"> -->
                            <select name="user_dept" class="form-control">
                              <option value="">--Select Unit Kerja--</option>
                              <?php
                              mysql_connect($dbhost, $dbuser, $dbpassword);
                              mysql_select_db($dbname);
                              $resultdept=mysql_query("SELECT * FROM tb_unit_kerja_master ORDER BY uk_name ASC");
                              while($datadept=mysql_fetch_array($resultdept)) { ?>
                                <!-- echo "<option value='$datadept[uk_name]'> $datadept[uk_name] </option>"; -->
                                <option value="<?php echo $datadept['uk_name']; ?>"><?php echo $datadept['uk_name']; ?></option>
                                <?php
                              }
                              ?>
                            </select>
                          </div>
                          <button type="submit" name="submitprofile" class="btn btn-success btn-block btn-flat">Submit</button>
                          <button type="button" class="btn bg-orange btn-block btn-flat" data-dismiss="modal">Close</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>


              </div><!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <!-- <th>No.</th> -->
                      <th><small>User ID</small></th>
                      <th><small>Username</small></th>
                      <th><small>First Name</small></th>
                      <th><small>Last Name</small></th>
                      <th><small>NIP</small></th>
                      <th><small>Username</small></th>
                      <th><small>Password</small></th>
                      <th><small>Date User Create</small></th>
                      <th><small>Role</small></th>
                      <!-- <th><small>Region</small></th> -->
                      <th><small>Unit Kerja</small></th>                      
                      <th><small>Action</small></th>
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

                    $result = mysqli_query($con,"SELECT * FROM tb_user ORDER BY user_id DESC");

                    if(mysqli_num_rows($result)>0){

                      while($row = mysqli_fetch_array($result))
                      {
                        echo "<tr>";
                        echo "<td><small>" . $row['user_id'] . "</small></td>";
                        echo "<td><small>" . $row['user_name'] . "</small></td>";
                        echo "<td><small>" . $row['FirstName'] . "</small></td>";
                        echo "<td><small>" . $row['LastName'] . "</small></td>";
                        echo "<td><small>" . $row['NIP'] . "</small></td>";
                        echo "<td><small>" . $row['user_name'] . "</small></td>";
                        echo "<td><small>*************</small></td>";
                        echo "<td><small>" . $row['user_created'] . "</small></td>";
                        echo "<td><small>" . $row['user_role'] . "</small></td>";
                        // echo "<td><small>" . $row['user_region'] . "</small></td>";
                        echo "<td><small>" . $row['user_dept'] . "</small></td>";
                        echo "<td align= ''>
                        <a href='#' data-toggle='modal' data-target='#edit$row[user_id]' title='Edit'><button class='btn btn-warning btn-flat'><i class='glyphicon glyphicon-pencil'></i></button></a>
                        <a href='#' data-toggle='modal' data-target='#delete$row[user_id]' title='Delete'><button class='btn btn-warning btn-flat'><i class='glyphicon glyphicon-trash'></i></button></a>
                        </td>";
                        echo "</tr>";
                        ?>
                        <div class="modal fade" id="edit<?php echo $row['user_id'];?>" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div>
                                  <img src="assets/images/mandiri-logo.png" width="120px">
                                </div><hr>
                                <div>
                                  <h4>Edit Data User Management</h4>
                                </div>
                              </div>
                              <div class="modal-body">
                                <form method="post" action="input_index.php" enctype="multipart/form-data">
                                  <div class="form-group">
                                    <!-- <label>Change Photo Profile</label> -->
                                    <input type="hidden" name="user_foto" class="form-control" value="<?php echo $row['user_foto'];?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Username</label>
                                    <input type="hidden" name="user_id" class="form-control" value="<?php echo $row['user_id'];?>">
                                    <input type="text" name="user_name" class="form-control" value="<?php echo $row['user_name'];?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="user_password" class="form-control" value="<?php echo $row['user_password'];?>">
                                    <input type="hidden" name="user_created" class="form-control" value="<?php echo $row['user_created'];?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Role</label>
                                    <!-- <input type="hidden" name="user_role" class="form-control" value="<?php echo $row['user_role'];?>"> -->
                                    <select name="user_role" class="form-control">
                                      <option value="<?php echo $row['user_role'];?>"><?php echo $row['user_role'];?></option>
                                      <option value="">--Select Role--</option>
                                      <option value="Administrator">Administrator</option>
                                      <option value="DH">DH</option>
                                      <option value="GH">GH</option>
                                      <option value="EAM">EAM</option>
                                      <option value="Reviewer">Reviewer</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="FirstName" class="form-control" value="<?php echo $row['FirstName'];?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="LastName" class="form-control" value="<?php echo $row['LastName'];?>">
                                  </div>
                                  <div class="form-group">
                                    <label>NIP</label>
                                    <input type="text" name="NIP" class="form-control" value="<?php echo $row['NIP'];?>">
                                  </div>
                                  <div class="form-group">
                                    <!-- <label>Region</label> -->
                                    <input type="hidden" name="user_region" class="form-control" value="<?php echo $row['user_region'];?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Unit Kerja</label>
                                    <!-- <input type="text" name="user_dept" class="form-control" value="<?php echo $row['user_dept'];?>"> -->
                                    <select name="user_dept" class="form-control">
                                      <option value="<?php echo $row['user_dept'];?>"><?php echo $row['user_dept'];?></option>
                                      <option value="">--Select Unit Kerja--</option>
                                      <?php
                                      mysql_connect($dbhost, $dbuser, $dbpassword);
                                      mysql_select_db($dbname);
                                      $resultdept=mysql_query("SELECT * FROM tb_unit_kerja_master ORDER BY uk_name ASC");
                                      while($datadept=mysql_fetch_array($resultdept)) { ?>
                                        <!-- echo "<option value='$datadept[uk_name]'> $datadept[uk_name] </option>"; -->
                                        <option value="<?php echo $datadept['uk_name']; ?>"><?php echo $datadept['uk_name']; ?></option>
                                        <?php
                                      }
                                      ?>
                                    </select>
                                  </div>
                                  <button type="submit" name="updateprofileadmin" class="btn btn-success btn-block btn-flat">Update</button>
                                  <button type="button" class="btn bg-orange btn-block btn-flat" data-dismiss="modal">Close</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="modal fade" id="delete<?php echo $row['user_id'];?>" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div>
                                  <img src="assets/images/mandiri-logo.png" width="120px">
                                </div>
                              </div>
                              <div class="modal-body">
                                <form method="post" action="input_index.php">
                                  <div class="form-group">
                                    <label>Are you sure delete this user?</label>
                                    <h6>Username : <?php echo $row['user_name'];?></h6>
                                    <h6>Role : <?php echo $row['user_role'];?></h6>
                                    <h6>Unit Kerja : <?php echo $row['user_dept'];?></h6>
                                    <input type="hidden" name="user_id" class="form-control" placeholder="client name" value="<?php echo $row['user_id'];?>" required>
                                  </div>
                                  <button type="submit" name="deleteuseradmin" class="btn btn-info btn-block btn-flat">Yes</button>
                                  <button type="button" class="btn btn-danger btn-block btn-flat" data-dismiss="modal">No</button>
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

