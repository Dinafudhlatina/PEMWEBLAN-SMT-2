<?php
include 'koneksi.php';
if(isset($_GET['id'])){
    $kode = $_GET['id'];
    $query="select * from barang where kode='$kode'";
    $sql=mysqli_query($conn, $query);
    while ($hasil = mysqli_fetch_array ($sql)) {
        $kode = $hasil['kode'];
        $nama_barang = stripslashes ($hasil['nama_barang']);
        $satuan = stripslashes ($hasil['satuan']);
        $harga= $hasil['harga'];
        $stok= $hasil['stok'];
        $stok_min = $hasil['stok_min'];
}
}
else{
    die ("Error. NO Id Selected! ");
}
if(isset($_POST['sub'])){
$nama_barang=$_POST['n2'];
$satuan=$_POST['n3'];
$harga=$_POST['n4'];
$stok=$_POST['n5'];
$stok_min=$_POST['n6'];
$query="UPDATE barang SET nama_barang='".$nama_barang."',satuan='".$satuan."',harga=".$harga.
",stok=".$stok.",stok_min=".$stok_min.
" WHERE kode='".$kode."'";
$sql=mysqli_query($conn, $query);
    if($sql){
        echo "<br>Data berhasil diupdate! Kembali ke display barang <a href='displaybarang_admin.php'>klik di sini!</a>";
    }
    else{
        echo "Gagal mengupdate data! Kembali ke display barang <a href='displaybarang_admin.php'>klik di sini!</a>";
    }
}

?>
<html>
<head>
<title>Edit Barang</title>
</head>
<body>
<h2><b>Edit Barang</b></h2>
<FORM ACTION="" METHOD="POST">
<table border='0' >
<tr>
<td>Kode Barang</td><td>: <INPUT TYPE=TEXT NAME="n1"
size="6" readonly value="<?php echo $kode;?>"></td></tr>
<tr>
<td>Nama Barang</td><td>: <INPUT TYPE=TEXT NAME="n2"
size="30" value="<?php echo $nama_barang;?>"></td></tr>
<tr>
<td>Satuan</td><td>: <INPUT TYPE=TEXT NAME="n3" size="10"
value="<?php echo $satuan;?>"></td></tr>
<tr>
<td>Harga </td><td>: <INPUT TYPE=TEXT NAME="n4"
size="10" value="<?php echo $harga;?>" ></td></tr>

<tr>
<td>Stok</td><td>: <INPUT TYPE=TEXT NAME="n5" size="10"
value="<?php echo $stok;?>"></td></tr>
<tr>
<td>Stok Minimal</td><td>: <INPUT TYPE=TEXT NAME="n6"
size="10" value="<?php echo $stok_min;?>" ></td></tr>
<tr>
<td><INPUT TYPE="submit" name="sub"
VALUE="Simpan"></td><td><INPUT TYPE="submit" VALUE="Reset"
name="res"></td>
</tr>
</table>
</FORM>
</body>
</html>