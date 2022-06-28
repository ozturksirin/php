<?php

include("baglan.php");


?>

<!-- ----------------------------------------------------- -->
<!DOCTYPE html>
<html lang="TR">
<head>
    <meta charset="UTF-8">
    <title>ANASAYFA</title>

    <link rel="stylesheet" type="text/css" href="../style.css"> 
    
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>

/* BASIC */

html {
  background-color: #56baed;
}

body {
  font-family: "Poppins", sans-serif;
  height: 100vh;
}

a {
  color: #92badd;
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}

h2 {
  text-align: center;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  display:inline-block;
  margin: 40px 8px 10px 8px; 
  color: #cccccc;
}



/* STRUCTURE */

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
}

#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #fff;
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}

#formFooter {
  background-color: #f6f6f6;
  border-top: 1px solid #dce8f1;
  padding: 25px;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
}



/* TABS */

h2.inactive {
  color: #cccccc;
}

h2.active {
  color: #0d0d0d;
  border-bottom: 2px solid #5fbae9;
}



/* FORM TYPOGRAPHY*/

input[type=button], input[type=submit], input[type=reset]  {
  background-color: #56baed;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
  background-color: #39ace7;
}

input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
  -moz-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  -o-transform: scale(0.95);
  -ms-transform: scale(0.95);
  transform: scale(0.95);
}

input[type=text] {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}

input[type=text]:focus {
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}

input[type=text]:placeholder {
  color: #cccccc;
}

/* ------------------------------------------ */
input[type=password] {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}

input[type=passwordt]:focus {
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}

input[type=password]:placeholder {
  color: #cccccc;
}




/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}

.fadeIn.first {
  -webkit-animation-delay: 0.4s;
  -moz-animation-delay: 0.4s;
  animation-delay: 0.4s;
}

.fadeIn.second {
  -webkit-animation-delay: 0.6s;
  -moz-animation-delay: 0.6s;
  animation-delay: 0.6s;
}

.fadeIn.third {
  -webkit-animation-delay: 0.8s;
  -moz-animation-delay: 0.8s;
  animation-delay: 0.8s;
}

.fadeIn.fourth {
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  animation-delay: 1s;
}

/* Simple CSS3 Fade-in Animation */
.underlineHover:after {
  display: block;
  left: 0;
  bottom: -10px;
  width: 0;
  height: 2px;
  background-color: #56baed;
  content: "";
  transition: width 0.2s;
}

.underlineHover:hover {
  color: #0d0d0d;
}

.underlineHover:hover:after{
  width: 100%;
}



/* OTHERS */

*:focus {
    outline: none;
} 

#icon {
  width:60%;
}

  
</style>
    
</head> 

<body>
    
   <header>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="./yonetim.php">YÖNETİM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="./index.php">ANASAYFA <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="./hakkında.html">HAKKINDA</a>
      <a class="nav-item nav-link" href="./iletisim.html">İLETİŞİM</a>
      <a class="nav-item nav-link" href="./kayit_ol.php">KAYIT OL</a>
      <a class="nav-item nav-link" href="./kitap_al.php">KİTAP AL</a>
      <!-- <a href="./cikis.php"> <button type="submit" class="btn btn-primary" >Çıkış Yap</button></a> -->
      
      
    </div>
  </div>
</nav>
  

   </header>

   <!-- ----------------------------------------------------- -->
  <?php
  if(isset($_GET['durum'])=="basarisiz")
  {
    ?>
      <div class="alert alert-danger">    
        <strong>HATA! </strong>GİRİŞ BAŞARISIZ TEKRAR KONTROL EDİNİZ!!
      </div>
    <?php
  }
  ?>

<?php
  if(isset($_GET['durum2'])=="basarili")
  {
    ?>
      <div class="alert alert-success" role="alert">    
        <strong>BAŞARILI </strong>GİRİŞ BAŞARILI!
      </div>
    <?php
  }
  ?>
    <!-- ----------------------------------------------------- -->
    

    
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="./kitap_resim/kitap_icon.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form class="giris" action="kitap_al.php" method="POST">
      <input type="text" required= "" id="login" class="fadeIn second" name="kayit_adi" placeholder="KULLANICI ADI">
      <input type="password" required= "" id="password" class="fadeIn third" name="kayit_sifre" placeholder="SİFRE">
      <input type="submit" class="fadeIn fourth" value="GİRİŞ YAP"name="btn_giris">
      
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="kayit_ol.php">KAYIT OL</a>
    </div>

  </div>
</div>


   <div class="container">
    <div class="card m-5 p-5">
<!-- giriş yapma kısmı 
    <form class="giris " action="kitap_al.php" method="POST">
        KULLANICI ADI:<br><input required="" type="text" name="kayit_adi"/><br><br>
        Şifre:<br><input required= "" type="password"  name="kayit_sifre"><br><br>
        <button type="submit" class="btn btn-primary" name="btn_giris">GİRİŞ</button>
    </form>
    <br>
    <a href="./cikis.php"> <button type="submit" class="btn btn-primary">Çıkış Yap</button></a>
-->

    <!-- --------------------------------------------------------------------------------- -->

    <div class="image">

        <img class="resim" src="kitap_resim/kitap1.jpg" width="400" height="600" />
        <img class="resim" src="kitap_resim/kitap2.jpg" width="400" height="600" />
        <img class="resim" src="kitap_resim/kitap3.jpg" width="400" height="600" />
        <img class="resim" src="kitap_resim/kitap4.jpg" width="400" height="600" /><br><br>
        <img class="resim" src="kitap_resim/kitap5.jpg" width="400" height="600" />
        <img class="resim" src="kitap_resim/kitap6.jpg" width="400" height="600" />
        <img class="resim" src="kitap_resim/kitap7.jpg" width="400" height="600" />
        <img class="resim" src="kitap_resim/kitap8.jpg" width="400" height="600" /><br><br>
    </div> 

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</div>
</div> 
<div class="container2" style="margin-left: 10%; margin-right: 10%;"><div class="card p-5">
 <!-- --------------------------------------------------------------------------------- -->
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">ID</th>
      <th scope="col">ADI</th>
      <th scope="col">YAZAR ADI</th>
      <th scope="col">SAYFA SAYISI</th>
      <th scope="col">YAYIN EVİ </th>
      <th scope="col">BASKI NUMARASI</th>
      <th scope="col">ALINMA ZAMANI</th>
    </tr>
  </thead>
  <tbody>
    
  <h1>ALINMIŞ KİTAPLAR</h1>
  <!-- ---------------------------------------- -->
  <?php 
  
  $kitap_listele=$db ->prepare("SELECT * FROM proje.kitapal");
  $kitap_listele->execute();
  $say=0;
  while($kitapcek=$kitap_listele->fetch(PDO::FETCH_ASSOC))
  { $say++;?>
      
  
  
  <!-- ----------------------------------------------------- -->
  
  <tbody>
    <tr>
    
      <th scope="row"><?php echo $say?></th>
      <td><?php echo $kitapcek['kitapAl_id'] ?></td>
      <td><?php echo $kitapcek['kitapAl_adi'] ?></td>
      <td><?php echo $kitapcek['kitapAl_yazar_adi'] ?></td>
      <td><?php echo $kitapcek['kitapAl_sayfa'] ?></td>
      <td><?php echo $kitapcek['kitapAl_yayin_evi'] ?></td>
      <td><?php echo $kitapcek['kitapAl_baski_no'] ?></td>
      <td><?php echo $kitapcek['kitapal_zaman'] ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<!-- --------------------------------------------------------------------------------- -->
    <h1>YENİ EKLENEN KİTAPLAR</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">ID</th>
      <th scope="col">ADI</th>
      <th scope="col">YAZAR ADI</th>
      <th scope="col">SAYFA SAYISI</th>
      <th scope="col">YAYIN EVİ </th>
      <th scope="col">BASKI NUMARASI</th>
      <th scope="col">EKLENME ZAMANI</th>
    </tr>
  </thead>

<?php 
  
  $kitap_liste=$db ->prepare("SELECT * FROM proje.kitapekle");
  $kitap_liste->execute();
  $say=0;
  while($kitapcek=$kitap_liste->fetch(PDO::FETCH_ASSOC))
  { $say++;?>
      
  
  <tbody>
    <tr>
    
      <th scope="row"><?php echo $say?></th>
      <td><?php echo $kitapcek['kitap_id'] ?></td>
      <td><?php echo $kitapcek['kitap_adi'] ?></td>
      <td><?php echo $kitapcek['kitap_yazar_adi'] ?></td>
      <td><?php echo $kitapcek['kitap_sayfa'] ?></td>
      <td><?php echo $kitapcek['kitap_yayin_evi'] ?></td>
      <td><?php echo $kitapcek['kitap_baski_no'] ?></td>
      <td><?php echo $kitapcek['kitap_zaman'] ?></td>
      
    </tr>
    <?php } ?>
  </tbody>
</table>

</div>
</div>
<p>© 2022 Öztürk Şirin Onyedi eylül üniversitesi Bandırma Meslek Yüksekokulu</p>
</body>


</html>

