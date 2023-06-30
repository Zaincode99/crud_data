<?php
require_once "controller/mhsw.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $mhsw = new Mhsw();
    $mhsw->delete($id);

    // Redirect ke halaman tampil_data.php setelah berhasil menghapus data
    header('Location: index.php');
    exit();
} else {
    // Jika ID tidak diberikan, redirect ke halaman tampil_data.php
    exit();
}
?>