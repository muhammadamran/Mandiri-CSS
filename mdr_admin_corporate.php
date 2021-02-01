<?php
include "include/restrict.php";
include "include/connection.php";
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
        Corporate - Master Data
        <small>Data Section</small>
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
                  <li><a href="#">Data Section</a></li>
                  <li class="active">Corporate - Master Data</li>
                </ol>
                <hr>
                <!-- end search -->
              </div><!-- /.box-header -->
              <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="">
                  <thead>
                    <tr>
                      <th>#</th>
                      <!-- <th>LOGID</th> -->
                      <th>Tanggal</th>
                      <th>Kode Cabang</th>  
                      <th>Nama Kantor Wilayah</th>
                      <th>Area</th>
                      <th>CBC NAME</th>
                      <th>CIF</th>
                      <th>No. Rek</th>
                      <th>Nama Costumer</th>
                      <th>Jenis Kredit</th>
                      <th>BUC REPORTING</th>
                      <th>BUC PENGELOLA</th>
                      <th>BUC FLOOR</th>
                      <th>KOLL LOG</th>
                      <th>KOL</th>
                      <th>Restru</th>
                      <th>Limit</th>
                      <th>Bade</th>
                      <th>BILPRN</th>
                      <th>BILINT</th>
                      <th>PDDAYS</th>
                      <th>IPDDAY</th>
                      <th>BANK</th>
                      <th>CURTYP</th>
                      <th>KURS</th>
                      <th>NMGROUP</th>
                      <th>RATE</th>
                      <th>ORGAMT</th>
                      <th>CBAL</th>
                      <th>BISEKT</th>
                      <th>MATDAT</th>
                      <th>ACCSTS</th>
                      <th>PKDATE</th>
                      <th>KODE</th>
                      <th>NON_BPR</th>
                      <th>NAMA KANWIL II</th>
                      <th>NPL</th>
                      <th>NPL</th>
                      <th>LAR</th>
                      <th>FRML 1</th>
                      <th>FRML 2</th>
                      <th>FG</th>
                      <th>IDRVA</th>
                      <th>Kanwil_lar</th>
                      <th>Revolv</th>
                      <th>Action</th>
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

                // $result = mysqli_query($con,"SELECT * FROM tbbook 
                //                             JOIN tb_result_review ON tb_logbook.log_id = tb_result_review.log_id
                //                             WHERE tb_logbook.status = 'Complete' ");    

                $result = mysqli_query($con,"SELECT * FROM tb_upload_logbook "); 

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
                    echo "<td>" . $row['area_log'] . "</td>";
                    echo "<td>" . $row['CBC_NAME'] . "</td>";
                    echo "<td>" . $row['CIF'] . "</td>";
                    echo "<td>" . $row['no_rek'] . "</td>";
                    echo "<td>" . $row['nm_customer'] . "</td>";
                    echo "<td>" . $row['JNS_KRD'] . "</td>";
                    echo "<td>" . $row['BUC_REPORTING'] . "</td>";
                    echo "<td>" . $row['BUC_PENGELOLA'] . "</td>";
                    echo "<td>" . $row['BUC_FLOOR'] . "</td>";
                    echo "<td>" . $row['KOLL_LOG'] . "</td>";
                    echo "<td>" . $row['KOL_LOG'] . "</td>";
                    echo "<td>" . $row['restru_no'] . "</td>";
                    echo "<td>" . $row['LIMIT_LOG'] . "</td>";
                    echo "<td>" . $row['BADE_LOG'] . "</td>";
                    echo "<td>" . $row['BILPRN_LOG'] . "</td>";
                    echo "<td>" . $row['BILINT_LOG'] . "</td>";
                    echo "<td>" . $row['PDDAYS'] . "</td>";
                    echo "<td>" . $row['IPDDAY'] . "</td>";
                    echo "<td>" . $row['BANK_FG_LOG'] . "</td>";
                    echo "<td>" . $row['CURTYP_LOG'] . "</td>";
                    echo "<td>" . $row['KURS_LOG'] . "</td>";
                    echo "<td>" . $row['NMGROUP_LOG'] . "</td>";
                    echo "<td>" . $row['RATE_LOG'] . "</td>";
                    echo "<td>" . $row['ORGAMT'] . "</td>";
                    echo "<td>" . $row['CBAL'] . "</td>";
                    echo "<td>" . $row['BISEKT'] . "</td>";
                    echo "<td>" . $row['MATDAT_LOG'] . "</td>";
                    echo "<td>" . $row['ACCSTS'] . "</td>";
                    echo "<td>" . $row['PKDATE_LOG'] . "</td>";
                    echo "<td>" . $row['KODE'] . "</td>";
                    echo "<td>" . $row['NON_BPR_LOG'] . "</td>";
                    echo "<td>" . $row['NAMA_KANWIL_II'] . "</td>";
                    echo "<td>" . $row['NPL'] . "</td>";
                    echo "<td>" . $row['npl_buc'] . "</td>";
                    echo "<td>" . $row['LAR'] . "</td>";
                    echo "<td>" . $row['FRML_1'] . "</td>";
                    echo "<td>" . $row['FRML_2'] . "</td>";
                    echo "<td>" . $row['fg'] . "</td>";
                    echo "<td>" . $row['fg_IDR_VA'] . "</td>";
                    echo "<td>" . $row['Kanwil_lar'] . "</td>";
                    echo "<td>" . $row['Revolv'] . "</td>";
                    echo "<td align= ''>
                      <a href='#' data-toggle='modal' data-target='#edit$row[id_logbook]' title='Edit'><span class='label label-success'>Edit</span></a>
                      <a href='#' data-toggle='modal' data-target='#delete$row[id_logbook]' title='Delete'><span class='label label-success'>Delete</span></a>
                    </td>";
                  echo "</tr>";
                  ?>
                      <!-- Input IU(Informasi Umum) -->
                      <div class="modal fade" id="pick<?php echo $row['id_logbook'];?>" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title"><b>[Document] <b><u><?php echo $row['id_logbook'];?> <?php echo $row['NM_CUS'];?></u></b>
                            </div>
                            <div class="modal-body">
                              <form name="postform" action=" " enctype='multipart/form-data' method="post">
                                <div class="form-group">
                                  <center><label align="center">INFORMASI UMUM</label><hr></center>
                                </div>
                                <div class="form-group">
                                  <label align="center">Total Limit / Bade</label>
                                  <input type="text" name="Limitx" class="form-control" value="<?php echo $row['Limitx'];?>" readonly/>
                                  <label align="center">Fasilitas Kredit   </label>
                                  <input type="text" name="JenisFaskred" class="form-control" value="<?php echo $row['JenisFaskred'];?>" readonly/>
                                  <label align="center">Kolektibilitas</label>
                                  <input type="text" name="KOL" class="form-control" value="<?php echo $row['KOL'];?>" readonly/>
                                  <label align="center">Bidang Usaha</label>
                                  <input type="text" name="BidangUsaha" class="form-control" value="<?php echo $row['BidangUsaha'];?>" readonly/>
                                  <label align="center">Status</label>
                                  <select name="status_iu" class="form-control" readonly>
                                    <option value="<?php echo $row['status_iu']; ?>"><?php echo $row['status_iu']; ?></option>
                                    <option value=""></option>
                                    <option value="Pending">Pending</option>
                                    <option value="Continue">Continue</option>
                                    <option value="Close">Close</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <hr><label align="center">HISTORI PEMBERIAN KREDIT</label><hr>
                                </div>
                                  <div class="form-group">
                                  <label align="center">Histori Pemberian Kredit</label>
                                  <input type="text" name="his_pem_kre" class="form-control" value="<?php echo $row['his_pem_kre'];?>" readonly/>
                                </div>
                                <div class="form-group">
                                  <hr><label align="center">CURRENT ISSUES INDUSTRI</label><hr>
                                </div>
                                  <div class="form-group">
                                  <label align="center">Current Issues Industri</label>
                                  <input type="text" name="cur_is_in" class="form-control" value="<?php echo $row['cur_is_in'];?>" readonly/>
                                </div>
                                <div class="form-group">
                                  <hr><label align="center">HISTORI PEMBAYARAN DAN KOLEKTIBILITAS</label><hr>
                                </div>
                                  <div class="form-group">
                                  <label align="center">Histori Pembayaran dan Kolektibilitas</label>
                                  <input type="text" name="his_pem_kol" class="form-control" value="<?php echo $row['his_pem_kol'];?>" readonly/>
                                </div>
                                <div class="form-group">
                                  <hr><label align="center">EARLY WARNING</label><hr>
                                </div>
                                  <div class="form-group">
                                  <label align="center">Early Warning</label>
                                  <input type="text" name="earl_war" class="form-control" value="<?php echo $row['earl_war'];?>" readonly/>
                                </div><!-- /.form group --><hr>
                                <div class="form-group">
                                  <center><label align="center">CATATAN HASIL REVIEW</label><hr></center>
                                  <!-- <input type="text" name="file" class="form-control" readonly/> -->
                                </div><!-- /.form group -->
                                <div class="form-group">
                                  <label align="center">ASPEK BISNIS</label><hr>
                                </div>
                                <div class="form-group">
                                  <label align="center">Hasil Review</label>
                                  <input type="text" name="HasilReview1" class="form-control" value="<?php echo $row['HasilReview1'];?>" readonly/>
                                  <label align="center">Yes/No</label>
                                  <input type="text" name="YN1" class="form-control" value="<?php echo $row['YN1'];?>" readonly/>
                                  <label align="center">Rekomendasi</label>
                                  <input type="text" name="Rekomendasi1" class="form-control" value="<?php echo $row['Rekomendasi1'];?>" readonly/>
                                  <label align="center">Tanggapan</label>
                                  <input type="text" name="Tanggapan1" class="form-control" value="<?php echo $row['Tanggapan1'];?>" readonly/>
                                  <label align="center">TargetDate</label>
                                  <input type="Date" name="TargetDate1" class="form-control" value="<?php echo $row['TargetDate1'];?>" readonly/>
                                  <label align="center">Status</label>
                                  <input type="text" name="Status1" class="form-control" value="<?php echo $row['Status1'];?>" readonly/>
                                </div>
                                <div class="form-group">
                                  <hr><label align="center">ASPEK KEUANGAN</label><hr>
                                </div>
                                <div class="form-group">
                                  <label align="center">Hasil Review</label>
                                  <input type="text" name="HasilReview2" class="form-control" value="<?php echo $row['HasilReview2'];?>" readonly/>
                                  <label align="center">Yes/No</label>
                                  <input type="text" name="YN2" class="form-control" value="<?php echo $row['YN2'];?>" readonly/>
                                  <label align="center">Rekomendasi</label>
                                  <input type="text" name="Rekomendasi2" class="form-control" value="<?php echo $row['Rekomendasi2'];?>" readonly/>
                                  <label align="center">Tanggapan</label>
                                  <input type="text" name="Tanggapan2" class="form-control" value="<?php echo $row['Tanggapan2'];?>" readonly/>
                                  <label align="center">TargetDate</label>
                                  <input type="Date" name="TargetDate2" class="form-control" value="<?php echo $row['TargetDate2'];?>" readonly/>
                                  <label align="center">Status</label>
                                  <input type="text" name="Status2" class="form-control" value="<?php echo $row['Status2'];?>" readonly/>
                                </div>
                                <div class="form-group">
                                  <hr><label align="center">KEMAMPUAN BAYAR</label><hr>
                                </div>
                                <div class="form-group">
                                  <label align="center">Hasil Review</label>
                                  <input type="text" name="HasilReview3" class="form-control" value="<?php echo $row['HasilReview3'];?>" readonly/>
                                  <label align="center">Yes/No</label>
                                  <input type="text" name="YN3" class="form-control" value="<?php echo $row['YN3'];?>" readonly/>
                                  <label align="center">Rekomendasi</label>
                                  <input type="text" name="Rekomendasi3" class="form-control" value="<?php echo $row['Rekomendasi3'];?>" readonly/>
                                  <label align="center">Tanggapan</label>
                                  <input type="text" name="Tanggapan3" class="form-control" value="<?php echo $row['Tanggapan3'];?>" readonly/>
                                  <label align="center">TargetDate</label>
                                  <input type="Date" name="TargetDate3" class="form-control" value="<?php echo $row['TargetDate3'];?>" readonly/>
                                  <label align="center">Status</label>
                                  <input type="text" name="Status3" class="form-control" value="<?php echo $row['Status3'];?>" readonly/>
                                </div>
                                <div class="form-group">
                                  <hr><label align="center">STRUKTUR DAN TUJUAN PEMBIAYAAN</label><hr>
                                </div>
                                <div class="form-group">
                                  <label align="center">Hasil Review</label>
                                  <input type="text" name="HasilReview4" class="form-control" value="<?php echo $row['HasilReview4'];?>" readonly/>
                                  <label align="center">Yes/No</label>
                                  <input type="text" name="YN4" class="form-control" value="<?php echo $row['YN4'];?>" readonly/>
                                  <label align="center">Rekomendasi</label>
                                  <input type="text" name="Rekomendasi4" class="form-control" value="<?php echo $row['Rekomendasi4'];?>" readonly/>
                                  <label align="center">Tanggapan</label>
                                  <input type="text" name="Tanggapan4" class="form-control" value="<?php echo $row['Tanggapan4'];?>" readonly/>
                                  <label align="center">TargetDate</label>
                                  <input type="Date" name="TargetDate4" class="form-control" value="<?php echo $row['TargetDate4'];?>" readonly/>
                                  <label align="center">Status</label>
                                  <input type="text" name="Status4" class="form-control" value="<?php echo $row['Status4'];?>" readonly/>
                                </div>
                                <div class="form-group">
                                  <hr><label align="center">ASPEK AGUNAN</label><hr>
                                </div>
                                <div class="form-group">
                                  <label align="center">Hasil Review</label>
                                  <input type="text" name="HasilReview5" class="form-control" value="<?php echo $row['HasilReview5'];?>" readonly/>
                                  <label align="center">Yes/No</label>
                                  <input type="text" name="YN5" class="form-control" value="<?php echo $row['YN5'];?>" readonly/>
                                  <label align="center">Rekomendasi</label>
                                  <input type="text" name="Rekomendasi5" class="form-control" value="<?php echo $row['Rekomendasi5'];?>" readonly/>
                                  <label align="center">Tanggapan</label>
                                  <input type="text" name="Tanggapan5" class="form-control" value="<?php echo $row['Tanggapan5'];?>" readonly/>
                                  <label align="center">TargetDate</label>
                                  <input type="Date" name="TargetDate5" class="form-control" value="<?php echo $row['TargetDate5'];?>" readonly/>
                                  <label align="center">Status</label>
                                  <input type="text" name="Status5" class="form-control" value="<?php echo $row['Status5'];?>" readonly/>
                                </div>
                                <div class="form-group">
                                  <hr><label align="center">KESESUAIAN DENGAN KETENTUAN & PERSYARATAN KREDIT</label><hr>
                                </div>
                                  <div class="form-group">
                                  <label align="center">Hasil Review</label>
                                  <input type="text" name="HasilReview6" class="form-control" value="<?php echo $row['HasilReview6'];?>" readonly/>
                                  <label align="center">Yes/No</label>
                                  <input type="text" name="YN6" class="form-control" value="<?php echo $row['YN6'];?>" readonly/>
                                  <label align="center">Rekomendasi</label>
                                  <input type="text" name="Rekomendasi6" class="form-control" value="<?php echo $row['Rekomendasi6'];?>" readonly/>
                                  <label align="center">Tanggapan</label>
                                  <input type="text" name="Tanggapan6" class="form-control" value="<?php echo $row['Tanggapan6'];?>" readonly/>
                                  <label align="center">TargetDate</label>
                                  <input type="Date" name="TargetDate6" class="form-control" value="<?php echo $row['TargetDate6'];?>" readonly/>
                                  <label align="center">Status</label>
                                  <input type="text" name="Status6" class="form-control" value="<?php echo $row['Status6'];?>" readonly/>
                                </div><!-- /.form group --><hr>
                                <div class="form-group">
                                  <center><label align="center">POTENSI RESIKO</label><hr></center>
                                <div class="form-group">
                                  <label align="center">Potensi Resiko</label>
                                  <input type="text" name="po_res" class="form-control" value="<?php echo $row['po_res'];?>" readonly/>
                                </div><!-- /.form group --><hr>
                                <div class="form-group">
                                  <center><label align="center">REKOMENDASI & DATELINE</label><hr></center>
                                </div><!-- /.form group -->
                                <div class="form-group">
                                  <label align="center">Rekomendasi</label>
                                  <input type="text" name="kro_koletext" class="form-control" value="<?php echo $row['kro_koletext'];?>" readonly/>
                                  <br>
                                  <input type="Date" name="kro_kole" class="form-control" value="<?php echo $row['kro_kole'];?>" readonly/>
                                </div><!-- /.form group --><hr>
                                <div class="form-group">
                                <center><label align="center">ESTIMASI KOLEKTIBILITAS & ACCOUNT STRATEGY</label><hr></center>
                                </div><!-- /.form group -->
                                <div class="form-group">
                                  <label align="center">Account Strategy</label>
                                  <input type="text" name="account_str" class="form-control" value="<?php echo $row['account_str'];?>" readonly/>
                                  <label align="center">Estimasi Kolektibilitas</label>
                                  <input type="text" name="est_kol" class="form-control" value="<?php echo $row['est_kol'];?>" readonly/>
                                  <label align="center">Watchlist</label>
                                  <input type="text" name="us_wl" class="form-control" value="<?php echo $row['us_wl'];?>" readonly/>
                                  <label align="center">Root Cause sbg Lesson Learned</label>
                                  <input type="text" name="root_cause" class="form-control" value="<?php echo $row['root_cause'];?>" readonly/>
                                </div><!-- /.form group -->
                                <!-- <button type="submit" name="submit_iu" value="submit" class="btn btn-block btn-warning">Submit</button> -->
                                <button type="button" data-dismiss="modal" class="btn btn-block btn-warning">Close</button>
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