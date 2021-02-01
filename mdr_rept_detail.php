<?php
include "include/restrict.php";
include "include/connection.php";

$id_logbook = $_GET['id'];


function numberToRomanRepresentation($number) {
    $map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
    $returnValue = '';
    while ($number > 0) {
        foreach ($map as $roman => $int) {
            if($number >= $int) {
                $number -= $int;
                $returnValue .= $roman;
                break;
            }
        }
    }
    return $returnValue;
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

    if ($role2['user_role'] != 'Administrator' && $role2['user_role'] != 'Reviewer')  {
     include './notif_denied.php';  
   } else {
    ?>

    <div class="content-wrapper">
      <section class="content">
        <div class="row">
          <div class="box-header">
            <ol class="breadcrumb">
              <li><a href="./index.php"> <b>Home</b></a></li>
              <li><a href="./index.php"><b>Reporting</b></a></li>
              <li class="active"><b>Detail</b></li>
            </ol>
          </div><!-- /.box-header -->
            <div class="col-xs-12">
	           <div class="box box-info">
	            <div class="box-header with-border">
	              <!-- <?php include 'include/alert/ex_notif.php'; ?> -->
	              <img src="assets/images/mandiri-logo.png" width="70px">
	              <div class="box-tools pull-right">
	                <a href="javascript: history.go(-1)">
						<span type="submit" class="btn bg-primary btn-flat"><i class="glyphicon glyphicon-arrow-left"></i> Back</span>
					</a>
	              </div>
	            </div>
                <div class="box-body">
                  <div class="box-body table-responsive no-padding">
                    <table id="example1" class="table table-hover">
						 <?php
							$con=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
							    // Check connection
							if (mysqli_connect_errno())
							{
							  echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}

						  $tipe = mysqli_query($con,"SELECT id_tipe, nama_tipe FROM tb_tipe");    

						  if(mysqli_num_rows($tipe)>0) {
						    $i = 1;
						    while($row_tipe = mysqli_fetch_array($tipe)) {
						 ?>
	                		<tr>
	                			<td>
	                				<?= numberToRomanRepresentation($i++) ?>.
	                			</td>
	                			<td>
	                				<b><?= $row_tipe['nama_tipe'] ?></b>
	                				<br><br>
								    <?php
								      $tema = mysqli_query($con,"SELECT id_tema, tema FROM tb_tema WHERE tipe_id=".$row_tipe['id_tipe']."");    
								      if(mysqli_num_rows($tema)>0){
									    $j = 1;
								        while($row_tema = mysqli_fetch_array($tema)) {
								            $tema_2 = mysqli_query($con,"SELECT * FROM tb_parameter WHERE id_logbook=".$id_logbook." AND tema_id=".$row_tema['id_tema']."");
								            $row_tema_2 = mysqli_fetch_array($tema_2);
								            if ($row_tema_2['report'] == $_GET['report']) {
								    ?>
								    	<?= $j++ . '. ' . $row_tema['tema'] ?>
									    <br>
					                  	<table class="table table-hover table-bordered">
					                      	<tr>
						                        <th><font style="font-size: 12px">Kronologi Permasalahan</font></th>
						                        <th><font style="font-size: 12px">Hasil Review</font></th>
						                        <th><font style="font-size: 12px">Rekomendasi</font></th>
						                        <th><font style="font-size: 12px">TindakLanjut</font></th>
						                        <th><font style="font-size: 12px">Time line</font></th>
						                        <th><font style="font-size: 12px">Status</font></th>
						                        <th><font style="font-size: 12px">Report</font></th>
					                      	</tr>
					                    	<tr>
					                    		<td><font style="font-size: 12px"><?= !empty($row_tema_2['KP']) ? $row_tema_2['KP'] : '-' ?></font></td>
					                    		<td><font style="font-size: 12px"><?= !empty($row_tema_2['hasil_review']) ? $row_tema_2['hasil_review'] : '-' ?></font></td>
					                    		<td><font style="font-size: 12px"><?= !empty($row_tema_2['saran_perbaikan']) ? $row_tema_2['saran_perbaikan'] : '-' ?></font></td>
					                    		<td><font style="font-size: 12px"><?= !empty($row_tema_2['tindak_lanjut']) ? $row_tema_2['tindak_lanjut'] : '-' ?></font></td>
					                    		<td><font style="font-size: 12px"><?= !empty($row_tema_2['target_date']) ? $row_tema_2['target_date'] : '-' ?></font></td>
					                    		<td><font style="font-size: 12px"><?= !empty($row_tema_2['status']) ? $row_tema_2['status'] : '-' ?></font></td>
					                    		<td><font style="font-size: 12px"><?= !empty($row_tema_2['report']) ? $row_tema_2['report'] : '-' ?></font></td>
					                    	</tr>
					                    </table>
					                <?php }}} ?>
	                			</td>
	                		</tr>
	                	<?php }} ?>
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

