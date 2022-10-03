<?php
require 'function.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'latihan3.php';
            </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah List Buku</title>
</head>

<body>
  <h3>Form Tambah List Buku</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Judul:
          <input type="text" name="judul_buku" autofocus required>
        </label>
      </li>

      <li>
        <label>
          Nama Penulis:
          <input type="text" name="penulis" required>
        </label>
      </li>

      <li>
        <label>
          Tahun
          <input type="text" name="tahun_terbit" required>
        </label>
      </li>

      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required>
        </label>
      </li>

      <li>
        <button type="submit" name="tambah">Tambah List Buku!</button>
      </li>
    </ul>
  </form>
  </ul>

  </form>
</body>

</html>