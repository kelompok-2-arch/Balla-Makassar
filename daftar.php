<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Cek apakah email sudah ada
    $cek = mysqli_query($conn, "SELECT * FROM akun WHERE Email='$email'");

    if (mysqli_num_rows($cek) > 0) {
        echo "<script>alert('Email sudah terdaftar!'); window.location='daftar.html';</script>";
    } else {

        // Simpan data
        $query = "INSERT INTO akun (Nama, Email, Password) 
                  VALUES ('$nama', '$email', '$password')";

        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Pendaftaran berhasil!'); window.location='login.html';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>