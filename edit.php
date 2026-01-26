<?php
require "config/function.php";

$nim = $_GET['nim'];
$mhs = query("SELECT * FROM mahasiswa WHERE nim='$nim'");

if(isset($_POST['edit'])){
    if(ubah($_POST) > 0){
        echo "<script>
            alert('TERUBAH');
            document.location.href = 'admin.php';   
        </script>";
    }else{
        echo "<script>
            alert('TIDAK TERUBAH');
            document.location.href = 'admin.php';
        </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="hidden" name="nim" value="<?=$mhs['nim'] ?>">
        <input type="text" name="nama" value="<?=$mhs['nama'] ?>"><br>
        <input type="text" name="alamat" value="<?=$mhs['alamat'] ?>"><br>
        <input type="text" name="email" value="<?=$mhs['email'] ?>"><br>
        <button type="submit" name="edit">Edit</button>
    </form>
</body>
</html>