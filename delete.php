<?php
    require 'config/function.php';

    $nim = $_GET['nim'];
    
    if (hapus($nim) > 0){
        echo "<script>
            alert('TERHAPUS');
            document.location.href = 'admin.php';   
        </script>";
    }else{
        echo "<script>
            alert('TIDAK TERHAPUS');
            document.location.href = 'admin.php';   
        </script>";
    }


?>