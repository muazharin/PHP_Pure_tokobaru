<html>
<head>
<title>Data Baju</title>
</head>

<body>
<?php
   if (! @$_GET['tombol']) 
			@$_GET['tombol']="";
   if (! @$_POST['tombol_update']) 
			@$_POST['tombol_update']="";			
?>

<form name='form1' method='get' action=''>
  <table width="564" border="0" align="center">
    <tr bgcolor="#009999">
      <td colspan="2">
        <div align="center">Data Baju
        </div></td></tr>
	<tr bgcolor="#CCCCCC">
      <td width="126" bgcolor="#CCCCCC">Kode Baju </td>
      <td width="428"><label>
        <input type="text" name="kode_baju">
      </label></td>
    </tr>
    <tr bgcolor="#DDDDDD">
      <td>Paket</td>
      <td><label>
        <input type="text" name="paket">
      </label></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td>Deskripsi</td>
      <td><label>
        <textarea name="deskripsi" cols="55" rows="6"></textarea>
      </label></td>
    </tr>
    <tr bgcolor="#DDDDDD">
      <td>File</td>
      <td><label>
        <input type="text" name="file">
      </label></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td>Kategori Id</td>
      <td><label>
        <input type="text" name="kategori_id">
      </label></td>
    </tr>
    <tr bgcolor="#DDDDDD">
      <td>Harga</td>
      <td><label>
        <input type="text" name="harga">
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
       $perintah="INSERT INTO baju (kode_baju,paket,deskripsi,file,k_id,harga)
	              VALUES('$_GET[kode_baju]','$_GET[paket]',
				  '$_GET[deskripsi]','$_GET[file]','$_GET[kategori_id]','$_GET[harga]')";
	   mysql_query($perintah);
   }
   if ($_GET['tombol']=="Cancel")
   {
			header('location:menu_admin.php');
   }	 
   if ($_POST['tombol_update']=="Submit")
   {
       
	   $perintah="UPDATE baju SET
	              paket='$_POST[paket2]',
				  deskripsi='$_POST[deskripsi2]',
				  file='$_POST[file2]',
				  k_id='$_POST[kategori_id2]',
					harga='$_POST[harga2]'
				  WHERE kode_baju='$_POST[kode_baju2]'
				  ";
	   mysql_query($perintah);
   }
   if ($_GET['tombol']=="jadi_delete")
   {
       $perintah="DELETE FROM baju
	              WHERE kode_baju='$_GET[id]'";
	   mysql_query($perintah);
   }
   if ($_GET['tombol']=="delete")
   {
       echo "<script type='text/javascript'>
	         x=window.confirm('Apakah data mau dihapus');
			 if (x)
			     window.location.href='data_baju.php?tombol=jadi_delete&id=$_GET[id]';
			 else 
			     window.alert('data tidak jadi dihapus');
	         </script>
	        ";
   }   
   $hasil=mysql_query("SELECT * FROM baju");
   echo"<table align='center'>";
   $i=1;
	  echo "<tr bgcolor='#009999'>";
	  echo "<td>KODE BAJU</td>
			<td>PAKET</td>
			<td>DESKRIPSI</td>
	        <td>FILE</td>
			<td>KATEGORI ID</td>
			<td>HARGA</td>
			<td colspan='2' align='center'>PILIH</td></tr>";
   while($data=mysql_fetch_row($hasil))
   {
      if ($i % 2==0)
	     echo "<tr bgcolor='#CCCCCC'>";
	  else
	     echo "<tr bgcolor='#DDDDDD'>";
	  echo "<td>$data[0]</td>
			<td>$data[1]</td>
			<td>$data[2]</td>
	        <td>$data[3]</td>
			<td>$data[4]</td>
			<td>$data[5]</td>";
	  echo "<td><a href='data_baju.php?tombol=delete&id=$data[0]'><img src='delete.jpg'></a></td>";
	  echo "<td><a href='update_baju.php?id=$data[0]'><img src='update.jpg'></a></td>";
	  echo "</tr>";
	  $i++;
   }
   echo"</table>";
?>
</body>
</html>
