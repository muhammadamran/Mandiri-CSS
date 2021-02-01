<?php
include 'include/connection.php';
$con=mysqli_connect($dbhost, $dbuser, $dbpassword,$dbname);
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// $draw = $_POST["draw"];
$recordsTotal = 0;
$recordsFiltered = 0;
// $start = $_POST["start"];
// $length = $_POST["length"];
$data = [];
// $search = $_POST["search"];

$where = '';

if (!empty($search['value'])) {
  $where .= '
    a.kd_cabang LIKE "%'.$search['value'].'%" OR 
    a.kanwil_nm LIKE "%'.$search['value'].'%" OR 
    a.area_log LIKE "%'.$search['value'].'%" OR 
    a.CBC_NAME LIKE "%'.$search['value'].'%" OR 
    a.CIF LIKE "%'.$search['value'].'%" OR 
    a.no_rek LIKE "%'.$search['value'].'%" OR 
    a.nm_customer LIKE "%'.$search['value'].'%" OR 
    a.JNS_KRD LIKE "%'.$search['value'].'%" OR 
    a.KOL_LOG LIKE "%'.$search['value'].'%" OR 
    a.restru_no LIKE "%'.$search['value'].'%" OR 
    LIMIT_LOG LIKE "%'.$search['value'].'%" OR 
    BADE_LOG LIKE "%'.$search['value'].'%" OR 
    a.PDDAYS LIKE "%'.$search['value'].'%" OR 
    a.IPDDAY LIKE "%'.$search['value'].'%" OR 
    a.MATDAT_LOG LIKE "%'.$search['value'].'%" OR 
    a.PKDATE_LOG LIKE "%'.$search['value'].'%" OR 
    a.month_logbook LIKE "%'.$search['value'].'%" OR 
    a.reviewer LIKE "%'.$search['value'].'%"
  ';
}
// if (empty($where) && ($_POST['cbc_name'] != '' || $_POST['type_logbook'] != '' || $_POST['year'] != '' || $_POST['month'] != '')) {
//   $where .= 'WHERE ';
// }
// if ($_POST['cbc_name']) {
//   if ($where != '' && $where != 'WHERE ') {
//     $where .= ' and ';
//   }
//   $type_search = implode('","',$_POST['cbc_name']);
//   $where .= 'a.CBC_NAME IN ("'.$type_search.'")';
// }
// if ($_POST['type_logbook']) {
//   if ($where != '' && $where != 'WHERE ') {
//     $where .= ' and ';
//   }
//   $where .= 'a.type_logbook LIKE "%'.$_POST['type_logbook'].'%"';
// }
// if ($_POST['month']) {
//   if ($where != '' && $where != 'WHERE ') {
//     $where .= ' and ';
//   }
//   $where .= 'MONTH(a.month_logbook) = '.$_POST['month'];
// }
// if ($_POST['year']) {
//   if ($where != '' && $where != 'WHERE ') {
//     $where .= ' and ';
//   }
//   $where .= 'YEAR(a.month_logbook) = '.$_POST['year'];
// }
$result = mysqli_query($con,
  "SELECT a.id_logbook,
  a.date_time_log,
  a.kd_cabang,
  a.kanwil_nm,
  a.area_log,
  a.CBC_NAME,
  a.CIF,
  a.no_rek,
  a.nm_customer,
  a.JNS_KRD,
  a.KOL_LOG,
  a.restru_no,
  SUM(a.LIMIT_LOG) AS LIMIT_LOG,
  SUM(a.BADE_LOG) AS BADE_LOG,
  a.PDDAYS,
  a.IPDDAY,
  a.MATDAT_LOG,
  a.PKDATE_LOG,
  a.month_logbook,
  a.reviewer,
  (SELECT f.user_name FROM `tb_user` f WHERE f.user_id=a.reviewer) AS nama_reviewer,
  (SELECT b.BIDANG_USAHA FROM `tb_upload_bidangusaha` b WHERE b.CIF=a.CIF AND MONTH(b.month_bidangusaha)=MONTH(a.month_logbook) AND YEAR(b.month_bidangusaha)=YEAR(a.month_logbook)) AS BIDANG_USAHA,
  (SELECT c.ic_sector FROM `tb_upload_sectorusaha` c WHERE c.CIF=a.CIF AND MONTH(c.month_su)=MONTH(a.month_logbook) AND YEAR(c.month_su)=YEAR(a.month_logbook)) AS ic_sector,
  (SELECT d.CIF FROM `tb_upload_watchlist` d WHERE d.CIF=a.CIF AND MONTH(d.month_watchlist)=MONTH(a.month_logbook) AND YEAR(d.month_watchlist)=YEAR(a.month_logbook)) AS CIF2,
  (SELECT e.CIF FROM `tb_upload_yoyo` e WHERE e.CIF=a.CIF AND MONTH(e.month_yoyo)=MONTH(a.month_logbook) AND YEAR(e.month_yoyo)=YEAR(a.month_logbook)) AS CIF5
  FROM tb_upload_logbook a $where GROUP BY a.CIF, a.month_logbook
  ");
$recordsFiltered = mysqli_num_rows($result);

// var_dump(mysqli_error($con));exit;

$result_count = mysqli_query($con,
  "SELECT a.id_logbook,
  a.date_time_log,
  a.kd_cabang,
  a.kanwil_nm,
  a.area_log,
  a.CBC_NAME,
  a.CIF,
  a.no_rek,
  a.nm_customer,
  a.JNS_KRD,
  a.KOL_LOG,
  a.restru_no,
  SUM(a.LIMIT_LOG) AS LIMIT_LOG,
  SUM(a.BADE_LOG) AS BADE_LOG,
  a.PDDAYS,
  a.IPDDAY,
  a.MATDAT_LOG,
  a.PKDATE_LOG,
  a.month_logbook,
  a.reviewer,
  (SELECT f.user_name FROM `tb_user` f WHERE f.user_id=a.reviewer) AS nama_reviewer,
  (SELECT b.BIDANG_USAHA FROM `tb_upload_bidangusaha` b WHERE b.CIF=a.CIF AND MONTH(b.month_bidangusaha)=MONTH(a.month_logbook) AND YEAR(b.month_bidangusaha)=YEAR(a.month_logbook)) AS BIDANG_USAHA,
  (SELECT c.ic_sector FROM `tb_upload_sectorusaha` c WHERE c.CIF=a.CIF AND MONTH(c.month_su)=MONTH(a.month_logbook) AND YEAR(c.month_su)=YEAR(a.month_logbook)) AS ic_sector,
  (SELECT d.CIF FROM `tb_upload_watchlist` d WHERE d.CIF=a.CIF AND MONTH(d.month_watchlist)=MONTH(a.month_logbook) AND YEAR(d.month_watchlist)=YEAR(a.month_logbook)) AS CIF2,
  (SELECT e.CIF FROM `tb_upload_yoyo` e WHERE e.CIF=a.CIF AND MONTH(e.month_yoyo)=MONTH(a.month_logbook) AND YEAR(e.month_yoyo)=YEAR(a.month_logbook)) AS CIF5
  FROM tb_upload_logbook a $where GROUP BY a.CIF, a.month_logbook
  ");
$recordsTotal = mysqli_num_rows($result_count);

$data = [];

if($recordsFiltered>0){
  // $no = $start;
  $no = 0;
  while($row = mysqli_fetch_array($result))
  {
    $no++;
    $data[] = [
      "checkbox" => "<input name='pick[]' value='".$row['id_logbook']."' type='checkbox' ".(!empty($row['reviewer']) ? 'checked disabled readonly' : '')." />",
      "no" => "<font style='font-size: 12px'><b>".$no.".</b></font>",
      "kanwil_nm" => "<font style='font-size: 12px'>" .$row['kanwil_nm']."</font>",
      "CBC_NAME" => "<font style='font-size: 12px'>" .$row['CBC_NAME']."</font>",
      "CIF" => "<font style='font-size: 12px'>" .$row['CIF']."</font>",
      "no_rek" => "<font style='font-size: 12px'>" .$row['no_rek']."</font>",
      "nm_customer" => "<font style='font-size: 12px'>" .$row['nm_customer']."</font>",
      "JNS_KRD" => "<font style='font-size: 12px'>" .$row['JNS_KRD']."</font>",
      "KOL_LOG" => "<font style='font-size: 12px'>" .$row['KOL_LOG']."</font>",
      "LIMIT_LOG" => "<font style='font-size: 12px'>Rp. " . number_format($row['LIMIT_LOG'],0,',','.')."</font>",
      "BADE_LOG" => "<font style='font-size: 12px'>Rp. " . number_format($row['BADE_LOG'],0,',','.')."</font>",
      "CIF2" => "<font style='font-size: 12px'>" .($row['CIF']==$row['CIF2'] ? 'YES' : 'NO')."</font>",
      "CIF3" => "<font style='font-size: 12px'>" .($row['BIDANG_USAHA']=='' ? '<font style="color: #f0ad4e">CIF</font>' : $row['BIDANG_USAHA'])."</font>",
      "CIF4" => "<font style='font-size: 12px'>" .($row['ic_sector']=='' ? '<font style="color: #f0ad4e">CIF</font>' : $row['ic_sector'])."</font>",
      "CIF5" => "<font style='font-size: 12px'>" .($row['CIF']==$row['CIF5'] ? 'YES' : '<font style="color: #f0ad4e">CIF</font>')."</font>",
      "WHO" => "<font style='font-size: 12px'>" .($row['nama_reviewer']=='' ? '<font style="color: #f0ad4e">Reviewer</font>' : $row['nama_reviewer'])."</font>",
      "month_logbook" => "<font style='font-size: 12px'>".$row['month_logbook']."</font>"
    ];
  }
}

$res_array = [
  // "draw" => $draw, 
  "recordsTotal" => $recordsTotal, 
  "recordsFiltered" => $recordsTotal, 
  "data" => $data
];

echo json_encode($res_array);