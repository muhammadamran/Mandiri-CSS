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
<script>
function goBack()() {
  window.history.back();
}
</script>

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
									<li><a href="./index.php"><b>DMHR</b></a></li>
									<li class="active"><b>Tindak Lanjut</b></li>
								</ol>
							</div><!-- /.box-header -->
						</div>

				<div class="col-xs-12">
					<div class="box box-warning">
						<div class="box-header with-border">
							<i class="fa fa-search" style="color: #1d2f61"></i><b> Sreach Data Tindak Lanjut</b>
							<h3 class="box-title"></h3>
						</div><!-- /.box-header -->
						<div align="center">
							<?php
							$type_ = '';
							$month_ = '';
							$year_ = '';
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
								<div class="row">
									<div class="form-group">
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

									<div class="form-group">
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
								</div>
							</div><!-- /.box-body -->
						<div class="box-header with-border">
							<div align="center">
								<button type="submit" name="search" value="search" class="btn btn-warning btn-flat"><i class="fa fa-search"></i> Search Tindak Lanjut</button>
							</div>							
						</div>
					</div><!-- /.box -->
				</div>
					<!-- end search -->

						<div class="col-xs-12">
							<div class="box box-info">
								<div class="box-header with-border">
									<img src="assets/images/mandiri-logo.png" width="70px">
									<div class="box-tools pull-right">
										<a href="mdr_tindaklanjut.php?ntf=0">
											<span type="submit" class="btn bg-primary btn-flat"><i class="glyphicon glyphicon-arrow-left"></i> Back</span>
										</a>
										<button type="submit" name="search" value="search" class="btn bg-olive btn-flat"><i class="fa fa-file-excel-o"></i> Export Excel</button>
										<button type="submit" name="search" value="search" class="btn bg-orange btn-flat"><i class="glyphicon glyphicon-download-alt"></i> Download Template Excel</button>
									</div>
								</div>
							</form>
								<div class="box-body">
									<div class="box-body table-responsive no-padding">
										<table id="example1" class="table table-hover">
											<thead>
												<tr>
													<th><font style="font-size: 12px">No.</font></th>
													<th><font style="font-size: 12px">Debitur</font></th>
													<th><font style="font-size: 12px">CIF</font></th>
													<th><font style="font-size: 12px">CCR</font></th>
													<th><font style="font-size: 12px">Dashboard</font></th>
													<th><font style="font-size: 12px">Deadline</font></th>
													<th><font style="font-size: 12px">Update Tindak Lanjut</font></th>
													<th><font style="font-size: 12px">Status</font></th>
												</tr>
											</thead>
											<tbody>
											<?php
											$where = ' ';
											if ($_POST['search']) {
												if ($_POST['cbc_name'] != '' || $_POST['type_logbook'] != '' || $_POST['year'] != '' || $_POST['month'] != '') {
													$where .= 'WHERE ';
												}
												if ($_POST['type_logbook']) {
													if ($where != '' && $where != 'WHERE ') {
														$where .= ' and ';
													}
													$where .= 'b.type_logbook LIKE "%'.$_POST['type_logbook'].'%"';
												}
												if ($_POST['month']) {
													if ($where != '' && $where != 'WHERE ') {
														$where .= ' and ';
													}
													$where .= 'MONTH(b.month_logbook) = '.$_POST['month'];
												}
												if ($_POST['year']) {
													if ($where != '' && $where != 'WHERE ') {
														$where .= ' and ';
													}
													$where .= 'YEAR(b.month_logbook) = '.$_POST['year'];
												}
											}
					                        // var_dump($where);
											$con=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
						                      // Check connection
											if (mysqli_connect_errno())
											{
												echo "Failed to connect to MySQL: " . mysqli_connect_error();
											}
											
											$result = mysqli_query($con,"SELECT 
												a.id_par,
												a.id_logbook, 
												b.CIF,
												b.nm_customer, 
												a.status_ccr,
												a.dashboard,
												a.target_date,
												a.process_date,
												a.status 
											FROM tb_parameter a JOIN tb_upload_logbook b
											ON a.id_logbook=b.id_logbook $where ORDER BY b.CIF");   
											if(mysqli_num_rows($result)>0){
												$no = 0;
												while($row = mysqli_fetch_array($result))
												{
													$no++;
													echo "<tr>";
													echo "<td><font style='font-size: 12px'><b>" . $no . ".</b></font></td>";
													echo "<td><font style='font-size: 12px'>" . $row['nm_customer'] . "</font></td>";
													echo "<td><font style='font-size: 12px'>" . $row['CIF'] . "</font></td>";
													echo "<td><font style='font-size: 12px'>" . $row['status_ccr'] . "</font></td>";
													echo "<td><font style='font-size: 12px'>" . $row['dashboard'] . "</font></td>";
													echo "<td><font style='font-size: 12px'>" . $row['target_date'] . "</font></td>";
													echo "<td><font style='font-size: 12px'>" . $row['process_date'] . "</font></td>";
													echo "<td>
						                              <select id='status-".$row['id_par']."' class='form-control' onchange='updateStatus(this, ".$row['id_par'].")'>
						                                <option>--- SELECT STATUS ---</option>
						                                <option value='0' ".($row['status'] == 0 ? "selected" : "").">Pending</option>
						                                <option value='1' ".($row['status'] == 1 ? "selected" : "").">Continue</option>
						                                <option value='2' ".($row['status'] == 2 ? "selected" : "").">Close</option>
						                              </select>  
						                              <span id='result-".$row['id_par']."' style='color:green;margin-top:10px;display:none'>Updated!</span>
						                              <script>
						                                function updateStatus(e, id) {
						                                  var get_value = document.getElementById('status-'+id).value;

						                                  if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
						                                      xmlhttp=new XMLHttpRequest();
						                                  } else {// code for IE6, IE5
						                                      xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
						                                  }

						                                 xmlhttp.onreadystatechange=function() {
						                                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
						                                    	e.parentNode.parentNode.children[5].innerHTML = xmlhttp.responseText
						                                    	document.getElementById('result-' + id).style.display = 'block'
						                                    	setTimeout(function() {
							                                    	document.getElementById('result-' + id).style.display = 'none'
					                                    		}, 2000)
						                                    }
						                                  }

						                                  xmlhttp.open('GET','proses_status.php?id='+id+'&value='+get_value,true);
						                                  xmlhttp.send();
						                                }
						                              </script>
						                            </td>";
													echo "</tr>";
													?>

													<?php 
													/* start call all modal list for this loop */
													include './modals/wp_ui_create.php';
													include './modals/wp_ui_update_2.php';
													/* end */
													?>
													<?php
												}
											} 
											mysqli_close($con);
											?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<?php } ?>
<?php include 'include/foot_wp_page.php';?>
</body>
</html>

