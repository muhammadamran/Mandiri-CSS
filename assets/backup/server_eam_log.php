<?php

include "include/restrict.php";

$servername = $dbhost;
$username = $dbuser;
$password = $dbpassword;
$dbname = $dbname;

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


// $sql = "SELECT 
// tb_upload_logbook.id_logbook,
// tb_upload_logbook.date_time_log,
// tb_upload_logbook.kanwil_nm,
// tb_upload_logbook.CBC_NAME,
// tb_upload_logbook.CIF,
// tb_upload_logbook.no_rek,
// tb_upload_logbook.nm_customer,
// tb_upload_logbook.JNS_KRD,
// tb_upload_logbook.KOL_LOG,
// tb_upload_logbook.LIMIT_LOG,
// tb_upload_logbook.BADE_LOG,
// tb_upload_bidangusaha.BIDANG_USAHA,
// tb_upload_sectorusaha.ic_sector,
// tb_upload_logbook.reviewer,
// tb_upload_logbook.CIF AS CIF1, 
// tb_upload_watchlist.CIF AS CIF2, 
// tb_upload_bidangusaha.CIF AS CIF3, 
// tb_upload_sectorusaha.CIF AS CIF4, 
// tb_upload_yoyo.CIF AS CIF5
// FROM tb_upload_logbook
// LEFT JOIN tb_upload_watchlist ON tb_upload_logbook.CIF = tb_upload_watchlist.CIF
// LEFT JOIN tb_upload_bidangusaha ON tb_upload_logbook.CIF = tb_upload_bidangusaha.CIF
// LEFT JOIN tb_upload_sectorusaha ON tb_upload_logbook.CIF = tb_upload_sectorusaha.CIF
// LEFT JOIN tb_upload_yoyo ON tb_upload_logbook.CIF = tb_upload_yoyo.CIF $where ORDER BY 
// WHERE
// id_logbook like '%".$search['value']."%' 
// OR kanwil_nm like '%".$search['value']."%' 
// OR CBC_NAME like '%".$search['value']."%'
// OR CIF like '%".$search['value']."%'
// OR no_rek like '%".$search['value']."%'
// OR nm_customer like '%".$search['value']."%'
// OR JNS_KRD like '%".$search['value']."%'
// OR KOL_LOG like '%".$search['value']."%'
// OR LIMIT_LOG like '%".$search['value']."%'
// OR BADE_LOG like '%".$search['value']."%'
// OR month_logbook like '%".$search['value']."%'
// LIMIT $start, $length";
// $result = $conn->query($sql);

// $sql_count = "SELECT 
// tb_upload_logbook.id_logbook,
// tb_upload_logbook.date_time_log,
// tb_upload_logbook.kanwil_nm,
// tb_upload_logbook.CBC_NAME,
// tb_upload_logbook.CIF,
// tb_upload_logbook.no_rek,
// tb_upload_logbook.nm_customer,
// tb_upload_logbook.JNS_KRD,
// tb_upload_logbook.KOL_LOG,
// tb_upload_logbook.LIMIT_LOG,
// tb_upload_logbook.BADE_LOG,
// tb_upload_bidangusaha.BIDANG_USAHA,
// tb_upload_sectorusaha.ic_sector,
// tb_upload_logbook.reviewer,
// tb_upload_logbook.CIF AS CIF1, 
// tb_upload_watchlist.CIF AS CIF2, 
// tb_upload_bidangusaha.CIF AS CIF3, 
// tb_upload_sectorusaha.CIF AS CIF4, 
// tb_upload_yoyo.CIF AS CIF5
// FROM tb_upload_logbook
// LEFT JOIN tb_upload_watchlist ON tb_upload_logbook.CIF = tb_upload_watchlist.CIF
// LEFT JOIN tb_upload_bidangusaha ON tb_upload_logbook.CIF = tb_upload_bidangusaha.CIF
// LEFT JOIN tb_upload_sectorusaha ON tb_upload_logbook.CIF = tb_upload_sectorusaha.CIF
// LEFT JOIN tb_upload_yoyo ON tb_upload_logbook.CIF = tb_upload_yoyo.CIF $where ORDER BY 
// WHERE
// id_logbook like '%".$search['value']."%' 
// OR kanwil_nm like '%".$search['value']."%' 
// OR CBC_NAME like '%".$search['value']."%'
// OR CIF like '%".$search['value']."%'
// OR no_rek like '%".$search['value']."%' 
// OR nm_customer like '%".$search['value']."%'
// OR JNS_KRD like '%".$search['value']."%'
// OR KOL_LOG like '%".$search['value']."%'
// OR LIMIT_LOG like '%".$search['value']."%'
// OR BADE_LOG like '%".$search['value']."%'
// OR month_logbook like '%".$search['value']."%'";
// $result_count = $conn->query($sql_count);


$sql = "SELECT *
FROM tb_upload_logbook
WHERE 
id_logbook like '%".$search['value']."%' 
OR kanwil_nm like '%".$search['value']."%' 
OR CBC_NAME like '%".$search['value']."%'
OR CIF like '%".$search['value']."%'
OR no_rek like '%".$search['value']."%'
OR nm_customer like '%".$search['value']."%'
OR JNS_KRD like '%".$search['value']."%'
OR KOL_LOG like '%".$search['value']."%'
OR LIMIT_LOG like '%".$search['value']."%'
OR BADE_LOG like '%".$search['value']."%'
OR month_logbook like '%".$search['value']."%'
LIMIT $start, $length";
$result = $conn->query($sql);

$sql_count = "SELECT *
FROM tb_upload_logbook
WHERE 
id_logbook like '%".$search['value']."%' 
OR kanwil_nm like '%".$search['value']."%' 
OR CBC_NAME like '%".$search['value']."%'
OR CIF like '%".$search['value']."%'
OR no_rek like '%".$search['value']."%' 
OR nm_customer like '%".$search['value']."%'
OR JNS_KRD like '%".$search['value']."%'
OR KOL_LOG like '%".$search['value']."%'
OR LIMIT_LOG like '%".$search['value']."%'
OR BADE_LOG like '%".$search['value']."%'
OR month_logbook like '%".$search['value']."%'";
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