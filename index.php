<?php
session_start();

$host_db    = "localhost";
$user_db    = "root";
$pass_db    = "";
$nama_db    = "login";
$koneksi    = mysqli_connect($host_db, $user_db, $pass_db, $nama_db);

$err        = "";
$username   = "";
$ingataku   = "";

if(isset($_POST['akun'])) {
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $ingataku   = $_POST['ingataku'];

    if($username == '' or $password == ''){
        $err .= "<li>Silahkan masukkan username dan juga password.</li>";
    } else {
        // Memperbaiki query untuk mendapatkan data dari database
        $sql1   = "SELECT * FROM akun WHERE username = '$username'";
        $qi     = mysqli_query($koneksi, $sql1);
        $r1     = mysqli_fetch_assoc($qi);

        if(!$r1){
            $err .= "<li>Username <b>$username</b> tidak tersedia.</li>";
        }
        else if($r1['password'] != md5($password)){
            $err .= "<li>Password yang dimasukkan tidak sesuai.</li>";
        }

        if (empty($err)){
            $_SESSION['session_username'] = $username;
            $_SESSION['session_password'] = md5($password);

            if($ingataku == 1){
                $cookie_name = "cookie_username";
                $cookie_value = $username;
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name, $cookie_value, $cookie_time, "/");
                
                $cookie_name = "cookie_password";
                $cookie_value = md5($password);
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name, $cookie_value, $cookie_time, "/");
            }
            
        }
    }
}

// Jika terdapat error, tampilkan pesan error
if (!empty($err)) {
    echo "<ul>$err</ul>";
}

mysqli_close($koneksi);
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <title>UAS pemweb</title>

    <link rel="stylesheet" href="index.css">

    <style>
        
    </style>
</head>
<body>

    <div class="wrapper">
        <form action="">
            <h1> Login</h1>

            <!--username-->
            <div class="input-box">
                <input type="text" placeholder="Username" required value="<?php echo $username?>">
            </div>

            <!--password-->
            <div class="input-box">
                <input type="password" placeholder="Password" required>
            </div>
            
            <!--fitur ingat-->
            <div class="remember">
                <label>
                    <input type="checkbox" value = "1" <?php if($ingataku == '1') echo "checked"?> > Ingat aku
                </label>
                <!--lupa "?"-->
                <a href="#">Lupa password?</a>
            </div>

            <!--login btn-->
            <button type="submit" class="btn"><a href="http://localhost/uas_pemweb_adib/homepage.php">Login</a></button>
            

        </form>
    </div>

    <!--feathericons-->
    <script>
        feather.replace()
    </script>

    <!--JS-->
    <script src=""></script>
</body>
</html>
