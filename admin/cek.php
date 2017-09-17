<?php
  session_start();
  require_once "config.php"; 
  if(ISSET($_POST['user']) && ISSET($_POST['password']))
  {
      $user=$_POST['user'];
      $password=md5($_POST['password']);
      $perintah="SELECT * FROM user WHERE username='$user' AND password='$password'";
      $hasil=mysql_query($perintah);
      $jml_data=mysql_num_rows($hasil);
	  if ($jml_data>0)
	  {
	     $_SESSION['user']=$user;
		 include "menu_admin.php";		 
	  }
	  else
	  {
	     echo "User atau Password Salah<br>";
		 echo "<a href='login.php'>Login User</a>";
	  }
  }
?>