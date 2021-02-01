<?php
include "include/connection.php";

if(isset($_POST["proses"]))    
{    
  $pick = $_POST['pick'];
  $reviewer = $_POST['reviewer'];
  $status_ccr = $_POST['status_ccr'];
  $json_ccr = json_encode($status_ccr);
  // var_dump('<pre>',$pick, $reviewer, $json_ccr);exit;

  for ($i=0; $i < count($pick); $i++) { 
    $cek = mysql_query("SELECT reviewer FROM tb_upload_logbook WHERE id_logbook=".$pick[$i]."");
    $cek_reviewer = mysql_fetch_assoc($cek);

    if (empty($cek_reviewer['reviewer'])) {
      $query = mysql_query("UPDATE tb_upload_logbook SET reviewer=".$reviewer.", status_ccr='".$json_ccr."' where id_logbook=".$pick[$i]."");
    }
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
<!DOCTYPE html>
<html>
<?php include 'include/head.php';?>

<!-- Select2 -->
<!-- <link rel="stylesheet" href="template/bower_components/select2/dist/css/select2.min.css">
<script src="template/bower_components/select2/dist/js/select2.full.min.js"></script> -->
<body class="skin-blue">
  <div class="wrapper">
    <?php include 'include/sidebar_all.php';?>
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
           <i class="fa fa-search" style="color: #1d2f61"></i> <b>Sreach Data</b>
           <h3 class="box-title"></h3>
           <div class="box-tools pull-right">
            <!-- <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button> -->
          </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div align="center">
          <?php
          $cdc_ = "";
          $type_ = "";
          $month_ = "";
          $year_ = "";
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

       <!-- Form Element sizes -->
        <div class="box box-warning">
          <div class="box-header with-border">
            <!-- <?php include 'include/alert/ex_notif.php'; ?> -->
            <img src="assets/images/mandiri-logo.png" width="70px">
          </div>
          <div class="box-body">
            
        </div>
        <!-- /.box -->

        <div class="row">
          <div class="col-xs-12">
            <div class="box box-warning">
              <div class="box-header">
                <div class="box-body">
                  <div class="box-body table-responsive no-padding">
                    <table id="example" class="table table-hover">
                      <thead>
                        <tr>
                          <th>
                            <input id='select_all' name='select_all' type='checkbox' onchange='selectAll()' />
                          </th>
                          <th><font style="font-size: 12px">No.</font></th>
                          <th><font style="font-size: 12px">Kantor Wilayah</font></th>
                          <th><font style="font-size: 12px">Unit Kerja</font></th>
                          <th><font style="font-size: 12px">CIF</font></th>
                          <th><font style="font-size: 12px">No. Rekening</font></th>
                          <th><font style="font-size: 12px">Nama Costumer</font></th>
                          <th><font style="font-size: 12px">Jenis Kredit</font></th>
                          <th><font style="font-size: 12px">KOL</font></th> 
                          <th style="min-width:100px"><font style="font-size: 12px">Limit</font></th>
                          <th style="min-width:100px"><font style="font-size: 12px">Bade</font></th>
                          <th><font style="font-size: 12px">Watchlist</font></th>
                          <th><font style="font-size: 12px">Bidang Usaha</font></th>
                          <th><font style="font-size: 12px">Sector Usaha</font></th>
                          <th><font style="font-size: 12px">YOYO</font></th>
                          <th><font style="font-size: 12px">Reviewer</font></th>   
                          <th><font style="font-size: 12px">Periode</font></th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th style="text-align:right" colspan="9" rowspan="1"><font style="font-size: 12px">Total :</font></th>
                          <th style="text-align:left" rowspan="1"></th>
                          <th style="text-align:left" rowspan="1" colspan="1"></th>
                          <th rowspan="1" colspan="1"></th>
                          <th rowspan="1" colspan="4"></th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </form>
    </div>
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php include 'include/footer.php';?>
</div><!-- ./wrapper -->

<?php include 'include/foot.php';?>
<!-- page script -->
<script type="text/javascript">
  $(function () {

    $('.select2').select2()

    function formatRupiah(angka, prefix) {
      var number_string = angka.toString(),
      split       = number_string.split(','),
      sisa        = split[0].length % 3,
      rupiah        = split[0].substr(0, sisa),
      ribuan        = split[0].substr(sisa).match(/\d{3}/gi);

      if(ribuan){
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
      }

      rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
      return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
    $('#example').dataTable({
      "processing": true,
      "serverSide": true,
      "Sort": true,
      "ajax": {
        "url": "ac_eam_ssr.php",
        "data": {
          <?= !empty($cbc_) ? "cbc_name: " . json_encode($cbc_) . "," : "" ?>
          <?= !empty($type_) ? "type_logbook: " . json_encode($type_) . "," : "" ?>
          <?= !empty($month_) ? "month: " . $month_ . "," : "" ?>
          <?= !empty($year_) ? "year: " . $year_ . "," : "" ?>
        },
        "type": "POST"
      },
      "columns": [
      { "data": "checkbox" },
      { "data": "no" },
      { "data": "kanwil_nm" },
      { "data": "CBC_NAME" },
      { "data": "CIF" },
      { "data": "no_rek" },
      { "data": "nm_customer" },
      { "data": "JNS_KRD" },
      { "data": "KOL_LOG" },
      { "data": "LIMIT_LOG" },
      { "data": "BADE_LOG" },
      { "data": "CIF2" },
      { "data": "CIF3" },
      { "data": "CIF4" },
      { "data": "CIF5" },
      { "data": "WHO" },
      { "data": "month_logbook" }
      ],
      "footerCallback": function ( row, data, start, end, display ) {
        var api = this.api(), data;
        var intVal = function ( i ) {
          return typeof i === 'string' ? i.replace(/[\Rp.]/g, '')*1 :
          typeof i === 'number' ?
          i : 0;
        };
        total = api
        .column(9)
        .data()
        .reduce( function (a, b) {
          return intVal(a) + intVal(b);
        }, 0 );
          // pageTotal = api
          //     .column( 9, { page: 'current'} )
          //     .data()
          //     .reduce( function (a, b) {
          //         return intVal(a) + intVal(b);
          //     }, 0 );
          $( api.column(9).footer() ).html(
            formatRupiah(total, 'Rp. ')
            );

          var intVal2 = function ( i ) {
            return typeof i === 'string' ? i.replace(/[\Rp.]/g, '')*1 :
            typeof i === 'number' ?
            i : 0;
          };
          total2 = api
          .column(10)
          .data()
          .reduce( function (a, b) {
            return intVal2(a) + intVal2(b);
          }, 0 );
          // pageTotal2 = api
          //     .column( 10, { page: 'current'} )
          //     .data()
          //     .reduce( function (a, b) {
          //         return intVal2(a) + intVal2(b);
          //     }, 0 );
          $( api.column(10).footer() ).html(
            formatRupiah(total2, 'Rp. ')
            );
        }
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
