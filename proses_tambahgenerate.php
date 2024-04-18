<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  
  $event_name     = $_POST['event_name'];
  $nama_petugas    = $_POST['nama_petugas'];
  
 


                  $query = "INSERT INTO ujikom2024 VALUES ('$event_name','$nama_pengguna' )";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='generate.php';</script>";
                  }

            ?>