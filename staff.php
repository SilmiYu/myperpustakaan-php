<?php
include_once("./connect.php");

$query = mysqli_query($db, "SELECT * FROM staff");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Staff</title>
</head>
<body>
    <h1 class="my-4">Daftar Staff</h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <table class="table">
    <thead>
    <tr>
                <th scope="col">Nama</th>
                <th scope="col">Telepon</th>
                <th scope="col">Email</th>
                <th scope="col">ACTION</th>
                </tr>
                
            </thead>
            <tbody>

                <?php foreach ($query as $staff) { ?>
                    <tr>
                        <td><?php echo $staff["Nama"] ?></td>
                        <td><?php echo $staff["Telp"] ?></td>
                        <td><?php echo $staff["Email"] ?></td>
                        <td> <a class="btn btn-primary" href=<?php echo "edit-staff.php?ID=".$staff["ID"] ?>>EDIT</a>
                        <a class="btn btn-danger" href=<?php echo "delete-staff.php?ID=".$staff["ID"] ?>>HAPUS</a></td>
        
                    </tr>
                <?php } ?>
            </tbody>
</table>
    <a class="btn btn-primary" href="./tambah-staff.php" class="button">Tambah data staff</a>
    <a class="btn btn-primary" href="./index.php" class="button">Kembali ke halaman utama</a>
</body>
</html>