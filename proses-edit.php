<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau belum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $position = $_POST['position'];
    $status = $_POST['status'];

    // buat query update
    $praktikum_11 = "UPDATE karyawan SET name='$name', email='$email', address='$address', gender='$gender', position='$position', status='$status' WHERE id=$id";
    $query = mysqli_query($db, $praktikum_11);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-karyawan.php
        header('Location: list-karyawan.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>
