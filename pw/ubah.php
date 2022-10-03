<?php  
require 'function.php';

// jika tidak ada id di url
if (!isset($_GET['id_buku'])) {
    header("Location:index.php");
    exit;
}

// ambil iddari url
$id_buku = $_GET ['id_buku'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM buku WHERE id_buku = $id_buku");


// cek apakah tombol ubah sudah ditekan
if (isset ($_POST['ubah'])) {
    if( ubah($_POST) > 0 ) {
        echo "<script>
        alert('data berhasil diubah');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "data gagal diubah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ubah List Buku</title>
</head>
<body>
<h3>Form Ubah List Buku</h3>
<form action="" method="POST">
<input type="hidden" name="id_buku" value="<?= $m['id_buku']; ?>">
<ul>
<li>
<label>
    Judul :
    <input type="text" name="judul_buku" autofocus required value="<?= $m['judul_buku']; ?>">
</label>
</li>
<li>
<label>
    Nama Penulis :
    <input type="text" name="penulis" required value="<?= $m['penulis']; ?>">
</label>
</li>
<li>
<label>
    Tahun :
    <input type="text" name="tahun_terbit" required value="<?= $m['tahun_terbit']; ?>">
</label>
</li>
<li>
<label>
    Gambar :
    <input type="text" name="gambar" required value="<?= $m['gambar']; ?>">
</label>
</li>
<li>
<button type="submit" name="ubah">Ubah Data!</button>
</li>
    
</ul>
</form>
    
</body>
</html>