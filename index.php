<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Profil Mahasiswa - Halaman Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="assets/css/login-style.css">
</head>
<body>
    <br/><br/>
    <div class="container">
    <div class="kotak_login">
        <p class="tulisan_login"><b>Silahkan Login Disini!</b></p>
        <?php 
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "login_failed"){
                    echo '<center><span style="color:red;"> Login gagal! username dan password salah!</span></center>';
                    echo '<br>';
                }else if($_GET['pesan'] == "logout"){
                    echo '<center><span style="color:green;"> Logout berhasil! </span></center>';
                    echo '<br>';
                }else if($_GET['pesan'] == "not_login"){
                    echo '<center><span style="color:red;"> Tindakan dicegah! Anda harus login untuk mengakses halaman home!</span></center>';
                    echo '<br>';
                }
            }
        ?>
        <form action="aksi_login.php" method="POST">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Masukkan Username..." required="required">
            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="Masukkan Password..." required="required">
            <input type="submit" class="tombol_login" value="LOGIN">
            </br>
            </br>
            <center>
                <a class="link" href="register.php">Belum Punya Akun? Daftar Disini!</a>
            </center>
        </form>
    </div>
    </div>
</body>
</html>