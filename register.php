<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="assets/css/register-style.css">
        <title>Aplikasi Profil Mahasiswa - Halaman Register</title>
    </head>
    <body>
        <div class="container">
            <div class="row main">
                <div class="main-login main-center">
                <center><h3>Aplikasi Profil Mahasiswa</h3>
                <h6>Silahkan untuk Melakukan Registrasi Akun Disini!</h6></center>
                   <?php 
                    if(isset($_GET['alert'])){
                        if($_GET['alert']=="extension_failed"){
                            ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-times-circle"></i> Peringatan !</h4>
                                Ekstensi File Tidak Diperbolehkan
                            </div>                              
                            <?php
                        }elseif($_GET['alert']=="size_failed"){
                            ?>
                            <div class="alert alert-warning alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-times-circle"></i> Peringatan !</h4>
                                Ukuran File Tidak Memenuhi Syarat
                            </div>                              
                            <?php
                        }elseif($_GET['alert']=="success"){
                            ?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4><i class="icon fa fa-check"></i> Registrasi Sukses</h4>
                                Data Berhasil Disimpan. Silahkan kembali ke Halaman <a href="index.php" class="alert-link">Login!</a>
                            </div>                              
                            <?php
                        }
                    }
                    ?>
                    <form method="POST" action="simpan_regist.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama_mhs" class="cols-sm-2 control-label">Nama Mahasiswa</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="nama_mhs" id="nama_mhs" pattern=".{4,30}" required title="Nama Mahasiswa boleh berupa huruf dan angka, panjang maksimal 30 karakter, tidak case sensitive, dan tidak boleh hanya berjumlah 3 huruf saja" placeholder="Input Nama Lengkap Mahasiswa..."/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nim_mhs" class="cols-sm-2 control-label">NIM Mahasiswa</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-database fa" aria-hidden="true"></i></span>
                                    <input type="number" class="form-control zipcode-number" name="nim_mhs" id="nim_mhs" required placeholder="Input NIM Mahasiswa..."  min="1" max="9999999999" maxlength="10" name="number" inputmode="numeric" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" /><center>
                                    <p style="color: red; font-size: 10px">NIM Maksimal berjumlah 10 karakter angka</p></center>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="foto_mhs" class="cols-sm-2 control-label">Foto Mahasiswa</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <input type="file" class="form-control" name="foto_mhs" id="foto_mhs" required>
                                    <center><p style="color: red; font-size: 10px">Ekstensi yang diperbolehkan .jpg | .jpeg | .png </p>
                                    <p style="color: red; font-size: 10px">Ukuran Maksimal 500kB </p></center>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Username</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="username" id="username" required placeholder="Input Username..." pattern="^[a-z]+$" title="Username yang diinputkan hanya boleh berisi huruf kecil" />
                                </div>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Password</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="password" id="password" required placeholder="Input Password..." pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" title="Password yang diinputkan minimal berjumlah 8 karakter, memiliki kombinasi huruf kecil dan huruf besar, minimal 1 angka, dan minimal 1 karakter spesial" />

                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <input type="submit" name="" value="Simpan"  class="btn btn-primary btn-lg btn-block login-button">
                        </div>
                        <center>
                            <a class="link" href="index.php">Kembali ke Halaman Login</a>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>