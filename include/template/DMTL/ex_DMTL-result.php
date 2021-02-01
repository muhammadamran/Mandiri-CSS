<?php
// The function header by sending raw excel
header("Content-type: application/vnd-ms-excel");
date_default_timezone_set("Asia/Bangkok");
$datenow = date('d-m-Y h-i-s');

// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=Result-DMTL-$datenow.xls");

// include "include/connection.php";
?>
<div>
  <h1>DMHR CCS Tools</h1>
</div>
<table id="example1"  class="table table-bordered table-striped">
  <thead>
    <tr>
      <th width="10px" height="10px" style="background-color: #6EC5FF;"><font style="font-size: 15px;">No.</font></th>
      <th width="10px" height="10px" style="background-color: #6EC5FF;"><font style="font-size: 15px;">Unit Kerja</font></th>
      <th width="10px" height="10px" style="background-color: #6EC5FF;"><font style="font-size: 15px;">Debitur</font></th>
      <th width="10px" height="10px" style="background-color: #6EC5FF;"><font style="font-size: 15px;">CIF</font></th>
      <th width="10px" height="10px" style="background-color: #6EC5FF;"><font style="font-size: 15px;">CCR</font></th>
      <th width="10px" height="10px" style="background-color: #6EC5FF;"><font style="font-size: 15px;">Dashboard</font></th>
      <th width="10px" height="10px" style="background-color: #6EC5FF;"><font style="font-size: 15px;">Deadline</font></th>
      <th width="10px" height="10px" style="background-color: #6EC5FF;"><font style="font-size: 15px;">Update Tindak Lanjut</font></th>
      <th width="10px" height="10px" style="background-color: #6EC5FF;"><font style="font-size: 15px;">Status</font></th>
      <th width="10px" height="10px" style="background-color: #6EC5FF;"><font style="font-size: 15px;">Periode</font></th>
    </tr>
  </thead>
  <tbody>
    <?php
                      // $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
    $con=mysqli_connect("localhost","root","","knidcore_mandiri");
                                  // Check connection
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con,"SELECT 
      a.id_par,
      a.id_logbook, 
      b.CIF,
      b.CBC_NAME,
      b.month_logbook,
      b.nm_customer, 
      b.reviewer,
      b.status_tindaklanjut, 
      a.status_ccr,
      a.dashboard,
      a.tindak_lanjut,
      a.target_date,
      a.process_date,
      a.status 
      FROM tb_parameter a JOIN tb_upload_logbook b
      ON a.id_logbook=b.id_logbook WHERE b.status_tindaklanjut='YES' AND a.tindak_lanjut='Yes' AND b.reviewer=".$_SESSION['userid']." ORDER BY b.CIF");  
    if(mysqli_num_rows($result)>0){
      $no = 0;
      while($row = mysqli_fetch_array($result))
      {
        $no++;
        echo "<tr>";
        echo "<td><b>" . $no . ".</b></td>";
        echo "<td>" . $row['CBC_NAME'] . "</td>";
        echo "<td>" . $row['nm_customer'] . "</td>";
        echo "<td>" . $row['CIF'] . "</td>";
        echo "<td>" . $row['status_ccr'] . "</td>";
        echo "<td>" . $row['dashboard'] . "</td>";
        echo "<td>" . $row['target_date'] . "</td>";
        echo "<td>" . $row['process_date'] . "</td>";
                        //   echo "<td>
                        //   <select id='status-".$row['id_par']."' class='form-control' onchange='updateStatus(this, ".$row['id_par'].")'>
                        //     <option>--- SELECT STATUS ---</option>
                        //     <option value='0' ".($row['status'] == 0 ? "selected" : "").">Pending</option>
                        //     <option value='1' ".($row['status'] == 1 ? "selected" : "").">Continue</option>
                        //     <option value='2' ".($row['status'] == 2 ? "selected" : "").">Close</option>
                        //   </select>  
                        //   <span id='result-".$row['id_par']."' style='color:green;margin-top:10px;display:none'>Updated!</span>
                        //   <script>
                        //     function updateStatus(e, id) {
                        //       var get_value = document.getElementById('status-'+id).value;

                        //       if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
                        //           xmlhttp=new XMLHttpRequest();
                        //       } else {// code for IE6, IE5
                        //           xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
                        //       }

                        //      xmlhttp.onreadystatechange=function() {
                        //         if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        //           e.parentNode.parentNode.children[7].innerHTML = xmlhttp.responseText
                        //           document.getElementById('result-' + id).style.display = 'block'
                        //           setTimeout(function() {
                        //             document.getElementById('result-' + id).style.display = 'none'
                        //           }, 2000)
                        //         }
                        //       }

                        //       xmlhttp.open('GET','proses_status.php?id='+id+'&value='+get_value,true);
                        //       xmlhttp.send();
                        //     }
                        //   </script>
                        // </td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "<td>" . $row['month_logbook'] . "</td>";
        echo "</tr>";
        ?>

        <?php
      }
    } 
    mysqli_close($con);
    ?>
  </tbody>
  <tfoot>
    <tr>
      <th width="10px" height="10px" style="background-color: #6EC5FF;"><font style="font-size: 15px;">No.</font></th>
      <th width="10px" height="10px" style="background-color: #6EC5FF;"><font style="font-size: 15px;">Unit Kerja</font></th>
      <th width="10px" height="10px" style="background-color: #6EC5FF;"><font style="font-size: 15px;">Debitur</font></th>
      <th width="10px" height="10px" style="background-color: #6EC5FF;"><font style="font-size: 15px;">CIF</font></th>
      <th width="10px" height="10px" style="background-color: #6EC5FF;"><font style="font-size: 15px;">CCR</font></th>
      <th width="10px" height="10px" style="background-color: #6EC5FF;"><font style="font-size: 15px;">Dashboard</font></th>
      <th width="10px" height="10px" style="background-color: #6EC5FF;"><font style="font-size: 15px;">Deadline</font></th>
      <th width="10px" height="10px" style="background-color: #6EC5FF;"><font style="font-size: 15px;">Update Tindak Lanjut</font></th>
      <th width="10px" height="10px" style="background-color: #6EC5FF;"><font style="font-size: 15px;">Status</font></th>
      <th width="10px" height="10px" style="background-color: #6EC5FF;"><font style="font-size: 15px;">Periode</font></th>
    </tr>
  </tfoot>
</table>