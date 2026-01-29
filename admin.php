<?php

    require "database/koneksi.php";

    $query = mysqli_query($conn, "SELECT m.nim, m.nama, m.tanggal_lahir, m.alamat, m.email, 
    j.nama_jurusan FROM mahasiswa AS m JOIN jurusan AS j ON m.jurusan_id = j.jurusan_id
    ");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin Dashboard</title>
    <style>
        .sidebar {
            min-height: 100vh;
        }
    </style>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-3 col-lg-2 d-md-block bg-primary sidebar collapse rounded-2">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link text-white active fw-semibold" href="#">
              <i class="bi bi-house"></i> Mahasiswa
            </a>
          </li>
          <hr>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <h2 class="mt-4">Tabel Mahasiswa</h2>
      <hr>
      <table class="table table-hover">
          <thead>
              <tr class="fw-semibold">
                  <td>NIM</td>
                  <td>Nama</td>
                  <td>Alamat</td>
                  <td>Email</td>
                  <td>Jurusan</td>
                  <td>Edit</td>
                  <td>Hapus</td>
              </tr>
          </thead>
              <tbody class="table-group-divider">
                  <?php while($row=mysqli_fetch_assoc($query)) {?>
                  <tr>
                      <td><?= $row['nim']?></td>
                      <td><?= $row['nama']?></td>
                      <td><?= $row['alamat']?></td>
                      <td><?= $row['email']?></td>
                      <td><?= $row['nama_jurusan']?></td>
                      <td><a href="edit.php?nim=<?= $row['nim']?>">
                        <i class="fa-solid fa-pen-to-square" style="color: #0d6efd; font-size:1.3rem"></i>
                      </a></td>
                      <td><a href="delete.php?nim=<?= $row['nim']?>">
                        <i class="fa-solid fa-trash text-center" style="color: #0d6efd; font-size:1.3rem"></i>
                      </a></td>
                  </tr>
                  <?php }?>
              </tbody>
      </table>
    </main>
  </div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
</body>
</html>
