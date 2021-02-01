<?php

include "include/connection.php";
include "include/restrict.php";

if(isset($_POST["submit"]))    
{    

  $id_news        = $_POST['id_news'];
  $title          = $_POST['title'];
  $deskripsi      = $_POST['deskripsi'];
  $url            = $_POST['url'];
  $status         = $_POST['status'];
  $nm             = $_POST['nm'];
  $tgl             = $_POST['tgl'];

  $nama = $_FILES['gambar']['name'];
  $file_tmp = $_FILES['gambar']['tmp_name'];

  move_uploaded_file($file_tmp, './assets/file/news/'.$nama);


  $query = mysql_query("INSERT INTO tb_news 
    (id_news, gambar, title, deskripsi, url, status, nm, tgl)
    VALUES
    ('', '$nama','$title','$deskripsi','$url','$status' ,'$nm', '$tgl')");

  // var_dump($query);die();
  if($query){
    header("Location: ./mdr_admin_news.php?ntf=1");  
  } else {
    header("Location: ./mdr_admin_news.php?ntf=3");
  }
}

if(isset($_POST["update"]))    
{    
  $id_news        = $_POST['id_news'];
  $title          = $_POST['title'];
  $deskripsi      = $_POST['deskripsi'];
  $url            = $_POST['url'];
  $status         = $_POST['status'];
  $nm             = $_POST['nm'];
  $tgl             = $_POST['tgl'];

  $nama = $_FILES['gambar']['name'];
  $file_tmp = $_FILES['gambar']['tmp_name'];

  move_uploaded_file($file_tmp, './assets/file/news/'.$nama);

  $cek = mysql_query("SELECT * FROM tb_news WHERE id_news ='$id_news'");
  $num = mysql_num_rows($cek);
  if($num == 1){
    $query = mysql_query("UPDATE tb_news SET title ='$title',
      gambar ='$nama',
      deskripsi ='$deskripsi',
      url ='$url',
      status ='$status',
      nm ='$nm',
      tgl ='$tgl'
      WHERE id_news ='$id_news'");
  // var_dump($query);die();
    if($query){
      header("Location: ./mdr_admin_news.php");                                                  
    } else {
      echo "Updated Failed - Please contact your administrator";
    }
  } else {
    echo "Records cannot be found!! Please contact your System Administrator" ;
  }

}

if(isset($_POST["show"]))    
{    
  $id_news        = $_POST['id_news'];
  $title          = $_POST['title'];
  $deskripsi      = $_POST['deskripsi'];
  $url            = $_POST['url'];
  $status         = $_POST['status'];
  $gambar         = $_POST['gambar'];
  $nm             = $_POST['nm'];


  $cek = mysql_query("SELECT * FROM tb_news WHERE id_news ='$id_news'");
  $num = mysql_num_rows($cek);
  if($num == 1){
    $query = mysql_query("UPDATE tb_news SET title ='$title',
      gambar ='$gambar',
      deskripsi ='$deskripsi',
      url ='$url',
      status ='$status',
      nm ='$nm'
      WHERE id_news ='$id_news'");
  // var_dump($query);die();
    if($query){
      header("Location: ./mdr_admin_news.php");                                                  
    } else {
      echo "Updated Failed - Please contact your administrator";
    }
  } else {
    echo "Records cannot be found!! Please contact your System Administrator" ;
  }

}

if(isset($_POST["hidden"]))    
{    
  $id_news        = $_POST['id_news'];
  $title          = $_POST['title'];
  $deskripsi      = $_POST['deskripsi'];
  $url            = $_POST['url'];
  $status         = $_POST['status'];
  $gambar         = $_POST['gambar'];
  $nm             = $_POST['nm'];


  $cek = mysql_query("SELECT * FROM tb_news WHERE id_news ='$id_news'");
  $num = mysql_num_rows($cek);
  if($num == 1){
    $query = mysql_query("UPDATE tb_news SET title ='$title',
      gambar ='$gambar',
      deskripsi ='$deskripsi',
      url ='$url',
      status ='$status',
      nm ='$nm'
      WHERE id_news ='$id_news'");
  // var_dump($query);die();
    if($query){
      header("Location: ./mdr_admin_news.php");                                                  
    } else {
      echo "Updated Failed - Please contact your administrator";
    }
  } else {
    echo "Records cannot be found!! Please contact your System Administrator" ;
  }

}

if(isset($_POST['delete']))
{

  $id_news    = $_POST['id_news'];

  if($id_news){
    $query = mysql_query("DELETE FROM tb_news WHERE id_news = '$id_news' ");
    if($query){
     header("Location: ./mdr_admin_news.php");                    
   } else {
    echo "Operation Failed! Please contact your Administrator".mysql_errno();
  }
} else {
  echo "Operation Failed! Please contact your Administrator".mysql_errno();
}

}

?>

<!DOCTYPE html>
<html>
<?php include 'include/head.php';?>
<body class="skin-blue">
  <div class="wrapper">
    <?php include 'include/header.php';?>
    <?php include 'include/sidebar_all.php';?>
    <?php

    mysql_connect($dbhost, $dbuser, $dbpassword);
    mysql_select_db($dbname); 
    $role = mysql_query("SELECT * FROM tb_user WHERE user_name = '$_SESSION[username]' ");
    $role2 = mysql_fetch_array($role);

    if ($role2['user_role'] != 'Administrator' && $role2['user_role'] != 'EAM')  {
     include './notif_denied.php';  
    } else {
    ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content">
        <ol class="breadcrumb">
          <li><a href="./index.php"><b> Home</b></a></li>
          <li><a href="./mdr_admin_news.php"><b>Admin Tools</b></a></li>
          <li class="active"><b>Master News CCS</b></li>
        </ol>
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <td><button class="btn btn-block btn-warning" data-toggle="modal" data-target="#myModal">Add New News</button></td>
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div>
                          <img src="assets/images/mandiri-logo.png" width="120px">
                        </div><hr>
                        <div>
                          <h4>Data NEWS CCS</h4>
                        </div>
                      </div>
                      <div class="modal-body">
                        <form method="post" action="" enctype="multipart/form-data">
                          <div class="form-group">
                            <label>Figure</label>
                            <input type="file" name="gambar" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" required="required">
                          </div>
                          <div class="form-group">
                            <!-- <label>Description</label> -->
                            <input type="hidden" name="deskripsi" class="form-control" value="NULL" required="required">
                            <input type="hidden" name="tgl" class="form-control" value="<?php echo(date('Y-m-d')); ?>" required="required">
                          </div>
                          <div class="form-group">
                            <label>URL</label>
                            <input type="text" name="url" class="form-control" required="required">
                            <input type="hidden" name="status" class="form-control" value="Show">
                          </div>
                          <div class="form-group">
                            <label>Layers</label>
                            <select name="nm" class="form-control" required="required">
                              <option>--Select Layers--</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div>
                          <button type="submit" name="submit" class="btn btn-info">Submit</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

              </div><!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table">
                  <thead>
                    <tr>
                      <th width="10px">NEWS ID</th>
                      <th width="80px">Figure</th>
                      <th width="200px">Description</th>
                      <th width="80px">Date Publish</th>
                      <th width="100px">URL</th>
                      <th width="100px">Layers</th>
                      <th width="50px">Action</th>
                      <!-- <th>Action Show/Hidden</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
                        // Check connection
                    if (mysqli_connect_errno())
                    {
                      echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                    $result = mysqli_query($con,"SELECT * FROM tb_news ORDER BY id_news DESC");

                    if(mysqli_num_rows($result)>0){

                      while($row = mysqli_fetch_array($result))
                      {
                        echo "<tr>";
                        echo "<td>" . $row['id_news'] . "</td>";
                        echo "<td>";
                        echo "<img src='assets/file/news/$row[gambar]' height='100' width='100'>";
                        echo "</td>";
                        echo "<td>" . $row['title'] . "</td>";
                        echo "<td>" . $row['tgl'] . "</td>";                        
                        // echo "<td>" . $row['url'] . "</td>";  
                        echo "<td>";
                        echo "<a href=".$row['url']." target=_blank title='Open Link'>".$row['url']."</a>";
                        echo "</td>";       
                        echo "<td>" . $row['nm'] . "</td>";                        
                        echo "<td align= ''>
                        <a href='#' data-toggle='modal' data-target='#edit$row[id_news]' title='Edit'><button class='btn btn-warning'><i class='glyphicon glyphicon-pencil'></i></button></a>
                        <a href='#' data-toggle='modal' data-target='#delete$row[id_news]' title='Delete'><button class='btn btn-warning'><i class='glyphicon glyphicon-trash'></i></button></a>
                        </td>";
                        // echo "<td align= ''>
                        // <a href='#' data-toggle='modal' data-target='#show$row[id_news]' title='Show'><span class='btn btn-danger'><i class=' glyphicon glyphicon-eye-open'></i></span></a>
                        // <a href='#' data-toggle='modal' data-target='#hidden$row[id_news]' title='Hidden'><span class='btn btn-danger'><i class=' glyphicon glyphicon-eye-close'></i></span></a>
                        // </td>";
                        echo "</tr>";
                        ?>
                        <div class="modal fade" id="edit<?php echo $row['id_news'];?>" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div>
                                  <img src="assets/images/mandiri-logo.png" width="120px">
                                </div><hr>
                                <div>
                                  <h4>Update NEWS CCS</h4>
                                </div>
                              </div>
                              <div class="modal-body">
                                <form method="post" action="" enctype="multipart/form-data">
                                  <div class="form-group">
                                    <label>Figure</label>
                                    <input type="file" name="gambar" class="form-control" value="<?php echo $row['gambar'];?>">
                                    <input type="hidden" name="id_news" class="form-control" value="<?php echo $row['id_news'];?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" required="required" value="<?php echo $row['title'];?>">
                                  </div>
                                  <div class="form-group">
                                    <!-- <label>Description</label> -->
                                    <input type="hidden" name="deskripsi" class="form-control" required="required" value="<?php echo $row['deskripsi'];?>">
                                    <input type="text" name="tgl" class="form-control" required="required" value="<?php echo(date('Y-m-d')); ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>URL</label>
                                    <input type="text" name="url" class="form-control" required="required" value="<?php echo $row['url'];?>">
                                    <input type="hidden" name="status" class="form-control" value="Show">
                                  </div>
                                  <div class="form-group">
                                    <label>Layers</label>
                                    <select name="nm" class="form-control" required="required">
                                      <option value="<?php echo $row['nm'];?>"><?php echo $row['nm'];?></option>
                                      <option>--Select Layers--</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                    </select>
                                  </div>
                                  <button type="submit" name="update" class="btn btn-info">Update</button>
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="modal fade" id="delete<?php echo $row['id_news'];?>" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div>
                                  <img src="assets/images/mandiri-logo.png" width="120px">
                                </div>
                              </div>
                              <div class="modal-body">
                                <form method="post" action="">
                                  <div class="form-group">
                                    <label>Are you sure delete this News?</label>
                                    <h6>Title : <?php echo $row['title'];?></h6>
                                    <input type="hidden" name="id_news" class="form-control" placeholder="client name" value="<?php echo $row['id_news'];?>" required>
                                  </div>
                                  <button type="submit" name="delete" class="btn btn-info">Yes</button>
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="modal fade" id="show<?php echo $row['id_news'];?>" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div>
                                  <img src="assets/images/mandiri-logo.png" width="120px">
                                </div><hr>
                                <div>
                                  <h4>Show NEWS CCS?</h4>
                                </div>
                              </div>
                              <div class="modal-body">
                                <form method="post" action="" enctype="multipart/form-data">
                                  <div class="form-group">
                                    <!-- <label>Figure</label> -->
                                    <input type="hidden" name="gambar" class="form-control" value="<?php echo $row['gambar'];?>">
                                    <input type="hidden" name="id_news" class="form-control" value="<?php echo $row['id_news'];?>">
                                  </div>
                                  <div class="form-group">
                                    <!-- <label>Title</label> -->
                                    <input type="hidden" name="title" class="form-control" required="required" value="<?php echo $row['title'];?>">
                                  </div>
                                  <div class="form-group">
                                    <!-- <label>Description</label> -->
                                    <input type="hidden" name="deskripsi" class="form-control" required="required" value="<?php echo $row['deskripsi'];?>">
                                    <input type="hidden" name="nm" class="form-control" required="required" value="<?php echo $row['nm'];?>">
                                  </div>
                                  <div class="form-group">
                                    <!-- <label>URL</label> -->
                                    <input type="hidden" name="url" class="form-control" required="required" value="<?php echo $row['url'];?>">
                                    <input type="hidden" name="status" class="form-control" value="Show">
                                  </div>
                                  <button type="submit" name="show" class="btn btn-info">Show</button>
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="modal fade" id="hidden<?php echo $row['id_news'];?>" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div>
                                  <img src="assets/images/mandiri-logo.png" width="120px">
                                </div><hr>
                                <div>
                                  <h4>Hidden NEWS CCS?</h4>
                                </div>
                              </div>
                              <div class="modal-body">
                                <form method="post" action="" enctype="multipart/form-data">
                                  <div class="form-group">
                                    <!-- <label>Figure</label> -->
                                    <input type="hidden" name="gambar" class="form-control" value="<?php echo $row['gambar'];?>">
                                    <input type="hidden" name="id_news" class="form-control" value="<?php echo $row['id_news'];?>">
                                  </div>
                                  <div class="form-group">
                                    <!-- <label>Title</label> -->
                                    <input type="hidden" name="title" class="form-control" required="required" value="<?php echo $row['title'];?>">
                                  </div>
                                  <div class="form-group">
                                    <!-- <label>Description</label> -->
                                    <input type="hidden" name="deskripsi" class="form-control" required="required" value="<?php echo $row['deskripsi'];?>">
                                    <input type="hidden" name="nm" class="form-control" required="required" value="<?php echo $row['nm'];?>">
                                  </div>
                                  <div class="form-group">
                                    <!-- <label>URL</label> -->
                                    <input type="hidden" name="url" class="form-control" required="required" value="<?php echo $row['url'];?>">
                                    <input type="hidden" name="status" class="form-control" value="Hidden">
                                  </div>
                                  <button type="submit" name="update" class="btn btn-info">Hidden</button>
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>

                        <?php

                      }
                    } 
                    mysqli_close($con);
                    ?>
                  </tbody>
                </table>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

  <?php } ?>
  <?php include 'include/footer.php';?>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.3 -->
<script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- DATA TABES SCRIPT -->
<script src="assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src='assets/plugins/fastclick/fastclick.min.js'></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/app.min.js" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js" type="text/javascript"></script>
<!-- page script -->
<script type="text/javascript">
  $(function () {
    $("#example1").dataTable();
    $('#example2').dataTable({
      "bPaginate": true,
      "bLengthChange": false,
      "bFilter": false,
      "bSort": true,
      "bInfo": true,
      "bAutoWidth": false
    });
  });
</script>

</body>
</html>

