<?php
include_once("./connect.php");

$query =mysqli_query($db, "SELECT * from buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
<div class="container w-75">
 <h1 class="my-4">Daftar Buku</h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <table class="table">
    <thead>
                <tr>
                <th scope="col">Nama</th>
                <th scope="col">ISBN</th>
                <th scope="col">Unit</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($query as $buku) { ?>
                <tr>
                    <td><?php echo $buku["Nama"] ?></td>
                    <td><?php echo $buku["ISBN"] ?></td>
                    <td><?php echo $buku["UNIT"] ?></td>
                    <td>
                        <a class="btn btn-primary"href=<?php echo "edit-buku.php?id=" . $buku["ID"] ?>>EDIT</a> |
                        <a class="btn btn-danger"<?php echo "delete-buku.php?id=" . $buku["ID"] ?>>HAPUS</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    <a class="btn btn-primary" href="./tambah-buku.php" class="button">Tambah data buku</a>
    <a class="btn btn-primary" href="./index.php" class="button">Kembali ke halaman utama</a>
</body>
</html>
