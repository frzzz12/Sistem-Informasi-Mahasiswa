<?php
require "database/koneksi.php";

function query($query){
    global$conn;
    $result = mysqli_query($conn, $query);
    
    return mysqli_fetch_assoc($result);
}


?>