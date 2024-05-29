<?php
    session_start();

    if(!isset($_SESSION["email"])){
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>

</head>
<body>
    <div class="judul">
        <h1>Aplikasi Perpustakaan v.2</h1>

        <div class="menu">
            <a href="./buku.php">Lihat daftar buku</a>
            <a href="./staff.php">Lihat daftar staff</a>
        </div>

        <form action="logout_proccess.php" method="$_POST"> <button type="submit"> LOGOUT </button>
    </form>
    
    </div>

    <footer>
        <p>&copy; 2024 Silmi Yushini - 2210631250098</p>
    </footer>


</body>
</html>
