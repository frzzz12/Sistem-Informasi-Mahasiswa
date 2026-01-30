<?php
    require "config/function.php";

    if(isset($_POST['tombol'])){
        if(tambah($_POST) > 0){
            echo "<script>
            alert('TERTAMBAH');
            document.location.href = 'admin.php';   
        </script>";
        }else{
             echo "<script>
            alert('TIDAK TERTAMBAH');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="w-50">
        <form action="" method="POST">
            NIM: <input type="text" name="nim" ><br>
            NAMA: <input type="text" name="nama"><br>
            JENIS KELAMIN: <br>
            <input type="radio" name="jk" class="form-check-input" value="P"> P 
            <input type="radio" name="jk" class="form-check-input" value="L"> L
            <br> 
            TANGGAL LAHIR: <input type="date" name="tgl"><br>
            ALAMAT: <input type="text" name="alamat"><br>
            NO HP: <input type="number" name="telpon"><br>
            EMAIL: <input type="text" name="email"><br>
            JURUSAN: <input type="number" name="jurusan"> <br>
            <button type="submit" name="tombol" class="btn btn-primary fw-semibold">SUBMIT</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>