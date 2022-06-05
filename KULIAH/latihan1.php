<?php
// Koneksi ke DB & Pilih Database
$conn = mysqli_connect('localhost', 'root', '', 'sttmandala');


// Query isi tabel mahasiswa
mysqli_query($conn, "SELECT * FROM user mahasiswa")
// ubah data ke dalam array

// tampung ke variable mahasiswa
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NIM</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <td>1</td>
    <td><img src="img/sandhika.jpeg"></td>
    <td>2043021</td>
    <td>Edo</td>
    < <td>
      </td>
  </table>


</body>

</html>