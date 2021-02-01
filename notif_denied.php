<?php
// include "include/restrict.php";
include "include/connection.php";
?>

<!DOCTYPE html>
<html>
<?php include 'include/head.php';?>
<body class="skin-blue">
	<?php include 'include/sidebar_all.php';?>
	<div class="wrapper">
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Access Denied Error Page
				</h1>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="error-page">
					<div><font style="font-size: 70px; color: #f39c12">Access Denied</font></div>
					<div class="error-content">
						<h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>

						<p>
							We could not find the page you were looking for.
							Meanwhile, you may <a href="index.php">return to home</a> or try using the search form.
						</p>

						<form class="search-form">
							<div class="input-group">
								<input type="text" name="search" class="form-control" placeholder="Search">

								<div class="input-group-btn">
									<button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
									</button>
								</div>
							</div>
							<!-- /.input-group -->
						</form>
					</div>
					<!-- /.error-content -->
				</div>
				<!-- /.error-page -->
			</section>
			<!-- /.content -->
		</div>
	</div>
</body>
</html>

