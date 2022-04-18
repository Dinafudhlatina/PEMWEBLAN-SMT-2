<?php
include "koneksi.php"
?>
<HTML>
<HEAD>
    <TITLE>Tampilan Daftar Barang</TITLE>
    <script language="javascript">
    function tanya() {
        if (confirm ("Apakah Anda yakin akan menghapus barang ini?")) {
        return true;
        }
        else {
        return false;
        } 
    }

</script>
</HEAD>

<BODY>

<?php
$query = "SELECT * FROM barang";
$sql = mysqli_query ($conn,$query);
echo "<h3>Daftar Barang</h3>";

echo "<table border='1' cellpadding='0' cellspacing='0'>";
echo "<tr bgcolor='yellow'><td width=10%>Kd.Brg</td><td
width=40%>Nama Barang</td><td>Satuan</td><td>Harga</td><td>Stok</td><td>Stok Min</td><td>Keterangan</td></tr>";

    while ($hasil = mysqli_fetch_array ($sql)) {
    $kode = $hasil['kode'];
    $nama_barang = stripslashes ($hasil['nama_barang']);
    $satuan = stripslashes ($hasil['satuan']);
    $harga = $hasil['harga'];
    $stok= $hasil['stok'];
    $stok_min = $hasil['stok_min'];

//tampilkan barang
echo "<tr bgcolor='cyan'>
<td align='center' width=10%>$kode</td>
<td align='left' width=40%>$nama_barang</td>
<td align='left'>$satuan</td>
<td align='right'>$harga</td>
<td align='right'>$stok</td>
<td align='right'>$stok_min</td>";
echo "<td align='center'><a href='edit_barang_admin.php?id=$kode'>Edit</a> | ";
echo "<a href='delete_barang_admin.php?id=$kode' onClick='return tanya()'>Delete</a></td>";
}
echo "</table>";
echo "<br><table border=1 cellpadding=10 cellspacing=0>";
echo "<tr><td bgcolor='lighyellow'><a href='tambahbarang_admin.php'>Tambah</a></td></tr>";
echo "</table>";
echo "<br><table border=1 cellpadding=10 cellspacing=0>";
echo "<tr><td bgcolor='yellow'><a href='index.php'>Ganti Akun</a></td></tr>";
echo "</table>";

?>
</BODY>
</HTML>