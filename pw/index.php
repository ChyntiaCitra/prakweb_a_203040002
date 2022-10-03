<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "prakweb_a_203040002_pw");

// ambil dari tabel film / query
$result = mysqli_query($conn, "SELECT * FROM buku");

// ubah data ke dalam array
// $row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array associative
// $row = mysqli_fetch_array($result); // keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}
// tampung ke variabel buku
$buku = $rows;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

  <h1>List Buku</h1>

  <table border="1" cellpading="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Judul</th>
      <th>Penulis</th>
      <th>Tahun_terbit</th>
      <th>Gambar</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($buku as $row) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $row["judul_buku"]; ?> </td>
        <td><?= $row["penulis"]; ?></td>
        <td><?= $row["tahun_terbit"]; ?> </td>
        <td><img src="gambar/<?= $row["gambar"]; ?>" alt="" width="100"></td>
        <td>
            <!-- <button>
              <div class="ubah"><a href="ubah.php?=$tp['id_buku']; ?>">Ubah</a></div>
            </button>
            <button>
              <div class="delete"><a href="hapus.php?=$tp['id_buku']; ?>" onclick="return confirm('Hapus Data??')">Hapus</a></div>
            </button>
            <button>
              <div class="tambah"><a href="tambah.php?=$tp['id_buku']; ?>">tambah</a></div>
            </button> -->
            <button>
              <div class="ubah"><a href="ubah.php">Ubah</a></div>
            </button>
            <button>
              <div class="delete"><a href="hapus.php">Ubah</a></div>
            </button>
            <button>
              <div class="tambah"><a href="tambah.php">Ubah</a></div>
            </button>
        </td>
        
       
      </tr>
      <?php endforeach; ?>
  </table>

</body>

</html>