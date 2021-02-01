<?php

include "include/connection.php";


if(isset($_POST["submit"]))    
{    
  $costcenter             = $_POST['costcenter'];
  $clientname             = $_POST['clientname'];
  $ref                    = $_POST['ref'];
  $tn                     = $_POST['tn'];
  $invoice                = $_POST['invoice'];
  $invoicedate            = $_POST['invoicedate'];
  $ata                    = $_POST['ata'];


  $query = mysql_query("INSERT into tb_freight_master values(' ','$costcenter','$clientname','$ref','$invoice','$ata','$invoicedate','$tn')");
  if($query){
    header("Location: ./admin_freight.php");                                                  
  } else {
    echo "Updated Failed - Please contact your administrator";
  }

}

if(isset($_POST["reject"]))    
{    
  $cid                = $_POST['cid'];
  $date_taken         = date('Y-m-d H:i:s');

  $query = mysql_query("update tb_delivery_master set cg_taken ='reject', cg_taken_date = '$date_taken' where dlv_id='$cid'");
  if($query){
    header("Location: ./dlv_rcvd.php");                                                  
  } else {
    echo "Updated Failed - Please contact your administrator";
  }

}

if(isset($_POST["proses"]))    
{    
  $pick = $_POST['pick'];
  $reviewer = $_POST['reviewer'];

  for ($i=0; $i < count($pick); $i++) { 
    $query = mysql_query("update tb_upload_logbook set reviewer=".$reviewer." where id_logbook=".$pick[$i]."");
  }
}

?>
<script type="text/javascript">
  $(document).ready(function() {
    const monthNames = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
    ];
    var qntYears = 4;
    var selectYear = $("#year");
    var selectMonth = $("#month");
    var selectDay = $("#day");
    var currentYear = new Date().getFullYear();

    for (var y = 0; y < qntYears; y++){
      let date = new Date(currentYear);
      var yearElem = document.createElement("option");
      yearElem.value = currentYear 
      yearElem.textContent = currentYear;
      selectYear.append(yearElem);
      currentYear--;
    } 

    for (var m = 0; m < 12; m++){
      let monthNum = new Date(2018, m).getMonth()
      let month = monthNames[monthNum];
      var monthElem = document.createElement("option");
      monthElem.value = monthNum; 
      monthElem.textContent = month;
      selectMonth.append(monthElem);
    }

    var d = new Date();
    var month = d.getMonth();
    var year = d.getFullYear();
    var day = d.getDate();

    selectYear.val(year); 
    selectYear.on("change", AdjustDays);  
    selectMonth.val(month);    
    selectMonth.on("change", AdjustDays);

    AdjustDays();
    selectDay.val(day)
    
    function AdjustDays(){
      var year = selectYear.val();
      var month = parseInt(selectMonth.val()) + 1;
      selectDay.empty();
      
      //get the last day, so the number of days in that month
      var days = new Date(year, month, 0).getDate(); 
      
      //lets create the days of that month
      for (var d = 1; d <= days; d++){
        var dayElem = document.createElement("option");
        dayElem.value = d; 
        dayElem.textContent = d;
        selectDay.append(dayElem);
      }
    }    
  });
</script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<!DOCTYPE html>
<html>
<?php include 'include/head.php';?>
<body class="skin-blue">
  <div class="wrapper">
    <?php include 'include/header.php';?>
    <?php include 'include/sidebar_all.php';?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
        <ol class="breadcrumb">
          <li><a href="./index.php"><b>Home</b></a></li>
          <li><a href="./index.php"><b>EAM Tools</b></a></li>
          <li class="active"><b>Data EAM Logbook</b></li>
        </ol>
        <div class="box box-warning">
          <div class="box-header with-border">
           <i class="fa fa-search" style="color: #1d2f61"></i> Sreach Data
           <h3 class="box-title"></h3>
           <div class="box-tools pull-right">
            <!-- <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button> -->
          </div><!-- /.box-tools -->
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
              <label>CBC Department</label>
              <div>
                <select class="form-control" name="cbc_name[]"  value="<?= $cbc_ ?>" id="clientlist2" multiple>
                  <!-- <option>--- SELECT ---</option> -->
                  <?php
                  mysql_connect($dbhost, $dbuser, $dbpassword);
                  mysql_select_db($dbname);
                  $result=mysql_query("SELECT * FROM tb_unit_kerja_master ORDER BY uk_name ASC");
                  while($data=mysql_fetch_array($result)) {
                    echo "<option value='$data[uk_name]'> $data[uk_name] </option>";
                  }
                  ?>
                </select><br>
                <small>ctrl + click</small>
                <!-- <input type="text" name="cbc_name" class="form-control" value="<?= $cbc_ ?>"> -->
              </div>
            </div>
            <div class="form-group ">
              <label>Segments</label>
              <div>
                <select class="form-control" name="type_logbook" id="dropdown" multiple>
                  <!-- <option value="">--- SELECT ---</option> -->
                  <option value="Corporate" <?= ($type_ == 'Corporate' ? 'selected' : '') ?>>Corporate</option>
                  <option value="Commercial" <?= ($type_ == 'Commercial' ? 'selected' : '') ?>>Commercial</option>
                </select><br>
                <small>ctrl + click</small>                          
              </div>
            </div>
            <div class="form-group ">
              <label>Month</label>
              <div>
                <select name="month" class="form-control">
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
                <select name="year" class="form-control">
                  <option value>-- Select Year --</option>
                  <?php for ($i=2015; $i < 2030; $i++) { ?>
                    <option value="<?= $i ?>" <?= !empty($year_) && $year_ == $i ? 'selected' : '' ?>><?= $i ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div><br>
              <button type="submit" name="search" value="search" class="btn btn-warning"><i class="fa fa-search"></i> Search EAM Logbook</button>
            </div>
          </form><br>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
      <!-- end search -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="box-body">
                <div class="table-responsive">
                  <form action="" method="POST" role="form">
                    <div class="form-group">
                      <select name="reviewer" class="form-control" required>
                        <option value>-- Select Reviewer --</option>
                        <?php
                        $con=mysqli_connect($dbhost, $dbuser, $dbpassword,$dbname);
                        if (mysqli_connect_errno())
                        {
                          echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }

                        $get_reviewer = mysqli_query($con,"SELECT user_id, user_name FROM tb_user WHERE user_role='Reviewer'");
                        $hasil = '';
                        while($row_reviewer = mysqli_fetch_array($get_reviewer)) {
                          ?>
                          <option value="<?= $row_reviewer['user_id'] ?>"><?= $row_reviewer['user_name'] ?></option>';
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <input type="submit" name="proses" class="btn btn-warning btn-block" value="Pilih EAM">
                    </div>
                    <table id="example" class="table">
                      <thead>
                        <tr>
                          <th>
                            <input id='select_all' name='select_all' type='checkbox' onchange='selectAll()' />
                          </th>
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
                          <th>YOYO</th>   
                          <th>Date upload</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $where = '';
                        if ($_POST['search']) {
                          if ($_POST['cbc_name'] != '' || $_POST['type_logbook'] != '' || $_POST['year'] != '' || $_POST['month'] != '') {
                            $where .= 'WHERE ';
                          }
                          if ($_POST['cbc_name']) {
                            if ($where != '' && $where != 'WHERE ') {
                              $where .= ' and ';
                            }
                            $type_search = implode('","',$cbc_);
                            $where .= 'a.CBC_NAME IN ("'.$type_search.'")';
                          }
                          if ($_POST['type_logbook']) {
                            if ($where != '' && $where != 'WHERE ') {
                              $where .= ' and ';
                            }
                            $where .= 'a.type_logbook = "'.$_POST['type_logbook'].'"';
                          }
                          if ($_POST['month']) {
                            if ($where != '' && $where != 'WHERE ') {
                              $where .= ' and ';
                            }
                            $where .= 'MONTH(a.month_logbook) = '.$_POST['month'];
                          }
                          if ($_POST['year']) {
                            if ($where != '' && $where != 'WHERE ') {
                              $where .= ' and ';
                            }
                            $where .= 'YEAR(a.month_logbook) = '.$_POST['year'];
                          }
                        }
                        $page_size = 10;
                        if (!empty($_GET['page']) && $_GET['page'] != 1) {
                          $page = $page_size*($_GET['page']-1);
                        } else {
                          $page = 0;
                        }
                        $result = mysqli_query($con,
                          "SELECT a.id_logbook,
                          a.date_time_log,
                          a.kd_cabang,
                          a.kanwil_nm,
                          a.area_log,
                          a.CBC_NAME,
                          a.CIF,
                          a.no_rek,
                          a.nm_customer,
                          a.JNS_KRD,
                          a.KOL_LOG,
                          a.restru_no,
                          a.LIMIT_LOG,
                          a.BADE_LOG,
                          a.PDDAYS,
                          a.IPDDAY,
                          a.MATDAT_LOG,
                          a.PKDATE_LOG,
                          a.month_logbook,
                          a.reviewer,
                          (SELECT b.BIDANG_USAHA FROM `tb_upload_bidangusaha` b WHERE b.CIF=a.CIF AND MONTH(b.month_bidangusaha)=MONTH(a.month_logbook) AND YEAR(b.month_bidangusaha)=YEAR(a.month_logbook)) AS BIDANG_USAHA,
                          (SELECT c.ic_sector FROM `tb_upload_sectorusaha` c WHERE c.CIF=a.CIF AND MONTH(c.month_su)=MONTH(a.month_logbook) AND YEAR(c.month_su)=YEAR(a.month_logbook)) AS ic_sector,
                          (SELECT d.CIF FROM `tb_upload_watchlist` d WHERE d.CIF=a.CIF AND MONTH(d.month_watchlist)=MONTH(a.month_logbook) AND YEAR(d.month_watchlist)=YEAR(a.month_logbook)) AS CIF2,
                          (SELECT e.CIF FROM `tb_upload_yoyo` e WHERE e.CIF=a.CIF AND MONTH(e.month_yoyo)=MONTH(a.month_logbook) AND YEAR(e.month_yoyo)=YEAR(a.month_logbook)) AS CIF5
                          FROM tb_upload_logbook a $where ORDER BY a.id_logbook LIMIT $page_size OFFSET $page
                          ");

                        $jumlah = mysqli_num_rows($result);
                        if($jumlah>0){
                          $no = $page;
                          while($row = mysqli_fetch_array($result))
                          {
                            $no++;
                            echo "<tr>";
                            echo "<td><input name='pick[]' value='".$row['id_logbook']."' type='checkbox' ".(!empty($row['reviewer']) ? 'checked readonly' : '')." /></td>";
                            echo "<td><b>" . $no . ".</b></td>";
                            echo "<td>" . $row['kanwil_nm'] . "</td>";
                            echo "<td>" . $row['CBC_NAME'] . "</td>";
                            echo "<td>" . $row['CIF'] . "</td>";
                            echo "<td>" . $row['no_rek'] . "</td>";
                            echo "<td>" . $row['nm_customer'] . "</td>";
                            echo "<td>" . $row['JNS_KRD'] . "</td>";
                            echo "<td>" . $row['KOL_LOG'] . "</td>";
                            echo "<td>" . $row['LIMIT_LOG'] . "</td>";
                            echo "<td>" . $row['BADE_LOG'] . "</td>";
                            if ($row['CIF']==$row['CIF2']){
                             echo "<td>YES</td>";
                           }else{
                             echo "<td>NO</td>";
                           }
                           if ($row['BIDANG_USAHA']==''){
                            echo "<td style='background-color: #F0FFFF;'>CIF Not Found</td>";
                          }else{
                            echo "<td>".$row['BIDANG_USAHA'] . "</td>";
                          }
                          if ($row['ic_sector']==''){
                            echo "<td style='background-color: #F0FFFF;'>CIF Not Found</td>";
                          }else{
                            echo "<td>".$row['ic_sector'] . "</td>";
                          }
                          if ($row['CIF1']==$row['CIF5']){
                            echo "<td>YES</td>";
                          }else{
                            echo "<td>NO</td>";
                          }
                          echo "<td>" . $row['month_logbook'] . "</td>";
                          echo "</tr>";
                        }
                      } 
                      ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th style="text-align:right" colspan="10" rowspan="1">Total:</th>
                        <th rowspan="1" colspan="1"></th>
                        <th rowspan="1" colspan="1"></th>
                        <th rowspan="1" colspan="4"></th>
                      </tr>
                    </tfoot>
                  </table>
                </form>
                <div class="dataTables_paginate paging_bootstrap">
                  <ul class="pagination">
                    <li class="prev <?= !empty($_GET['page']) && $_GET['page'] == 1 ? 'disabled' : '' ?>">
                      <a href="?page=<?= !empty($_GET['page']) ? ($_GET['page'] == 1 ? $_GET['page'] : $_GET['page']-1) : 1 ?>">← Previous</a>
                    </li>
                    <?php 
                    $get = mysqli_query($con,"SELECT COUNT(id_logbook) AS jumlah
                      FROM tb_upload_logbook
                      LEFT JOIN tb_upload_watchlist ON tb_upload_logbook.CIF = tb_upload_watchlist.CIF
                      LEFT JOIN tb_upload_bidangusaha ON tb_upload_logbook.CIF = tb_upload_bidangusaha.CIF
                      LEFT JOIN tb_upload_sectorusaha ON tb_upload_logbook.CIF = tb_upload_sectorusaha.CIF
                      LEFT JOIN tb_upload_yoyo ON tb_upload_logbook.CIF = tb_upload_yoyo.CIF $where ORDER BY id_logbook
                      ");
                    $get_jumlah = mysqli_fetch_array($get);
                    $count_page = ceil($get_jumlah['jumlah']/10);
                    $count_i = !empty($_GET['page']) ? ($_GET['page'] == $count_page ? ($count_page > 4 ? $_GET['page']-5 : 0) : $_GET['page']-1) : 0;
                    $count_for = !empty($_GET['page']) && $_GET['page'] == $count_page ? ($count_page > 4 ? $count_page : 1) : (($_GET['page']+5) > $count_page ? $count_page : $_GET['page']+5);
                    for ($i=$count_i; $i < $count_for; $i++) { 
                      ?>
                      <li class="<?= !empty($_GET['page']) && $_GET['page'] == $i+1 ? 'active' : '' ?>">
                        <a href="?page=<?= $i+1 ?>"><?= $i+1 ?></a>
                      </li>
                    <?php } ?>
                    <li class="next <?= !empty($_GET['page']) && $_GET['page'] == $count_page ? 'disabled' : '' ?>">
                      <a href="?page=<?= !empty($_GET['page']) ? ($_GET['page'] == $count_page ? $_GET['page'] : $_GET['page']+1) : 1 ?>">Next → </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div>
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php
include 'include/footer.php';?>
</div><!-- ./wrapper -->

<?php include 'include/foot.php';?>
<!-- page script -->
<script type="text/javascript">
  $(function () {
    $('#example').dataTable({
      "bSort": true,
      "processing": true,
      "paging": false
    });
  });

  function selectAll() {
    var select = document.getElementById("select_all");
    var pick = document.getElementsByName("pick[]");
    var jml = pick.length;
    var b = 0;
    for (b = 0;b < jml;b++) {
      if (select.checked) {
        pick[b].checked = true;
      } else {
        pick[b].checked = false;
      }
    }
  }
</script>

</body>
</html>
