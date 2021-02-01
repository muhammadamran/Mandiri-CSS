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
  <h1>Template DMHR CCS Tools</h1>
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
                </tbody>
              </table>