<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

// query cek user
$sql = "SELECT * FROM akun WHERE Nama='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

    // cek password
    if ($password == $row['Password']) {

        $_SESSION['login'] = true;
        $_SESSION['username'] = $row['Nama'];

        header("Location: index.html");
        exit();

    } else {
        echo "<script>
                alert('Password salah!');
                window.location='login.html';
              </script>";
    }

} else {
    echo "<script>
            alert('Username tidak ditemukan!');
            window.location='login.html';
          </script>";
}

$conn->close();
?>