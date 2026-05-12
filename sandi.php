<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password_lama = $_POST['password_lama'];
    $password_baru = $_POST['password_baru'];

    // cek user berdasarkan username
    $query = "SELECT * FROM akun WHERE Nama='$username'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {

        $data = $result->fetch_assoc();

        // 🔍 cek apakah password lama cocok
        if ($password_lama == $data['Password']) {

            // update ke password baru
            $update = $conn->query("UPDATE akun SET Password='$password_baru' WHERE Nama='$username'");

            if ($update) {
                echo "<script>
                        alert('Password berhasil diubah!');
                        window.location='login.html';
                      </script>";
            } else {
                echo "Gagal mengubah password!";
            }

        } else {
            echo "<script>
                    alert('Password lama salah!');
                    window.location='sandi.html';
                  </script>";
        }

    } else {
        echo "<script>
                alert('Username tidak ditemukan!');
                window.location='sandi.html';
              </script>";
    }
}

$conn->close();
?>