<html>
<head>
<title>Update Data Content</title>
</head>
<?php
   include "config.php";
   $perintah="SELECT * FROM content WHERE id ='$_GET[id]'";
   $hasil=mysql_query($perintah);
   $data=mysql_fetch_row($hasil);
?>
<body>
<form action="data_content.php" method="post" name="form1" target="_parent">
  <table width="364" border="0" align="center">
    <tr bgcolor="#009999">
      <td colspan="2">
        <div align="center">Update Data Content
        </div></td></tr>
    <tr bgcolor="#CCCCCC">
      <td width="92" bgcolor="#CCCCCC">Id Content </td>
      <td width="357"><label>
        <input type="text" name="id_uraian2"
		<?php
		    echo "value=$data[0]";
		?>
		>
      </label></td>
    </tr>
    <tr bgcolor="#DDDDDD">
      <td>Judul</td>
      <td><label>
        <input name="judul2" type="text"
		<?php
		    echo "value=$data[1]";
		?>
		>
      </label></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td>Keterangan</td>
      <td><label>
        <textarea name="keterangan2" cols="50" rows="6">
		<?php
		    echo "$data[2]";
		?>

		</textarea>
      </label></td>
    </tr>
    <tr bgcolor="#DDDDDD">
      <td>Menu</td>
      <td><label>
        <input name="menu2" type="text"
		<?php
		    echo "value=$data[3]";
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
