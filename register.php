<?php
    session_start();

    // Cek apakah user memiliki session
    // Kalau iya, artinya user sudah login
    // Maka, pindahin ke halaman index.php
    if(isset($_SESSION["email"])){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body> 
    <h2>Register</h2>

    <!-- method form: POST -->
    <!-- action: ketika form disubmit, mau panggil PHP yang mana? -->
    <form method="POST" action="./register_proccess.php">
        <!-- input email -->
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>

        <!-- input password -->
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>

        <br>
        
        <input type="submit" value="Submit">
        <a class="btn btn-success" href="./login.php">Register</a>
    </form>
</body>
</html>