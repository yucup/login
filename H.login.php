<?php 
  include "koneksi.php";
?>
<?php 
        if (isset($_POST ['masuk'])){
          $email = $_POST['email'];
          $pass = $_POST['pass'];
          $sql = mysqli_query($koneksi, "SELECT * FROM login WHERE username = '$email' AND password = md5('$pass')");
          $cek = mysqli_num_rows($sql);

          if($cek == 1){
            $_SESSION['web']=$email;
            header ("location:admin.php");
            exit;
          }
                
          else {
            $_SESSION['web'] =$email;
            header("H.login.php");
          }
        }
      ?>

<!doctype html>
<html lang="en">
  <head>
    <link href="H.login.css" type="text/css" rel="stylesheet">
    <title>L O G I N</title>
  </head>
  
  <body>

      <div class="wrapper">
        <div class="title">
          login Form
        </div>

        <!-- tabel email -->
        <form action="#" method= "post">
          <div class="field">
          <input type="text" name="email" required>
          <label>Masukkan Email</label>
          </div>

          <!-- tabel password -->
          <div class="field">
            <input type="password" name="pass" required>
            <label>Masukkan Password</label>
          </div>
            <br>

            <!-- tabel chechbox dan remember -->
          <div class="content">
            <div class="checkbox">
              <input type="checkbox" id="ingatkan-saya">
              <label for="ingatkan-saya">Ingatkan Saya &ensp; </label> 
              <div class="pass-link">
                <a href="https://mail.google.com/">Lupa Password?</a>
            </div>
            </div>
          </div>
          <br>
      
          <!-- tabel submit -->
          <div class="field">
            <input type="submit" name = "masuk">
          </div>
          <div class="signup-link">Belum Menjadi anggota ? <a href="register\register.php"> Daftar sekarang</a>
          </div>
        </form>
      </div>

    </body>
</html>

