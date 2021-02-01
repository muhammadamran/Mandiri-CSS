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

<!DOCTYPE html>
<html>
<?php include 'include/head.php';?>
<body class="skin-blue">
  <div class="wrapper">
    <?php include 'include/header.php';?>
    <?php include 'include/sidebar_all.php';?>


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Freight Master
            <small>Administration Section</small>
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
                    <li><a href="#">Administration Section</a></li>
                    <li><a href="active">Freight Master</a></li>
                  </ol>
                  <hr>
                  <td><button class="btn btn-block btn-default" data-toggle="modal" data-target="#myModal">Add New Record</button></td>
                  <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title"><b>[Client List] </b> Add New Record</h4>
                        </div>
                        <div class="modal-body col-md-6">
                          <form method="post" action=" ">
                            <div class="form-group" >
                              <label>CostCenter</label>
                              <select name="costcenter" class="form-control" required>
                                <option value="">--- SELECT ---</option>
                                <option value="IDBTH">IDBTH</option>
                                <option value="IDJKT">IDJKT</option>
                                <option value="IDSRG">IDSRG</option>
                                <option value="IDSUB">IDSUB</option>
                                <option value="IDMES">IDMES</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>ClientName</label>
                              <select class="form-control" name="clientname" required>
                                <option value="">--- SELECT ---</option>
                                <?php
                                mysql_connect($dbhost,'root','');
                                mysql_select_db('tr3');
                                $result=mysql_query("SELECT * FROM tb_client_new ORDER BY CompanyName ASC");
                                while($data=mysql_fetch_array($result)) {
                                  echo "<option value='$data[CompanyName]'> $data[CompanyName] </option>";
                                }
                                ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>KNREF.</label>
                              <input type="text" name="ref" class="form-control">
                            </div>
                            <div class="form-group">
                              <label>T/N</label>
                              <input type="text" name="tn" class="form-control">
                            </div>                                          
                          </div>
                          <div class="modal-body col-md-6">
                            <div class="form-group">
                              <label>Invoice No.</label>
                              <input type="text" name="invoice" class="form-control" required>
                            </div>
                            <div class="form-group">
                              <label>ATA</label>
                              <input type="text" name="ata" class="form-control">
                            </div>
                            <div class="form-group">
                              <label>InvoiceDate</label>
                              <input type="text" name="invoicedate" class="form-control">
                            </div>                                             
                          </div>
                          <div class="modal-footer">
                            <button type="submit" name="submit" class="btn btn-default">Submit</button>   
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2"  class="table display table-bordered table-striped">
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
                        <th>Watchlist</th>
                        <!-- <th>Bidang Usaha</th> -->
                        <!-- <th>Sector Usaha</th> -->
                        <!-- <th>YOYO</th>    -->
                        <!-- <th>Set Reviewer</th> -->
                      </tr>
                    </thead>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
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
      $('#example2').dataTable({
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
        ],
        "columnDefs":[{
          "targets": 10,
          "data": "id_logbook",
          "render": function(data, type, full, meta){
            var html = "<a href='dlv_rcvd_take.php?id="+data+"' title='take'><span class='label label-success'>Edit </span></a>";
            html += "<a href='dlv_rcvd_reject.php?id="+data+"' title='take'><span class='label label-success'> Delete</span></a>";
            return html;
          }
        }]
      });
    });
  </script>

</body>
</html>
  