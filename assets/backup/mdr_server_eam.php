<?php

$servername = $dbhost;
$username = $dbuser;
$password = $dbpassword;
$dbname = $dbname;

// $servername = $dbhost;
// $username = "root";
// $password = "";
// $dbname = "mandiri";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

$draw = $_POST["draw"];
$recordsTotal = 0;
$recordsFiltered = 0;
$start = $_POST["start"];
$length = $_POST["length"];
$data = [];
$search = $_POST["search"];


$sql = "SELECT *
FROM tb_logbook where 
KD_CAB like '%".$search['value']."%'  
LIMIT $start, $length";
$result = $conn->query($sql);

$sql_count = "SELECT *
FROM tb_logbook";
$result_count = $conn->query($sql_count);

$res_array = array("draw" => $draw, "recordsTotal" => $recordsTotal, "recordsFiltered" => $recordsFiltered, "data" => $data);

if ($result->num_rows > 0) {
	$res_array["recordsTotal"] = $result_count->num_rows;
	$res_array["recordsFiltered"] = $result_count->num_rows;

	while($row = mysqli_fetch_array($result)) {
		array_push($res_array["data"], $row);
	}
	echo json_encode($res_array);

} else {
	echo json_encode($res_array);
}

$conn->close();