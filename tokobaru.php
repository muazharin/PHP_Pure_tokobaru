<html>
<head>
<title>tokoAnime</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
<!--
body {
	background-image: url(greget8.jpg);
	background-repeat: repeat;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<link href="style_utama.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#FFFFFF">
<?php
	if (! @$_GET['menu']) 
			@$_GET['menu']='home';
	if (! @$_GET['guest']) 
			@$_GET['guest']='';	
	if(! isset($_GET['Submit']))
		$_GET['baju']="";		
?>
<div align="center">
  <!-- Save for Web Slices (baru toko2.psd) -->
  <table id="Table_01" width="1059" height="964" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="8">
        <img src="images/baru-toko2_01.jpg" width="1059" height="267" alt=""></td>
    </tr>
    <tr>
      <td colspan="3">
        <img src="images/baru-toko2_02.jpg" width="458" height="1" alt=""></td>
	    <td rowspan="2">
		    <a href="tokobaru.php?menu=about"><img src="images/baru-toko2_03.jpg" alt="" width="131" height="38" border="0"></a></td>
	    <td rowspan="2">
		    <a href="tokobaru.php?menu=how"><img src="images/baru-toko2_04.jpg" alt="" width="132" height="38" border="0"></a></td>
	    <td rowspan="2">
		    <a href="produk.php?id_kategori=1"><img src="images/baru-toko2_05.jpg" alt="" width="134" height="38" border="0"></a></td>
	    <td rowspan="2">
		    <a href="tokobaru.php?menu=contact"><img src="images/baru-toko2_06.jpg" alt="" width="133" height="38" border="0"></a></td>
	    <td>
		    <img src="images/baru-toko2_07.jpg" width="71" height="1" alt=""></td>
    </tr>
    <tr>
      <td colspan="2" rowspan="2">
        <img src="images/baru-toko2_08.jpg" width="338" height="88" alt=""></td>
	    <td>
		    <a href="tokobaru.php?menu=home"><img src="images/baru-toko2_09.jpg" alt="" width="120" height="37" border="0"></a></td>
	    <td>
		    <img src="images/baru-toko2_10.jpg" width="71" height="37" alt=""></td>
    </tr>
    <tr>
      <td colspan="6">
        <img src="images/baru-toko2_11.jpg" width="721" height="51" alt=""></td>
    </tr>
    <tr>
      <td colspan="2">
        <img src="images/baru-toko2_12.jpg" width="338" height="538" alt=""></td>
	    <td width="650" height="538" colspan="5" valign="top" background="images/baru-toko2_13.jpg">
		<?php
			include "config.php";
			if ($_GET['menu']=='contact' || $_GET['baju']=='Submit')
			{
				include "guest.php";
			}		
			else 
			{
				$var=$_GET['menu'];
				$perintah="SELECT * FROM content WHERE menu='$var'";
				$hasil=mysql_query($perintah);
				$data=mysql_fetch_row($hasil);
				echo "<p class='judul'>$data[1]</p>
					<p class='isi'>$data[2]</p>";
			}
		?>
		</td>
	    <td>
		    <img src="images/baru-toko2_14.jpg" width="71" height="538" alt=""></td>
    </tr>
    <tr>
      <td>
        <img src="images/baru-toko2_15.jpg" width="1" height="69" alt=""></td>
	    <td colspan="7">
		    <img src="images/baru-toko2_16.jpg" width="1058" height="69" alt=""></td>
    </tr>
    <tr>
      <td>
        <img src="images/spacer.gif" width="1" height="1" alt=""></td>
	    <td>
		    <img src="images/spacer.gif" width="337" height="1" alt=""></td>
	    <td>
		    <img src="images/spacer.gif" width="120" height="1" alt=""></td>
	    <td>
		    <img src="images/spacer.gif" width="131" height="1" alt=""></td>
	    <td>
		    <img src="images/spacer.gif" width="132" height="1" alt=""></td>
	    <td>
		    <img src="images/spacer.gif" width="134" height="1" alt=""></td>
	    <td>
		    <img src="images/spacer.gif" width="133" height="1" alt=""></td>
	    <td>
		    <img src="images/spacer.gif" width="71" height="1" alt=""></td>
    </tr>
  </table>
  <!-- End Save for Web Slices -->
</div>
</body>
</html>