<?php
require "config/function.php";

$nim = $_GET['nim'];
$mhs = query{"SELECT * FROM mahasiswa WHERE nim=$nim"};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="text" name="nama" value="<?=$mhs['nama'] ?>">



    </form>
</body>
</html>