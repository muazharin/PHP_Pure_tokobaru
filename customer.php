<?php
  session_start();
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
	background-repeat: repeat;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #FFFFFF;
}
-->
</style></head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
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
			$hasil= mysql_query("SELECT *,jumlah*harga as total FROM temp t, baju v
                           WHERE t.kode_baju=v.kode_baju 
						   AND id_temp='$_SESSION[id_temp]'");
			echo "<table>";
			echo "<tr bgcolor='#DB2E2E' align='center'>";
			echo "<td width='600'>PRODUK</td>";
			echo "<td width='70'>HARGA</td>";
			echo "<td width='80'>JUMLAH</td>";
			echo "<td width='60'>TOTAL</td>";
			echo "</tr>";
			$i=1;$total=0;
			while($data=mysql_fetch_row($hasil))
			{  
				if ($i % 2==1)
					echo "<tr bgcolor='#BBBDE6' align='center'>";
				else
					echo "<tr bgcolor='#D2D3EC' align='center'>"; 
					echo "<td width='600'>
						<strong><u>$data[4]</u></strong><br>
						<img src='baru/$data[6]' width='150' height='200'>
					</td>";
					echo "<td width='70'>Rp.". number_format($data[8],0,'','.')."</td>";
					echo "<td width='80'>$data[2]</td>";
					echo "<td width='60'>Rp.". number_format($data[9],0,'','.')."</td>";
					echo "</tr>";
				$total=$total+$data[9];
				$i++;
			}
			echo "<tr bgcolor='#C78B80' align='center'>";
			echo "<td colspan='3'>TOTAL JUMLAH</td>";
			echo "<td width='60'>Rp.". number_format($total,0,'','.')."</td>";
			echo "</tr>";
			echo "</table><br><br>";
			include "data_customer.php";
			echo "Silakan melakukan pembayaran ke rekening di
				(Please transfer your payment to account)<br>	Bank Mandiri # 119.000.591.008.6
              a/n PT. Bhinneka Mentari Dimensi. <br>Agen Kami akan kirimkan pesanan baju anime
			  setelah anda melakukan transfer ke rekening kami";
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