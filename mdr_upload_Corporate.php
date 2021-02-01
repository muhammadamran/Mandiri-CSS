<?php

include "include/connection.php";
include "include/restrict.php";

if (isset($_POST["submit_log"])) {  

  $uploaddir = './assets/file/csv_corporate/';
  $uploadfile = $uploaddir.date('Y-m-dHis');
  $logbook_month = date('m');
  $logbook_year  = date('Y');
  $logbook_rs    = date('Y-m-d');
  $user_login = $_POST['user_login'];

  $query = move_uploaded_file($_FILES['form']['tmp_name'], $uploadfile);
  if ($query) {
    if (mysql_query("LOAD DATA LOCAL INFILE '$uploadfile'
      INTO TABLE tb_upload_logbook
      FIELDS TERMINATED BY ','
      LINES TERMINATED BY '\n'
      IGNORE 1 LINES
      (date_time_log,kd_cabang,kanwil_nm,area_log,CBC_NAME,CIF,no_rek,nm_customer,JNS_KRD,BUC_REPORTING,BUC_PENGELOLA,BUC_FLOOR,KOLL_LOG,KOL_LOG,restru_no,LIMIT_LOG,BADE_LOG,BILPRN_LOG,BILINT_LOG,PDDAYS,IPDDAY,BANK_FG_LOG,CURTYP_LOG,KURS_LOG,NMGROUP_LOG,RATE_LOG,ORGAMT,CBAL,BISEKT,MATDAT_LOG,ACCSTS,PKDATE_LOG,KODE,NON_BPR_LOG,NAMA_KANWIL_II,NPL,npl_buc,LAR,FRML_1,FRML_2,fg,fg_IDR_VA,Kanwil_lar,Revolv,Expertise,month_logbook,type_logbook)
      ")) {
      mysql_query("UPDATE tb_logbook set data_by = '$user_login' where data_by IS NULL");
      header("Location: ./mdr_upload_Corporate.php?ntf=5");
    } else{
      echo "submit data failed".mysql_error();
    }
  } else {
    echo "moving data failed".mysql_error();
  }

}

if (isset($_POST["submit_wa"])) {  

  $uploaddir = './assets/file/csv_corporate/';
  $uploadfile = $uploaddir.date('Y-m-dHis');
  $month      = date('m');
  $year       = date('Y');
  $user_login = $_POST['user_login'];

  $query = move_uploaded_file($_FILES['form']['tmp_name'], $uploadfile);
  if ($query) {
    if (mysql_query("LOAD DATA LOCAL INFILE '$uploadfile'
      INTO TABLE tb_upload_watchlist
      FIELDS TERMINATED BY ','
      LINES TERMINATED BY '\n'
      IGNORE 1 LINES
      (UNIT_KERJA_RISK,CBC,CIF,DEBITUR_WATCH,WATCHLIST_SEJAK,BIDANG_USAHA_WATCH,SEKTOR_INDUSTRI,LIMIT_WC,BADE_WC,Saldo_CKPN,CKPN,KOL_WATCH,Rekom_Kol,Rekom_kol_final,TW1,Kondisi_Keuangan,PROSPEK_USAHA,ACCT_STRATEGY,WEWENANG,ALASAN_WATCHLIST,UPAYA,ACTION_PLAN,TENGGAT_WAKTU,NOTA_WL,month_watchlist,type_watchlist)
      ")) {
      mysql_query("UPDATE tb_logbook set data_by = '$user_login' where data_by IS NULL");
      header("Location: ./mdr_upload_Corporate.php?ntf=6");
    } else{
      echo "submit data failed".mysql_error();
    }
  } else {
    echo "moving data failed".mysql_error();
  }

}

if (isset($_POST["submit_bd"])) {  


  $uploaddir = './assets/file/csv_corporate/';
  $uploadfile = $uploaddir.date('Y-m-dHis');
  $month      = date('m');
  $year       = date('Y');
  $user_login = $_POST['user_login'];

  $query = move_uploaded_file($_FILES['form']['tmp_name'], $uploadfile);
  if ($query) {
    if (mysql_query("LOAD DATA LOCAL INFILE '$uploadfile'
      INTO TABLE tb_upload_bidangusaha
      FIELDS TERMINATED BY ','
      LINES TERMINATED BY '\n'
      IGNORE 1 LINES
      (CIF,DEBITUR_BD_USAHA,UNIT_KERJA_BD,GROUP_BD_USAHA,BIDANG_USAHA,LIMIT_BD,BADE_BD,month_bidangusaha,type_bd)
      ")) {
      mysql_query("UPDATE tb_logbook set data_by = '$user_login' where data_by IS NULL");
      header("Location: ./mdr_upload_Corporate.php?ntf=4");
    } else{
      echo "submit data failed".mysql_error();
    }
  } else {
    echo "moving data failed".mysql_error();
  }

}

if (isset($_POST["submit_sectorusaha"])) {  


  $uploaddir = './assets/file/csv_corporate/';
  $uploadfile = $uploaddir.date('Y-m-dHis');
  $month      = date('m');
  $year       = date('Y');
  $user_login = $_POST['user_login'];

  $query = move_uploaded_file($_FILES['form']['tmp_name'], $uploadfile);
  if ($query) {
    if (mysql_query("LOAD DATA LOCAL INFILE '$uploadfile'
      INTO TABLE tb_upload_sectorusaha
      FIELDS TERMINATED BY ','
      LINES TERMINATED BY '\n'
      IGNORE 1 LINES
      (Date_time_su,Deibitur_su,CIF,Kol_su,ic_sector,gas_REPORTING,bade_su,limit_su,month_su,type_su)
      ")) {
      mysql_query("UPDATE tb_logbook set data_by = '$user_login' where data_by IS NULL");
      header("Location: ./mdr_upload_Corporate.php?ntf=7");
    } else{
      echo "submit data failed".mysql_error();
    }
  } else {
    echo "moving data failed".mysql_error();
  }

}


if (isset($_POST["submit_yoyo"])) {  


  $uploaddir = './assets/file/csv_corporate/';
  $uploadfile = $uploaddir.date('Y-m-dHis');
  $month      = date('m');
  $year       = date('Y');
  $user_login = $_POST['user_login'];

  $query = move_uploaded_file($_FILES['form']['tmp_name'], $uploadfile);
  if ($query) {
    if (mysql_query("LOAD DATA LOCAL INFILE '$uploadfile'
      INTO TABLE tb_upload_yoyo
      FIELDS TERMINATED BY ','
      LINES TERMINATED BY '\n'
      IGNORE 1 LINES
      (CBC_NAME_YOYO,CIF,bidangusaha_yoyo,nm_debitur_yoyo,db_sejak,BUC,kol_mont,limit_yoyo,bade_yoyo,tungg_pokok_nilai,tungg_pokok_maks_hari,tungg_bunga_nilai,tungg_bunga_maks_hari,month_yoyo)
      ")) {
      mysql_query("UPDATE tb_logbook set data_by = '$user_login' where data_by IS NULL");
      header("Location: ./mdr_upload_Corporate.php?ntf=9");
    } else{
      echo "submit data failed".mysql_error();
    }
  } else {
    echo "moving data failed".mysql_error();
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
      <section class="content">
        <ol class="breadcrumb">
          <li><a href="./index.php"><b>Home</b></a></li>
          <li><a href="./mdr_upload_Corporate.php?ntf=0"><b>Admin Tools</b></a></li>
          <li class="active"><b>Upload CSV Corporate</b></li>
        </ol>
        <div class="row">
          <div class="col-md-6">
            <?php include 'include/alert/ex_notif.php';?> 
            <div class="box box-danger">
              <div class="box-header with-border">
                <img src="assets/images/mandiri-logo.png" width="70px">
              </div>
              <div class="box-body">
                <style type="text/css">
                  .loading {
                    position:fixed;
                    top:0;
                    bottom:0;
                    left:0;
                    right:0;
                    background-color:rgba(0,0,0,.7);
                    z-index:99999;
                  }
                  .loading > img {
                    width: 150px;
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    right: 0;
                    left: 0;
                    margin: 0 auto;
                    margin-top: 20%;
                  }
                </style>
                <form name="postform" action=" " enctype='multipart/form-data' method="post">
                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label align="center">CSV FILE LogBook :</label>
                    <input type="file" name="form" class="form-control"/>  
                    <input type="hidden" name="user_login" value="<?php echo $_SESSION['username'];?>" />
                    <input type="hidden" name="logbook_month"/>
                    <input type="hidden" name="logbook_year"/>
                    <input type="hidden" name="logbook_rs"/>
                  </div><!-- /.form group -->
                  <div id="submit_log_loading" class="loading" style="display:none;">
                    <img src="assets/img/loading.gif">
                  </div>
                  <button id="submit_log" type="submit" name="submit_log" value="submit_log" class="btn btn-success btn-flat btn-block">Upload CSV FILE LogBook</button>                        
                </form><br>

                <form name="postform" action=" " enctype='multipart/form-data' method="post">
                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label align="center">CSV FILE Watchlist :</label>
                    <input type="file" name="form" class="form-control"/>  
                    <input type="hidden" name="user_login" value="<?php echo $_SESSION['username'];?>" />
                  </div><!-- /.form group -->
                  <div id="submit_wa_loading" class="loading" style="display:none;">
                    <img src="assets/img/loading.gif">
                  </div>
                  <button id="submit_wa" type="submit" name="submit_wa" value="submit_wa" class="btn btn-success btn-flat btn-block">Upload CSV FILE Watchlist</button>                        
                </form><br>

                <form name="postform" action=" " enctype='multipart/form-data' method="post">
                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label align="center">CSV FILE Bidang Usaha :</label>
                    <input type="file" name="form" class="form-control"/>  
                    <input type="hidden" name="user_login" value="<?php echo $_SESSION['username'];?>" />
                  </div><!-- /.form group -->
                  <div id="submit_bd_loading" class="loading" style="display:none;">
                    <img src="assets/img/loading.gif">
                  </div>
                  <button id="submit_bd" type="submit" name="submit_bd" value="submit_bd" class="btn btn-success btn-flat btn-block">Upload CSV FILE Bidang Usaha</button>                        
                </form><br> 

                <form name="postform" action=" " enctype='multipart/form-data' method="post">
                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label align="center">CSV FILE Sector Usaha :</label>
                    <input type="file" name="form" class="form-control"/>  
                    <input type="hidden" name="user_login" value="<?php echo $_SESSION['username'];?>" />
                  </div><!-- /.form group -->
                  <div id="submit_sectorusaha_loading" class="loading" style="display:none;">
                    <img src="assets/img/loading.gif">
                  </div>
                  <button id="submit_sectorusaha" type="submit" name="submit_sectorusaha" value="submit_sectorusaha" class="btn btn-success btn-flat btn-block">Upload CSV FILE Sector Usaha</button>         
                </form><br>

                <form name="postform" action=" " enctype='multipart/form-data' method="post">
                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label align="center">CSV FILE Yoyo :</label>
                    <input type="file" name="form" class="form-control"/>  
                    <input type="hidden" name="user_login" value="<?php echo $_SESSION['username'];?>" />
                  </div><!-- /.form group -->
                  <div id="submit_yoyo_loading" class="loading" style="display:none;">
                    <img src="assets/img/loading.gif">
                  </div>
                  <button id="submit_yoyo" type="submit" name="submit_yoyo" value="submit" class="btn btn-success btn-flat btn-block">Upload CSV FILE Yoyo</button>                        
                </form><br>
              </div><!-- /.box-body -->
            </div><!-- /.box -->

          </div><!-- /.col (left) -->
          <!-- Template -->
          <div class="col-md-6">
            <?php include 'include/alert/ex_notif.php';?> 
            <div class="box box-danger">
              <div class="box-header with-border">
                <img src="assets/images/mandiri-logo.png" width="70px">
                  <h4>Template Format CSV</h4>
              </div>
              <div class="box-body">
              <div class="callout callout-info">
                <h4>Reminder!</h4>
                Data pada template merupakan data <i>Dummy</i> yang harus diperhatikan adalah posisi data dan format data pada file <b>CSV</b> yang akan diupload.
              </div>
                <style type="text/css">
                  .loading {
                    position:fixed;
                    top:0;
                    bottom:0;
                    left:0;
                    right:0;
                    background-color:rgba(0,0,0,.7);
                    z-index:99999;
                  }
                  .loading > img {
                    width: 150px;
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    right: 0;
                    left: 0;
                    margin: 0 auto;
                    margin-top: 20%;
                  }
                </style>
                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label align="center">Template LogBook :</label>
                  </div><!-- /.form group -->
                  <div id="submit_log_loading" class="loading" style="display:none;">
                    <img src="assets/img/loading.gif">
                  </div>
                  <button data-toggle="modal" data-target="#modal-default1" type="button" class="btn btn-success btn-flat btn-block">Lihat Template LogBook</button>                        

                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label align="center">Template Watchlist :</label>
                  </div><!-- /.form group -->
                  <div id="button_wa_loading" class="loading" style="display:none;">
                    <img src="assets/img/loading.gif">
                  </div>
                  <button data-toggle="modal" data-target="#modal-default2" type="button" class="btn btn-success btn-flat btn-block">Lihat Template Watchlist</button>                        

                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label align="center">Template Bidang Usaha :</label>
                  </div><!-- /.form group -->
                  <div id="button_bd_loading" class="loading" style="display:none;">
                    <img src="assets/img/loading.gif">
                  </div>
                  <button data-toggle="modal" data-target="#modal-default3" type="button" class="btn btn-success btn-flat btn-block">Lihat Template Bidang Usaha</button>                         

                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label align="center">Template Sector Usaha :</label>
                  </div><!-- /.form group -->
                  <div id="button_sectorusaha_loading" class="loading" style="display:none;">
                    <img src="assets/img/loading.gif">
                  </div>
                  <button data-toggle="modal" data-target="#modal-default4" type="button" class="btn btn-success btn-flat btn-block">Lihat Template Sector Usaha</button>         

                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label align="center">Template Yoyo :</label>
                  </div><!-- /.form group -->
                  <div id="button_yoyo_loading" class="loading" style="display:none;">
                    <img src="assets/img/loading.gif">
                  </div>
                  <button data-toggle="modal" data-target="#modal-default5" type="button" class="btn btn-success btn-flat btn-block">Lihat Template Yoyo</button>                    
              </div>
            </div><!-- /.box-body -->
          </div><!-- /.col (left) -->
          <!-- End Template -->
        </div><!-- /.row -->

      <div id="modal-default1" class="modal fade" role="dialog">
        <div class="col-md-12 login-box-body">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <div>
                <img src="assets/images/mandiri-logo.png" width="150px">
                <h3 align="left" class="modal-title"><b>Template CSV Logbook</b></h3>
              </div>
            </div>
            <div class="modal-body">
              <div class="box-body table-responsive no-padding">
                <table id="example1" class="table table-bordered">
                  <thead>
                    <tr>
                      <th><i>Nama Tabel...</i></th>
                      <th>date_time_log</th>
                      <th>kd_cabang</th>
                      <th>kanwil_nm</th>
                      <th>area_log</th>
                      <th>CBC_NAME</th>
                      <th>CIF</th>
                      <th>no_rek</th>
                      <th>nm_customer</th>
                      <th>JNS_KRD</th>
                      <th>BUC_REPORTING</th>
                      <th>BUC_PENGELOLA</th>
                      <th>BUC_FLOOR</th>
                      <th>KOLL_LOG</th>
                      <th>KOL_LOG</th>
                      <th>restru_no</th>
                      <th>LIMIT_LOG</th>
                      <th>BADE_LOG</th>
                      <th>BILPRN_LOG</th>
                      <th>BILINT_LOG</th>
                      <th>PDDAYS</th>
                      <th>IPDDAY</th>
                      <th>BANK_FG_LOG</th>
                      <th>CURTYP_LOG</th>
                      <th>KURS_LOG</th>
                      <th>NMGROUP_LOG</th>
                      <th>RATE_LOG</th>
                      <th>ORGAMT</th>
                      <th>CBAL</th>
                      <th>BISEKT</th>
                      <th>MATDAT_LOG</th>
                      <th>ACCSTS</th>
                      <th>PKDATE_LOG</th>
                      <th>KODE</th>
                      <th>NON_BPR_LOG</th>
                      <th>NAMA_KANWIL_II</th>
                      <th>NPL</th>
                      <th>npl_buc</th>
                      <th>LAR</th>
                      <th>FRML_1</th>
                      <th>FRML_2</th>
                      <th>fg</th>
                      <th>fg_IDR_VA</th>
                      <th>Kanwil_lar</th>
                      <th>Revolv</th>
                      <th>Expertise</th>
                      <th>month_logbook</th>
                      <th>type_logbook</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                      <th><i>Isi Data...</i></th>
                      <th>2019-07-01</th>
                      <th>13501</th>
                      <th>WILAYAH  VII / SEMARANG</th>
                      <th>HUB SEMARANG PEMUDA</th>
                      <th>CMB SEMARANG</th>
                      <th>2254101</th>
                      <th>31112</th>
                      <th>AAA</th>
                      <th>W-KMK</th>
                      <th>CBC25</th>
                      <th>CBC25</th>
                      <th>CBC25</th>
                      <th>1</th>
                      <th>1</th>
                      <th>N</th>
                      <th>5000000000</th>
                      <th>2676000000</th>
                      <th>BILPRN_LOG</th>
                      <th>BILINT_LOG</th>
                      <th>PDDAYS</th>
                      <th>IPDDAY</th>
                      <th>N</th>
                      <th>IDR</th>
                      <th>1</th>
                      <th>CMB3</th>
                      <th>0.135</th>
                      <th>5000000000</th>
                      <th>2676000000</th>
                      <th>3630</th>
                      <th>2019-07-01</th>
                      <th>1</th>
                      <th>2019-07-01</th>
                      <th>LOA</th>
                      <th>CBC25</th>
                      <th>07 - WILAYAH  VII / SEMARANG</th>
                      <th>07 - WILAYAH  VII / SEMARANG</th>
                      <th>CBC25</th>
                      <th>N</th>
                      <th>CBC251</th>
                      <th>CBC2511</th>
                      <th>CMB31</th>
                      <th>CBC25IDR</th>
                      <th>N</th>
                      <th>N</th>
                      <th>0</th>
                      <th>2019-07-01</th>
                      <th>Corporate</th>
                    </tr>
                    <tr>
                      <th><i>Format Data...</i></th>
                      <th>Custom (yyyy-mm-dd)</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>Custom (yyyy-mm-dd)</th>
                      <th>General</th>
                      <th>Custom (yyyy-mm-dd)</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>Custom (yyyy-mm-dd)</th>
                      <th>General</th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="modal-default2" class="modal fade" role="dialog">
        <div class="col-md-12 login-box-body">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <div>
                <img src="assets/images/mandiri-logo.png" width="150px">
                <h3 align="left" class="modal-title"><b>Templat CSV Watchlist</b></h3>
              </div>
            </div>
            <div class="modal-body">
              <div class="box-body table-responsive no-padding">
                <table id="example1" class="table table-bordered">
                  <thead>
                    <tr>
                      <th><i>Nama Tabel...</i></th>
                      <th>UNIT_KERJA_RISK</th>
                      <th>CBC</th>
                      <th>CIF_watch</th>
                      <th>DEBITUR_WATCH</th>
                      <th>WATCHLIST_SEJAK</th>
                      <th>BIDANG_USAHA_WATCH</th>
                      <th>SEKTOR_INDUSTRI</th>
                      <th>Limit_watch</th>
                      <th>Bade_watch</th>
                      <th>Saldo_CKPN</th>
                      <th>CKPN</th>
                      <th>KOL_WATCH</th>
                      <th>Rekom_Kol</th>
                      <th>Rekom_kol_final</th>
                      <th>TW1</th>
                      <th>Kondisi_Keuangan</th>
                      <th>PROSPEK_USAHA</th>
                      <th>ACCT_STRATEGY</th>
                      <th>WEWENANG</th>
                      <th>ALASAN_WATCHLIST</th>
                      <th>UPAYA</th>
                      <th>ACTION_PLAN</th>
                      <th>TENGGAT_WAKTU</th>
                      <th>NOTA_WL</th>
                      <th>MONT_WATCLIST</th>
                      <th>type</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                      <th><i>Isi Data...</i></th>
                      <th>Jakarta</th>
                      <th>CMB SEMARANG</th>
                      <th>2254101</th>
                      <th>ABC</th>
                      <th>2019-10-15</th>
                      <th>Migas</th>
                      <th>Migas</th>
                      <th>300</th>
                      <th>200</th>
                      <th>1.15</th>
                      <th>0.005073983</th>
                      <th>1</th>
                      <th>1</th>
                      <th>1</th>
                      <th>1</th>
                      <th>Kondisi_Keuangan</th>
                      <th>PROSPEK_USAHA</th>
                      <th>MAINTAIN</th>
                      <th>Direksi</th>
                      <th>ALASAN_WATCHLIST</th>
                      <th>UPAYA</th>
                      <th>ACTION_PLAN</th>
                      <th>TENGGAT_WAKTU</th>
                      <th>NOTA_WL</th>
                      <th>2019-10-15</th>
                      <th>Corporate</th>
                    </tr>
                    <tr>
                      <th><i>Format Data...</i></th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>Custom (yyyy-mm-dd)</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>Custom (yyyy-mm-dd)</th>
                      <th>Corporate</th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="modal-default3" class="modal fade" role="dialog">
        <div class="col-md-12 login-box-body">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <div>
                <img src="assets/images/mandiri-logo.png" width="150px">
                <h3 align="left" class="modal-title"><b>Templat CSV Bidang Usaha</b></h3>
              </div>
            </div>
            <div class="modal-body">
              <div class="box-body table-responsive no-padding">
                <table id="example1" class="table table-bordered">
                  <thead>
                    <tr>
                      <th><i>Nama Tabel...</i></th>
                      <th>CIF</th>
                      <th>DEBITUR_BD_USAHA</th>
                      <th>UNIT_KERJA_BD</th>
                      <th>GROUP_BD_USAHA</th>
                      <th>BIDANG_USAHA</th>
                      <th>LIMIT_BD</th>
                      <th>BADE_BD</th>
                      <th>month_bd</th>
                      <th>type</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th><i>Isi data...</i></th>
                      <th>2254101</th>
                      <th>ABC</th>
                      <th>CMB SEMARANG</th>
                      <th>CMB1</th>
                      <th>Migas</th>
                      <th>200000000000</th>
                      <th>27000000000</th>
                      <th>2019-07-01</th>
                      <th>Corporate</th>
                    </tr>
                    <tr>
                      <th><i>Format data...</i></th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>Custom (yyyy-mm-dd)</th>
                      <th>General</th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="modal-default4" class="modal fade" role="dialog">
        <div class="col-md-12 login-box-body">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <div>
                <img src="assets/images/mandiri-logo.png" width="150px">
                <h3 align="left" class="modal-title"><b>Templat CSV Sector Usaha</b></h3>
              </div>
            </div>
            <div class="modal-body">
              <div class="box-body table-responsive no-padding">
                <table id="example1" class="table table-bordered">
                  <thead>
                    <tr>
                      <th><i>Nama Tabel...</i></th>
                      <th>Date_time_su</th>
                      <th>Deibitur_su</th>
                      <th>CIF</th>
                      <th>Kol_su</th>
                      <th>ic_sector</th>
                      <th>gas_REPORTING</th>
                      <th>bade_su</th>
                      <th>limit_su</th>
                      <th>month_su</th>
                      <th>typre_su</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th><i>Isi data...</i></th>
                      <th>2019-07-01</th>
                      <th>Deibitur_su</th>
                      <th>CIF</th>
                      <th>Kol_su</th>
                      <th>ic_sector</th>
                      <th>gas_REPORTING</th>
                      <th>bade_su</th>
                      <th>limit_su</th>
                      <th>2019-07-01</th>
                      <th>typre_su</th>
                    </tr>
                    <tr>
                      <th><i>Format Data...</i></th>
                      <th>Custom (yyyy-mm-dd)</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>Custom (yyyy-mm-dd)</th>
                      <th>Corporate</th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="modal-default5" class="modal fade" role="dialog">
        <div class="col-md-12 login-box-body">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <div>
                <img src="assets/images/mandiri-logo.png" width="150px">
                <h3 align="left" class="modal-title"><b>Templat CSV Yoyo</b></h3>
              </div>
            </div>
            <div class="modal-body">
              <div class="box-body table-responsive no-padding">
                <table id="example1" class="table table-bordered">
                  <thead>
                    <tr>
                      <th><i>Nama Tabel...</i></th>
                      <th>CBC_NAME_YOYO</th>
                      <th>CIF</th>
                      <th>bidangusaha_yoyo</th>
                      <th>nm_debitur_yoyo</th>
                      <th>db_sejak</th>
                      <th>BUC</th>
                      <th>kol_mont</th>
                      <th>limit_yoyo</th>
                      <th>bade_yoyo</th>
                      <th>tungg_pokok_nilai</th>
                      <th>tungg_pokok_maks_hari</th>
                      <th>tungg_bunga_nilai</th>
                      <th>tungg_bunga_maks_hari</th>
                      <th>month_yoyo</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                      <th><i>Isi Data...</i></th>
                      <th>CMB SEMARANG</th>
                      <th>2254101</th>
                      <th>PERDAGANGAN BESAR BAHAN-BAHAN KONSTRUKSI</th>
                      <th>ABC</th>
                      <th>2019-07-01</th>
                      <th>CBC01</th>
                      <th>1</th>
                      <th>20000000</th>
                      <th>50000000</th>
                      <th>tungg_pokok_nilai</th>
                      <th>tungg_pokok_maks_hari</th>
                      <th>tungg_bunga_nilai</th>
                      <th>tungg_bunga_maks_hari</th>
                      <th>2019-07-01</th>
                    </tr>
                    <tr>
                      <th><i>Format Data...</i></th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>Custom (yyyy-mm-dd)</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>General</th>
                      <th>Custom (yyyy-mm-dd)</th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
  <?php } 
  include 'include/footer.php';?>
</div><!-- ./wrapper -->


<!-- jQuery 2.1.3 -->
<script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- InputMask -->
<script src="assets/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
<script src="assets/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
<script src="assets/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
<!-- date-range-picker -->
<script src="assets/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
<!-- bootstrap color picker -->
<script src="assets/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
<!-- bootstrap time picker -->
<script src="assets/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
<!-- SlimScroll 1.3.0 -->
<script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- iCheck 1.0.1 -->
<script src="assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src='assets/plugins/fastclick/fastclick.min.js'></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/app.min.js" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js" type="text/javascript"></script>
<!-- Page script -->
<script type="text/javascript">          
  $(function () {
    $('#submit_log').click(function() {
      $('#submit_log').hide();
      $('#submit_log_loading').show();
    })
    $('#submit_wa').click(function() {
      $('#submit_wa').hide();
      $('#submit_wa_loading').show();
    })
    $('#submit_bd').click(function() {
      $('#submit_bd').hide();
      $('#submit_bd_loading').show();
    })
    $('#submit_sectorusaha').click(function() {
      $('#submit_sectorusaha').hide();
      $('#submit_sectorusaha_loading').show();
    })
    $('#submit_yoyo').click(function() {
      $('#submit_yoyo').hide();
      $('#submit_yoyo_loading').show();
    })

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
            'Last 7 Days': [moment().subtract('days', 6), moment()],
            'Last 30 Days': [moment().subtract('days', 29), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
          },
          startDate: moment().subtract('days', 29),
          endDate: moment()
        },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>

  </body>
  <iframe width=174 height=189 name="gToday:normal:thirdparty/calender/agenda.js" id="gToday:normal:thirdparty/calender/agenda.js" src="thirdparty/calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
  </iframe>
  </html>
