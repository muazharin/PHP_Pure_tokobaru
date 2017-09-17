<style type="text/css">
<!--
.style1 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 18px;
}
td{
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: none;
	font-size: 15px;
}
-->
</style>
<?php
if(!@$_GET['tombol'])
	$_GET['tombol']="";
?>
<form id="form1" name="form1" method="GET">
  <table width="337" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center" class="style1">
        <p>DATA LENGKAP CUSTOMER</p>
        </div></td>
    </tr>
    <tr>
      <td width="94">Nama</td>
      <td width="233"><label>
        <input type="text" name="nama" />
      </label></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><label>
        <textarea name="alamat"></textarea>
      </label></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label>
        <input type="text" name="email" />
      </label></td>
    </tr>
    <tr>
      <td>Kota</td>
      <td><label>
        <select name="kota">
          <option value="Kendari">Kendari</option>
          <option value="Kolaka">Kolaka</option>
          <option value="Unaaha">Unaaha</option>
          <option value="Baubau">Baubau</option>
		  <option value="Raha">Raha</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Telepon</td>
      <td><label>
        <input type="text" name="telpon" />
      </label></td>
    </tr>
    <tr>
      <td>Via</td>
      <td><p>
        <label>
        <input type="radio" name="via" value="TIKI" />
          TIKI</label>
        <br />
        <label>
          <input type="radio" name="via" value="JNE" />
          JNE</label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="tombol" value="Submit" />
        <input type="reset" name="Reset" value="Reset" />
      </label></td>
    </tr>
  </table>
</form>
<?php
   include "config.php";
   if ($_GET['tombol']=="Submit")
   {
       $perintah="INSERT INTO customer (nama_cust,alamat,email,kota,telpon,via)
	              VALUES('$_GET[nama]','$_GET[alamat]',
				  '$_GET[email]','$_GET[kota]','$_GET[telpon]','$_GET[via]')";		
	   mysql_query($perintah);
	   
       $perintah="SELECT * FROM customer 
	              WHERE nama_cust='$_GET[nama]' AND alamat='$_GET[alamat]'";		
	   $hasil=mysql_query($perintah);
	   $kode_cust=mysql_fetch_row($hasil);
	   	   
	   $perintah="SELECT * FROM temp WHERE id_temp='$_SESSION[id_temp]'";
	   $hasil=mysql_query($perintah);
	   while($data=mysql_fetch_row($hasil))
	   {
           $perintah="INSERT INTO transaksi(id_transaksi,kode_baju,jumlah,kode_cust)
	                  VALUES('$data[0]','$data[1]','$data[2]','$kode_cust[0]')";
	       mysql_query($perintah);	       
	   }	   
	   $perintah="DELETE FROM temp WHERE id_temp='$_SESSION[id_temp]'";
	   mysql_query($perintah);
	   
	   echo "<script>
		     window.location='index.php'
		     </script>";	   
   }
?>