<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-karyawan.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$praktikum_11 = "SELECT * FROM karyawan WHERE id=$id";
$query = mysqli_query($db, $praktikum_11);
$karyawan = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
</head>
<body>
    <header>
        <h3>Edit Data Karyawan</h3>
    </header>

    <form action="proses-edit.php" method="POST">
        <section>
            <input type="hidden" name="id" value="<?php echo $karyawan['id'] ?>" />

        <p>
            <label for="name">Name: </label>
            <input type="text" name="name" placeholder="" value="<?php echo $karyawan['name'] ?>" />
        </p>
        <p>
            <label for="email">Email: </label>
            <textarea name="email"><?php echo $karyawan['email'] ?></textarea>
        </p>
        <p>
            <label for="address">Address: </label>
            <textarea name="address"><?php echo $karyawan['address'] ?></textarea>
        </p>
        <p>
            <label for="gender">Gender: </label>
            <?php $gender = $karyawan['gender']; ?>
            <label><input type="radio" name="gender" value="male" <?php echo ($gender == 'male') ? "checked": "" ?>> Male</label>
            <label><input type="radio" name="gender" value="female" <?php echo ($gender == 'female') ? "checked": "" ?>> Female</label>
        </p>
        <p>
            <label for="position">Position: </label>
            <?php $position = $karyawan['position']; ?>
            <select name="position">
                <option <?php echo ($position == 'Frontend') ? "selected": "" ?>>Front-end Developer</option>
                <option <?php echo ($position == 'backend') ? "selected": "" ?>>Back-end Developer</option>
                <option <?php echo ($position == 'mobile') ? "selected": "" ?>>Mobile Developer</option>
                <option <?php echo ($position == 'uiux') ? "selected": "" ?>>UI/UX</option>
                <option <?php echo ($position == 'fullstack') ? "selected": "" ?>>Fullstack Developer</option>
            </select>
        </p>
        <p>
            <label for="status">Status: </label>
            <?php $status = $karyawan['status']; ?>
            <label><input type="radio" name="status" value="fulltime" <?php echo ($status == 'fulltime') ? "checked": "" ?>> Fulltime</label>
            <label><input type="radio" name="status" value="halftime" <?php echo ($status == 'halftime') ? "checked": "" ?>> Halftime</label>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>
        </section>
    </form>

    </body>
</html>