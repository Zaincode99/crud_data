<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h2>DATA MAHASISWA</h2>
<?php
require_once "controller/mhsw.php";
$mhsw= new mhsw();
$nim=$_POST ['cari'];
$rows=$mhsw->cari($nim);
if (count($rows)>0){
foreach ($rows as $row) {
        // Tampilkan hasil pencarian//
        echo "<h4>Hasil Pencarian</h4>";
        echo "<table>";
        echo "<tr>";
        echo "<th>NO</th>";
        echo "<th>NIM</th>";
        echo "<th>NAMA</th>";
        echo "<th>ALAMAT</th>";
        echo "<th>AKSI</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>".$row['mhsw_id']."</td>";
        echo "<td>".$row['mhsw_nim']."</td>";
        echo "<td>".$row['mhsw_nama']."</td>";
        echo "<td>".$row['mhsw_alamat']."</td>";
        echo "<td>";
        echo "<a href='edit.php?id=" . $row['mhsw_nim'] . "'>Edit</a>";
        echo " | ";
        echo "<a href='delete.php?id=" . $row['mhsw_nim'] . "'>Delete</a>";
        echo "</td>";
        echo "</tr>";
        echo "</table>";
    }
} else {
    echo "<h4>Hasil Pencarian</h4>";
    echo "<table>";
    echo "<tr>";
    echo "<th>NO</th>";
    echo "<th>NIM</th>";
    echo "<th>NAMA</th>";
    echo "<th>ALAMAT</th>";
    echo "<th>AKSI</th>";
    echo "</tr>";
    echo "</table>";
    echo "Data tidak ditemukan";
}

?>
<br>
<br><a href="index.php">Kembali</a>
</body>
</html>