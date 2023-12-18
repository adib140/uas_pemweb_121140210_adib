<?php
session_start();
// Koneksi ke database
$host_db    = "localhost";
$user_db    = "root";
$pass_db    = "";
$nama_db    = "login";
$koneksi    = mysqli_connect($host_db,$user_db,$pass_db,$nama_db);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Variabel untuk menyimpan pesan error
$err = "";
$username = "";
$ingataku = "";

// Jika ada data yang dikirim dari formulir
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $ingataku = $_POST['ingataku'];

    if($username == '' or $password == ''){
        $err .= "<li>Silahkan masukkan username dan juga password.</li>";
    } else {
        $sql1 = "SELECT * FROM login WHERE username = '$username'";
        $query1 = mysqli_query($koneksi, $sql1);
        $row = mysqli_fetch_assoc($query1);

        if(empty($row)){
            $err .= "<li>Username <b>$username</b> tidak tersedia.</li>";
        } else if($row['password'] !== md5($password)){
            $err .= "<li>Password yang dimasukkan tidak sesuai.</li>";
        }

        if (empty($err)){
            $_SESSION['session_username'] = $username;
            $_SESSION['session_password'] = md5($password);

            if($ingataku == 1){
                // Set cookie jika ingat saya diaktifkan
                $cookie_name = "cookie_username";
                $cookie_value = $username;
                $cookie_time = time () + (60 * 60 * 24 * 30);
                setcookie($cookie_name, $cookie_value, $cookie_time, "/");
                
                $cookie_name = "cookie_password";
                $cookie_value = md5($password);
                $cookie_time = time () + (60 * 60 * 24 * 30);
                setcookie($cookie_name, $cookie_value, $cookie_time, "/");
            }
            header('location: homepage.php'); // Arahkan ke homepage.php setelah login berhasil
            exit;
        }
    }
}

// Jika terdapat error, tampilkan pesan error
if (!empty($err)) {
    echo "<ul>$err</ul>";
}

mysqli_close($koneksi);
?>