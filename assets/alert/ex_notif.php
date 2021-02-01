<?php 

$ntf	= $_GET['ntf'];

// CODE 1 : FOR SUCCESS PROCESS RECORD
if ($ntf == 1) {
	?>
	<div class="alert alert-success alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4><i class="icon fa fa-info"></i>Record Submitted!</h4>		
	</div>
	<?php
// CODE 2 : FOR DUPLICATE RECORD
} elseif ($ntf == 2) {
	?>
	<div class="alert alert-danger alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4><i class="icon fa fa-cancel"></i>Record Duplicate!</h4>
	</div>
	<?php
// CODE 3 : FOR FAILED PROCESS RECORD	
} elseif ($ntf == 3) {
	?>
	<div class="alert alert-danger alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4><i class="icon fa fa-cancel"></i>Process Failed!</h4>
		Please contact your administrator
	</div>
	<?php
} elseif ($ntf == 4) {
	?>
	<div class="alert alert-success alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4><i class="icon fa fa-info"></i>CSV Bidang Usaha Berhasil di Upload!</h4>		
	</div>
	<?php
}elseif ($ntf == 5) {
	?>
	<div class="alert alert-success alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4><i class="icon fa fa-info"></i>CSV LogBook Berhasil di Upload!</h4>		
	</div>
	<?php
}elseif ($ntf == 6) {
	?>
	<div class="alert alert-success alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4><i class="icon fa fa-info"></i>CSV Watchlist Berhasil di Upload!</h4>		
	</div>
	<?php
}elseif ($ntf == 7) {
	?>
	<div class="alert alert-success alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4><i class="icon fa fa-info"></i>CSV Sector Usaha Berhasil di Upload!</h4>		
	</div>
	<?php
}elseif ($ntf == 8) {
	?>
	<div class="alert alert-success alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4><i class="icon fa fa-info"></i>CSV IC Criteria Berhasil di Upload!</h4>		
	</div>
	<?php
}elseif ($ntf == 9) {
	?>
	<div class="alert alert-success alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4><i class="icon fa fa-info"></i>CSV Yoyo Berhasil di Upload!</h4>		
	</div>
	<?php
}
?>