<?php
    include_once("./connect.php");

    if (isset($_POST["submit"])) {

        $nama = $_POST["nama"];
        $ISBN = $_POST["ISBN"];
        $UNIT = $_POST["UNIT"];

        $query =  mysqli_query($db, "INSERT INTO buku VALUES (NULL, '$nama', '$ISBN', $UNIT
        )");

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH DATA BUKU</title>
</head>
<link rel="stylesheet" href="style+.css">
<body>
    <h1>Form Tambah Data Buku</h1>
    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">

        <br>
        <br>

        <label for="ISBN">ISBN</label>
        <input type="text" id="ISBN" name="ISBN">
        
        <br>
        <br>

        <label for="UNIT">UNIT</label>
        <input type="number" id="UNIT" name="UNIT">

        <br>
        <br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>
</body>
</html>

