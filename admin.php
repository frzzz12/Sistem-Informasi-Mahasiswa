<?php

    require "database/koneksi.php";

    $query = mysqli_query($conn, "SELECT * FROM mahasiswa");




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>

    <h1>Halaman Admin</h1>

<table>
    <thead>
        <tr>
            <td>NIM</td>
            <td>NAMA</td>
            <td>ALAMAT</td>
            <td>EMAIL</td>
        </tr>
    </thead>
        <tbody>
            <?php while($row=mysqli_fetch_assoc($query)) {?>
            <tr>
                <td><?= $row['nim']?></td>
                <td><?= $row['nama']?></td>
                <td><?= $row['alamat']?></td>
                <td><?= $row['email']?></td>
            </tr>
            <?php }?>
        </tbody>
</table>
    
</body>
</html>
