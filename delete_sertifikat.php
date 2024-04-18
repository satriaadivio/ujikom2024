<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "ujikom2024";

$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tangkap parameter id event yang ingin dihapus
$certificate_id = $_GET['id'];

// Query untuk menghapus data event dari tabel
$query = "DELETE FROM cerɵficates WHERE certificate_id = $certificate_id";

// Eksekusi query
if ($conn->query($query) === TRUE) {
    echo "Data sertifikat berhasil dihapus.";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

// Tutup koneksi database
$conn->close();

// Redirect kembali ke halaman utama setelah menghapus
header("Location: sertifikat.php"); // Ganti dengan halaman yang sesuai
exit();
?>