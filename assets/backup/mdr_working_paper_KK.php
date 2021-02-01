<?php include 'include/restrict.php';?>
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
			<section class="content">
				<p align="center">
					<!-- <img src="images/tr.png"> -->
					<h1 align="center">Comming Soon<br>Working Paper Kualitas Kredit</h1>
					<br>
				</p>
			</section>

		</div><!-- /.content-wrapper -->
		<?php include 'include/footer.php';?>

	</div><!-- ./wrapper -->

	<!-- jQuery 2.1.3 -->
	<script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
	<!-- Bootstrap 3.3.2 JS -->
	<script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<!-- DATA TABES SCRIPT -->
	<script src="assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
	<script src="assets/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
	<!-- SlimScroll -->
	<script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<!-- FastClick -->
	<script src='assets/plugins/fastclick/fastclick.min.js'></script>
	<!-- AdminLTE App -->
	<script src="assets/dist/js/app.min.js" type="text/javascript"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="assets/dist/js/demo.js" type="text/javascript"></script>
	<!-- page script -->
	<script type="text/javascript">
		$(function () {
			$("#example1").dataTable();
			$('#example2').dataTable({
				"bPaginate": true,
				"bLengthChange": false,
				"bFilter": false,
				"bSort": true,
				"bInfo": true,
				"bAutoWidth": false
			});
			$('#button_modal').click()
		});
	</script>
</body>
</html>