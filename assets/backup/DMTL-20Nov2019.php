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
			<div class="content-wrapper">
				<section class="content">
					<ol class="breadcrumb">
						<li><a href="./index.php"><b>Home</b></a></li>
						<li><a href="mdr_tindaklanjut"><b>DMHR</b></a></li>
						<li class="active"><b>Tindak Lanjut</b></li>
					</ol>
					<div class="box box-warning">
						<div class="box-header with-border">
							<i class="fa fa-search" style="color: #1d2f61"></i><b> Sreach Data DMTL</b>
							<h3 class="box-title"></h3>
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
								<div class="row">
									<div class="form-group">
										<label>CBC Department</label>
										<div>
											<select class="form-control" name="cbc_name[]"  value="<?= $cbc_ ?>" id="clientlist2" multiple>
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
											<small>ctrl + click</small>
											<!-- <input type="text" name="cbc_name" class="form-control" value="<?= $cbc_ ?>"> -->
										</div>
									</div>

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

									<div>
										<button type="submit" name="search" value="search" class="btn btn-warning btn-block"><i class="fa fa-search"></i> Sreach EAM Logbook</button>
									</div>
									<div>
										<button type="submit" name="search" value="search" class="btn btn-success btn-block"><i class="fa fa-file-excel-o"></i> Export Excel</button>
									</div>
								</div>
							</form>
						</div><!-- /.box-body -->
					</div><!-- /.box -->
					<!-- end search -->

					<div class="row">
						<div>
							<div class="box-header">
								<div class="box-body">
									<div class="box-body table-responsive no-padding">
										<table id="example1" class="table table-hover">
											<thead>
												<tr>
													<th>No.</th>
													<th>CBC Name</th>
													<th>Debitur</th>
													<th>Limit</th>
													<th>Bade</th>
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
														$where .= 'CBC_NAME IN ("'.$type_search.'")';
													}
													if ($_POST['type_logbook']) {
														if ($where != '' && $where != 'WHERE ') {
															$where .= ' and ';
														}
														$where .= 'type_logbook LIKE "%'.$_POST['type_logbook'].'%"';
													}
													if ($_POST['month']) {
														if ($where != '' && $where != 'WHERE ') {
															$where .= ' and ';
														}
														$where .= 'MONTH(month_logbook) = '.$_POST['month'];
													}
													if ($_POST['year']) {
														if ($where != '' && $where != 'WHERE ') {
															$where .= ' and ';
														}
														$where .= 'YEAR(month_logbook) = '.$_POST['year'];
													}
												}
						                        // var_dump($where);
												$con=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
							                      // Check connection
												if (mysqli_connect_errno())
												{
													echo "Failed to connect to MySQL: " . mysqli_connect_error();
												}
												$result = mysqli_query($con,"SELECT *, SUM(LIMIT_LOG) AS LIMIT_LOG_2, SUM(BADE_LOG) AS BADE_LOG_2 FROM tb_upload_logbook $where GROUP BY CBC_NAME, month_logbook");   
												if(mysqli_num_rows($result)>0){
													$no = 0;
													while($row = mysqli_fetch_array($result))
													{
														$no++;
														echo "<tr>";
														echo "<td><b>" . $no . ".</b></td>";
														echo "<td>" . $row['CBC_NAME'] . "</td>";
														echo "<td>" . $row['nm_customer'] . "</td>";
														echo "<td>" . $row['LIMIT_LOG_2'] . "</td>";
														echo "<td>" . $row['BADE_LOG_2'] . "</td>";
														echo "</td>";
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
								</div><!-- /.box-body -->
							</div><!-- /.box -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</section><!-- /.content -->
			</div>
		<?php } ?>
		<?php include 'include/footer.php';?>
	</div>
	<?php include 'include/foot_wp_page.php';?>
</body>
</html>

