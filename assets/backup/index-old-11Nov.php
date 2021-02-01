<?php 
include 'include/restrict.php';

mysql_connect($dbhost, $dbuser, $dbpassword);
mysql_select_db($dbname); 
$result = mysql_query("SELECT * FROM tb_user WHERE user_name = '$user'");
$data = mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<?php include 'include/head.php';?>
<style type="text/css">
  .lingkaran1{
    width: 120px;
    height: 120px;
    background: #ffffff;
    border-radius: 100%;
  }

  .img{
    width: 120px;
    height: 120px;
    background: #ffffff;
    border-radius: 100%;
  }
</style>
<body class="skin-blue">
  <div class="wrapper">
    <?php include 'include/header.php';?>
    <?php include 'include/sidebar_all.php';?>
    <!-- SHOW FIRTS MODAL REMINDER -->
    <button id="button_modal" type="button" data-toggle="modal" data-target="#myModal" style="display:none">Open Modal</button>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog"><br><br><br><br><br><br><br><br>
      <div class="col-md-12 form-group2 group-mail">
        <!-- Modal content-->
        <div class="modal-content" width="1000px">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div>
              <img src="assets/images/mandiri-logo.png" width="150px">
              <h3 align="left" class="modal-title"><b>CCS Reminder</b></h3>
            </div>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
              <table id="example1" class="">
                <thead>
                  <tr>
                    <th>No.</th>
                    <!-- <th>Id</th> -->
                    <th>CBC</th>
                    <th>Debitur</th>
                    <th>Limit</th>
                    <th>Bade</th>
                    <th>Informasi Umum</th>
                    <th>Reputation & Character</th>
                    <th>Repayment Capacity</th>
                    <th>Recovery Rate</th>
                    <th>Action</th>
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
                  $result = mysqli_query($con,"SELECT * FROM tb_upload_logbook WHERE status = 'On Progress' ");   
                  if(mysqli_num_rows($result)>0){
                    $no = 0;
                    while($row = mysqli_fetch_array($result))
                    {
                      $no++;
                      echo "<tr>";
                      echo "<td><b>" . $no . ".</b></td>";
                      // echo "<td>" . $row['id_logbook'] . "</td>";
                      echo "<td>" . $row['CBC_NAME'] . "</td>";
                      echo "<td>" . $row['nm_customer'] . "</td>";
                      echo "<td>" . $row['LIMIT_LOG'] . "</td>";
                      echo "<td>" . $row['BADE_LOG'] . "</td>";
                      echo "<td>" . "<a href='#' data-toggle='modal' data-target='#IUCREATE$row[id_logbook]' title='Update Result'><button class='btn bg-navy margin'>Informasi Umum</button></a>" . "</td>";
                      echo "<td>" . "<a href='#' data-toggle='modal' data-target='#REVIEW-1-$row[id_logbook]' title='Update Result'><span class='btn bg-orange margin'>Update</span></a>" . "</td>";
                      echo "<td>" . "<a href='#' data-toggle='modal' data-target='#REVIEW-2-$row[id_logbook]' title='Update Result'><span class='btn bg-orange margin'>Update</span></a>" . "</td>";
                      echo "<td>" ."<a href='#' data-toggle='modal' data-target='#REVIEW-3-$row[id_logbook]' title='Update Result'><span class='btn bg-orange margin'>Update</span></a>" . "</td>";
                      echo "<td align= ''width='200'>
                      <a href='mdr_ex_workingpaper.php?id=$row[id_logbook]' title='Working Paper'><span class='btn btn-app'>Paper</span></a>                                                  
                      <a href='mdr_ex_workingpaperdownload.php?id=$row[id_logbook]' title='Download Working Paper'><span class='btn btn-app'>Download</span></a>
                      <a href='#' data-toggle='modal' data-target='#pick$row[id_logbook]' title='Edit'><span class='btn btn-app'>Set</span></a>
                      </td>";
                      echo "</tr>";
                      ?>
                      <?php 
                      /* start call all modal list for this loop */
                      include './modals/wp_ui_create.php';
                      include './modals/wp_ui_update.php';
                      /* end */
                      ?>

                      <div class="modal fade" id="pick<?php echo $row['id_logbook'];?>" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title"><b></h4>
                              </div>
                              <div class="modal-body">
                                <form method="post" action=" ">
                                  <div class="form-group">
                                    <label>Are you sure move this record?</label>
                                    <?php echo $row['nm_customer'];?>
                                    <?php echo $row['CBC_NAME'];?>
                                  </div>
                                  <button type="submit" name="pick" value="<?php echo $row['id_logbook'];?>" class="btn btn-default">Tindak Lanjut</button>
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div> 
                        <div id="push"></div>
                        <?php
                      }
                    } 
                    mysqli_close($con);
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- END MODAL REMINDER -->

      <div class="content-wrapper">
        <section class="content">
          <!-- AWAL SECTION PROFILE -->
          <!-- <div class="col-lg-2"> -->
            <div class="col-lg-3">
              <div align="center">
                <div class="panel-body" align="center">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse">
                      <?php
                      $tanggal= mktime(date("m"),date("d"),date("Y"));
                      // echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
                      date_default_timezone_set('Asia/Jakarta');
                      $jam=date("H:i:s");
                      // echo "| Pukul : <b>". $jam." "."</b>";
                      $a = date ("H");
                      if (($a>=6) && ($a<=11)){
                        echo "
                        <img src='./assets/images/pers/Web_Say.png' class='img-responsive'>
                        ";
                      }
                      else if(($a>11) && ($a<=15))
                      {
                        echo "
                        <img src='./assets/images/pers/Web_Say_afternoon.png' class='img-responsive'> 
                        ";}
                        else if (($a>15) && ($a<=18)){
                          echo "
                          <img src='./assets/images/pers/Web_Say_afternoon.png' class='img-responsive'>
                          ";}
                          else { echo "
                          <img src='./assets/images/pers/Web_Say_NIGHT.png' class='img-responsive'>
                          ";}
                          ?>  
                        </a>
                      </h4>
                      <!-- <img class="lingkaran1" src="assets/images/client-1.png"><br> -->
                      <?php 
                      echo"<img src='include/profile/$data[user_foto]' class='lingkaran1'>&nbsp;&nbsp;";
                        // echo $data['full_name'];
                      ?>
                      <p><b><h4 style="font-family: Arial;">Hay, <?php echo $data['FirstName'];?> <?php echo $data['LastName'];?></h4></b></p>
                      <p><h5 style="font-family: Arial;"><?php echo $data['NIP'];?></h5></p>
                      <p><h5 style="font-family: Arial;"><?php echo $data['user_dept'];?></h5></p>
                      <p><h5 style="font-family: Arial;"><?php echo $data['user_role'];?></h5></p>
                      <!-- <button>Edit</button> -->
                      <?php
                      $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
                        // Check connection
                      if (mysqli_connect_errno())
                      {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                      }

                      $result = mysqli_query($con,"SELECT * FROM tb_user WHERE user_name='$user'");   
                      if(mysqli_num_rows($result)>0){

                        while($row = mysqli_fetch_array($result))
                        {
                          echo "
                          <a href='#' data-toggle='modal' data-target='#editprofile$row[user_id]' title='Edit'><span class='btn btn-block btn-warning'><i class='fa fa-edit'></i> Edit Profile</span></a>
                          ";
                          ?>
                          <div class="modal fade" id="editprofile<?php echo $row['user_id'];?>" role="dialog">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <div>
                                    <img src="assets/images/mandiri-logo.png" width="120px">
                                  </div>
                                </div>
                                <div class="modal-body">
                                  <form method="post" action="input_index.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                      <?php
                                      echo "<img src='include/profile/$row[user_foto]' width='100px'>";
                                      ?>
                                      <br>
                                    </div>
                                    <div class="form-group">
                                      <label>Change Photo Profile</label>
                                      <input type="file" name="user_foto" class="form-control" value="<?php echo $row['user_foto'];?>">
                                    </div>
                                    <div class="form-group">
                                      <label>Username</label>
                                      <input type="hidden" name="user_id" class="form-control" value="<?php echo $row['user_id'];?>">
                                      <input type="text" name="user_name" class="form-control" value="<?php echo $row['user_name'];?>">
                                    </div>
                                    <div class="form-group">
                                      <label>Password</label>
                                      <input type="password" name="user_password" class="form-control" value="<?php echo $row['user_password'];?>">
                                      <input type="hidden" name="user_created" class="form-control" value="<?php echo $row['user_created'];?>">
                                      <input type="hidden" name="user_role" class="form-control" value="<?php echo $row['user_role'];?>">
                                    </div>
                                    <div class="form-group">
                                      <label>First Name</label>
                                      <input type="text" name="FirstName" class="form-control" value="<?php echo $row['FirstName'];?>">
                                    </div>
                                    <div class="form-group">
                                      <label>Last Name</label>
                                      <input type="text" name="LastName" class="form-control" value="<?php echo $row['LastName'];?>">
                                    </div>
                                    <div class="form-group">
                                      <label>NIP</label>
                                      <input type="text" name="NIP" class="form-control" value="<?php echo $row['NIP'];?>">
                                    </div>
                                    <button type="submit" name="updateprofile" class="btn btn-info">Update</button>
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
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-2"> -->
            <div class="col-lg-5">
             <section class="panel">
              <div class="list-group">
                <a class="list-group-item " href="javascript:;">
                  <h2 class="list-group-item-heading"><font color="#1d2e61"><b>Visi</b></font></h2>
                  <p class="list-group-item-text"><i>Menjadi unit credit risk review handal & kredibel yang berperan sebagai strategic partner</i></p>
                </a>
                <a class="list-group-item" href="javascript:;">
                  <h2 class="list-group-item-heading"><font color="#1d2e61"><b>Misi</b></font></h2>
                  <ul>
                    <li>Melaksanakan credit risk review secara independen dan objektif dengan memberikan nilai tambah</li>
                    <li>Mengevaluasi efektivitas internal control, risk management, dan governance process melalui feedback proses end to end perkreditan</li>
                    <li>Mengelola aktivitas group secara efektif dan efisien (operational excellence)</li>
                    <li>Mengembangkan kompetensi reviewer dan mengintensifkan penggunaan tools dan data base</li>
                    <li>Meningkatkan sinergi fungsi control perkreditan dengan unit terkait (CPR, OPR, SORH, WRS, DIA)</li>
                  </ul>
                </a>
              </div>
            </section>
          </div>
          <div class="col-md-4">
            <div class="box box-warning">
              <div class="box-header with-border">
                <i class="  glyphicon glyphicon-edit"></i>
                <h3 class="box-title">Sticky Notes</h3>
                <div class="box-tools pull-right">
                  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div><!-- /.box-tools -->
              </div><!-- /.box-header -->
              <div class="box-body">
                <div class="box-body table-responsive no-padding">
                  <table id="example1" class="table table-hover">
                    <thead>
                      <tr>
                        <td><b>No.</b></td>
                        <td><b>Judul</b></td>
                        <!-- <td width="10px"><b>Note</b></td> -->
                        <td><b>Tanggal</b></td>
                        <td><b>Action</b></td>                
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
                      if (mysqli_connect_errno())
                      {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                      }

                      $result = mysqli_query($con,"SELECT * FROM tb_note WHERE user_name='$user' ORDER BY id_note DESC ");   

                      if(mysqli_num_rows($result)>0){
                        $no=0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $no++;
                          echo "<tr>";
                          echo "<td>".$no.".</td>";
                          echo "<td>" . $row['judul'] . "</td>";
                              // echo "<td width='10px'>" . $row['note'] . "</td>";
                          echo "<td>" . $row['tgl_note'] . "</td>";
                          echo "<td align= ''width='200px'>
                          <a href='#' data-toggle='modal' data-target='#detail$row[id_note]' title='Detail'><span class='label label-primary'>Detail</span></a>
                          <a href='#' data-toggle='modal' data-target='#edit$row[id_note]' title='Edit'><span class='label label-primary'>Edit</span></a>
                          <a href='#' data-toggle='modal' data-target='#delete$row[id_note]' title='Delete'><span class='label label-primary'>Delete</span></a>
                          </td>";
                          echo "</tr>";
                          ?>

                          <div class="modal fade" id="detail<?php echo $row['id_note'];?>" role="dialog">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <div>
                                    <img src="assets/images/mandiri-logo.png" width="120px">
                                  </div>
                                </div>
                                <div class="modal-body">
                                  <!-- <form method="post" action="input_index.php"> -->
                                    <div class="form-group">
                                      <label>Detail Note</label>
                                      <font size="2px" align="right"><?php echo $row['tgl_note'];?></font>
                                      <hr>
                                      <div class="form-group">
                                        <label>Judul</label>
                                        <!-- <input type="text" name="judul" class="form-control" value="<?php echo $row['judul'];?>" > -->
                                        <p><?php echo $row['judul'];?></p>
                                      </div>
                                      <div class="form-group">
                                        <label>Note</label>
                                        <p><?php echo $row['note'];?></p>
                                        <!-- <input type="text" name="note" class="form-control" value="<?php echo $row['note'];?>" > -->
                                        <!-- <textarea type="text" name="note" class="form-control" required><?php echo $row['note'];?></textarea> -->
                                      </div>
                                    </div>
                                    <!-- <button type="submit" name="update" class="btn btn-info">Update</button> -->
                                    <div align="right">
                                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                    <!-- </form> -->
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="modal fade" id="edit<?php echo $row['id_note'];?>" role="dialog">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <div>
                                      <img src="assets/images/mandiri-logo.png" width="120px">
                                    </div>
                                  </div>
                                  <div class="modal-body">
                                    <form method="post" action="input_index.php">
                                      <div class="form-group">
                                        <label>Update Note</label><hr>
                                        <div class="form-group">
                                          <label>Judul</label>
                                          <input type="text" name="judul" class="form-control" value="<?php echo $row['judul'];?>" >
                                          <input type="hidden" name="id_note" class="form-control" value="<?php echo $row['id_note'];?>">
                                          <input type="hidden" name="user_name" class="form-control" value="<?php echo $row['user_name'];?>">
                                          <input type="hidden" name="tgl_note" class="form-control" value="<?php echo(date('Y-m-d')); ?>">
                                        </div>
                                        <div class="form-group">
                                          <label>Note</label>
                                          <!-- <input type="text" name="note" class="form-control" value="<?php echo $row['note'];?>" > -->
                                          <textarea type="text" name="note" class="form-control" required><?php echo $row['note'];?></textarea>
                                        </div>
                                      </div>
                                      <button type="submit" name="update" class="btn btn-info">Update</button>
                                      <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="modal fade" id="delete<?php echo $row['id_note'];?>" role="dialog">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <div>
                                      <img src="assets/images/mandiri-logo.png" width="120px">
                                    </div>
                                  </div>
                                  <div class="modal-body">
                                    <form method="post" action="input_index.php">
                                      <div class="form-group">
                                        <label>Are you sure delete this note?</label><hr>
                                        <div class="form-group">
                                          <label>Judul</label>
                                          <p><?php echo $row['judul'];?></p>
                                          <!-- <input type="text" class="form-control" value="<?php echo $row['judul'];?>" > -->
                                        </div>
                                        <div class="form-group">
                                          <label>Note</label>
                                          <p><?php echo $row['note'];?></p>
                                          <!-- <input type="text" class="form-control" value="<?php echo $row['note'];?>" > -->
                                          <input type="hidden" name="id_note" class="form-control" value="<?php echo $row['id_note'];?>" required>
                                        </div>
                                      </div>
                                      <button type="submit" name="delete" class="btn btn-info">Yes</button>
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
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <!-- <div class="col-lg-2"> -->
            </section>
            <div class="col-lg-12">
              <div align="center">
                <h1><b>News CCS Group</b></h1><hr>
              </div>
            </div>
            <section class="content">
              <!-- AWAL SECTION PROFILE -->
              <!-- <div class="col-lg-2"> -->

                <div class="row">
                  <div class="col-md-3">
                    <div class="box box-solid">
                      <div class="box-header with-border">
                        <!-- <i class="fa fa-text-width"></i> -->
                        <!-- <h3 class="box-title">Headlines</h3> -->
                        <figure>
                          <!-- PUT YOUR IMAGE HERE -->
                          <?php 
                          $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
                            // Check connection
                          if (mysqli_connect_errno())
                          {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                          }

                          $result = mysqli_query($con,"SELECT * FROM tb_news WHERE nm='1' AND status='Show' ORDER BY id_news DESC");

                          if(mysqli_num_rows($result)>0){

                            while($row = mysqli_fetch_array($result))
                            {
                              echo "<img src='assets/file/news/$row[gambar]' width='300px' height='200px'>";
                              ?>
                              <!-- <img class="img-responsive" src="assets/images/pers/1.png"> -->
                              <!-- IMAGE SIZE SHOULD BE 800x533 -->
                            </figure>
                          </div><!-- /.box-header -->
                          <div class="box-body">
                            <div align="right">
                              <font size="1px"><?php echo $row['tgl'];?></font>
                            </div>
                            <h5><b><?php echo $row['title'];?></b></h5>
                            <div>
                              <?php 
                              echo "<a href=".$row['url']." target=_blank title='Open Link'><span class='btn btn-warning'>Read more >></span></a>";
                              ?>
                            </div>
                          </div><!-- /.box-body -->
                        </div><!-- /.box -->
                      <?php }}?>
                    </div><!-- ./col -->
                    <div class="col-md-3">
                      <div class="box box-solid">
                        <div class="box-header with-border">
                         <!-- <i class="fa fa-text-width"></i> -->
                         <!-- <h3 class="box-title">Headlines</h3> -->
                         <figure>
                          <!-- PUT YOUR IMAGE HERE -->
                          <?php 
                          $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
                            // Check connection
                          if (mysqli_connect_errno())
                          {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                          }

                          $result = mysqli_query($con,"SELECT * FROM tb_news WHERE nm='2' AND status='Show' ORDER BY id_news DESC");

                          if(mysqli_num_rows($result)>0){

                            while($row = mysqli_fetch_array($result))
                            {
                              echo "<img src='assets/file/news/$row[gambar]' width='300px' height='200px'>";
                              ?>
                              <!-- <img class="img-responsive" src="assets/images/pers/1.png"> -->
                              <!-- IMAGE SIZE SHOULD BE 800x533 -->
                            </figure>
                          </div><!-- /.box-header -->
                          <div class="box-body">
                            <div align="right">
                              <font size="1px"><?php echo $row['tgl'];?></font>
                            </div>
                            <h5><b><?php echo $row['title'];?></b></h5>
                            <div>
                              <?php 
                              echo "<a href=".$row['url']." target=_blank title='Open Link'><span class='btn btn-warning'>Read more >></span></a>";
                              ?>
                            </div>
                          </div><!-- /.box-body -->
                        </div><!-- /.box -->
                      <?php }}?>
                    </div><!-- ./col -->
                    <div class="col-md-3">
                      <div class="box box-solid">
                        <div class="box-header with-border">
                          <!-- <i class="fa fa-text-width"></i> -->
                          <!-- <h3 class="box-title">Headlines</h3> -->
                          <figure>
                            <!-- PUT YOUR IMAGE HERE -->
                            <?php 
                            $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
                              // Check connection
                            if (mysqli_connect_errno())
                            {
                              echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }

                            $result = mysqli_query($con,"SELECT * FROM tb_news WHERE nm='3' AND status='Show' ORDER BY id_news DESC");

                            if(mysqli_num_rows($result)>0){

                              while($row = mysqli_fetch_array($result))
                              {
                                echo "<img src='assets/file/news/$row[gambar]' width='300px' height='200px'>";
                                ?>
                                <!-- <img class="img-responsive" src="assets/images/pers/1.png"> -->
                                <!-- IMAGE SIZE SHOULD BE 800x533 -->
                              </figure>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                              <div align="right">
                                <font size="1px"><?php echo $row['tgl'];?></font>
                              </div>
                              <h5><b><?php echo $row['title'];?></b></h5>
                              <div>
                                <?php 
                                echo "<a href=".$row['url']." target=_blank title='Open Link'><span class='btn btn-warning'>Read more >></span></a>";
                                ?>
                              </div>
                            </div><!-- /.box-body -->
                          </div><!-- /.box -->
                        <?php }}?>
                      </div><!-- ./col -->
                      <div class="col-md-3">
                        <div class="box box-solid">
                          <div class="box-header with-border">
                            <!-- <i class="fa fa-text-width"></i> -->
                            <!-- <h3 class="box-title">Headlines</h3> -->
                            <figure>
                              <!-- PUT YOUR IMAGE HERE -->
                              <?php 
                              $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
                                // Check connection
                              if (mysqli_connect_errno())
                              {
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                              }

                              $result = mysqli_query($con,"SELECT * FROM tb_news WHERE nm='4' AND status='Show' ORDER BY id_news DESC");

                              if(mysqli_num_rows($result)>0){

                                while($row = mysqli_fetch_array($result))
                                {
                                  echo "<img src='assets/file/news/$row[gambar]' width='300px' height='200px'>";
                                  ?>
                                  <!-- <img class="img-responsive" src="assets/images/pers/1.png"> -->
                                  <!-- IMAGE SIZE SHOULD BE 800x533 -->
                                </figure>
                              </div><!-- /.box-header -->
                              <div class="box-body">
                                <div align="right">
                                  <font size="1px"><?php echo $row['tgl'];?></font>
                                </div>
                                <h5><b><?php echo $row['title'];?></b></h5>
                                <div>
                                  <?php 
                                  echo "<a href=".$row['url']." target=_blank title='Open Link'><span class='btn btn-warning'>Read more >></span></a>";
                                  ?>
                                </div>
                              </div><!-- /.box-body -->
                            </div><!-- /.box -->
                          <?php }}?>
                        </div><!-- ./col -->
                      </div><!-- /.row -->
                    </section>
                  </div><!-- END content-wrapper-->
                  <?php include 'include/footer.php';?>
                </div><!-- END wrapper-->
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
                    $('#button_modal').click()
                  });
                </script>
              </body>
              </html>