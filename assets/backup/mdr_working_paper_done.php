<?php
session_start(); 
include "include/connection.php";
include "include/restrict.php";

/* START - LIST ALL PROCESS */

include "process/wp_input_aspek.php";
include "process/wp_submit_iu.php";
include "process/wp_update_pr.php";
include "process/wp_update_ekds.php";
include "process/wp_update_iu.php";

/* END LIST */

if(isset($_POST["review"]))    
{    
  $date = explode('/', $_POST['target_date']);
  $target_date                 = $date[2] . '-' . $date[0] . '-' . $date[1];

  $id_logbook                  = $_POST['id_logbook'];
  $id_tema                     = $_POST['id_tema'];
  $hasil_review                = $_POST['hasil_review'];
  $tindak                      = $_POST['tindak'];
  $report                      = $_POST['report'];
  $chr                         = $_POST['chr'];
  $bobot                       = $_POST['bobot'];
  $saran                       = $_POST['saran'];
  $tanggapan                   = $_POST['tanggapan'];
  $komentar                    = $_POST['komentar'];
  $reviewer                    = NULL;

  $query = mysql_query("INSERT INTO tb_parameter (id_logbook, hasil_review,tindak_lanjut,report,CHR,bobot,saran_perbaikan,tanggapan,target_date,komentar,tema_id,reviewer) VALUES 
    (
    '".$id_logbook."',
    '".$tindak."',
    '".$report."',
    '".$chr."',
    '".$bobot."',
    '".$saran."',
    '".$tanggapan."',
    '".$target_date."',
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

    if ($role2['user_role'] == 'EAM')  {
     include './notif_denied.php';  
   } else {
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Report Section - Done
          <small>Review Section</small>
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
                  <li><a href="#">Review Section</a></li>
                  <li class="active">Report Section - Done</li>
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
                        <!-- <th>Id</th> -->
                        <th>CBC</th>
                        <th>Debitur</th>
                        <th>Limit</th>
                        <th>Bade</th>
                        <th>Reputation & Character</th>
                        <th>Repayment Capacity</th>
                        <th>Recovery Rate</th>
                        <th>Action</th>
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
                      $result = mysqli_query($con,"SELECT * FROM tb_upload_logbook WHERE status = 'On Progress' ");   
                      if(mysqli_num_rows($result)>0){
                        $no = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $no++;
                          echo "<tr>";
                          echo "<td><b>" . $no . ".</b></td>";
                          // echo "<td>" . $row['id_logbook'] . "</td>";
                          echo "<td>" . $row['CBC_NAME'] . "</td>";
                          echo "<td>" . $row['nm_customer'] . "</td>";
                          echo "<td>" . $row['LIMIT_LOG'] . "</td>";
                          echo "<td>" . $row['BADE_LOG'] . "</td>";

                          // /* CHECK and RETRIEVE SUBMITED LOGID IN REVIEW RESULT*/

                          // mysql_connect($dbhost, $dbuser, $dbpassword);
                          // mysql_select_db($dbname); 
                          // $role = mysql_query("SELECT * FROM tb_result_review WHERE id_logbook = '$row[id_logbook]' ");
                          // $inv    = mysql_fetch_array($role);
                          // $invtot = mysql_num_rows($role);

                          // /* END */

                          // if ($invtot == 1) {
                          //   echo "<td style='background:#'>" . "<a href='#' data-toggle='modal' data-target='#IUUPDATE$row[id_logbook]' title='Update Result'><span class='label label-primary'>Update</span></a>" . "</td>";
                          //   echo "<td style='background:#'>" . "<a href='#' data-toggle='modal' data-target='#CHR$row[id_logbook]' title='Update Result'><span class='label label-primary'>Update</span></a>" . "</td>";
                          //   echo "<td style='background:#'>" ."<a href='#' data-toggle='modal' data-target='#PR$row[id_logbook]' title='Update Result'><span class='label label-primary'>Update</span></a>" . "</td>";
                          //   echo "<td style='background:#'>" . "<a href='#' data-toggle='modal' data-target='#EKDS$row[id_logbook]' title='Update Result'><span class='label label-primary'>Update</span></a>" . "</td>"; 
                          // } else {
                          //   echo "<td style='background:#'>" . "<a href='#' data-toggle='modal' data-target='#IUCREATE$row[id_logbook]' title='Update Result'><span class='label label-warning'>Create</span></a>" . "</td>";
                          echo "<td>" . "<a href='#' data-toggle='modal' data-target='#REVIEW-1-$row[id_logbook]' title='" . ($_SESSION['role'] == 'Reviewer' ? 'Update' : 'View') . " Result'><span class='label label-primary'>" . ($_SESSION['role'] == 'Reviewer' ? 'Update' : 'View') . "</span></a>" . "</td>";
                          echo "<td>" . "<a href='#' data-toggle='modal' data-target='#REVIEW-2-$row[id_logbook]' title='" . ($_SESSION['role'] == 'Reviewer' ? 'Update' : 'View') . " Result'><span class='label label-primary'>" . ($_SESSION['role'] == 'Reviewer' ? 'Update' : 'View') . "</span></a>" . "</td>";
                          echo "<td>" ."<a href='#' data-toggle='modal' data-target='#REVIEW-3-$row[id_logbook]' title='" . ($_SESSION['role'] == 'Reviewer' ? 'Update' : 'View') . " Result'><span class='label label-primary'>" . ($_SESSION['role'] == 'Reviewer' ? 'Update' : 'View') . "</span></a>" . "</td>";
                          echo "<td align= ''width='200'>
                          <a href='./mdr_working_paper_proses.php?id=$row[id_logbook]&tipe=2&status=Complete' title=''" . ($_SESSION['role'] == 'Reviewer' ? 'Completed' : 'Decline') . " Result'><span class='label label-primary'>" . ($_SESSION['role'] == 'Reviewer' ? 'Completed' : 'Decline') . "</span></a>
                          <a href='mdr_ex_workingpaperdownload.php?id=$row[id_logbook]' title='Download Working Paper'><span class='label label-primary'>Download</span></a>
                          </td>";
                          echo "</tr>";
                          ?>

                          <?php 

                          /* start call all modal list for this loop */

                          include './modals/wp_ui_create.php';
                          include './modals/wp_ui_update_2.php';

                          /* end */

                          ?>

                          <div id="push"></div>

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
<?php include 'include/foot_wp_page.php';?>
</body>
</html>

