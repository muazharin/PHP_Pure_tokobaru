<html>
<head>
<title>tokoAnime</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
<!--
body {
	background-image: url(greget8.jpg);
}
-->
</style>
<link href="style_utama.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
  <!-- Save for Web Slices (baru toko3.psd) -->
  <table id="Table_01" width="1059" height="963" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="8">
        <img src="images/baru-toko3_01.jpg" width="1059" height="267" alt=""></td>
	  </tr>
    <tr>
      <td colspan="3">
        <img src="images/baru-toko3_02.jpg" width="458" height="1" alt=""></td>
	    <td rowspan="2">
		    <a href="tokobaru.php?menu=about"><img src="images/baru-toko3_03.jpg" alt="" width="131" height="38" border="0"></a></td>
	    <td rowspan="2">
		    <a href="tokobaru.php?menu=how"><img src="images/baru-toko3_04.jpg" alt="" width="132" height="38" border="0"></a></td>
	    <td rowspan="2">
		    <a href="produk.php?id_kategori=1"><img src="images/baru-toko3_05.jpg" alt="" width="134" height="38" border="0"></a></td>
	    <td rowspan="2">
		    <a href="tokobaru.php?menu=contact"><img src="images/baru-toko3_06.jpg" alt="" width="133" height="38" border="0"></a></td>
	    <td>
		    <img src="images/baru-toko3_07.jpg" width="71" height="1" alt=""></td>
	  </tr>
    <tr>
      <td colspan="2" rowspan="2">
        <img src="images/baru-toko3_08.jpg" width="338" height="88" alt=""></td>
	    <td>
		    <a href="tokobaru.php?menu=home"><img src="images/baru-toko3_09.jpg" alt="" width="120" height="37" border="0"></a></td>
	    <td>
		    <img src="images/baru-toko3_10.jpg" width="71" height="37" alt=""></td>
	  </tr>
    <tr>
      <td colspan="6">
        <img src="images/baru-toko3_11.jpg" width="721" height="51" alt=""></td>
	  </tr>
    <tr>
      <td colspan="2">
        <img src="images/baru-toko3_12.jpg" width="338" height="93" alt=""></td>
	    <td width="650" height="93" colspan="5" valign="top" background="images/baru-toko3_13.jpg">
		<div align="center" class="judul2">Pemesan Baju Anime</div>
		</td>
	    <td>
		    <img src="images/baru-toko3_14.jpg" width="71" height="93" alt=""></td>
	  </tr>
    <tr>
      <td>
        <img src="images/baru-toko3_15.jpg" width="1" height="445" alt=""></td>
	    <td width="337" height="445" valign="top" background="images/baru-toko3_16.jpg">
		  <span class="isi">
		  <?php
			include "config.php";
			$hasil=mysql_query("SELECT * FROM kategori");
			echo "<ul>";
			while($data=mysql_fetch_row($hasil))
			{
				echo "<li><a href='produk.php?id_kategori=$data[0]'>$data[1]</a></li>"; 
			}
			echo "</ul>";
			
			if($_GET['id_kategori']==1)
			{
				echo "<br><div class='isi'>______ Naruto Shippuden - Silhouette______</div>";
				echo "<video align='center' controls='controls' height='200px' width='297px' autoplay='true' loop='true'>
				<source src='video/Naruto_Shippuden.mp4' type='video/mp4'>
				</video>";
				echo "_____________________________________";
			}
			if($_GET['id_kategori']==2)
			{
				echo "<br><div class='isi'>________ One Peace - We Are!!!__________</div>";
				echo "<video align='center' controls='controls' height='200px' width='297px' autoplay='true' loop='true'>
				<source src='video/one_peace2.mp4' type='video/mp4'>
				</video>";	
				echo "_____________________________________";
			}
			if($_GET['id_kategori']==3)
			{
				echo "<br><div class='isi'>________Orange_Orange - Asterisk _______</div> <br>";
				echo "<video align='center' controls='controls' height='200px' width='297px' autoplay='true' loop='true'>
				<source src='video/bleach.mp4' type='video/mp4'>
				</video>";	
				echo "_____________________________________";
			}
			if($_GET['id_kategori']==4)
			{
				echo "<br><div class='isi'>_____Naruto Shippuden - I Can Feel It______</div>";
				echo "<video align='center' controls='controls' height='200px' width='297px' autoplay='true' loop='true'>
				<source src='video/Naruto Shippuden2.mp4' type='video/mp4'>
				</video>";	
				echo "_____________________________________";
			}
			if($_GET['id_kategori']==5)
			{
				echo "<br><div class='isi'>________One Peace - We Can!!!__________</div>";
				echo "<video align='center' controls='controls' height='200px' width='297px' autoplay='true' loop='true'>
				<source src='video/one_peace.mp4' type='video/mp4'>
				</video>";	
				echo "_____________________________________";
			}
			if($_GET['id_kategori']==6)
			{
				echo "<br><div class='isi'>________Raon Lee - Kekkai Sensen_______</div>";
				echo "<video align='center' controls='controls' height='200px' width='297px' autoplay='true' loop='true'>
				<source src='video/02.mp4' type='video/mp4'>
				</video>";	
				echo "_____________________________________";
			}
				
		?>
		</span> 
		</td>
		
	    <td width="650" height="445" colspan="5" valign="top" background="images/baru-toko3_17.jpg">
		<?php
			include "config.php";
			$hasil=mysql_query("SELECT * FROM baju WHERE k_id='$_GET[id_kategori]'");		
			echo "<table class='isi'>";
			while($data=mysql_fetch_row($hasil))
			{
				echo "<tr padding='10'>"; 
				echo "<td width='100%'>
					PAKET BAJU: $data[1]<br>
					$data[2]<br>
					HARGA : Rp $data[5]<br><br> 
					</td>";
				echo "<td align='center'><img src='baru/$data[3]' width='200' height='200'>;
					<a href='orderan.php?tombol=tambah&kode_baju=$data[0]'>
					<img src='images/beli.png'></a><br><br>				 
					</td>";
				echo "</tr>"; 
			}
			echo "</table>";		
		?>
		</td>
	    <td width="71" height="445" background="images/baru-toko3_18.jpg">&nbsp;</td>
    </tr>
    <tr>
      <td>
        <img src="images/baru-toko3_19.jpg" width="1" height="69" alt=""></td>
	    <td colspan="7">
		    <img src="images/baru-toko3_20.jpg" width="1058" height="69" alt=""></td>
	  </tr>
  </table>
  <!-- End Save for Web Slices -->
</div>
</body>
</html>