<?php
include 'include/restrict.php';

mysql_connect($dbhost, $dbuser, $dbpassword);
mysql_select_db($dbname); 
$result = mysql_query("SELECT * FROM tb_user WHERE user_name = '$user'");
$data = mysql_fetch_array($result);
?>

<script type="text/javascript"> 
  function display_c(){
  var refresh=1; // Refresh rate in milli seconds
  mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
  var strcount
  var x = new Date()
  document.getElementById('ct').innerHTML = x;
  tt=display_c();
}
</script>

<header class="main-header">
  <!-- Logo --><a href="index.php" class="logo" style="color: #f0ad4e">
    <small><b>CCS</b></small>
    <!-- <img src="assets/images/mandiri-logo.png" width="100px"> -->
  </a>
  <!-- <a href="index.php" class="logo"><img src="images/mandiri-logo.png" width="100px"></a> -->
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <li class="user user-menu">
          <a>
            <span class="hidden-xs">
              <i style="color: #f0ad4e" class="fa fa-calendar">&nbsp;</i>
              <span style="color: #f0ad4e" id="ct"> </span>  
            </span>
          </a>
        </li>

        <li class="user user-menu">
          <a>
            <span class="hidden-xs">
              <font style="color: #f0ad4e"><b><i class="fa fa-user"></i> <?php echo $data['FirstName'];?> <?php echo $data['LastName'];?></b></font>
              <span id="ct"> </span>
            </span>
          </a>
        </li>

        <li class="user user-menu">
          <a>
            <span class="hidden-xs">
              <!-- <i class="fa fa-user">&nbsp;</i><?php echo $user;?> -->
              <span id="ct"> </span>
            </span>
          </a>
        </li>

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="./logout.php">
            <span class="hidden-xs"><i class="glyphicon glyphicon-off" style="color: #f0ad4e"></i> <!-- <font style="color: #ffffff">Setting</font> -->
              <font style="color: #f0ad4e"><b>Sign out</b></font>
            </span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<body class="skin-<?php echo ($_SESSION['user_role'] != 'User') ? 'blue' : 'green';?>" onload="display_ct()">