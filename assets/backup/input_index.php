<?php
include 'include/connection.php';

// Profile Index
if(isset($_POST["updateprofile"]))    
{    
	$user_id     		= $_POST['user_id'];
	$user_name     	 	= $_POST['user_name'];
	$user_password   	= $_POST['user_password'];
	$user_created      	= $_POST['user_created'];
	$user_role      	= $_POST['user_role'];
	$user_region    	= $_POST['user_region'];
	$user_dept    		= $_POST['user_dept'];
	$NIP    			= $_POST['NIP'];
	$FirstName    		= $_POST['FirstName'];
	$LastName    		= $_POST['LastName'];

	$nama = $_FILES['user_foto']['name'];
	$file_tmp = $_FILES['user_foto']['tmp_name'];

	move_uploaded_file($file_tmp, './include/profile/'.$nama);

	$cek = mysql_query("SELECT * FROM tb_user WHERE user_id ='$user_id'");
	$num = mysql_num_rows($cek);
	if($num == 1){
		$query = mysql_query("UPDATE tb_user SET user_foto ='$nama',
												user_name ='$user_name',
												user_password ='$user_password',
												user_created ='$user_created',
												user_role ='$user_role',
												user_region ='$user_region',
												user_dept ='$user_dept',
												NIP ='$NIP',
												FirstName ='$FirstName',
												LastName ='$LastName'
												WHERE user_id ='$user_id'");
	// var_dump($query);die();
		if($query){
			header("Location: ./index.php");                                                  
		} else {
			echo "Updated Failed - Please contact your administrator";
		}
	} else {
		echo "Records cannot be found!! Please contact your System Administrator" ;
	}

}

// User Management
if(isset($_POST["submitprofile"]))    
{    

	$user_id     		= $_POST['user_id'];
	$user_name     	 	= $_POST['user_name'];
	$user_password   	= $_POST['user_password'];
	$user_created      	= $_POST['user_created'];
	$user_role      	= $_POST['user_role'];
	$user_region    	= $_POST['user_region'];
	$user_dept    		= $_POST['user_dept'];
	$NIP    			= $_POST['NIP'];
	$FirstName    		= $_POST['FirstName'];
	$LastName    		= $_POST['LastName'];
	$user_foto    		= $_POST['user_foto'];

	$query = mysql_query("INSERT INTO tb_user 
						(user_id, user_name, user_password, user_created, user_role, user_region, user_dept, user_foto, NIP, FirstName, LastName)
						VALUES
						('','$user_name','$user_password','$user_created','$user_role','$user_region','$user_dept', '$user_foto','$NIP','$FirstName','$LastName')");

	if($query){
		header("Location: ./mdr_admin_usrmanage.php?ntf=1");  
	} else {
		header("Location: ./mdr_admin_usrmanage.php?ntf=3");
	}
}

if(isset($_POST["updateprofileadmin"]))    
{    
	$user_id     		= $_POST['user_id'];
	$user_name     	 	= $_POST['user_name'];
	$user_password   	= $_POST['user_password'];
	$user_created      	= $_POST['user_created'];
	$user_role      	= $_POST['user_role'];
	$user_region    	= $_POST['user_region'];
	$user_dept    		= $_POST['user_dept'];
	$NIP    			= $_POST['NIP'];
	$FirstName    		= $_POST['FirstName'];
	$LastName    		= $_POST['LastName'];
	$user_foto    		= $_POST['user_foto'];

	// $nama = $_FILES['user_foto']['name'];
	// $file_tmp = $_FILES['user_foto']['tmp_name'];

	// move_uploaded_file($file_tmp, './include/profile/'.$nama);
	// var_dump($_POST);die();
	$cek = mysql_query("SELECT * FROM tb_user WHERE user_id ='$user_id'");
	$num = mysql_num_rows($cek);
	if($num == 1){
		$query = mysql_query("UPDATE tb_user SET user_foto ='$user_foto',
												user_name ='$user_name',
												user_password ='$user_password',
												user_created ='$user_created',
												user_role ='$user_role',
												user_region ='$user_region',
												user_dept ='$user_dept',
												NIP ='$NIP',
												FirstName ='$FirstName',
												LastName ='$LastName'
												WHERE user_id ='$user_id'");
	// var_dump($query);die();
		if($query){
			header("Location: ./mdr_admin_usrmanage.php");                                                  
		} else {
			echo "Updated Failed - Please contact your administrator";
		}
	} else {
		echo "Records cannot be found!! Please contact your System Administrator" ;
	}

}

if(isset($_POST['deleteuseradmin']))
{

	$user_id    = $_POST['user_id'];

	if($user_id){
		$query = mysql_query("DELETE FROM tb_user WHERE user_id = '$user_id' ");
		if($query){
			header("Location: ./mdr_admin_usrmanage.php");                    
		} else {
			echo "Operation Failed! Please contact your administrator".mysql_errno();
		}
	} else {
		echo "Operation Failed! Please contact your administrator".mysql_errno();
	}

}


//Sticky Note Index
if(isset($_POST["submit"]))    
{ 
	$id_note     = $_POST['id_note'];
	$judul       = $_POST['judul'];
	$note        = $_POST['note'];
	$tgl_note    = $_POST['tgl_note'];
	$user_name   = $_POST['user_name'];

  // var_dump($_POST);die();
	if($num == 0){
		$query = mysql_query("INSERT into tb_note VALUES
			('','$judul','$note','$tgl_note','$user_name')");
		if ($query) {
			header("Location: ./index.php");  
		} else {
			header("Location: ./index.php");
		}
	} else {
		header("Location: ./index.php");
	}
}

if(isset($_POST["update"]))    
{    
	$id_note     = $_POST['id_note'];
	$judul       = $_POST['judul'];
	$note        = $_POST['note'];
	$tgl_note    = $_POST['tgl_note'];
	$user_name   = $_POST['user_name'];

	$cek = mysql_query("SELECT * FROM tb_note WHERE id_note ='$id_note'");
	$num = mysql_num_rows($cek);
	if($num == 1){
		$query = mysql_query("UPDATE tb_note SET judul ='$judul',
			note ='$note',
			tgl_note ='$tgl_note',
			user_name ='$user_name'
			WHERE id_note ='$id_note'");
		if($query){
			header("Location: ./index.php");                                                  
		} else {
			echo "Updated Failed - Please contact your administrator";
		}
	} else {
		echo "Records cannot be found!! Please contact your System Administrator" ;
	}

}

if(isset($_POST['delete']))
{

	$id_note    = $_POST['id_note'];

	if($id_note){
		$query = mysql_query("DELETE FROM tb_note WHERE id_note = '$id_note' ");
		if($query){
			header("Location: ./index.php");                    
		} else {
			echo "Operation Failed! Please contact your administrator".mysql_errno();
		}
	} else {
		echo "Operation Failed! Please contact your administrator".mysql_errno();
	}

}


?>