<?php
$con=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
                      // Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$user_id = $_GET['user_id'];
$data = mysqli_query($con,"SELECT * FROM tb_user WHERE user_id='$user_id'");
while($d = mysqli_fetch_array($data)){
	?>
	<!DOCTYPE html>
	<html lang="eng">
	<?php include "include/head.php" ?>
	<body>
		<div class="main-top" id="home">
			<?php include 'include/header.php' ?>
			<div class="banner_w3lspvt-2">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#" class="font-weight-bold">Update Account Penyuluh</a></li>
					<li class="breadcrumb-item" aria-current="page">Form</li>
				</ol>
			</div>
		</div>
		<div class="row mt">
			<div class="col-lg-12">
				<div class="content-panel">
					<section id="unseen" style="padding: 10px">
						<div class="modal-body">
							<form action="proses/admin-input-proses.php" method="post" enctype="multipart/form-data">
								<div class="form-group has-feedback">
									<!-- <label>Foto Profile Penyuluh</label> -->
									<input type="hidden" name="foto" class="form-control" value="<?php echo $d['foto']; ?>" />
									<input type="hidden" name="user_id" class="form-control" value="<?php echo $d['user_id']; ?>" />
									<span class="glyphicon glyphicon-camera form-control-feedback"></span>
								</div>
								<div class="form-group has-feedback">
									<label>Full Name</label>
									<input type="text" name="full_name" class="form-control" value="<?php echo $d['full_name']; ?>"  placeholder="Full Name" required="required" />
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
								</div>
								<div class="form-group has-feedback">
									<label>Username</label>
									<input type="text" name="username" class="form-control" value="<?php echo $d['username']; ?>"  placeholder="Username" required="required" />
									<input type="hidden" name="password" class="form-control" value="<?php echo $d['password']; ?>"  placeholder="Password"/>
									<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
								</div>
							<!-- <div class="form-group has-feedback">
								<label>Password</label>
								<input type="password" name="password" class="form-control" placeholder="Password" required="required" />
								<span class="glyphicon glyphicon-lock form-control-feedback"></span>
							</div> -->
							<div class="form-group has-feedback">
								<label>Jenis Kelamin</label>
								<select class="form-control" name="jenis_kelamin">
									<option value="<?php echo $d['jenis_kelamin']; ?>"><?php echo $d['jenis_kelamin']; ?></option>
									<option value="">--Pilih Jenis Kelamin--</option>
									<option value="Pria">Pria</option>
									<option value="Wanita">Wanita</option>
								</select>
							</div>
							<div class="form-group has-feedback">
								<label>Email</label>
								<input type="email" name="email" class="form-control" value="<?php echo $d['email']; ?>" placeholder="Email" required="required" />
								<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
							</div>
							<div class="form-group has-feedback">
								<label>Alamat</label>
								<input type="text" name="alamat" class="form-control" value="<?php echo $d['alamat']; ?>" placeholder="Alamat" required="required" />
								<span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
							</div>
							<div class="form-group has-feedback">
								<label>Nomor Handphone</label>
								<input type="number" name="no_hp" class="form-control" value="<?php echo $d['no_hp']; ?>" placeholder="Nomor Telepone" required="required" />
								<span class="glyphicon glyphicon-earphone form-control-feedback"></span>
							</div>
							<div class="form-group has-feedback">
								<label>Tanggal Lahir</label>
								<input type="date" name="ttl" class="form-control" value="<?php echo $d['ttl']; ?>" placeholder="Usia" required="required" />
								<input type="hidden" name="user_role" class="form-control" value="<?php echo $d['user_role']; ?>" placeholder="Usia"/>
								<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
							</div>
							<button type="submit" name="update" value="update" class="btn btn-info btn-block btn-flat">Update</button>
							<button type="button" class="btn btn-warning btn-block btn-flat" onclick="goBack()">Back</button> </center>
						</div>
					</form>
					<?php 
				}
				?>
			</div>
		</section>
	</div><!-- /content-panel -->
</div><!-- /col-lg-4 -->      
</div><!-- /row -->
<?php include 'include/footer.php' ?>
</body>
</html>