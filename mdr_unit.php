<?php

include "include/connection.php";
include "include/restrict.php";

if(isset($_POST["pick"]))    
{    
  $uid                = $_POST['pick'];

  $cek = mysql_query("SELECT * FROM tb_upload_logbook WHERE id_logbook ='$uid' AND status='No Action'");
  $num = mysql_num_rows($cek);
  if($num == 1){
    $query = mysql_query("UPDATE tb_upload_logbook set status ='On Progress' where id_logbook ='$uid' AND status='No Action'");
    if($query){
      header("Location: ./mdr_unit_list.php?unit=$uid");                                                  
    } else {
      echo "Updated Failed - Please contact your Administrator";
    }
  } else {
    echo "Records cannot be found!! Please contact your System Administrator" ;
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

    if ($role2['user_role'] != 'Administrator' && $role2['user_role'] != 'EAM' && $role2['user_role'] != 'Reviewer')  {
     include './notif_denied.php';  
   } else {
    ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          List Debitur per Unit Kerja Prioritas
          <small>Application Section</small>
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
                  <li><a href="#">Application Section</a></li>
                  <li class="active">List Debitur per Unit Kerja Prioritas</li>
                </ol>
                <hr>
                <!-- end search -->
                <!-- search parameter -->
                <div class="box box-default collapsed-box">
                  <div class="box-header with-border">
                    <h3 class="box-title">List data</b></h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"></button>
                    </div><!-- /.box-tools -->
                  </div><!-- /.box-header -->
                </div><!-- /.box -->
              </div><!-- /.box-header -->
              <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Tanggal</th>
                      <th>Kode Cabang</th>
                      <th>Kantor Wilayah</th>
                      <!-- <th>Area</th> -->
                      <th>CBC</th>
                      <th>CIF</th>
                      <th>Nama Costumer</th>
                      <th>Jenis Kredit</th>
                      <!-- <th>KOL</th> -->
                      <!-- <th>Restru_No</th> -->
                      <!-- <th>MatDate</th> -->
                      <!-- <th>PKDate</th> -->
                      <!-- <th>Expertise</th> -->
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

          // $result = mysqli_query($con,"SELECT * FROM tb_logbook ". (($query1 != '') ? " where $query1 " : " GROUP BY CBC_NAME");    
                    $result = mysqli_query($con,"SELECT * FROM tb_upload_logbook WHERE status='No Action' ORDER BY MATDAT_LOG DESC");    

                    if(mysqli_num_rows($result)>0){
                      $no=0;
                      while($row = mysqli_fetch_array($result))
                      {
                        $no++;
                        echo "<tr>";
                        echo "<td>" . $no . "</td>";
                        // echo "<td>" . $row['id_logbook'] . "</td>";
                        echo "<td>" . $row['date_time_log'] . "</td>";
                        echo "<td>" . $row['kd_cabang'] . "</td>";
                        echo "<td>" . $row['kanwil_nm'] . "</td>";
                        // echo "<td>" . $row['area_log'] . "</td>";
                        echo "<td>" . $row['CBC_NAME'] . "</td>";
                        echo "<td>" . $row['CIF'] . "</td>";
                        echo "<td>" . $row['nm_customer'] . "</td>";
                        echo "<td>" . $row['JNS_KRD'] . "</td>";
                        // echo "<td>" . $row['KOL_LOG'] . "</td>";
                        // echo "<td>" . $row['restru_no'] . "</td>";
                        // echo "<td>" . $row['MATDAT_LOG'] . "</td>";
                        // echo "<td>" . $row['PKDATE_LOG'] . "</td>";
                        // echo "<td>" . $row['Expertise'] . "</td>";                                    
                        echo "<td align= ''>
                        <a href='#' data-toggle='modal' data-target='#pick$row[id_logbook]' title='Edit'><span class='label label-primary'>PICK</span></a>
                      </td>";
                      echo "</tr>";
                      ?>

                      <div class="modal fade" id="pick<?php echo $row['id_logbook'];?>" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title"><b>[unit kerja] </b> Process Debitur Record</h4>
                            </div>
                            <div class="modal-body">
                              <form method="post" action=" ">
                                <div class="form-group">
                                  <label>Are you sure pick this record?</label><b>
                                  <?php echo $row['nm_customer'];?>
                                  <?php echo $row['CBC_NAME'];?>
                                </div></b>
                                <button type="submit" name="pick" value="<?php echo $row['id_logbook'];?>" class="btn btn-default">Pick</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
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
              </div>
                
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

