<?php

include "include/connection.php";
include "include/restrict.php";

$id = $_GET['id'];
$value = $_GET['value'];

mysql_query("UPDATE tb_parameter SET status=".$value.", process_date='".date('Y-m-d')."' WHERE id_par ='".$id."'");

$get_date = mysql_query("SELECT process_date FROM tb_parameter WHERE id_par ='".$id."'");
$result = mysql_fetch_array($get_date);

echo $result['process_date'];