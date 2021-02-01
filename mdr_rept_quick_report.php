<?php
include "include/restrict.php";
include "include/connection.php";

/* START - LIST ALL PROCESS */
include "process/wp_input_aspek.php";
// include "process/wp_submit_iu.php";
include "process/wp_update_pr.php";
include "process/wp_update_ekds.php";
include "process/wp_update_iu.php";

/* END LIST */

// INSERT DATA TO TBL_RESULT_REVIEW
if(isset($_POST["submit_CR"]))    
{    
  //$res_id           = $_POST['res_id'];
  $log_id           = $_POST['log_id'];
  $CIF              = $_POST['CIF'];
  $Debitur          = $_POST['Debitur'];
  $BidangUsaha      = $_POST['BidangUsaha'];
  $IC               = $_POST['IC'];
  $JenisFaskred     = $_POST['JenisFaskred'];
  $Limitx           = $_POST['Limitx'];
  $Bade             = $_POST['Bade'];
  $KOL              = $_POST['KOL'];
  $HasilReview1     = $_POST['HasilReview1'];
  $YN1              = $_POST['YN1'];
  $Rekomendasi1     = $_POST['Rekomendasi1'];
  $Tanggapan1       = $_POST['Tanggapan1'];
  $TargetDate1      = date('Y-m-d');
  $Status1          = $_POST['Status1'];
  $HasilReview2     = $_POST['HasilReview2'];
  $YN2              = $_POST['YN2'];
  $Rekomendasi2     = $_POST['Rekomendasi2'];
  $Tanggapan2       = $_POST['Tanggapan2'];
  $TargetDate2      = date('Y-m-d');
  $Status2          = $_POST['Status2'];
  $HasilReview3     = $_POST['HasilReview3'];
  $YN3              = $_POST['YN3'];
  $Rekomendasi3     = $_POST['Rekomendasi3'];
  $Tanggapan3       = $_POST['Tanggapan3'];
  $TargetDate3      = date('Y-m-d');
  $Status3          = $_POST['Status3'];
  $HasilReview4     = $_POST['HasilReview4'];
  $YN4              = $_POST['YN4'];
  $Rekomendasi4     = $_POST['Rekomendasi4'];
  $Tanggapan4       = $_POST['Tanggapan4'];
  $TargetDate4      = date('Y-m-d');
  $Status4          = $_POST['Status4'];
  $HasilReview5     = $_POST['HasilReview5'];
  $YN5              = $_POST['YN5'];
  $Rekomendasi5     = $_POST['Rekomendasi5'];
  $Tanggapan5       = $_POST['Tanggapan5'];
  $TargetDate5      = date('Y-m-d');
  $Status5          = $_POST['Status5'];
  $HasilReview6     = $_POST['HasilReview6'];
  $YN6              = $_POST['YN6'];
  $Rekomendasi6     = $_POST['Rekomendasi6'];
  $Tanggapan6       = $_POST['Tanggapan6'];
  $TargetDate6      = date('Y-m-d');
  $Status6          = $_POST['Status6'];

  $query = mysql_query("INSERT into tb_result_review 
    (log_id,CIF,Debitur,BidangUsaha,IC,JenisFaskred,
    Limitx,Bade,KOL,
    HasilReview1,YN1,Rekomendasi1,Tanggapan1,TargetDate1,Status1,
    HasilReview2,YN2,Rekomendasi2,Tanggapan2,TargetDate2,Status2,
    HasilReview3,YN3,Rekomendasi3,Tanggapan3,TargetDate3,Status3,
    HasilReview4,YN4,Rekomendasi4,Tanggapan4,TargetDate4,Status4,
    HasilReview5,YN5,Rekomendasi5,Tanggapan5,TargetDate5,Status5,
    HasilReview6,YN6,Rekomendasi6,Tanggapan6,TargetDate6,Status6)
    values 
    ('".$log_id."','".$CIF."','".$Debitur."','".$BidangUsaha."','".$IC."','".$JenisFaskred."',
    '".$Limitx."','".$Bade."','".$KOL."',
    '".$HasilReview1."','".$YN1."','".$Rekomendasi1."','".$Tanggapan1."','".$TargetDate1."','".$Status1."',
    '".$HasilReview2."','".$YN2."','".$Rekomendasi2."','".$Tanggapan2."','".$TargetDate2."','".$Status2."',
    '".$HasilReview3."','".$YN3."','".$Rekomendasi3."','".$Tanggapan3."','".$TargetDate3."','".$Status3."',
    '".$HasilReview4."','".$YN4."','".$Rekomendasi4."','".$Tanggapan4."','".$TargetDate4."','".$Status4."',
    '".$HasilReview5."','".$YN5."','".$Rekomendasi5."','".$Tanggapan5."','".$TargetDate5."','".$Status5."',
    '".$HasilReview6."','".$YN6."','".$Rekomendasi6."','".$Tanggapan6."','".$TargetDate6."','".$Status6."')");

  if($query){
    header("Location: ./mdr_working_paper.php?ntf=1");                                                  
  } else {
    echo "Updated Failed - Please contact your Administrator";
  }
}

if(isset($_POST["pick"]))    
{    
  $id_logbook           = $_POST['id_logbook'];
  $status_tindaklanjut  = $_POST['status_tindaklanjut'];

  $cek = mysql_query("SELECT * FROM tb_upload_logbook WHERE id_logbook ='$id_logbook'");
  $num = mysql_num_rows($cek);
  if($num == 1){
    $query = mysql_query("UPDATE tb_upload_logbook SET status_tindaklanjut = 'Tindak Lanjut' WHERE id_logbook ='$id_logbook'");
    if($query){
      header("Location: ./mdr_working_paper.php");                                                  
    } else {
      echo "Updated Failed - Please contact your Administrator";
    }
  } else {
    echo "Records cannot be found!! Please contact your System Administrator" ;
  }
}

if(isset($_POST["review"]))    
{    
  // $date = explode('/', $_POST['target_date']);
  // $target_date                 = $date[2] . '-' . $date[0] . '-' . $date[1];
  $date = $_POST['target_date'];

  $id_logbook                  = $_POST['id_logbook'];
  $id_tema                     = $_POST['id_tema'];
  $hasil_review                = $_POST['hasil_review'];
  $tindak                      = $_POST['tindak'];
  $report                      = $_POST['report'];
  $chr                         = $_POST['chr'];
  $bobot                       = $_POST['bobot'];
  $saran                       = $_POST['saran'];
  $tanggapan                   = $_POST['tanggapan'];
  $Risiko                      = $_POST['Risiko'];
  $Dampak                      = $_POST['Dampak'];
  $Mitigasi                    = $_POST['Mitigasi'];
  $KP                          = $_POST['KP'];
  $komentar                    = NULL;
  $reviewer                    = NULL;

  $query = mysql_query("INSERT INTO tb_parameter (id_logbook, hasil_review,tindak_lanjut,report,CHR,bobot,saran_perbaikan,tanggapan,target_date,komentar,tema_id,reviewer) VALUES 
    (
    '".$id_logbook."',
    '".$hasil_review."',
    '".$tindak."',
    '".$report."',
    '".$chr."',
    '".$bobot."',
    '".$saran."',
    '".$tanggapan."',
    '".$date."',
    '".$komentar."',
    '".$id_tema."',
    '".$reviewer."'
    
    );
    ");
  if($query){
    header("Location: ./mdr_working_paper.php?ntf=$uid");                                                  
  } else {
    echo "Updated Failed - Please contact your Administrator";
  }
}

if(isset($_POST["review_update"]))    
{    
  // $date = explode('/', $_POST['target_date']);
  // $target_date                 = $date[2] . '-' . $date[0] . '-' . $date[1];
  $date = $_POST['target_date'];

  $id_par                      = $_POST['id_par'];
  $id_logbook                  = $_POST['id_logbook'];
  $id_tema                     = $_POST['id_tema'];
  $hasil_review                = $_POST['hasil_review'];
  $tindak                      = $_POST['tindak'];
  $report                      = $_POST['report'];
  $chr                         = $_POST['chr'];
  $bobot                       = $_POST['bobot'];
  $saran                       = $_POST['saran'];
  $tanggapan                   = $_POST['tanggapan'];
  $Risiko                      = $_POST['Risiko'];
  $Dampak                      = $_POST['Dampak'];
  $Mitigasi                    = $_POST['Mitigasi'];
  $KP                          = $_POST['KP'];
  $komentar                    = NULL;
  $reviewer                    = NULL;

  $query_update = mysql_query("UPDATE tb_parameter SET 
    id_logbook='".$id_logbook."', 
    hasil_review='".$hasil_review."',
    tindak_lanjut='".$tindak."',
    report='".$report."',
    CHR='".$chr."',
    bobot='".$bobot."',
    saran_perbaikan='".$saran."',
    tanggapan='".$tanggapan."',
    target_date='".$date."',
    komentar='".$komentar."',
    tema_id='".$id_tema."',
    Risiko='".$Risiko."',
    Dampak='".$Dampak."',
    Mitigasi='".$Mitigasi."',
    KP='".$KP."',
    reviewer='".$reviewer."' WHERE id_par='".$id_par."';
    ");
  // var_dump($query_update);die();
  if($query_update){
    header("Location: ./mdr_working_paper.php?ntf=$id_par");                                                  
  } else {
    echo "Updated Failed - Please contact your Administrator";
  }
}


?>

<!DOCTYPE html>
<html>
<?php include 'include/head.php';?>
<body class="skin-blue">
  <?php include 'include/header.php';?>
  <?php include 'include/sidebar_all.php';?>
  <?php
  mysql_connect($dbhost, $dbuser, $dbpassword);
  mysql_select_db($dbname);  
  $role = mysql_query("SELECT * FROM tb_user WHERE user_name = '$_SESSION[username]' ");
  $role2 = mysql_fetch_array($role);

  if ($role2['user_role'] != 'Administrator' && $role2['user_role'] != 'Reviewer' && $role2['user_role'] != 'EAM' && $role2['user_role'] != 'GH' && $role2['user_role'] != 'DH')  {
   include './notif_denied.php';  
 } else {
  ?>

  <div class="wrapper">
    <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box-header">
              <ol class="breadcrumb">
                <li><a href="./index.php"> <b>Home</b></a></li>
                <li><a href="./index.php"><b>Report</b></a></li>
                <li class="active"><b>Quick Report</b></li>
              </ol>
            </div><!-- /.box-header -->
          </div>

          <div class="col-xs-12">
            <div class="box box-warning">
              <div class="box-header with-border">
                <i class="fa fa-search" style="color: #1d2f61"></i><b> Sreach Data Quick Report</b>
                <h3 class="box-title"></h3>
              </div><!-- /.box-header -->
              <div align="center">
                <?php
                $cdc_ = '';
                $type_ = '';
                $month_ = '';
                $year_ = '';
                if (isset($_POST['cbc_name'])) {
                  $cbc_ = $_POST['cbc_name'];
                }
                if (isset($_POST['type_logbook'])) {
                  $type_ = $_POST['type_logbook'];
                }
                if (isset($_POST['month'])) {
                  $month_ = $_POST['month'];
                }
                if (isset($_POST['year'])) {
                  $year_ = $_POST['year'];
                }
                ?>
                <form class="form-inline" method="POST" action="?page=1" role="form">
                <div class="form-group ">
                  <label>Unit Kerja</label>
                  <div>
                    <select class="form-control select2" name="cbc_name[]" data-placeholder="Unit Kerja" value="<?= $cbc_ ?>" id="cbc_name" multiple>
                      <!-- <option>--- SELECT ---</option> -->
                      <?php
                      mysql_connect($dbhost, $dbuser, $dbpassword);
                      mysql_select_db($dbname);
                      $result=mysql_query("SELECT * FROM tb_unit_kerja_master ORDER BY uk_name ASC");
                      while($data=mysql_fetch_array($result)) {
                        echo "<option value='$data[uk_name]' ".(in_array($data[uk_name], $cbc_) ? 'selected' : '')."> $data[uk_name] </option>";
                      }
                      ?>
                    </select><br>
                    <!-- <input type="text" name="cbc_name" class="form-control select2" value="<?= $cbc_ ?>"> -->
                  </div>
                </div>
                <div class="form-group ">
                  <label>Segments</label>
                  <div>
                    <select class="form-control select2" data-placeholder="Segments" name="type_logbook" id="type_logbook" multiple>
                      <!-- <option value="">--- SELECT ---</option> -->
                      <option value="Corporate" <?= ($type_ == 'Corporate' ? 'selected' : '') ?>>Corporate</option>
                      <option value="Commercial" <?= ($type_ == 'Commercial' ? 'selected' : '') ?>>Commercial</option>
                    </select><br>
                  </div>
                </div>
                <div class="form-group ">
                  <label>Month</label>
                  <div>
                    <select name="month" class="form-control" id="month">
                      <option value>-- Select Month --</option>
                      <option value="1" <?= !empty($month_) && $month_ == '1' ? 'selected' : '' ?>>1</option>
                      <option value="2" <?= !empty($month_) && $month_ == '2' ? 'selected' : '' ?>>2</option>
                      <option value="3" <?= !empty($month_) && $month_ == '3' ? 'selected' : '' ?>>3</option>
                      <option value="4" <?= !empty($month_) && $month_ == '4' ? 'selected' : '' ?>>4</option>
                      <option value="5" <?= !empty($month_) && $month_ == '5' ? 'selected' : '' ?>>5</option>
                      <option value="6" <?= !empty($month_) && $month_ == '6' ? 'selected' : '' ?>>6</option>
                      <option value="7" <?= !empty($month_) && $month_ == '7' ? 'selected' : '' ?>>7</option>
                      <option value="8" <?= !empty($month_) && $month_ == '8' ? 'selected' : '' ?>>8</option>
                      <option value="9" <?= !empty($month_) && $month_ == '9' ? 'selected' : '' ?>>9</option>
                      <option value="10" <?= !empty($month_) && $month_ == '10' ? 'selected' : '' ?>>10</option>
                      <option value="11" <?= !empty($month_) && $month_ == '11' ? 'selected' : '' ?>>11</option>
                      <option value="12" <?= !empty($month_) && $month_ == '12' ? 'selected' : '' ?>>12</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label>Years</label>
                  <div>
                    <select name="year" class="form-control" id="year">
                      <option value>-- Select Year --</option>
                      <?php for ($i=2015; $i < 2030; $i++) { ?>
                        <option value="<?= $i ?>" <?= !empty($year_) && $year_ == $i ? 'selected' : '' ?>><?= $i ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div><br>
                  <button type="submit" name="search" value="search" class="btn btn-warning btn-flat"><i class="fa fa-search"></i> Search EAM Logbook</button>
                </div>
              </form><br>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
          <!-- end search -->

          <div class="col-xs-12">
           <div class="box box-info">
            <div class="box-header with-border">
              <?php include 'include/alert/ex_notif.php'; ?>
              <img src="assets/images/mandiri-logo.png" width="70px">
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"></button>
              </div>
            </div>
            <div class="box-body">
              <div class="box-body table-responsive no-padding">
                <table id="example1" class="table table-hover">
                  <thead>
                    <tr>
                      <th><font style="font-size: 12px">No.</font></th>
                      <th><font style="font-size: 12px">Unit Kerja</font></th>
                      <th><font style="font-size: 12px">CIF</font></th>
                      <th><font style="font-size: 12px">Bidang Usaha</font></th>
                      <th><font style="font-size: 12px">Debitur</font></th>
                      <th><font style="font-size: 12px">Limit</font></th>
                      <th><font style="font-size: 12px">Bade</font></th>
                      <th><font style="font-size: 12px">Action</font></th>
                      <th><font style="font-size: 12px">Download</font></th>
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
                    $result = mysqli_query($con,"SELECT 
                      a.id_logbook,a.CBC_NAME,a.CIF,a.BidangUsaha,a.nm_customer,a.LIMIT_LOG,a.BADE_LOG,b.report,
                      (SELECT c.id_logbook FROM tb_parameter c WHERE c.id_logbook=a.id_logbook LIMIT 1) AS logbook 
                      FROM tb_upload_logbook a
                      LEFT JOIN tb_parameter b ON a.id_logbook = b.id_logbook
                      WHERE a.reviewer=".$_SESSION['userid']." AND b.report='Quick Report' GROUP BY b.id_logbook ORDER BY a.id_logbook DESC
                      ");   
                    if(mysqli_num_rows($result)>0){
                      $no = 0;
                      while($row = mysqli_fetch_array($result))
                      {
                        $no++;
                        echo "<tr>";
                        echo "<td><font style='font-size: 12px'><b>" . $no . ".</b></font></td>";
                          // echo "<td><font style='font-size: 12px'>" . $row['id_logbook'] . "</font></td>";
                        echo "<td><font style='font-size: 12px'>" . $row['CBC_NAME'] . "</font></td>";
                        echo "<td><font style='font-size: 12px'>" . $row['CIF'] . "</font></td>";
                          // echo "<td><font style='font-size: 12px'>" . $row['BIDANG_USAHA'] . "</font></td>";
                        if ($row['BidangUsaha']==''){
                          echo "<td style='background-color: #1d2f61;'><font style='color: #f0ad4e'>CIF</font></font></td>";
                        }else{
                          echo "<td><font style='font-size: 12px'>".$row['BidangUsaha'] . "</font></td>";
                        }
                        echo "<td><font style='font-size: 12px'>" . $row['nm_customer'] . "</font></td>";
                        echo "<td><font style='font-size: 12px'>"."Rp. " . number_format($row['LIMIT_LOG'],0,',','.')."</font></td>";
                        echo "<td><font style='font-size: 12px'>"."Rp. " . number_format($row['BADE_LOG'],0,',','.')."</font></td>";
                        echo "<td align= ''width='200'>";
                        if (!empty($row['logbook'])) {
                          echo "<a href='mdr_rept_detail.php?id=$row[id_logbook]&report=$row[report]' title='Lihat Report'><span class='label label-primary'><font style='font-size: 10px'>Lihat Repot</font></span></a>";   
                        }                                               
                        echo "</td>";
                        echo "<td align= ''width='200'>
                        <a href='include/template/report/mdr_ex_TP-quick_report.php?id=$row[id_logbook]' title='Template Quick Report'><span class='label label-primary'><font style='font-size: 10px'>Template Quick Report</font></span></a>                                                  
                        <a href='include/template/report/mdr_ex_result-quick_report.php?id=$row[id_logbook]&report=$row[report]' title='Result Quick Report'><span class='label label-primary'><font style='font-size: 10px'>Result Quick Report</font></span></a>
                        </td>";
                        echo "</tr>";
                        ?>

                        <?php 

                        /* start call all modal list for this loop */

                        include './modals/wp_ui_create.php';
                        include './modals/wp_ui_create_notaallert.php';
                        include './modals/wp_dashboard.php';
                        include './modals/wp_ui_update.php';

                        /* end */
                        ?>

                        <div class="modal fade" id="pick<?php echo $row['id_logbook'];?>" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div>
                                  <img src="assets/images/mandiri-logo.png" width="120px"><br><hr>
                                  <label><h3>Are You Sure Move this Record?</h3></label><br>
                                </div>
                                <h4 class="modal-title"><b></h4>
                                </div>
                                <div class="modal-body">
                                  <form method="post" action=" ">
                                    <div class="form-group">
                                      <?php echo $row['nm_customer'];?><br>
                                      <?php echo $row['CBC_NAME'];?>
                                    </div><hr>
                                    <button type="submit" name="pick" value="<?php echo $row['id_logbook'];?>" class="btn btn-info">Tindak Lanjut</button>
                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div> 

                          <div id="push"></div>

                          <?php
                        }
                      } 
                      mysqli_close($con);
                      ?>
                    </tbody>
              <tfoot>
                <tr>
                  <th style="text-align:right" colspan="5"><font style="font-size: 12px">Total :</font></th>
                  <th style="text-align:left"></th>
                  <th style="text-align:left"></th>
                  <th colspan="7"></th>
                </tr>
              </tfoot>
            </table>
          </div><!-- <div class="box-body table-responsive no-padding"> -->
          </div><!-- /.box-body -->
        </div>
      </div>
    </div><!-- 1 -->
  </section><!-- 1 -->
<?php } ?>
</div><!-- 1 -->
<?php include 'include/footer.php';?>
<!-- <?php include 'include/foot_wp_page.php';?> -->
</div><!-- ./wrapper -->

<?php include 'include/foot.php';?>
<!-- page script -->
<script type="text/javascript">
   $(function () {
    $('.select2').select2()
     });
</script>
</body>
</html>

