<?php
    include_once("./connect.php");

    $ID = $_GET["ID"];

    $query_get_data = mysqli_query($db, "SELECT * FROM buku WHERE ID=$ID");
    $buku = mysqli_fetch_assoc($query_get_data);

    if (isset($_POST["submit"])) {
        $Nama = $_POST["Nama"];
        $ISBN = $_POST["ISBN"];
        $UNIT = $_POST["UNIT"];

        $query = mysqli_query($db, "UPDATE buku SET Nama='$Nama', ISBN=$ISBN, UNIT=$UNIT WHERE ID=$ID" );
    }
        
?>

<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FORM EDIT BUKU </title>
</head>
 
    
<body>
    <h1> Form Edit Data Buku </h1>

    <form action="" method="post">
        <label for="Nama">Nama</label>
        <input value="<?php echo $buku['Nama']?>" type="text" id="Nama" name="Nama">

        <br>
            <br>

        <label for="ISBN">ISBN</label>
        <input value="<?php echo $buku['ISBN']?>" type="number" id="ISBN" name="ISBN">

        <br>
            <br>

        <label for="UNIT">Unit</label>
        <input value="<?php echo $buku['UNIT']?>" type="number" id="UNIT" name="UNIT">

        <br>
            <br>

        <button type="submit" name="submit" > Submit </button>
        
    </form>

    <br>
        <a href="buku.php"> Kembali ke Halaman Buku </a>

    <br>
        <a href="index.php"> Kembali ke Halaman Utama </a>
</body>
</html>