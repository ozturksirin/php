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
  

  
<body>




<!-- ------------------------------------------------------- -->
<?php
if(isset($_GET['durum1hata'])=="hata")
{
    ?>
    <div class="alert alert-danger">    
        <strong>HATA!</strong>HATALI TEKRAR KONTROL EDİNİZ!!
    </div>
 <?php
}
 ?>


 <?php
    if(isset($_GET["durum2hata"])=="mukerrerkayit")
    { 
        ?>

        <div class="alert alert-danger">
            <strong>HATA!</strong>BU KULLANICI DAHA ÖNCE KAYIT EDİLMİŞ!!
        </div>
        <?PHP
         
    } 
?>

<?php
  if(isset($_GET['durumok'])=="ok")
  {
    ?>
      <div class="alert alert-success" role="alert">    
        <strong>BAŞARILI </strong>KAYIT BAŞARILI LÜTFEN GİRİŞ YAPINIZ!
      </div>
    <?php
  }
  ?>

<?php
  if(isset($_GET['durumSifre'])=="sifre")
  {
    ?>
      <div class="alert alert-danger" role="alert">    
        <strong>HATA</strong>ŞİFRELER FARKLI!
      </div>
    <?php
  }
  ?>

 <!-- ------------------------------------------------------------ 
<form action="kayit_tamam.php" method="POST">

        <input type="text" required="" placeholder="Kullanıcı adınız" name="kayit_adi"/><br><br>
        <input type="email" required=""  placeholder="E-mail" name="kayit_email"/><br><br>
        <input type="number" required="" placeholder="Telefon numarası" name="kayit_telefon"/><br><br>
        <input type="password" required="" placeholder="Şifre giriniz" name="kayit_sifre"/><br><br>
        <input type="password" required="" placeholder="Tekrar Şifre giriniz" name="kayit_sifre2"/><br><br>
        <button type="submit" name="insertislemi">KAYDET</button>
        
    </form>
    -->

<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">KAYIT OL</p>

                <form class="mx-1 mx-md-4" action="kayit_tamam.php" method="POST" >

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" required="" id="form3Example1c" class="form-control" name="kayit_adi" />
                      <label class="form-label" for="form3Example1c">KULLANICI ADI </label>
                    </div>
                  </div>
                  

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" required="" id="form3Example3c" class="form-control" name="kayit_email"/>
                      <label class="form-label" for="form3Example3c">Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="number" required="" id="form3Example3c" class="form-control" name="kayit_telefon"/>
                      <label class="form-label" for="form3Example3c">TELEFON NUMARASI</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" required="" id="form3Example4c" class="form-control" name="kayit_sifre"/>
                      <label class="form-label" for="form3Example4c">ŞİFRE</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" required="" id="form3Example4cd" class="form-control" name="kayit_sifre2"/>
                      <label class="form-label" for="form3Example4cd">ŞİFRE TEKRAR</label>
                    </div>
                  </div>

                  

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg" name="insertislemi">KAYIT OL</button>
                    
                  </div>

                </form>
                <p>© 2022 Öztürk Şirin Onyedi eylül üniversitesi Bandırma Meslek Yüksekokulu</p>
              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
              
                <img src="kitap_resim/kitap2.jpg"
                  class="img-fluid" alt="Sample image">
                  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- --------------------------------------------------------------------------------- -->
    



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    
</body>
</html>