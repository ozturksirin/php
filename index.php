<?php

include("baglan.php");


?>

<!-- ----------------------------------------------------- -->
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
    
   <div class="container">
    <div class="card m-5 p-5">
<!-- giriş yapma kısmı -->
    <form class="giris " action="kitap_al.php" method="POST">
        KULLANICI ADI:<br><input required="" type="text" name="kayit_adi"/><br><br>
        Şifre:<br><input required= "" type="password"  name="kayit_sifre"><br><br>
        <button type="submit" class="btn btn-primary" name="btn_giris">GİRİŞ</button>
    </form>
    <br>
    <a href="./cikis.php"> <button type="submit" class="btn btn-primary">Çıkış Yap</button></a>


    


    



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

