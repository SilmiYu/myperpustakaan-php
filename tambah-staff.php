<?php
    include_once("./connect.php");

    if (isset($_POST["submit"])) {

        $nama = $_POST["nama"];
        $Telp = $_POST["Telp"];
        $Email = $_POST["Email"];

        $query = mysqli_query($db, "INSERT INTO staff VALUES (NULL, '$nama', '$Telp', '$Email')");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH DATA STAFF</title>
</head>
<link rel="stylesheet" href="style+.css">
<body>
    <h1>Form Tambah Data Staff</h1>
    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">

        <br>
        <br>

        <label for="Telp">Telepon</label>
        <input type="text" id="Telp" name="Telp">
        
        <br>
        <br>

        <label for="Email">Email</label>
        <input type="email" id="Email" name="Email">

        <br>
        <br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>
</body>
</html>