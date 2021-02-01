<?php

include "include/connection.php";
include "include/restrict.php";

if(isset($_POST["submit"]))    
{    

  $uk_name          = $_POST['uk_name'];
  $uk_description   = $_POST['uk_description'];
  $uk_remark        = $_POST['uk_remark'];

  $query = mysql_query("INSERT INTO tb_unit_kerja_master VALUES(' ','$uk_name','$uk_description','$uk_remark')");

  // var_dump($query);die();
  if ($query) {
    header("Location: ./mdr_admin_unitkerja.php");  
  } else {
    echo "error transmit data".mysql_error();
  }

} 

if(isset($_POST["update"]))    
{    
  $uk_id            = $_POST['uk_id'];
  $uk_name          = $_POST['uk_name'];
  $uk_description   = $_POST['uk_description'];
  $uk_remark        = $_POST['uk_remark'];

  $cek = mysql_query("SELECT * FROM tb_unit_kerja_master WHERE uk_id ='$uk_id'");
  $num = mysql_num_rows($cek);
  if($num == 1){
    $query = mysql_query("UPDATE tb_unit_kerja_master SET uk_name ='$uk_name',
      uk_description ='$uk_description',
      uk_remark ='$uk_remark'
      WHERE uk_id ='$uk_id'");
  // var_dump($query);die();
    if($query){
      header("Location: ./mdr_admin_unitkerja.php");                                                  
    } else {
      echo "Updated Failed - Please contact your administrator";
    }
  } else {
    echo "Records cannot be found!! Please contact your System Administrator" ;
  }

}

if(isset($_POST['delete']))
{

  $uk_id    = $_POST['uk_id'];

  if($uk_id){
    $query = mysql_query("DELETE FROM tb_unit_kerja_master WHERE uk_id = '$uk_id' ");
    if($query){
     header("Location: ./mdr_admin_unitkerja.php");                    
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
          <li><a href="./index.php"><b> Home</b></a></li>
          <li><a href="mdr_admin_unitkerja.php"><b>Admin Tools</b></a></li>
          <li class="active"><b>Data Master Unit Kerja</b></li>
        </ol>
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <td><button class="btn btn-warning btn-block btn-flat" data-toggle="modal" data-target="#myModal">Add New Unit Kerja</button></td>
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div>
                          <img src="assets/images/mandiri-logo.png" width="120px">
                        </div><hr>
                        <div>
                          <h4>Data Unit Kerja</h4>
                        </div>
                      </div>
                      <div class="modal-body">
                        <form method="post" action="">
                          <div class="form-group">
                            <label>Unit Kerja</label>
                            <input type="text" name="uk_name" placeholder="Unit Kerja..." class="form-control">
                          </div>
                          <div class="form-group">
                            <!-- <label>CBC Description</label> -->
                            <input type="hidden" value="No Action" name="uk_description" class="form-control">
                          </div>
                          <div class="form-group">
                            <!-- <label>CBC Remarks</label> -->
                            <input type="hidden" value="No Action" name="uk_remark" class="form-control">
                          </div>
                          <button type="submit" name="submit" class="btn btn-success btn-block btn-flat">Submit</button>
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
                      <th>Unit Kerja ID</th>
                      <th>Unit Kerja</th>
                      <!-- <th>CBC Description</th> -->
                      <!-- <th>CBC Remark</th> -->
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

                    $result = mysqli_query($con,"SELECT * FROM tb_unit_kerja_master ORDER BY uk_id DESC");

                    if(mysqli_num_rows($result)>0){

                      while($row = mysqli_fetch_array($result))
                      {
                        echo "<tr>";
                        echo "<td>" . $row['uk_id'] . "</td>";
                        echo "<td style='text-transform: uppercase;'>" . $row['uk_name'] . "</td>";
                        // echo "<td>" . $row['uk_description'] . "</td>";
                        // echo "<td>" . $row['uk_remark'] . "</td>";                        
                        echo "<td align= ''>
                        <a href='#' data-toggle='modal' data-target='#edit$row[uk_id]' title='Edit'><button class='btn btn-warning btn-flat'><i class='glyphicon glyphicon-pencil'></i></button></a>
                        <a href='#' data-toggle='modal' data-target='#delete$row[uk_id]' title='Delete'><button class='btn btn-warning btn-flat'><i class='glyphicon glyphicon-trash'></i></button></a>
                        </td>";
                        echo "</tr>";
                        ?>
                        <div class="modal fade" id="edit<?php echo $row['uk_id'];?>" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div>
                                  <img src="assets/images/mandiri-logo.png" width="120px">
                                </div><hr>
                                <div>
                                  <h4>Edit Data Unit Kerja</h4>
                                </div>
                              </div>
                              <div class="modal-body">
                                <form method="post" action="">
                                  <div class="form-group">
                                    <label>Unit Kerja</label>
                                    <input type="hidden" name="uk_id" class="form-control" value="<?php echo $row['uk_id'];?>">
                                    <input type="text" name="uk_name" placeholder="Unit Kerja..." class="form-control" value="<?php echo $row['uk_name'];?>">
                                  </div>
                                  <div class="form-group">
                                    <!-- <label>CBC Description</label> -->
                                    <input type="hidden" name="uk_description" class="form-control" value="<?php echo $row['uk_description'];?>">
                                  </div>
                                  <div class="form-group">
                                    <!-- <label>CBC Remarks</label> -->
                                    <input type="hidden" name="uk_remark" class="form-control" value="<?php echo $row['uk_remark'];?>">
                                  </div>
                                  <button type="submit" name="update" class="btn btn-success btn-block btn-flat">Update</button>
                                  <button type="button" class="btn btn-danger btn-block btn-flat" data-dismiss="modal">No</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="modal fade" id="delete<?php echo $row['uk_id'];?>" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div>
                                  <img src="assets/images/mandiri-logo.png" width="120px">
                                </div>
                              </div>
                              <div class="modal-body">
                                <form method="post" action="">
                                  <div class="form-group">
                                    <label>Are you sure delete this CBC?</label>
                                    <h6>Unit Kerja : <?php echo $row['uk_name'];?></h6>
                                    <input type="hidden" name="uk_id" class="form-control" placeholder="client name" value="<?php echo $row['uk_id'];?>" required>
                                  </div>
                                  <button type="submit" name="delete" class="btn btn-info btn-block btn-flat">Yes</button>
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

