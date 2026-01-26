<?php
$conn = mysqli_connect('localhost', 'root', '', 'sistem_informasi_mahasiswa');

function query($query){
    global$conn;
    $result = mysqli_query($conn, $query);
    
    return mysqli_fetch_assoc($result);
}

function ubah($data){
    global$conn;
    $nim=$data['nim'];
    $nama=$data['nama'];
    $alamat=$data['alamat'];
    $email=$data['email'];
    $query="
    UPDATE mahasiswa SET
    nama='$nama',
    email='$email',
    alamat='$alamat'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>