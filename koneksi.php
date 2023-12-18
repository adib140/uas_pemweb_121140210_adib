<?php
$host_db    = "localhost";
$user_db    = "root";
$pass_db    = "";
$nama_db    = "login";
$koneksi    = mysqli_connect($host_db, $user_db, $pass_db, $nama_db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];

    // Menyimpan data ke dalam database
    $sql = "INSERT INTO data_akun (nama, nim, prodi, email, password, gender, tanggal_lahir, alamat) 
            VALUES ('$nama', '$nim', '$prodi', '$email', '$password', '$gender', '$tanggal_lahir', '$alamat')";

    if (mysqli_query($koneksi, $sql)) {
        mysqli_close($koneksi);
        header('Location: table.php'); // Mengarahkan ke table.php setelah data tersimpan
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}
?>
