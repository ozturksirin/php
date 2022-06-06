<?php

include("baglan.php");

?>

<?php
/*
        if($_GET['durum']=="ok"){
            echo "başarılı bir şekilde kayıt oldunuz lütfen giriş yapınız";
        }

        elseif($_GET['durum']=="no"){

            echo "kayıt başarısız tekrar deneyiniz";
        }
*/
?>


<!DOCTYPE html>
<html lang="TR">
<head>
    <meta charset="UTF-8">
    <title>ANASAYFA</title>

    <link rel="stylesheet" type="text/css" href="./style.css"> 

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head> 

<body>
    
   <header>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="./yonetim_giris.php">YÖNETİM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="./hakkında.php">HAKKINDA <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="./iletisim.php">İLETİŞİM</a>
      <a class="nav-item nav-link" href="./kayit_ol.php">KAYIT OL</a>
      
      
    </div>
  </div>
</nav>
  

   </header>


    
   <div class="container">
    <div class="card m-5 p-5">

    <form class="giris " action="kitap_al.php" method="GET">
        KULLANICI ADI:<input type="text" name="giris_kAdi"/><br><br>
        Şifre:<input type="password" name="giris_sifre"><br><br>
        <button type="submit" name="btn_giris">GİRİŞ</button>

    </form>

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
    


</body>


</html>

