<html>
<head>
<title>Update Data Baju</title>
</head>
<?php
   include "config.php";
   $perintah="SELECT * FROM baju WHERE kode_baju='$_GET[id]'";
   $hasil=mysql_query($perintah);
   $data=mysql_fetch_row($hasil);
?>
<body>
<form action="data_baju.php" method="post" name="form1" target="_parent">
  <table width="564" border="0" align="center">
    <tr bgcolor="#009999">
      <td colspan="2">
        <div align="center">Update Data Baju
        </div></td></tr>
    <tr bgcolor="#CCCCCC">
      <td width="92" bgcolor="#CCCCCC">Kode Baju </td>
      <td width="357"><label>
        <input type="text" name="kode_baju2"
		<?php
		    echo "value=$data[0]";
		?>
		>
      </label></td>
    </tr>
    <tr bgcolor="#DDDDDD">
      <td>Paket</td>
      <td><label>
        <input name="paket2" type="text"
		<?php
		    echo "value=$data[1]";
		?>
		>
      </label></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td>Deskripsi</td>
      <td><label>
        <textarea name="deskripsi2" cols="55" rows="6">
		<?php
		    echo "$data[2]";
		?>
		</textarea>
      </label></td>
    </tr>
    <tr bgcolor="#DDDDDD">
      <td>File</td>
      <td><label>
        <input name="file2" type="text"
		<?php
		    echo "value=$data[3]";
		?>
		>
      </label></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td>Kategori Id</td>
      <td><label>
        <input type="text" name="kategori_id2"
		<?php
		    echo "value=$data[4]";
		?>
		>
      </label></td>
    </tr>
    <tr bgcolor="#DDDDDD">
      <td>Harga</td>
      <td><label>
        <input name="harga2" type="text"
		<?php
		    echo "value=$data[5]";
		?>
		>
      </label></td>
    </tr>		
    <tr bgcolor="#009999">
      <td colspan="2"><div align="right">
        <label>
        <input type="submit" name="tombol_update" value="Submit">
				<input type="submit" name="tombol_update" value="Cancel">
        </label>
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
