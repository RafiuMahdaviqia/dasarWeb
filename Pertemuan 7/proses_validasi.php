<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Lakukan validasi atau proses lainnya di sini
    // Contoh: validasi email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Data sudah diterima. Nama: $nama, Email: $email, Password: $password";
    } else {
        echo "Format email tidak valid.";
    }
}
?>
