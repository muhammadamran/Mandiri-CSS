<?php
include "include/connection.php";
include "include/restrict.php";

$id_logbook                  = $_GET['id'];
$tipe                 = $_GET['tipe'];
$status                 = $_GET['status'];

if ($tipe == 1) {
	$query = mysql_query("UPDATE tb_upload_logbook SET status2='".$status."' WHERE id_logbook='".$id_logbook."'");
} else {
	$query = mysql_query("UPDATE tb_upload_logbook SET status='".$status."', status2='".$status."' WHERE id_logbook='".$id_logbook."'");
}
if($query){
header("Location: ./mdr_working_paper.php?ntf=$uid");                                                  
} else {
echo "Updated Failed - Please contact your Administrator";
}