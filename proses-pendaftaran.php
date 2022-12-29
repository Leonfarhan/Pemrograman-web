<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

    // ambil data dari formulir
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $position = $_POST['position'];
    $status = $_POST['status'];

    // buat query
    $praktikum_11 = "INSERT INTO karyawan (name, email, address, gender, position, status) 
            VALUE ('$name', '$email', '$address', '$gender', '$position', '$status')";
    $query = mysqli_query($db, $praktikum_11);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>