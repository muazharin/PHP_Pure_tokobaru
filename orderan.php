<?php
  session_start();
  if(!@$_SESSION['id_temp'])
     $_SESSION['id_temp']=date("ymdHis");
  $sesi=$_SESSION['id_temp'];
  //echo "$sesi";   mengetest
?>
<html>
<head>
<title>tokoAnime</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="style_utama.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
body {
	background-image: url(greget8.jpg);
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #FFFFFF;
}
-->
</style></head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php
   if (! @$_GET['tombol']) 
			@$_GET['tombol']='';			
   if (! @$_GET['total']) 
			$total=0;
   if (! @$_GET['kode_baju']) 
			@$_GET['kode_baju']=0;			
   if (! @$_GET['qty']) 
			@$_GET['qty']=0;						
?>
<div align="center">
  <!-- Save for Web Slices (baru toko.psd) -->
  <table id="Table_01" width="1059" height="964" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="10">
        <img src="images/baru-toko4_01.jpg" width="1059" height="250" alt=""></td>
	  </tr>
    <tr>
      <td colspan="2" rowspan="2">
        <img src="images/baru-toko4_02.jpg" width="174" height="75" alt=""></td>
	    <td>
		    <a href="tokobaru.php?menu=home"><img src="images/baru-toko4_03.jpg" alt="" width="123" height="49" border="0"></a></td>
	    <td>
		    <a href="tokobaru.php?menu=about"><img src="images/baru-toko4_04.jpg" alt="" width="153" height="49" border="0"></a></td>
	    <td>
		    <a href="tokobaru.php?menu=how"><img src="images/baru-toko4_05.jpg" alt="" width="155" height="49" border="0"></a></td>
	    <td>
		    <a href="produk.php?id_kategori=1"><img src="images/baru-toko4_06.jpg" alt="" width="151" height="49" border="0"></a></td>
	    <td rowspan="2">
		    <img src="images/baru-toko4_07.jpg" width="2" height="75" alt=""></td>
	    <td>
		    <a href="tokobaru.php?menu=contact"><img src="images/baru-toko4_08.jpg" alt="" width="124" height="49" border="0"></a></td>
	    <td colspan="2" rowspan="2">
		    <img src="images/baru-toko4_09.jpg" width="177" height="75" alt=""></td>
	  </tr>
    <tr>
      <td colspan="4">
        <img src="images/baru-toko4_10.jpg" width="582" height="26" alt=""></td>
	    <td>
		    <img src="images/baru-toko4_11.jpg" width="124" height="26" alt=""></td>
	  </tr>
    <tr>
      <td width='1059' height="97" colspan="10" background="images/baru-toko4_12.jpg">
	  <center class='judul'>
			TABEL PESANAN 
	  </center>
	  </td>
	  </tr>
    <tr>
      <td width="68" height="442" background="images/baru-toko4_13.jpg">&nbsp;</td>
	    <td width='916' height="442" colspan="8" valign="top" background="images/baru-toko4_14.jpg">
		<?php
			include "config.php";
			if(@$_GET['kode_baju'])
			{
				$perintah="SELECT * FROM temp WHERE id_temp = '$sesi'
						AND kode_baju ='$_GET[kode_baju]'";
				$hasil=mysql_query($perintah);
				$jml_data=mysql_num_rows($hasil);
				if ($jml_data==0 and $_GET['tombol']=="tambah")
				{
					$perintah="INSERT INTO temp (id_temp,kode_baju,jumlah)  
							VALUES('$sesi','$_GET[kode_baju]','1')";
					mysql_query($perintah);
				}
			}		   
			if ($_GET['tombol']=="batal")  
			{    
				$perintah="DELETE FROM temp WHERE id_temp='$sesi'";
				mysql_query($perintah);
				echo "<script>
					window.location='produk.php?id_kategori=1'
					</script>";
			}
		   
			if ($_GET['tombol']=="simpan")  
			{    		   			  
				$jml=$_GET['qty'];
				$i=0;
				$perintah="SELECT * FROM temp WHERE id_temp='$_SESSION[id_temp]'";
				$hasil=mysql_query($perintah);
				while ($data=mysql_fetch_row($hasil))
				{
					$perintah="UPDATE temp SET jumlah='$jml[$i]' 
							WHERE kode_baju='$data[1]' AND
							id_temp='$_SESSION[id_temp]'";
					mysql_query($perintah);						   
					$i++;
				}		   			  
			}		   
			$perintah="SELECT paket, harga , jumlah , harga*jumlah as total 
					FROM temp t,baju d
					WHERE d.kode_baju=t.kode_baju AND 
					id_temp='$sesi'";
			$hasil=mysql_query($perintah);		   		
			echo "<form method=get><br><table>";
			echo "<tr bgcolor='#DB2E2E'>";
			echo "<td width='300' align='center'>JUDUL</td>";
			echo "<td width='200' align='center'>HARGA</td>";
			echo "<td width='200' align='center'>JUMLAH</td>";
			echo "<td width='200' align='center'>TOTAL</td>";
			echo "</tr>";
			$i=1;
			$total=0;
			while($data=mysql_fetch_row($hasil))
			{
			if ($i % 2==1)
				echo "<tr bgcolor='#BBBDE6'>";
			else
				echo "<tr bgcolor='#D2D3EC'>";
		
			echo "<td width='300' align='center'>$data[0]</td>";
			echo "<td width='200' align='center'>Rp.". number_format($data[1],0,'','.')."</td>";
			echo "<td width='200' align='center'>
		         <input type=text name=qty[] value=$data[2] size=10></td>";
			echo "<td width='200' align='center'>Rp.". number_format($data[3],0,'','.')."</td>";
			echo "</tr>";
			$i++;
			$total=$total+$data[3];
			}
			echo "<tr bgcolor='#C78B80'>";
			echo "<td width='300' align='center'></td>";
			echo "<td width='200' align='center'></td>";
			echo "<td width='200' align='center'>JUMLAH TOTAL</td>";
			echo "<td width='200' align='center'>Rp.". number_format($total,0,'','.')."</td>";
			echo "</tr>";
			echo "</table><br>";
		
			echo "<center>";
			echo "<a href='produk.php?id_kategori=1'><img src='images/gambar/tambah.png'></a> ";
			echo "<a href='orderan.php?tombol=batal'><img src='images/gambar/batal.png'></a> ";
			echo "<input type=hidden name=tombol value='simpan'>";
			echo "<input type=image src='images/gambar/simpan.png'> ";
			echo "<a href='customer.php'><img src='images/gambar/checkout.png'></a> ";
			echo "</center>";
			echo "</form>";
		?>
		</td>
	    <td width="75" height="442" background="images/baru-toko4_15.jpg">&nbsp;</td>
	  </tr>
    <tr>
      <td width="1059" height="99" colspan="10" align="center" background="images/baru-toko4_16.jpg"><h4>&nbsp;</h4>
        <h4><span class="style3">Copyright © 2016 tokoAnime.com : Situs Jual Beli Baju Anime Online Terlengkap dan Terpercaya.<br>
      All Right Reserved</span></h4></td>
    </tr>
    <tr>
      <td>
        <img src="images/spacer.gif" width="68" height="1" alt=""></td>
	    <td>
		    <img src="images/spacer.gif" width="106" height="1" alt=""></td>
	    <td>
		    <img src="images/spacer.gif" width="123" height="1" alt=""></td>
	    <td>
		    <img src="images/spacer.gif" width="153" height="1" alt=""></td>
	    <td>
		    <img src="images/spacer.gif" width="155" height="1" alt=""></td>
	    <td>
		    <img src="images/spacer.gif" width="151" height="1" alt=""></td>
	    <td>
		    <img src="images/spacer.gif" width="2" height="1" alt=""></td>
	    <td>
		    <img src="images/spacer.gif" width="124" height="1" alt=""></td>
	    <td>
		    <img src="images/spacer.gif" width="102" height="1" alt=""></td>
	    <td>
		    <img src="images/spacer.gif" width="75" height="1" alt=""></td>
	  </tr>
  </table>
  <!-- End Save for Web Slices -->
</div>
</body>
</html>