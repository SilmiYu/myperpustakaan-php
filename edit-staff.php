<?php
    include_once("./connect.php");

    $ID = $_GET["ID"];

    $query_get_data = mysqli_query($db, "SELECT * FROM staff WHERE ID=$ID");
    $staff = mysqli_fetch_assoc($query_get_data);

    if (isset($_POST["submit"])) {
        $Nama = $_POST["Nama"];
        $Telp = $_POST["Telp"];
        $Email = $_POST["Email"];

        $query = mysqli_query($db, "UPDATE staff SET Nama='$Nama', Telp='$Telp', Email='$Email' WHERE ID=$ID" );
    }
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FORM EDIT STAFF </title>
<link rel="stylesheet" href="style-.css">
</head>
<body>
    <h1> Form Edit Data Staff </h1>

    <form action="" method="post">
        <label for="Nama">Nama</label>
        <input value="<?php echo $staff['Nama']?>" type="text" id="Nama" name="Nama">

        <br>
            <br>

        <label for="Telp">Telepon</label>
        <input value="<?php echo $staff['Telp']?>" type="number" id="Telp" name="Telp">

        <br>
            <br>

        <label for="Email">Email</label>
        <input value="<?php echo $staff['Email']?>" type="email" id="Email" name="Email">

        <br>
            <br>

        <button type="submit" name="submit" > Submit </button>
        
    </form>

    <br>
        <a href="staff.php"> Kembali ke Halaman staff </a>

    <br>
        <a href="index.php"> Kembali ke Halaman Utama </a>
</body>
</html>