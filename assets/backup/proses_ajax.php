<?php

include "include/connection.php";
include "include/restrict.php";

$id = $_GET['id'];
$value = $_GET['value'];

mysql_query("UPDATE tb_upload_logbook SET reviewer='".$value."' WHERE id_logbook ='".$id."'");

$get_user = mysql_query("SELECT user_name FROM tb_user WHERE user_id ='".$value."'");
$result = mysql_fetch_array($get_user);

echo $result['user_name'];