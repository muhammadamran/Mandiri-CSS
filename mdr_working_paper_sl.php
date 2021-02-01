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
    header("Location: ./mdr_working_paper_sl.php?ntf=1");                                                  
  } else {
    echo "Updated Failed - Please contact your Administrator";
  }
}

if(isset($_POST["pick"]))    
{    
  $id_logbook           = $_POST['id_logbook'];

  $cek = mysql_query("SELECT * FROM tb_upload_logbook WHERE id_logbook ='$id_logbook'");
  $num = mysql_num_rows($cek);
  if($num == 1){
    $query = mysql_query("UPDATE tb_upload_logbook SET send_tindaklanjut = 1 WHERE id_logbook ='$id_logbook'");
    if($query){
      header("Location: ./mdr_working_paper_sl.php?ntf=101");                                                  
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
  $status_ccr                  = $_POST['status_ccr'];
  $dashboard                  = $_POST['dashboard'];
  $komentar                    = NULL;
  $reviewer                    = NULL;

  $query = mysql_query("INSERT INTO tb_parameter (id_logbook, hasil_review,tindak_lanjut,report,CHR,bobot,saran_perbaikan,tanggapan,target_date,komentar,tema_id,reviewer,status_ccr,dashboard) VALUES 
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
    '".$reviewer."',
    '".$status_ccr."',
    '".$dashboard."'
    );
    ");
  if($query){
    header("Location: ./mdr_working_paper_sl.php?ntf=$uid");                                                  
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
  $status_ccr                  = $_POST['status_ccr'];
  $dashboard                  = $_POST['dashboard'];
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
    status_ccr='".$status_ccr."',
    dashboard='".$dashboard."',
    reviewer='".$reviewer."' WHERE id_par='".$id_par."';
    ");
  // var_dump($query_update);die();
  if($query_update){
    header("Location: ./mdr_working_paper_sl.php?ntf=$id_par");                                                  
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
                <li><a href="./index.php"><b>CCR Tools</b></a></li>
                <li class="active"><b>Working Paper Supervisi Loan Monitoring</b></li>
              </ol>
            </div><!-- /.box-header -->
          </div>

          <div class="col-xs-12">
           <div class="box box-info">
            <div class="box-header with-border">
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
                      <th width="100px"><font style="font-size: 12px">Limit</font></th>
                      <th width="100px"><font style="font-size: 12px">Bade</font></th>
                      <th><font style="font-size: 12px">Informasi Umum</font></th>
                      <th><font style="font-size: 12px">Reputation & Character</font></th>
                      <th><font style="font-size: 12px">Repayment Capacity</font></th>
                      <th><font style="font-size: 12px">Recovery Rate</font></th>
                      <!-- <th><font style="font-size: 12px">Nota Allert</font></th> -->
                      <th><font style="font-size: 12px">Dashboard</font></th>
                      <th><font style="font-size: 12px">Action</font></th>
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
                      // $result = mysqli_query($con,"SELECT * FROM tb_upload_logbook WHERE status = 'On Progress' ");   
                      // $result = mysqli_query($con,"SELECT * FROM tb_upload_logbook ORDER BY id_logbook DESC");
                      $result = mysqli_query($con,"SELECT tb_upload_logbook.id_logbook,tb_upload_logbook.date_time_log,tb_upload_logbook.kd_cabang,tb_upload_logbook.kanwil_nm,
                        tb_upload_logbook.area_log,tb_upload_logbook.CBC_NAME,tb_upload_logbook.CIF,tb_upload_logbook.no_rek,
                        tb_upload_logbook.nm_customer,tb_upload_logbook.JNS_KRD,tb_upload_logbook.KOL_LOG,tb_upload_logbook.restru_no,
                        tb_upload_logbook.LIMIT_LOG,tb_upload_logbook.BADE_LOG,tb_upload_logbook.PDDAYS,tb_upload_logbook.IPDDAY,
                        tb_upload_logbook.MATDAT_LOG,tb_upload_logbook.PKDATE_LOG,tb_upload_logbook.Expertise,
                        tb_upload_logbook.BidangUsaha,
                        tb_upload_logbook.status_tindaklanjut,
                        tb_upload_logbook.reviewer,
                        tb_upload_logbook.C_1,
                        tb_upload_logbook.C_2,
                        tb_upload_logbook.C_3,
                        tb_upload_logbook.C_4,
                        tb_upload_logbook.C_5,
                        tb_upload_logbook.C_6,
                        tb_upload_logbook.C_7,
                        tb_upload_logbook.C_8,
                        tb_upload_logbook.C_9,
                        tb_upload_logbook.C_10,
                        tb_upload_logbook.C_11,
                        tb_upload_logbook.C_12,
                        tb_upload_logbook.C_13,
                        tb_upload_logbook.C_14,
                        tb_upload_logbook.limit_ex,
                        tb_upload_logbook.bade_bank_lain,
                        tb_upload_logbook.gusaha,
                        tb_upload_logbook.rating,
                        tb_upload_logbook.ioutlook,
                        tb_upload_logbook.PG,
                        tb_upload_logbook.HP,
                        tb_upload_bidangusaha.BIDANG_USAHA,
                        tb_upload_logbook.D_1,
                        tb_upload_logbook.D_2,
                        tb_upload_logbook.D_3,
                        tb_upload_logbook.D_4,
                        tb_upload_logbook.D_5,
                        tb_upload_logbook.D_6,
                        tb_upload_logbook.D_7,
                        tb_upload_logbook.D_8,
                        tb_upload_logbook.D_9,
                        tb_upload_logbook.D_10,
                        tb_upload_logbook.D_11,
                        tb_upload_logbook.D_12,
                        tb_upload_logbook.D_13,
                        tb_upload_logbook.D_14,
                        tb_upload_logbook.D_15,
                        tb_upload_logbook.D_16,
                        tb_upload_logbook.D_17,
                        tb_upload_logbook.Periode,
                        tb_upload_logbook.UsulanKolektibilitas,
                        tb_upload_logbook.UsulanWatchlist,
                        tb_upload_logbook.AccountStrategy,
                        tb_upload_logbook.CatatanUpBU,
                        tb_upload_logbook.TindakLanjut,
                        tb_upload_logbook.Time_line,
                        tb_upload_logbook.KemampuanMembayar,
                        tb_upload_logbook.KinerjaUsaha,
                        tb_upload_logbook.ProspekUsaha,
                        tb_upload_logbook.ParameterWatchlist,
                        tb_upload_logbook.c_HasilReview,
                        tb_upload_logbook.c_TindakLanjut,
                        tb_upload_logbook.c_Timeline,
                        tb_upload_logbook.c_Status,
                        tb_upload_logbook.ap_HasilReview,
                        tb_upload_logbook.ap_TindakLanjut,
                        tb_upload_logbook.ap_Timeline,
                        tb_upload_logbook.ap_Status,
                        tb_upload_logbook.IBA,
                        tb_upload_logbook.EK,
                        tb_upload_logbook.nt_AccountStrategy,
                        tb_upload_logbook.WT,
                        tb_upload_logbook.status_ccr,
                        tb_upload_logbook.CIF AS CIF1, tb_upload_bidangusaha.CIF AS CIF3
                        FROM tb_upload_logbook
                        LEFT JOIN tb_upload_bidangusaha ON tb_upload_logbook.CIF = tb_upload_bidangusaha.CIF
                        WHERE tb_upload_logbook.reviewer=".$_SESSION['userid']." AND tb_upload_logbook.send_tindaklanjut=0 ORDER BY id_logbook
                        ");   
                      if(mysqli_num_rows($result)>0){
                        $no = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $tipe_ccr = 'Working Paper Supervisi Loan Monitoring';
                          try {
                            $json = json_decode($row['status_ccr']);
                          } catch (Exception $e) {
                            $json = [$row['status_ccr']];
                          }
                          if (in_array($tipe_ccr, $json)) {
                            $no++;
                            echo "<tr>";
                            echo "<td><b><font style='font-size: 12px'>" . $no . ".</font></b></td>";
                            // echo "<td>" . $row['id_logbook'] . "</td>";
                            echo "<td><font style='font-size: 12px'>" . $row['CBC_NAME'] . "</font></td>";
                            echo "<td><font style='font-size: 12px'>" . $row['CIF'] . "</font></td>";
                            // echo "<td>" . $row['BIDANG_USAHA'] . "</td>";
                            if ($row['BIDANG_USAHA']==''){
                              echo "<td style='background-color: #1d2f61;'><font style='color: #f0ad4e'><font style='font-size: 12px'>CIF</font></font></td>";
                            }else{
                              echo "<td><font style='font-size: 12px'>".$row['BIDANG_USAHA'] . "</td>";
                            }
                            echo "<td><font style='font-size: 12px'>" . $row['nm_customer'] . "</td>";
                            echo "<td><font style='font-size: 12px'>"."Rp. " . number_format($row['LIMIT_LOG'],0,',','.')."</font></td>";
                            echo "<td><font style='font-size: 12px'>"."Rp. " . number_format($row['BADE_LOG'],0,',','.')."</font></td>";
                            echo "<td>" . "<a href='#' data-toggle='modal' data-target='#IUCREATE$row[id_logbook]' title='Update Result'><span class='label bg-navy margin'><font style='font-size: 10px'>Informasi Umum</font></span></a>" . "</td>";
                            echo "<td>" . "<a href='#' data-toggle='modal' data-target='#REVIEW-1-$row[id_logbook]' title='Update Result'><span class='label bg-orange margin'><font style='font-size: 10px'>Update R1</font></span></a>" . "</td>";
                            echo "<td>" . "<a href='#' data-toggle='modal' data-target='#REVIEW-2-$row[id_logbook]' title='Update Result'><span class='label bg-orange margin'><font style='font-size: 10px'>Update R2</font></span></a>" . "</td>";
                            echo "<td>" ."<a href='#' data-toggle='modal' data-target='#REVIEW-3-$row[id_logbook]' title='Update Result'><span class='label bg-orange margin'><font style='font-size: 10px'>Update R3</font></span></a>" . "</td>";
                            // echo "<td>" . "<a href='#' data-toggle='modal' data-target='#NOTAALLERT$row[id_logbook]' title='Update Result'><span class='label bg-navy margin'>Nota Allert</span></a>" . "</td>";
                            echo "<td>" . "<a href='#' data-toggle='modal' data-target='#DASHBOARD-SL$row[id_logbook]' title='Update Result'><span class='label bg-navy margin'><font style='font-size: 10px'>Dashboard</font></span></a>" . "</td>";
                            echo "<td align= ''width='200'>";
                            echo "
                              <a href='include/template/working-paper/SLM/mdr_ex_TP-SLM.php?id=$row[id_logbook]' title='Template WP'><span class='label label-primary'><font style='font-size: 10px'>Template WP SLM</span></font></a><br>                                                  
                              <a href='include/template/working-paper/SLM/mdr_ex_result-SLM.php?id=$row[id_logbook]' title='Result'><span class='label label-primary'><font style='font-size: 10px'>Result WP SLM</font></span></a><br><br>";
                            // if (empty($row['send_tindaklanjut'])) {
                            //   echo "<a href='#' data-toggle='modal' data-target='#pick$row[id_logbook]' title='Submit'><span class='label label-primary'><font style='font-size: 10px'>Submit DMHR</font></span></a>";
                            // }
                            echo "</td>";
                            echo "</tr>";
                          }
                          ?>

                          <?php 

                          /* start call all modal list for this loop */

                          include './modals/wp_ui_create.php';
                          include './modals/wp_ui_create_notaallert.php';
                          include './modals/wp_dashboard-SL.php';
                          include './modals/wp_ui_update_loan.php';

                          /* end */
                          ?>
                  


                    <div class="modal fade" id="pick<?php echo $row['id_logbook'];?>" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div>
                              <img src="assets/images/mandiri-logo.png" width="120px"><br><hr>
                              <label>Are you sure move this record?</label><br>
                            </div>
                            <h4 class="modal-title"></h4>
                          </div>
                          <div class="modal-body">
                            <form method="post" action=" ">
                              <input type="hidden" name="id_logbook" value="<?php echo $row['id_logbook']; ?>">
                              <div class="form-group">
                                <ol>
                                  <li>CIF : <?php echo $row['CIF'];?></li>
                                  <li>Debitur : <?php echo $row['nm_customer'];?></li>
                                  <li>Unit Kerja : <?php echo $row['CBC_NAME'];?></li>
                                  <li>Bidang Usaha : <?php echo $row['BIDANG_USAHA'];?></li>
                                </ol>
                              </div><hr>
                              <button type="submit" name="pick" value="<?php echo $row['id_logbook'];?>" class="btn btn-success btn-block btn-flat">Tindak Lanjut</button>
                              <button type="button" class="btn bg-orange btn-block btn-flat" data-dismiss="modal">Cancel</button>
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
</div><!-- 1 -->
<?php } ?>
</div><!-- 1 -->

<?php include 'include/foot_wp_page.php';?>
</body>
</html>

