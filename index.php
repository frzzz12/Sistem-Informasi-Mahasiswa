<?php 

include 'database/koneksi.php';

$query = mysqli_query($conn, "
    SELECT m.nim, m.nama, m.tanggal_lahir, m.alamat, m.no_hp, m.email, j.nama_jurusan
    FROM mahasiswa AS m
    JOIN jurusan AS j ON m.jurusan_id = j.jurusan_id
");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Halaman Home</h1>

    <table border="1">
        <thead>
            <tr>
                <td>NIM</td>
                <td>NAMA</td>
                <td>JURUSAN</td>
                <td>ALAMAT</td>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($query)) {
                    ?>
            <tr> 
                <td><?= $row['nim'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['nama_jurusan'] ?></td>
                <td><?= $row['alamat'] ?></td>
            </tr>
                <?php }?>
        </tbody>
    </table>

</body>
</html>