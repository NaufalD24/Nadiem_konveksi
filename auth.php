<?php
session_start(); // Mulai sesi

// Fungsi untuk memeriksa apakah pengguna telah login
function isUserLoggedIn() {
    return isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
}

// Fungsi untuk memeriksa kredensial pengguna
function authenticateUser($username, $password) {
    // Ganti ini dengan metode autentikasi yang sesuai, misalnya dengan database
    $validUsername = "username"; // Ganti dengan username yang sebenarnya
    $validPassword = "password"; // Ganti dengan password yang sebenarnya

    return $username === $validUsername && $password === $validPassword;
}

// Jika pengguna mengirimkan formulir login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (authenticateUser($username, $password)) {
        $_SESSION['loggedin'] = true; // Set variabel sesi
        header("Location: welcome.php"); // Alihkan ke halaman selamat datang atau halaman utama
        exit;
    } else {
        echo "Username atau password salah";
    }
}
?>
