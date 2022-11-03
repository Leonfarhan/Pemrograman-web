<?php
    $barang = array("Aqua", "odol", "indomie", "hansaplast", "pylox");
    $berat = array("23", "45", "93", "11", "88");    
    $stok = array("12", "14", "5", "7", "66");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <h1>KONVERSI BARANG PAK FARHAN</h1>
    <table>
  <tr>
    <th>No</th>
    <th>Nama Barang</th>
    <th>Berat(KG)</th>
    <th>Berat(gram)</th>
    <th>Berat(miligram)</th>
    <th>stock</th>
  </tr>
  <?php for ($x = 0; $x <= 4; $x++) :?>
  <tr>
    <td><?php echo $x+1; ?></td>
    <td><?php echo $barang[$x] ?></td>
    <td><?php echo $berat[$x] ?></td>
    <td><?php echo $berat[$x]*1000 ?></td>
    <td><?php echo $berat[$x]*10000 ?></td>
    <td><?php echo $stok[$x] ?></td>
  </tr>
  <?php endfor ?>
</table>
</body>
</html>