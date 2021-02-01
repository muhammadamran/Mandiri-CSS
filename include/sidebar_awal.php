<?php if ($access['user_role'] != 'Atasan I' && $access['user_role'] != 'Atasan II') { ?>
  <li>
    <a href="mdr_unit.php?ntf=0"><i class="glyphicon glyphicon-tags"></i> Debitur Prioritas</a>
  </li>
<?php } ?>

<?php if ($access['user_role'] != 'Atasan I' && $access['user_role'] != 'Atasan II' && $access['user_role'] != 'EAM') { ?>
  <!-- <li class="header">REVIEW SECTION</li> -->
  <li>        
    <a href="mdr_working_paper.php?ntf=1"><i class=" glyphicon glyphicon-tasks"></i> Working Paper - Process</a>            
  </li>
  <li>        
    <a href="mdr_working_paper_complete.php?ntf=1"><i class=" glyphicon glyphicon-saved"></i> Working Paper - Completed</a>            
  </li>
<?php } ?>

<?php if ($access['user_role'] != 'Atasan I' && $access['user_role'] != 'Atasan II' && $access['user_role'] != 'Administrator' && $access['user_role'] != 'Reviewer') { ?>
  <!-- <li class="header">PICK SECTION</li> -->
  <li>        
    <a href="mdr_pick_reviewer.php?ntf=1"><i class=" glyphicon glyphicon-screenshot"></i> Pick Reviewer</a>            
  </li> 
<?php } ?>

<?php if ($access['user_role'] != 'EAM') { ?>
  <li>        
    <a href="mdr_working_paper_done.php?ntf=1"><i class=" glyphicon glyphicon-erase"></i> Tindak Lanjut</a>            
  </li> 
<?php } ?>

<!-- <li class="header">REPORT SECTION</li> -->
<li>        
  <a href="mdr_rept_scoring.php?ntf=1"><i class=" glyphicon glyphicon-list"></i> Scoring</a>            
</li>
<li>        
  <a href="mdr_rept_dashboard.php?ntf=1"><i class=" glyphicon glyphicon-duplicate"></i> Dashboard</a>            
</li>
<li>        
  <a href="mdr_rept_quick_report.php?ntf=1"><i class=" glyphicon glyphicon-copy"></i> Quick Report</a>            
</li>
<li>        
  <a href="mdr_rept_rekomendasi_report.php?ntf=1"><i class=" glyphicon glyphicon-open-file"></i> Rekomendasi Report</a>            
</li>
<li>        
  <a href="mdr_rept_acc_str.php?ntf=1"><i class=" glyphicon glyphicon-folder-close"></i>Usulan Account Strategy</a>     
</li> 
<li>        
  <a href="mdr_rept_est_down.php?ntf=1"><i class=" glyphicon glyphicon-import"></i> Estimasi Kolektibilitas</a>     
</li> 
<li>        
  <a href="mdr_rept_us_wl.php?ntf=1"><i class=" glyphicon glyphicon-save"></i> Usulan Watchlist </a>     
</li>

<?php if ($access['user_role'] != 'Atasan I' && $access['user_role'] != 'Atasan II' && $access['user_role'] != 'EAM' && $access['user_role'] != 'Reviewer') { ?>
  <!-- <li class="header">DATA SECTION</li> -->
  <li class="treeview">
    <a href="#">
      <i class="  glyphicon glyphicon-compressed"></i> <span> Master Data</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li>
        <a href="mdr_admin_corporate.php?ntf=0"> Corporate</a>
      </li>
      <li>
        <a href="mdr_admin_comercial.php?ntf=0"> Commercial</a>
      </li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="  glyphicon glyphicon-import"></i> <span>Import Data</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li>
        <a href="mdr_upload_Corporate.php?ntf=0"> Upload Corporate</a>
      </li>
      <li>
        <a href="mdr_upload_Commercial.php?ntf=0"> Upload Commercial</a>
      </li>
    </li>
  </ul>
<?php } ?>
<?php if ($access['user_role'] != 'Atasan I' && $access['user_role'] != 'Atasan II' && $access['user_role'] != 'Reviewer' && $access['user_role'] != 'EAM') { ?>
  <!-- <li class="header">ADMINISTRATION SECTION</li> -->
  <li>
    <a href="mdr_admin_usrmanage.php"><i class="  glyphicon glyphicon-user"></i> User List</a>
  </li>
  <li>
    <a href="mdr_admin_unitkerja.php"><i class="  glyphicon glyphicon-phone-alt"></i> Unit Kerja</a>
  </li>
  <?php } ?>