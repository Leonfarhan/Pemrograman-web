<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar isi</title>
</head>

<body>
    <header>
        <h3>Daftar Isi Karyawan</h3>
    </header>

    <!-- <div>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </div> -->

    <br>

    <table border="1">
    <div>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Position</th>
            <th>Status</th>
        </tr>
    </div>
    <div>

        <?php
        $praktikum_11 = "SELECT * FROM karyawan";
        $query = mysqli_query($db, $praktikum_11);
        $no = 0;

        while($karyawan = mysqli_fetch_array($query)){
            
            echo "<tr>";
            
            echo "<td>" . ++$no ."</td>";
            echo "<td>".$karyawan['name']."</td>";
            echo "<td>".$karyawan['email']."</td>";
            echo "<td>".$karyawan['address']."</td>";
            echo "<td>".$karyawan['gender']."</td>";
            echo "<td>".$karyawan['position']."</td>";
            echo "<td>".$karyawan['status']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$karyawan['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$karyawan['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
    </div>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    <a href="index.php">kembali</a>

    </body>
</html>