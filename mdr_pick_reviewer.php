<?php

include "include/restrict.php";
include "include/connection.php";

?>

<!DOCTYPE html>
<html>
<?php include 'include/head.php';?>
<script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
<body class="skin-blue">
  <div class="wrapper">
    <?php include 'include/header.php';?>
    <?php include 'include/sidebar_all.php';?>
    <?php
    mysql_connect($dbhost, $dbuser, $dbpassword);
    mysql_select_db($dbname); 
    $role = mysql_query("SELECT * FROM tb_user WHERE user_name = '$_SESSION[username]' ");
    $role2 = mysql_fetch_array($role);

    if ($role2['user_role'] != 'EAM')  {
     include './notif_denied.php';  
   } else {
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Pick Debitur
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
                  <li class="active">EAM LogBook</li>
                </ol>
                <hr>
                <div class="box box-default collapsed-box">
                  <div class="box-header with-border">
                    <h3 class="box-title">Define Data</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                    </div><!-- /.box-tools -->
                  </div><!-- /.box-header -->
                  <div class="row">
                    <div class="box-body">
                      <?php
                      $cdc_ = '';
                      $type_ = '';
                      $start_ = '';
                      $end_ = '';
                      if (isset($_POST['cbc_name'])) {
                        $cbc_ = $_POST['cbc_name'];
                      }
                      if (isset($_POST['type_logbook'])) {
                        $type_ = $_POST['type_logbook'];
                      }
                      if (isset($_POST['start_date'])) {
                        $date1 = explode('-', $_POST['start_date']);
                        $start_ = $date1[0].'-'.$date1[1].'-'.$date1[2];
                      }
                      if (isset($_POST['end_date'])) {
                        $date2 = explode('-', $_POST['end_date']);
                        $end_ = $date2[0].'-'.$date2[1].'-'.$date2[2];
                      }
                      ?>
                      <form class="form-inline" method="POST" action="" role="form">
                        <div class="form-group col-lg-12">
                          <label class="col-sm-2 control-label">CBC Name</label>
                          <div class="form-group col-sm-2">
                            <input type="text" name="cbc_name" class="form-control" value="<?= $cbc_ ?>">
                          </div>
                        </div>
                        <div class="form-group col-lg-12">
                          <label class="col-sm-2 control-label">Section</label>
                          <div class="form-group col-sm-2">
                            <select class="form-control" name="type_logbook" id="dropdown">
                              <option value="">--- SELECT ---</option>
                              <option value="Corporate" <?= ($type_ == 'Corporate' ? 'selected' : '') ?>>Corporate</option>
                              <option value="Commercial" <?= ($type_ == 'Commercial' ? 'selected' : '') ?>>Commercial</option>
                            </select>                          
                          </div>
                        </div>
                        <div class="form-group col-lg-12">
                          <label class="col-sm-2 control-label">Mulai dd/mm/yyy</label>
                          <div class="form-group col-sm-2">
                            <input type="date" name="start_date" class="form-control" value="<?= $start_ ?>">
                          </div>
                        </div>
                        <div class="form-group col-lg-12">
                          <label class="col-sm-2 control-label">Sampai dd/mm/yyy</label>
                          <div class="form-group col-sm-2">
                            <input type="date" name="end_date" class="form-control" value="<?= $end_ ?>">
                          </div>
                        </div>
                        <div class="form-group col-sm-12">
                          <button type="submit" name="search" value="search" class="btn btn-theme">Search</button>
                        </div>
                      </form>
                    </div><!-- /.box-body -->
                  </div>
                </div><!-- /.box -->
                <!-- end search -->
              </div><!-- /.box-header -->
              <div class="box-body">
                <div class="table-responsive">
                  <table id="example1" class="">
                    <thead>
                      <tr>
                        <th>#</th>
                        <!-- <th>LogID</th> -->
                        <th>Tanggal</th>
                        <th>Kode Cabang</th>
                        <th>Nama Kantor Wilayah</th>
                        <th>CBC NAME</th>
                        <th>CIF</th>
                        <th>No. Rekening</th>
                        <th>Nama Costumer</th>
                        <th>Jenis Kredit</th>
                        <th>KOL</th> 
                        <th>LIMIT</th>
                        <th>BADE</th>
                        <th>Set Reviewer</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $con=mysqli_connect($dbhost, $dbuser, $dbpassword,$dbname);
                    // Check connection
                      if (mysqli_connect_errno())
                      {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                      }

                // $result = mysqli_query($con,"SELECT * FROM tb_logbook 
                //                             JOIN tb_result_review ON tb_logbook.log_id = tb_result_review.log_id
                //                             WHERE tb_logbook.status = 'Complete' ");


			    // SELECT tbldivisi.ket_divisi, tblpegawai.nama, tbljabatan.ket_jabatan, tblpenempatan.id_penempatan
				// FROM tblpegawai
				// JOIN tbljabatan ON tblpegawai.id_jabatan = tbljabatan.id_jabatan
				// JOIN tbldivisi ON tblpegawai.id_divisi = tbldivisi.id_divisi
				// JOIN tblpenempatan ON tblpegawai.id_penempatan = tblpenempatan.id_penempatan 
                      $where = '';
                      if ($_POST['search']) {
                        if ($_POST['cbc_name'] != '' || $_POST['type_logbook'] != '' || $_POST['start_date'] != '' || $_POST['end_date'] != '') {
                          $where .= 'WHERE ';
                        }
                        if ($_POST['cbc_name']) {
                          if ($where != '' && $where != 'WHERE ') {
                            $where .= ' and ';
                          }
                          $where .= 'tb_upload_logbook.CBC_NAME LIKE "%'.$_POST['cbc_name'].'%"';
                        }
                        if ($_POST['type_logbook']) {
                          if ($where != '' && $where != 'WHERE ') {
                            $where .= ' and ';
                          }
                          $where .= 'tb_upload_logbook.type_logbook = "'.$_POST['type_logbook'].'"';
                        }
                        if ($_POST['start_date']) {
                          if ($where != '' && $where != 'WHERE ') {
                            $where .= ' and ';
                          }
                          $date1 = explode('-', $_POST['start_date']);
                          $where .= 'MATDAT_LOG >= "'.$date1[0].'-'.$date1[1].'-'.$date1[2].'"';
                        }
                        if ($_POST['end_date']) {
                          if ($where != '' && $where != 'WHERE ') {
                            $where .= ' and ';
                          }
                          $date2 = explode('-', $_POST['end_date']);
                          $where .= 'MATDAT_LOG <= "'.$date2[0].'-'.$date2[1].'-'.$date2[2].'"';
                        }
        // var_dump($where);exit;
                      }
                      $result = mysqli_query($con,"SELECT tb_upload_logbook.id_logbook,tb_upload_logbook.date_time_log,tb_upload_logbook.kd_cabang,tb_upload_logbook.kanwil_nm,
                        tb_upload_logbook.area_log,tb_upload_logbook.CBC_NAME,tb_upload_logbook.CIF,tb_upload_logbook.no_rek,
                        tb_upload_logbook.nm_customer,tb_upload_logbook.JNS_KRD,tb_upload_logbook.KOL_LOG,tb_upload_logbook.restru_no,
                        tb_upload_logbook.LIMIT_LOG,tb_upload_logbook.BADE_LOG,tb_upload_logbook.PDDAYS,tb_upload_logbook.IPDDAY,
                        tb_upload_logbook.MATDAT_LOG,tb_upload_logbook.PKDATE_LOG,tb_upload_logbook.Expertise,tb_upload_watchlist.ACCT_STRATEGY, tb_upload_logbook.reviewer,
                        tb_upload_bidangusaha.BIDANG_USAHA,tb_upload_sectorusaha.ic_sector,
                        tb_upload_logbook.CIF AS CIF1, tb_upload_watchlist.CIF AS CIF2, tb_upload_bidangusaha.CIF AS CIF3, tb_upload_sectorusaha.CIF AS CIF4, tb_upload_yoyo.CIF AS CIF5
                        FROM tb_upload_logbook
                        LEFT JOIN tb_upload_watchlist ON tb_upload_logbook.CIF = tb_upload_watchlist.CIF
                        LEFT JOIN tb_upload_bidangusaha ON tb_upload_logbook.CIF = tb_upload_bidangusaha.CIF
                        LEFT JOIN tb_upload_sectorusaha ON tb_upload_logbook.CIF = tb_upload_sectorusaha.CIF
                        LEFT JOIN tb_upload_yoyo ON tb_upload_logbook.CIF = tb_upload_yoyo.CIF $where
                        ");
        // var_dump($result);exit;

                // $result = mysqli_query($con,"SELECT * FROM tb_upload_logbook "); 
                      $get_reviewer = mysqli_query($con,"SELECT user_id, user_name FROM tb_user WHERE user_role='Reviewer'");
                      $hasil = '';
                      while($get_reviewer = mysqli_fetch_array($get_reviewer)) {
                        $hasil .= '<option value="'.$get_reviewer['user_id'].'">'.$get_reviewer['user_name'].'</option>';
                      }


                      if(mysqli_num_rows($result)>0){
                        $no = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $no++;
                          echo "<tr>";
                          echo "<td><b>" . $no . ".</b></td>";
                    // echo "<td>" . $row['id_logbook'] . "</td>";
                          echo "<td>" . $row['date_time_log'] . "</td>";
                          echo "<td>" . $row['kd_cabang'] . "</td>";
                          echo "<td>" . $row['kanwil_nm'] . "</td>";
                          echo "<td>" . $row['CBC_NAME'] . "</td>";
                          echo "<td>" . $row['CIF'] . "</td>";
                          echo "<td>" . $row['no_rek'] . "</td>";
                          echo "<td>" . $row['nm_customer'] . "</td>";
                          echo "<td>" . $row['JNS_KRD'] . "</td>";
                          echo "<td>" . $row['KOL_LOG'] . "</td>";
                          echo "<td>" . $row['LIMIT_LOG'] . "</td>";
                          echo "<td>" . $row['BADE_LOG'] . "</td>";
                          if (!empty($row['reviewer'])) {
                            $get_user = mysql_query("SELECT user_name FROM tb_user WHERE user_id ='".$row['reviewer']."'");
                            $result_user = mysql_fetch_array($get_user);
                            echo "<td>" . $result_user['user_name'] . "</td>";
                          } else {
                            echo "<td>
                              <select id='reviewer-".$row['id_logbook']."' class='form-control' onchange='updateReviewer(".$row['id_logbook'].")'>
                                <option>--- SELECT REVIEWER ---</option>
                                ".$hasil."
                              </select>  
                              <span id='result-".$row['id_logbook']."'></span>
                              <script>
                                function updateReviewer(id) {
                                  var get_value = document.getElementById('reviewer-'+id).value;

                                  if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
                                      xmlhttp=new XMLHttpRequest();
                                  } else {// code for IE6, IE5
                                      xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
                                  }

                                 xmlhttp.onreadystatechange=function() {
                                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
                                      var selectbox = document.getElementById('reviewer-'+id);
                                      var resultbox = document.getElementById('result-'+id);
                                      selectbox.style.display = 'none';
                                      resultbox.innerHTML = '' + xmlhttp.response + ''
                                    }
                                  }

                                  xmlhttp.open('GET','proses_ajax.php?id='+id+'&value='+get_value,true);
                                  xmlhttp.send();
                                }
                              </script>
                            </td>";
                          }
                          echo "</tr>";
                          ?>
                          <!-- Input IU(Informasi Umum) -->
                          <div class="modal fade" id="pick<?php echo $row['id_logbook'];?>" role="dialog">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title"><b>[Document] <b><u><?php echo $row['id_logbook'];?> <?php echo $row['nm_customer'];?></u></b>
                                  </div>
                                  <div class="modal-body">
                                    <form>

                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Back Status To Working Process -->
                          <div class="modal fade" id="Approve<?php echo $row['id_logbook'];?>" role="dialog">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title"><b>[unit kerja] </b> Process Debitur Record</h4>
                                </div>
                                <div class="modal-body">
                                  <form method="post" action=" ">
                                    <div class="form-group">
                                      <label>Are you sure Sumbit this record?</label>
                                      <h6>RcdID : <?php echo $row['id_logbook'];?></h6>
                                      <h6>Debitur : <?php echo $row['Debitur'];?></h6>
                                      <input type="hidden" name="res_id" class="form-control" placeholder="client name" value="<?php echo $row['res_id'];?>" required>
                                      <input type="hidden" name="process_by" class="form-control" placeholder="client name" value="<?php echo $_SESSION['username'];?>" required>
                                    </div>
                                    <button type="submit" name="Approve" class="btn btn-default">Back Status</button>
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