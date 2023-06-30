<!DOCTYPE html>
<html>
    <head>
        <title> form_crud </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
<body>
    <h2>DATA MAHASISWA</h2>
    <?php
    require_once "controller/mhsw.php";
        $mhsw = new Mhsw();
        $rows = $mhsw->tampil();
?>
<?php
include 'input_cari.php';
?>
    <table>
        <tr>
            <td>NO</td>
            <td>NIM</td>
            <td>NAMA</td>
            <td>ALAMAT</td>
            <td>AKSI</td>
        </tr>
    <?php
    $no =1;
    foreach ($rows as $row){

    ?>
    <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['mhsw_nim']; ?></td>
            <td><?php echo $row['mhsw_nama']; ?></td>
            <td><?php echo $row['mhsw_alamat']; ?></td>
            <td><a href="edit.php?id=<?php echo $row['mhsw_nim']; ?>"><button id="tbl_edit">Edit</button></a>
                <a href="delete.php?id=<?php echo $row['mhsw_id']; ?>"><button id="tbl_delete">Delete</button><a>
            </td>
    </tr>
    <?php } ?>
</table>
<a href="input.php"><button id="tambah" >Tambah Data</a></button>

</body>
</html>

