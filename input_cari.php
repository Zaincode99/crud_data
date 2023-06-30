<form method="post" name="frm_cari" action="cari.php">
    NIM :
    <input type="text" name="cari" id="cari" placeholder="Masukkan NIM">
    <input type="submit" name="tmbl_cari" value="CARI">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cari = $_POST['cari'];

    if (!empty($cari)) {
        // Form method memiliki nilai, lanjutkan ke action="cari.php"
        header('Location: cari.php');
        exit();
    } else {
        // Form method kosong, tampilkan pesan
        echo "Form harus diisi";
    }
}
?>


