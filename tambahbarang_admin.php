<?php
include 'koneksi.php';
    if(isset($_POST['sub'])){
    $kode=$_POST['n1'];
    $nama_barang=$_POST['n2'];
    $satuan=$_POST['n3'];
    $harga=$_POST['n4'];
    $stok=$_POST['n5'];
    $stok_min=$_POST['n6'];
    $query="INSERT INTO barang VALUES('".$kode."','".$nama_barang."','".$satuan."',".$harga.",".$stok.",".$stok_min.")";
    
    $sql=mysqli_query($conn, $query);
        if($sql){
            echo "<br>Data berhasil ditambahkan! Kembali ke display barang <a href='displaybarang_admin.php'>klik di sini!</a>";
        }
        else{
            echo "Gagal menambahkan data! Kembali ke <a href='displaybarang_admin.php'>display barang</a>";
        }
    }

?>
<html>
<head>
<title>Tambah Barang</title>
</head>
<body>
<h2><b>Input Barang</b></h2>
<FORM ACTION="" METHOD="POST">
<table border='0' cellpadding=0 cellspacing=0>
<tr>
<td>Kode Barang</td><td>: <INPUT TYPE=TEXT NAME="n1" size="6" ></td></tr>
<tr>
<td>Nama Barang</td><td>: <INPUT TYPE=TEXT NAME="n2" size="30" ></td></tr>
<tr>
<td>Satuan</td><td>: <INPUT TYPE=TEXT NAME="n3" size="10"></td></tr>
<tr>
<td>Harga Jual</td><td>: <INPUT TYPE=TEXT NAME="n4" size="10" ></td></tr>
<tr>
<td>Stok</td><td>: <INPUT TYPE=TEXT NAME="n5" size="10" ></td></tr>
<tr>
<td>Stok Minimal</td><td>: <INPUT TYPE=TEXT NAME="n6" size="10" ></td></tr>
<tr>
<td><INPUT TYPE="submit" name="sub" VALUE="Simpan"></td>
<td><INPUT TYPE="submit" VALUE="Reset" name="res"></td>
</tr>
</table>
</FORM>
</body>
</html>