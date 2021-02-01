<?php

include "include/restrict.php";
include "include/connection.php";

if(isset($_POST["update"]))    
{    
  $cid                = $_POST['cid'];
  $cname              = $_POST['cname'];
  $caddress           = $_POST['caddress'];
  $cphone             = $_POST['cphone'];
  $pic                = $_POST['pic'];

  $cek = mysql_query("SELECT * FROM tb_client WHERE client_id ='$cid'");
  $num = mysql_num_rows($cek);
  if($num == 1){
    $query = mysql_query("UPDATE tb_client SET client_address ='$caddress', client_phone = '$cphone' , client_pic = '$pic' where client_id='$cid'");
    if($query){
      header("Location: ./admin_clmanage.php");                                                  
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
    // mysql_connect($dbhost, 'root', '');
    // mysql_select_db('mandiri'); 
    $role = mysql_query("SELECT * FROM tb_user WHERE user_name = '$_SESSION[username]' ");
    $role2 = mysql_fetch_array($role);

    if ($role2['user_role'] == 'Administrator')  {
    
    ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            EAM LOGBOOK
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
                    <li class="active">EAM LOGBOOK</li>
                  </ol>
                </div><!-- /.box-header -->
                <div class="box-body">
                 <div class="table-responsive">
                  <table id="example2"  class="table table-bordered table-striped table-responsive">
                    <thead>
                      <tr>
                        <th>LogID</th>
                        <th>Date</th>
                        <th>KD_CAB</th>
                        <th>Kanwil</th>
                        <th>Area</th>
                        <th>CBC_NAME</th>
                        <th>No.Custumer</th>
                        <th>No.Rekening</th>
                        <th>NM.Costumer</th>
                        <th>Jenis Kredit</th>
                        <th>KOL</th> 
                        <th>RESTRU/ NO RESTRU</th>   
                        <th>LIMIT</th>
                        <th>BADE</th>
                        <th>PDDAYS</th>
                        <th>IPDDAY</th>
                        <th>MATDAT</th>
                        <th>PKDATE</th>
                        <th>Watchlist Y/N</th>
                        <th>Bidang Usaha</th>
                        <th>Expertise</th>
                        <th>IC Sector</th>
                        <th>IC Criteria</th>
                        <th>Yo yo</th>                   
                        <th>Action</th>
                      </tr>
                    </thead>
                  </table>
                </div><!-- /.box-body -->
                </div>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php
    } else {
      include './notif_denied.php';  
    }
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
          "url": "mdr_server_eam.php",
          "type": "POST"
        },
        "columns": [
        { "data": "log_id"},
        { "data": "DATE_TIME"},
        { "data": "KD_CAB"},
        { "data": "KANWIL_NM"},
        { "data": "AREA"},
        { "data": "CBC_NAME"},
        { "data": "NO_CUS_CIF"},
        { "data": "NO_REK"},
        { "data": "NM_CUS"},
        { "data": "JNS_KRD"},
        { "data": "KOL"},
        { "data": "RESTRU_NO_RESTRU"},
        { "data": "LIMIT1"},
        { "data": "BADE"},
        { "data": "PDDAYS"}, 
        { "data": "IPDDAY"},
        { "data": "MATDAT"},
        { "data": "PKDATE"},
        { "data": "Watchlist Y/N"},
        { "data": "BidangUsaha"},
        { "data": "Expertise"},
        { "data": "IC_Sector"},
        { "data": "IC_Criteria"},
        { "data": "yoyo"},      
        ],
        "columnDefs":[{
          "targets": 24,
          "data": "log_id",
          "render": function(data, type, full, meta){
            var html = "<a href='admin_clmanage_new_edit.php?id="+data+"' title='take'><span class='label label-success'>Edit </span></a>  <a href='admin_clmanage_new_delete.php?id="+data+"' title='take'><span class='label label-success'>Delete</span></a>";
            return html;
          }
        }]
      });
    });
  </script>
  <script type="text/javascript" src="plugins/chosen/chosen.jquery.js"></script>
  <script src="plugins/input-mask/jquery.maskedinput.js"></script>
  <script>
    jQuery(function($){
     $(".date2").mask("9999-99-99",{placeholder:"yyyy-mm-dd"});
     $("#date").mask("9999-99-99",{placeholder:"yyyy-mm-dd"});
     $("#phone").mask("(999) 999-9999");
     $("#tin").mask("99-9999999");
     $("#ref").mask("9999-9999-999.999");
     $("#inv").mask("aaa9999999");
     $("#clientlist").chosen({width: "100%"});
     $("#clientlist2").chosen({width: "100%"});
   });
 </script>

</body>
</html>
