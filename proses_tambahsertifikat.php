
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

// Fungsi untuk membersihkan dan memvalidasi input
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Tangkap data dari formulir pendaftaran
$participant_name = clean_input($_POST['participant_name']);
$event_name = clean_input($_POST['event_name']);
$event_date = clean_input($_POST['event_date']);
$certificate_text = clean_input($_POST['certificate_text']);
$created_at = date('Y-m-d H:i:s'); // Untuk mengambil waktu saat ini

// Validasi input (contoh sederhana)
if (empty($participant_name) || empty($event_name) || empty($event_date) || empty($certificate_text)) {
    die("Mohon lengkapi semua kolom pendaftaran.");
}

// Query untuk menambahkan data event ke dalam tabel
$query = "INSERT INTO cerɵficates (participant_name, event_name, event_date, certificate_text, created_at) 
          VALUES ('$participant_name', '$event_name', '$event_date', '$certificate_text', '$created_at')";

// Eksekusi query
if ($conn->query($query) === TRUE) {
    header("Location: sertifikat.php"); // Ganti dengan nama halaman yang sesuai
    exit(); // Pastikan untuk keluar setelah melakukan redirect
} else {
    echo "Pendaftaran event gagal. Silakan coba lagi.";
}

// Tutup koneksi database
$conn->close();
?>