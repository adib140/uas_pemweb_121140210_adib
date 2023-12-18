<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];

    // Proses data atau menyimpan ke database
    // Di sini Anda dapat menambahkan kode untuk menyimpan ke database atau melakukan operasi lainnya dengan data yang dikirimkan

    // Contoh output atau tindakan setelah menerima data
    echo "<h2>Data yang Anda masukkan:</h2>";
    echo "Nama: " . $nama . "<br>";
    echo "NIM: " . $nim . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "Tanggal Lahir: " . $tanggal_lahir . "<br>";
    echo "Alamat: " . $alamat . "<br>";
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
        <link rel="stylesheet" href="form.css">        
        
        
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
                <a href="table.php">Table</a>
            </div>   

            <div class="navbar-extra
                <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
            </div> 
        </nav>

    <section class="hero2" id="hero2">
        <div class="container">
            <h2>Form Data Mahasiswa</h2>
            <form action="koneksi.php" method="post">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" required>
                </div>

                <div class="form-group">
                    <label for="nim">NIM:</label>
                    <input type="text" id="nim" name="nim" required>
                </div>

                <div class="form-group">
                    <label for="nim">Program Studi:</label>
                    <input type="text" id="prodi" name="prodi" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="gender">
                    <label for="gender">Gender:</label>

                    <div class="pilih">
                        <input type="radio" id="male" name="gender" value="Male" required>
                        <label for="male">Male</label>
                        
                        <input type="radio" id="female" name="gender" value="Female" required>
                        <label for="female">Female</label>
                    </div>
                    

                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir:</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea id="alamat" name="alamat" required></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" value="Submit">
                </div>
            </form>
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