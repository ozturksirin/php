<?php

include("baglan.php");


?>
<!-- --------------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kayıt Ol</title>

    <link rel="stylesheet" type="text/css" href="style.css"> 

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <header>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="./index.php">ANASAYFA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="./hakkında.html">HAKKINDA <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="./iletisim.html">İLETİŞİM</a>
      <a class="nav-item nav-link" href="./yonetim.php">YÖNETİM</a>
      
      
    </div>
  </div>
</nav>
  

   </header>
   <h1>KAYIT OL</h1>
</head>
<body>




<!-- ------------------------------------------------------- -->
<?php
if(isset($_GET['durum1'])=="hata")
{
    ?>
    <div class="alert alert-danger">    
        <strong>HATA!</strong>HATALI TEKRAR KONTROL EDİNİZ!!
    </div>
 <?php
}
 ?>


 <?php
    if(isset($_GET["durum2"])=="mukerrerkayit")
    { 
        ?>

        <div class="alert alert-danger">
            <strong>HATA!</strong>BU KULLANICI DAHA ÖNCE KAYIT EDİLMİŞ!!
        </div>
        <?PHP
         
    } 
?>
 <!-- ------------------------------------------------------------ -->
<form action="kayit_tamam.php" method="POST">

        <input type="text" required="" placeholder="Kullanıcı adınız" name="kayit_adi"/><br><br>
        <input type="email" required=""  placeholder="E-mail" name="kayit_email"/><br><br>
        <input type="number" required="" placeholder="Telefon numarası" name="kayit_telefon"/><br><br>
        <input type="password" required="" placeholder="Şifre giriniz" name="kayit_sifre"/><br><br>
        <input type="password" required="" placeholder="Tekrar Şifre giriniz" name="kayit_sifre2"/><br><br>
        <button type="submit" name="insertislemi">KAYDET</button>
        
    </form>

    <!-- --------------------------------------------------------------------------------- -->



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    
</body>
</html>