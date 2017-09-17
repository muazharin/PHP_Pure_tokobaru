<html>
<head>
<title>Data Content</title>
</head>

<body>
<?php
   if (! @$_GET['tombol']) 
			@$_GET['tombol']="";
   if (! @$_POST['tombol_update']) 
			@$_POST['tombol_update']="";			
?>

<form name='form1' method='get' action=''>
  <table width="364" border="0" align="center">
    <tr bgcolor="#009999">
		<td colspan="2">
        <div align="center">Data Content
        </div>
		</td>
	</tr>
	<tr bgcolor="#CCCCCC">
      <td width="92" bgcolor="#CCCCCC">Id Content </td>
      <td width="262"><label>
        <input type="text" name="id_uraian">
      </label></td>
    </tr>
    <tr bgcolor="#DDDDDD">
      <td>Judul</td>
      <td><label>
        <input type="text" name="judul">
      </label></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td>Keterangan</td>
      <td><label>
        <textarea name="keterangan" cols="50" rows="6"></textarea>
      </label></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td>Menu</td>
      <td><label>
        <input type="text" name="menu">
      </label></td>
    </tr>
    <tr bgcolor="#009999">
      <td colspan="2"><div align="right">
        <label>        
        <input type="submit" name="tombol" value="Submit">
				<input type="submit" name="tombol" value="Cancel">
        </label>
      </div></td>
    </tr>
  </table>
</form>
<?php
   include "config.php";
   if ($_GET['tombol']=="Submit")
   {
       $perintah="INSERT INTO content (id,title,content,menu)
	              VALUES('$_GET[id_uraian]','$_GET[judul]',
				  '$_GET[keterangan]','$_GET[menu]')";
	   mysql_query($perintah);
   }
   if ($_GET['tombol']=="Cancel")
   {
			header('location:menu_admin.php');
   }	 
   if ($_POST['tombol_update']=="Submit")
   {
       
	   $perintah="UPDATE content SET
	              title='$_POST[judul2]',
				  content='$_POST[keterangan2]',
				  menu='$_POST[menu2]'
				  WHERE id ='$_POST[id_uraian2]'
				  ";
	   mysql_query($perintah);
   }
   if ($_GET['tombol']=="jadi_delete")
   {
       $perintah="DELETE FROM content
	              WHERE id='$_GET[id]'";
	   mysql_query($perintah);
   }
   if ($_GET['tombol']=="delete")
   {
       echo "<script type='text/javascript'>
	         x=window.confirm('Apakah data mau dihapus');
			 if (x)
			     window.location.href='data_content.php?tombol=jadi_delete&id=$_GET[id]';
			 else 
			     window.alert('data tidak jadi dihapus');
	         </script>
	        ";
   }   
   $hasil=mysql_query("SELECT * FROM content");
   echo"<table align='center'>";
   $i=1;
	  echo "<tr bgcolor='#009999'>";
	  echo "<td>ID URAIAN</td>
			<td>JUDUL</td>
			<td>KETERANGAN</td>
	        <td>MENU</td>
			<td colspan='2' align='center'>PILIH</td></tr>";	 
   while($data=mysql_fetch_row($hasil))
   {
      if ($i % 2==0)
	     echo "<tr bgcolor='#CCCCCC'>";
	  else
	     echo "<tr bgcolor='#DDDDDD' >";
	  echo "<td align='center'>$data[0]</td>
			<td align='center'>$data[1]</td>
			<td align='center'>$data[2]</td>
	        <td align='center'>$data[3]</td>";
	  echo "<td><a href='data_content.php?tombol=delete&id=$data[0]'><img src='delete.jpg'></a></td>";
	  echo "<td><a href='update_uraian.php?id=$data[0]'><img src='update.jpg'></a></td>";
	  echo "</tr>";
	  $i++;
   }
   echo"</table>";
?>
</body>
</html>
