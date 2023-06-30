<?php
require_once "controller/mhsw.php";
$mhsw = new Mhsw();

 $nim = $_POST['nim'];
 $nama = $_POST['nama'];
 $alamat = $_POST['alamat'];
 $tmbh = $mhsw->insert($nim,$nama,$alamat);
         header('Location: index.php');
        exit();
?>