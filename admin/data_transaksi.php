<html>
<head>
<title>Data Transaksi</title>
</head>

<body>
<?php
   if (! @$_GET['tombol']) 
			@$_GET['tombol']="";
   if (! @$_POST['tombol_update']) 
			@$_POST['tombol_update']="";			
?>
<?php
   include "config.php";
		if ($_GET['tombol']=="simpan")  
		   {    		   			  
			  $sta=$_GET['status'];
		    $i=0;    //untuk menampilkan seluruh data transaksi yang akan diupdate status barang yang dibeli
		    $perintah="SELECT * FROM transaksi ";
		    $hasil=mysql_query($perintah);
		    while ($data=mysql_fetch_row($hasil))
		    {                                         //untuk menyimpan status  barang yang dibeli
		       	$perintah="UPDATE transaksi SET status='$sta[$i]' 
 				           WHERE id_transaksi='$data[0]' ";
                mysql_query($perintah);						   
				    $i++;
  		    }		   			  
		   }	 
	 
	 
   if ($_GET['tombol']=="jadi_delete")
   {
       $perintah="DELETE FROM transaksi
	              WHERE id_transaksi='$_GET[id]'";
	   mysql_query($perintah);
   }
   if ($_GET['tombol']=="delete")
   {
       echo "<script type='text/javascript'>
	         x=window.confirm('Apakah data mau dihapus');
			 if (x)
			     window.location.href='data_transaksi.php?tombol=jadi_delete&id=$_GET[id]';
			 else 
			     window.alert('data tidak jadi dihapus');
	         </script>
	        ";
   }   
	 $sql="SELECT id_transaksi,paket,deskripsi,harga,jumlah,nama_cust,alamat,status 
				 FROM Transaksi t,Baju b, Customer C
				 WHERE t.kode_baju=b.kode_baju AND c.kode_cust=t.kode_cust";
   $hasil=mysql_query($sql);
   echo"<form method=get><table align='center'>";
   $i=1;
	 echo "<tr bgcolor='#d5d707'>";
	 echo "<td colspan='11' align='center'>DATA TRANSAKSI</td></tr>";
	 echo "<tr bgcolor='#d5d707'>";
	 echo "<td>ID TRANSAKSI</td>
			<td>PAKET</td>
			<td>DESKRIPSI</td>
			<td>HARGA</td>
			<td>JUMLAH BELI</td>
			<td>CUSTOMER</td>
			<td>ALAMAT</td>
			<td>STATUS</td>
			<td colspan='2' align='center' ></td></tr>";
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
			<td>$data[5]</td>
			<td>$data[6]</td>
			<td><select name=status[]>
							<option value='belum lunas' ";
							if ($data[7]=='belum lunas')
							   echo "selected='selected'";
							echo ">belum lunas</option>";
							echo "<option value='lunas' ";
							if ($data[7]=='lunas')
							   echo "selected='selected'";
							echo ">lunas</option>";
					echo "</select>
					</td>";
	  echo "<td><a href='data_transaksi.php?tombol=delete&id=$data[0]'>
				<img src='delete.jpg'></a>
			</td>";
	  echo "<td><input type=hidden name=tombol value='simpan'>
				<input type=image src='update.jpg'>
			</td>";
	  echo "</tr>";
	  $i++;
   }
	 echo "<tr bgcolor='#d5d707'>";
	 echo "<td colspan='11' align='center'>
	 <a href='menu_admin.php'>Exit</td></tr>";
   echo"</table>";
	 echo "</form>";		
?>
</body>
</html>
