<?php 

include "include/connection.php";

mysql_connect($dbhost, $dbuser, $dbpassword);
mysql_select_db($dbname); 
if (isset($_POST['submit'])) {

  $user =$_POST['username'];
  $pass =$_POST['password'];
  $log_type = "login";
  $date_log = date('Y-m-d H:i:m');

  $q = mysql_query("SELECT * from tb_user where user_name='$user' and user_password='$pass'");

  if (mysql_num_rows($q) == 1) {
    session_start();
    $ses_user = mysql_fetch_array($q);
    $_SESSION['userid']=$ses_user['user_id'];
    $_SESSION['username']=$ses_user['user_name'];
    $_SESSION['role']=$ses_user['user_role'];
    $query = mysql_query("INSERT into tb_log values(' ','$user','$log_type','$date_log',' ')");
    if ($query) {
      header("Location: ./index.php");
    } else {
      echo "<h4>". "log error".mysql_error()."</h4>";
    }           
  } else {
    header("Location: ./index.php");
  }
}
?>
<!DOCTYPE html>
<html>
<?php include 'include/head.php' ?> 
<body class="login-page" style="background:url('assets/img/-.jpg') no-repeat fixed center center;background-size: 100%" >
  <div class="login-box">
    <div class="login-box-body">
      <div class="login-logo">
        <img src="assets/images/mandiri-logo.png" width="50%" style="text-align: center;">
        <h6></h6>
      </div>
      <form action=" " method="post">
        <div class="form-group has-feedback">
          <input type="text" name="username" class="form-control" placeholder="Username*"/>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Password*"/>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <button type="submit" name="submit" value="submit" class="btn btn-warning btn-block">Sign In</button>
          </div><!-- /.col -->
        </div>
      </form>
      <hr>
      <p align="center"><b> BANK MANDIRI <br> CCS </b></p>
    </div><!-- /.login-box-body -->
  </div><!-- /.login-box -->

  <!-- jQuery 2.1.3 -->
  <script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
  <!-- Bootstrap 3.3.2 JS -->
  <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- iCheck -->
  <script src="assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
    });
  </script>
</body>
</html>