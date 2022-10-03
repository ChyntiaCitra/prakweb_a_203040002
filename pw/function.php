<?php
// fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "prakweb_a_203040002_pw");

    return $conn;
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }


  $row = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $judul_buku = htmlspecialchars($data['judul_buku']);
  $penulis = htmlspecialchars($data['penulis']);
  $tahun_terbit = htmlspecialchars($data['tahun_terbit']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO
              buku
            VALUES
            (null, '$judul_buku', '$penulis', '$tahun_terbit', '$gambar');
          ";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id_buku'];
    $judul_buku = htmlspecialchars($data['judul_buku']);
    $penulis = htmlspecialchars($data['penulis']);
    $tahun_terbit = htmlspecialchars($data['tahun_terbit']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "UPDATE buku SET
                judul_buku = '$judul_buku',
                penulis = '$penulis',
                tahun_terbit = '$tahun_terbit',
                gambar = '$gambar'
                WHERE id_buku = '$id'";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}



