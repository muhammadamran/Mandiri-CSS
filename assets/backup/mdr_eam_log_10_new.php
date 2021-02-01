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
                <select class="form-control" name="cbc_name"  value="<?= $cbc_ ?>" id="clientlist2" multiple>
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
                <select id="month"></select>
                <!-- <input id="monthdropdown" name="start_date" class="form-control" value="<?= $start_ ?>"> -->
              </div>
            </div>
            <div class="form-group ">
              <label>Years</label>
              <div>
                <select id="year"></select>
                <!-- <input id="yeardropdown" name="end_date" class="form-control" value="<?= $end_ ?>"> -->
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
                  <table id="example" class="table">
                    <thead>
                      <tr>
                        <!-- <th><input name="select_all" value="1" id="example-select-all" type="checkbox"/></th> -->
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
                        <th>Date Upload</th>
                        <th>Action</th>
                        <!-- <th>Bidang Usaha</th> -->
                        <!-- <th>Sector Usaha</th> -->
                        <!-- <th>YOYO</th>    -->
                        <!-- <th>Set Reviewer</th> -->
                      </tr>
                    </thead>
                  </table>
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
    $("#example1").dataTable();
    $('#example').dataTable({
      "bSort": true,
      "processing": true,
      "serverSide": true,
      "ajax": {
        "url": "server_eam_log.php",
        "type": "POST"
      },
      "columns": [
      { "data": "id_logbook" },
      { "data": "kanwil_nm" },
      { "data": "CBC_NAME" },
      { "data": "CIF" },
      { "data": "no_rek" },
      { "data": "nm_customer" },
      { "data": "JNS_KRD" },
      { "data": "KOL_LOG" },
      { "data": "LIMIT_LOG" },
      { "data": "BADE_LOG" },
      { "data": "month_logbook" },
      ],
      "columnDefs":[{
        "targets": 11,
        "data": "id_logbook",
        "render": function(data, type, full, meta){
          var html = "<a href='dlv_rcvd_take.php?id="+data+"' title='take'><button class='btn btn-warning'><i class='glyphicon glyphicon-pencil'></i></button></a>";
          html += "<a href='dlv_rcvd_reject.php?id="+data+"' title='take'><button class='btn btn-warning'><i class='glyphicon glyphicon-trash'></i></button></a>";
          return html;
        }
      }]
    });
  });
</script>

</body>
</html>
