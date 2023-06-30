
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <?php
    require 'controller/mhsw.php';

    // Inisialisasi objek Mhsw
    $mhsw = new Mhsw();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];

        // Panggil metode edit() untuk memperbarui data
        $mhsw->edit($id, $nim, $nama, $alamat);

        // Redirect ke halaman lain setelah berhasil mengedit data
        header('Location: index.php');
        exit();
    } else {
        // Ambil data mahasiswa berdasarkan id yang diberikan
        $id = $_GET['id'];
        $data = $mhsw->cari($id);

        if (count($data) > 0) {
            $mahasiswa = $data[0];
            $id = $mahasiswa['mhsw_id'];
            $nim = $mahasiswa['mhsw_nim'];
            $nama = $mahasiswa['mhsw_nama'];
            $alamat = $mahasiswa['mhsw_alamat'];
        } else {
            // Redirect ke halaman lain jika data tidak ditemukan
            echo "Data Tidak Ditemukan";
            exit();
        }
    }
    ?>

    <h2>Edit Data Mahasiswa</h2>
    <table id="tbl-edit">
        <form method="POST" action="">
        <tr>
            <th>
                <label>ID :</label>
            </th>
            <th>
                <?php echo $id; ?><br>
            </th>
            </tr>
            <tr>
            <td><label>NIM</label></td>
            <td><input type="text" name="nim" value="<?php echo $nim; ?>"><br></td>
            <tr>
                <td><label>Nama</label></td>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>"><br></td>
            </tr>
            <tr>
                <td><label>Alamat &emsp;:</label></td>
                <td><input type="text" name="alamat" value="<?php echo $alamat; ?>"><br></td>                   
            </tr>  
            <tr>
                <td><label></label></td>
                <td><input type="submit" value="Update"></td>                   
            </tr>  
        </form>
    </table>
</body>
</html>
