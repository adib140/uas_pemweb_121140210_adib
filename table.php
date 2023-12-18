<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Membuat koneksi ke database
$conn = mysqli_connect($host, $username, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mengambil data dari tabel data_akun
$sql = "SELECT * FROM data_akun";
$result = mysqli_query($conn, $sql);

// Memeriksa apakah query berhasil dijalankan
if (!$result) {
    die("Query gagal: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700;900&family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
        <link href="<link rel=preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="https://fontawesome.com/icons"></script>
        <script src=""></script>
        <link rel="stylesheet" href="table.css">        
        
        
         <title>Home</title>
        
    </head>
    <body>
        <!-- Navbar & Sidebar -->
        <nav class="navbar">

            <a href="#" class="navbar-logo">
                <img src="logo_itera.png" alt="">
            </a>

            <div class="navbar-nav">
                <a href="homepage.php">Home</a>
                <a href="form.php">Formulir</a>
            </div>   

            <div class="navbar-extra">
                <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
            </div> 
        </nav>

    <section class="hero2" id="hero2">
        <div class="container">
            <table class="data_mhs">
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Program Studi</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Jenis Kelamin</th>
                    <th>Tgl. Lahir</th>
                    <th>Alamat</th>
                </tr>

                <?php
                // Loop untuk menampilkan data dari hasil query
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['nim'] . "</td>";
                    echo "<td>" . $row['prodi'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['password'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "<td>" . $row['tanggal_lahir'] . "</td>";
                    echo "<td>" . $row['alamat'] . "</td>";               
                }
                ?>
            </table>
        </div>
       
    </section>

        <footer class="footer">
            <p><strong>Adib Raihan Mudzaky</strong> &copy; Copyright 2023</p>
        </footer>

        <script>
            feather.replace()
        </script>

        <!--JS-->
        <script src="script.js"></script>
    </body>
</html>

<?php
// Menutup koneksi setelah selesai digunakan
mysqli_close($conn);
?>