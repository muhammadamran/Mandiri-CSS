<?php

include "include/restrict.php";
include "include/connection.php";

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

if(isset($_POST["submit"]))    
{    
  $res_id           = $_POST['res_id'];
  $id_logbook           = $_POST['id_logbook'];
  $CIF              = $_POST['CIF'];
  $Debitur          = $_POST['Debitur'];
  $BidangUsaha      = $_POST['BidangUsaha'];
  $IC               = $_POST['IC'];
  $JenisFaskred     = $_POST['JenisFaskred'];
  $Limitx           = $_POST['Limitx'];
  $Bade             = $_POST['Bade'];
  $KOL              = $_POST['KOL'];
  $account_str      = $_POST['account_str'];
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
  $al_down          = $_POST['al_down'];
  $us_wl            = $_POST['us_wl'];
  $po_res           = $_POST['po_res'];
  $root_cause       = $_POST['root_cause'];
  $his_pem_kre      = $_POST['his_pem_kre'];
  $kro_kole         = $_POST['kro_kole'];
  $kro_koletext     = $_POST['kro_koletext'];

  $cek = mysql_query("SELECT * FROM tb_result_review");
  $num = mysql_num_rows($cek);
  if($num == 0){
    $query = mysql_query("INSERT into tb_result_review values(
      '','$res_id','$log_id','$CIF','$Debitur','$BidangUsaha','$IC','$JenisFaskred','$Limitx','$Bade','$KOL','$account_str',
      '$HasilReview1','$YN1','$Rekomendasi1','$Tanggapan1','$TargetDate1','$Status1',
      '$HasilReview2','$YN2','$Rekomendasi2','$Tanggapan2','$TargetDate2','$Status2',
      '$HasilReview3','$YN3','$Rekomendasi3','$Tanggapan3','$TargetDate3','$Status3',
      '$HasilReview4','$YN4','$Rekomendasi4','$Tanggapan4','$TargetDate4','$Status4',
      '$HasilReview5','$YN5','$Rekomendasi5','$Tanggapan5','$TargetDate5','$Status5',
      '$HasilReview6','$YN6','$Rekomendasi6','$Tanggapan6','$TargetDate6','$Status6',
      '$al_down','$us_wl','$po_res','$root_cause','$his_pem_kre','$kro_kole','$kro_koletext')");
    if ($query) {
      header("Location: ./mdr_working_paper.php?ntf=1");  
    } else {
      header("Location: ./mdr_working_paper.php?ntf=3");
    }
  } else {
    header("Location: ./mdr_working_paper.php?ntf=2");
  }

}

if (isset($_POST["upload"])) {  

  $uploaddir  = 'file/reviewresult/';
  $uploadfile = $uploaddir.date('YmdHis');
  $log_id     = $_POST['log_id'];

  $query = move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
  if ($query) {
    if (mysql_query("LOAD DATA LOCAL INFILE '$uploadfile'
      INTO TABLE tb_result_review
      FIELDS TERMINATED BY ','
      LINES TERMINATED BY '\n'
      IGNORE 3 LINES
      (log_id,CIF,Debitur,BidangUsaha,IC,JenisFaskred,Limitx,Bade,KOL,account_str,est_kol,status_kol,3pilar_pem,3pilar_kinerja,3pilar_prospek,
      HasilReview1,YN1,Rekomendasi1,Tanggapan1,TargetDate1,Status1,
      HasilReview2,YN2,Rekomendasi2,Tanggapan2,TargetDate2,Status2,
      HasilReview3,YN3,Rekomendasi3,Tanggapan3,TargetDate3,Status3,
      HasilReview4,YN4,Rekomendasi4,Tanggapan4,TargetDate4,Status4,
      HasilReview5,YN5,Rekomendasi5,Tanggapan5,TargetDate5,Status5,
      HasilReview6,YN6,Rekomendasi6,Tanggapan6,TargetDate6,Status6,
      al_down,us_wl,po_res,root_cause,his_pem_kre,kro_kole,kro_koletext)")) 
    {
      mysql_query("UPDATE tb_logbook set status = 'Review Uploaded' where log_id = '$log_id'");
      header("Location: ./mdr_working_paper.php?ntf=1");
    } else{
      echo "submit data failed";
    }
  } else {
    echo "moving data failed".mysql_error();
  }
}

if(isset($_POST["log_by"]))    
{    
  $uid          = $_POST['uid'];
  $user_name    = $_POST['user_name'];

  $cek = mysql_query("SELECT * FROM tb_result_review");
  $num = mysql_num_rows($cek);
  if($num == 1){
    $query = mysql_query("UPDATE tb_result_review set status_kol ='Complete' where log_id ='$uid'");
    if($query){
      header("Location: ./mdr_working_paper_done.php?ntf=0");                                                  
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

if(isset($_POST["search"]))    
{    
  $query1 = '';
  if ($_POST['size']) {
    $query1 = "debitur_type ='$_POST[size]' AND status = 'No Action'";
  }
  if ($_POST['month']) {
    if ($query1 != '') {
      $query1 .= ' and ';
    }
    $query1 .= "data_month ='$_POST[month]' AND status = 'No Action'";
  }
  if ($_POST['year']) {
    if ($query1 != '') {
      $query1 .= ' and ';
    }
    $query1 .= "data_year ='$_POST[year]' AND status = 'No Action'";
  }
} else {
  $query1   = "debitur_type ='No Data' ";

  $query1  .= "and data_month ='No Data' ";

  $query1  .= "and data_year ='No Data' ";
  //$query1 .= "and rcd_valid_date ='No Data' ";
}

if(isset($_POST["Approve"]))    
{    
  $res_id             = $_POST['res_id'];
  $process_by         = $_POST['process_by'];
  $status_dmtl        = $_POST['status_dmtl'];
  $process_date       = date('Y-m-d');

  $cek = mysql_query("SELECT * FROM tb_result_review WHERE res_id ='$res_id'");
  $num = mysql_num_rows($cek);
  if($num == 1){
    $query = mysql_query("UPDATE tb_result_review SET status_dmtl = 'DMTL', process_by = '$process_by', process_date = '$process_date' WHERE res_id ='$res_id'");
    if($query){
      header("Location: ./mdr_working_paper_complete.php?unit=$process_by");                                                  
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

    if ($role2['user_role'] != 'Administrator' && $role2['user_role'] != 'Reviewer' && $role2['user_role'] != 'EAM' && $role2['user_role'] != 'Atasan I' && $role2['user_role'] != 'Atasan II')  {
     include './notif_denied.php';  
   } else {
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box-header">
              <ol class="breadcrumb">
                <li><a href="./index.php"> Home</a></li>
                <li><a href="./index.php">EAM Tools</a></li>
                <li class="active">Data EAM Logbook</li>
              </ol>
              <div class="box box-warning">
                <div class="box-header with-border">
                 <i class="fa fa-search"></i>
                 <h3 class="box-title">Search EAM Logbook</h3>
                 <div class="box-tools pull-right">
                  <!-- <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button> -->
                </div><!-- /.box-tools -->
              </div><!-- /.box-header -->
              <div class="row">
                <div align="center">
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
                    <div class="form-group ">
                      <label>CBC Department</label>
                      <div>
                        <select class="form-control" name="cbc_name"  value="<?= $cbc_ ?>" id="clientlist2">
                          <option>--- SELECT ---</option>
                          <?php
                          mysql_connect($dbhost, $dbuser, $dbpassword);
                          mysql_select_db($dbname);
                          $result=mysql_query("SELECT * FROM tb_unit_kerja_master ORDER BY uk_name ASC");
                          while($data=mysql_fetch_array($result)) {
                            echo "<option value='$data[uk_name]'> $data[uk_name] </option>";
                          }
                          ?>
                        </select>
                        <!-- <input type="text" name="cbc_name" class="form-control" value="<?= $cbc_ ?>"> -->
                      </div>
                    </div>
                    <div class="form-group ">
                      <label>Type</label>
                      <div>
                        <select class="form-control" name="type_logbook" id="dropdown">
                          <option value="">--- SELECT ---</option>
                          <option value="Corporate" <?= ($type_ == 'Corporate' ? 'selected' : '') ?>>Corporate</option>
                          <option value="Commercial" <?= ($type_ == 'Commercial' ? 'selected' : '') ?>>Commercial</option>
                        </select>                          
                      </div>
                    </div>
                    <div class="form-group ">
                      <label>Month</label>
                      <div>
                        <input type="date" name="start_date" class="form-control" value="<?= $start_ ?>">
                      </div>
                    </div>
                    <div class="form-group ">
                      <label>Years</label>
                      <div>
                        <input type="date" name="end_date" class="form-control" value="<?= $end_ ?>">
                      </div>
                    </div>
                    <div><br>
                      <button type="submit" name="search" value="search" class="btn btn-warning"><i class="fa fa-search"></i> Search EAM Logbook</button>
                    </div>
                  </form><br>
                </div><!-- /.box-body -->
              </div>
            </div><!-- /.box -->
            <!-- end search -->
          </div><!-- /.box-header -->
          <div>
            <form>

            </form>              
          </div>
          <div class="box-header">
            <div class="box-body">
              <div class="box-body table-responsive no-padding">
                <form id="frm-example" action="" method="POST">
                  <table id="example" class="table">
                    <thead>
                      <tr>
                        <th><input name="select_all" value="1" id="example-select-all" type="checkbox"/></th>
                        <th>No.</th>
                        <th>Kantor Wilayah</th>
                        <th>CBC</th>
                        <th>CIF</th>
                        <th>No. Rekening</th>
                        <th>Nama Costumer</th>
                        <th>Jenis Kredit</th>
                        <th>KOL</th> 
                        <th>Limit</th>
                        <th>Bade</th>
                        <th>Watchlist</th>
                        <th>Bidang Usaha</th>
                        <th>Sector Usaha</th>
                        <!-- <th>Criteria</th> -->
                        <th>YOYO</th>   
                        <!-- <th>Set Reviewer</th> -->
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
                        tb_upload_logbook.MATDAT_LOG,tb_upload_logbook.PKDATE_LOG,tb_upload_logbook.Expertise,tb_upload_watchlist.ACCT_STRATEGY,
                        tb_upload_bidangusaha.BIDANG_USAHA,tb_upload_sectorusaha.ic_sector,tb_upload_logbook.reviewer,
                        tb_upload_logbook.CIF AS CIF1, tb_upload_watchlist.CIF AS CIF2, tb_upload_bidangusaha.CIF AS CIF3, tb_upload_sectorusaha.CIF AS CIF4, tb_upload_yoyo.CIF AS CIF5
                        FROM tb_upload_logbook
                        LEFT JOIN tb_upload_watchlist ON tb_upload_logbook.CIF = tb_upload_watchlist.CIF
                        LEFT JOIN tb_upload_bidangusaha ON tb_upload_logbook.CIF = tb_upload_bidangusaha.CIF
                        LEFT JOIN tb_upload_sectorusaha ON tb_upload_logbook.CIF = tb_upload_sectorusaha.CIF
                        LEFT JOIN tb_upload_yoyo ON tb_upload_logbook.CIF = tb_upload_yoyo.CIF $where ORDER BY id_logbook
                        ");
        // var_dump($result);exit;

                // $result = mysqli_query($con,"SELECT * FROM tb_upload_logbook "); 
                      $get_reviewer = mysqli_query($con,"SELECT user_id, user_name FROM tb_user WHERE user_role='Reviewer'");
                      $hasil = '';
                      while($row_reviewer = mysqli_fetch_array($get_reviewer)) {
                        $hasil .= '<option value="'.$row_reviewer['user_id'].'">'.$row_reviewer['user_name'].'</option>';
                      }

                      if(mysqli_num_rows($result)>0){
                        $no = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $no++;
                          echo "<tr>";
                          echo "<th><input name='select_all' value='1' id='example-select-all' type='checkbox' /></th>";
                          echo "<td><b>" . $no . ".</b></td>";
                          // echo "<td>" . $row['id_logbook'] . "</td>";
                              // echo "<td>" . $row['date_time_log'] . "</td>";
                              // echo "<td>" . $row['kd_cabang'] . "</td>";
                          echo "<td>" . $row['kanwil_nm'] . "</td>";
                          echo "<td>" . $row['CBC_NAME'] . "</td>";
                          echo "<td>" . $row['CIF'] . "</td>";
                          echo "<td>" . $row['no_rek'] . "</td>";
                          echo "<td>" . $row['nm_customer'] . "</td>";
                          echo "<td>" . $row['JNS_KRD'] . "</td>";
                          echo "<td>" . $row['KOL_LOG'] . "</td>";
                          echo "<td>" . $row['LIMIT_LOG'] . "</td>";
                          echo "<td>" . $row['BADE_LOG'] . "</td>";
                          if ($row['CIF1']==$row['CIF2']){
                           echo "<td>YES</td>";
                         }else{
                           echo "<td>NO</td>";
                         }
                         if ($row['BIDANG_USAHA']==''){
                          echo "<td style='background-color: #F0FFFF;'>CIF Not Found</td>";
                        }else{
                          echo "<td>".$row['BIDANG_USAHA'] . "</td>";
                        }
                        // echo "<td>" . $row['BIDANG_USAHA'] . "</td>";
                        if ($row['ic_sector']==''){
                          echo "<td style='background-color: #F0FFFF;'>CIF Not Found</td>";
                        }else{
                          echo "<td>".$row['ic_sector'] . "</td>";
                        }
                        // echo "<td>" . $row['ic_sector'] . "</td>";
                        // echo "<td>" .'Database'. "</td>";
                        if ($row['CIF1']==$row['CIF5']){
                          echo "<td>YES</td>";
                        }else{
                          echo "<td>NO</td>";
                        }
                        // if (!empty($row['reviewer'])) {
                        //   $get_user = mysql_query("SELECT user_name FROM tb_user WHERE user_id ='".$row['reviewer']."'");
                        //   $result_user = mysql_fetch_array($get_user);
                        //   echo "<td>" . $result_user['user_name'] . "</td>";
                        // } else {
                        //   echo "<td>
                        //   <select id='reviewer-".$row['id_logbook']."' class='form-control' onchange='updateReviewer(".$row['id_logbook'].")'>
                        //   <option>--- SELECT REVIEWER ---</option>
                        //   ".$hasil."
                        //   </select>  
                        //   <span id='result-".$row['id_logbook']."'></span>
                        //   <script>
                        //   function updateReviewer(id) {
                        //     var get_value = document.getElementById('reviewer-'+id).value;

                        //     if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
                        //       xmlhttp=new XMLHttpRequest();
                        //       } else {// code for IE6, IE5
                        //         xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
                        //       }

                        //       xmlhttp.onreadystatechange=function() {
                        //         if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        //           var selectbox = document.getElementById('reviewer-'+id);
                        //           var resultbox = document.getElementById('result-'+id);
                        //           selectbox.style.display = 'none';
                        //           resultbox.innerHTML = '' + xmlhttp.response + ''
                        //         }
                        //       }

                        //       xmlhttp.open('GET','proses_ajax.php?id='+id+'&value='+get_value,true);
                        //       xmlhttp.send();
                        //     }
                        //     </script>
                            echo "</td>";
                          // }
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
                        </div>
                      </div>
                      <?php
                    }
                  } 
                  mysqli_close($con);
                  ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th style="text-align:right" colspan="9" rowspan="1">Total:</th>
                    <th rowspan="1" colspan="1"></th>
                    <th rowspan="1" colspan="1"></th>
                    <th rowspan="1" colspan="4"></th>
                  </tr>
                </table>
              </form>
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
    $("#example1").dataTable({
      "fnFooterCallback": function ( nRow, aaData, iStart, iEnd, aiDisplay ) {
        var i1 = 0;
        for ( var i=0 ; i<aaData.length ; i++ )
        {
          i1 += aaData[i][9]*1;
        }

        var ip1 = 0;
        for ( var i=iStart ; i<iEnd ; i++ )
        {
          ip1 += aaData[ aiDisplay[i] ][9]*1;
        }

        /* Modify the footer row to match what we want */
        var n1 = nRow.getElementsByTagName('th');
        n1[1].innerHTML = parseInt(ip1);

        var i2 = 0;
        for ( var i=0 ; i<aaData.length ; i++ )
        {
          i2 += aaData[i][10]*1;
        }

        var ip2 = 0;
        for ( var i=iStart ; i<iEnd ; i++ )
        {
          ip2 += aaData[ aiDisplay[i] ][10]*1;
        }

        /* Modify the footer row to match what we want */
        var n2 = nRow.getElementsByTagName('th');
        n2[2].innerHTML = parseInt(ip2);
      }
    });
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
<script type="text/javascript">
  $(document).ready(function (){   
   var table = $('#example').DataTable({
    'ajax': 'https://api.myjson.com/bins/1us28',  
    'columnDefs': [{
     'targets': 0,
     'searchable':false,
     'orderable':false,
     'className': 'dt-body-center',
     'render': function (data, type, full, meta){
       return '<input type="checkbox" name="id[]" value="' 
       + $('<div/>').text(data).html() + '">';
     }
   }],
   'order': [1, 'asc']
 });

   // Handle click on "Select all" control
   $('#example-select-all').on('click', function(){
      // Check/uncheck all checkboxes in the table
      var rows = table.rows({ 'search': 'applied' }).nodes();
      $('input[type="checkbox"]', rows).prop('checked', this.checked);
    });

   // Handle click on checkbox to set state of "Select all" control
   $('#example tbody').on('change', 'input[type="checkbox"]', function(){
      // If checkbox is not checked
      if(!this.checked){
       var el = $('#example-select-all').get(0);
         // If "Select all" control is checked and has 'indeterminate' property
         if(el && el.checked && ('indeterminate' in el)){
            // Set visual state of "Select all" control 
            // as 'indeterminate'
            el.indeterminate = true;
          }
        }
      });

   $('#frm-example').on('submit', function(e){
    var form = this;

      // Iterate over all checkboxes in the table
      table.$('input[type="checkbox"]').each(function(){
         // If checkbox doesn't exist in DOM
         if(!$.contains(document, this)){
            // If checkbox is checked
            if(this.checked){
               // Create a hidden element 
               $(form).append(
                $('<input>')
                .attr('type', 'hidden')
                .attr('name', this.name)
                .val(this.value)
                );
             }
           } 
         });

      // FOR TESTING ONLY
      
      // Output form data to a console
      $('#example-console').text($(form).serialize()); 
      console.log("Form submission", $(form).serialize()); 

      // Prevent actual form submission
      e.preventDefault();
    });
 });
</script>
</body>
</html>