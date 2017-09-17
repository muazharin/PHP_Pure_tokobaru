<p class='judul'>Contact Us</p><br>
<p class='isi'>
<?php
   if (! @$_GET['baju']) 
			@$_GET['baju']='';
?>

Tuliskan Data anda sedetail mungkin, 
termasuk kontak person dan nomor telepon,
atau informasi melalui email ke info@tokoAnime.com 
<form action="" method="get">
  <table width="200" border="0" class='isi'>
    <tr>
      <td>nama</td>
      <td><input type="text" name="var1"></td>
    </tr>
    <tr>
      <td>perusahaan</td>
      <td><input type="text" name="var2"></td>
    </tr>
    <tr>
      <td>email</td>
      <td><input type="text" name="var3"></td>
    </tr>
    <tr>
      <td>alamat</td>
      <td><textarea name="var4" cols="40" rows="2"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="baju" value="Submit">
        <label>
        <input type="reset" name="Reset" value="Reset" />
      </label></td>
    </tr>
  </table>
</form>
</p>
<?php
   if ($_GET['baju']=="Submit")
   {
       $perintah="INSERT INTO guest 
                 (nama, perusahaan, email, alamat) 
                 VALUES ('$_GET[var1]', '$_GET[var2]', '$_GET[var3]', '$_GET[var4]')";
       mysql_query($perintah);	
   }
?>
