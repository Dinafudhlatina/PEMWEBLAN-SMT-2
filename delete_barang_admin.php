<?php
include "koneksi.php";
    if(isset($_GET['id'])){
        $kode = $_GET['id'];
    }
    else{
        die ("Error. NO Id Selected! ");
    }
?>

<html>
<head><title>Delete Barang</title>
</head>
<body>
    <?php
//proses delete barang
    if (!empty($kode) && $kode != "") {
        $query = "DELETE FROM barang WHERE kode='$kode'";
        $sql = mysqli_query ($conn,$query);
        if ($sql) {
            echo "<h2><font color=blue>Barang telah berhasil dihapus</font></h2>";
        }
        else {
            echo "<h2><font color=red>Barang gagaldihapus</font></h2>";
        }
        echo "Klik <a href='displaybarang_admin.php'>disini</a> untuk kembali ke halaman display barang";
    }
    else {
        die ("Access Denied");
    }
    ?>
</body>
</html>