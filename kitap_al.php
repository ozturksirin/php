<?php

require_once 'baglan.php';

ob_start();
session_start();
include 'oturum_kontrol.php';


?>

<!-- ----------------------------------------------------- -->

<!DOCTYPE html>
<html lang="TR">
<head>
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<header>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="./index.php">ANASAYFA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="./hakkında.php">HAKKINDA <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="./iletisim.php">İLETİŞİM</a>
      <a class="nav-item nav-link" href="./kayit_ol.php">KAYIT OL</a>
      <a href="./cikis.php"> <button type="submit" class="btn btn-primary" >Çıkış Yap</button></a>
      
      
    </div>
  </div>
</nav>
  

   </header>

</head> 


<meta charset="UTF-8">
    <title>KİTAP AL</title>

    <link rel="stylesheet" type="text/css" href="style.css">    

    
    <form action="kitap_alindi.php" method="GET">
        
        <input type="text" required="" placeholder="Kitabın adı" name="kitapAl_adi"/>
        <input type="text" required="" placeholder="Yazarın adı" name="kitapAl_yazar_adi"/>
        <input type="number" required="" placeholder="Kitabın sayfası" name="kitapAl_sayfa"/>
        <input type="text" required="" placeholder="Yayın evi" name="kitapAl_yayin_evi"/>
        <input type="number" required="" placeholder="Baskı numarası" name="kitapAl_baski_no"/>
        <button type="submit" required="" name="kitapgonderislemi">GÖNDER</button>
    </form>

    
    <h1>ALINAN KİTAPLAR</h1>
    <?php echo "<br>"; ?>


<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">ID</th>
      <th scope="col">ADI</th>
      <th scope="col">YAZAR ADI</th>
      <th scope="col">SAYFA SAYISI</th>
      <th scope="col">YAYIN EVİ</th>
      <th scope="col">BASKI NUMARASI</th>
      <th scope="col">ALINMA ZAMANI</th>
    </tr>

  </thead>
  <!-- -------------------- -->
  <?php 
  
  $kitap_listele=$db ->prepare("SELECT * FROM proje.kitapal");
  $kitap_listele->execute();
  $say=0;
  while($kitapcek=$kitap_listele->fetch(PDO::FETCH_ASSOC))
  { $say++;?>
      
  
  <!-- -------------------- -->
  <tbody>
    <tr>
    
      <th scope="row"><?php echo $say?></th>
      <td><?php echo $kitapcek['kitapAl_id'] ?></td>
      <td><?php echo $kitapcek['kitapAl_adi'] ?></td>
      <td><?php echo $kitapcek['kitapAl_yazar_adi'] ?></td>
      <td><?php echo $kitapcek['kitapAl_sayfa'] ?></td>
      <td><?php echo $kitapcek['kitapAl_yayin_evi'] ?></td>
      <td><?php echo $kitapcek['kitapAl_baski_no'] ?></td>
      <td><?php echo isset($kitapcek['kitapAl_zaman']) ?></td>
      
    </tr>
    <?php } ?>
  </tbody>
 </table>





 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


 <body>
    
 <p>© 2022 Öztürk Şirin Onyedi eylül üniversitesi Bandırma Meslek Yüksekokulu</p>
 </body>
</html>


<?php
  

$uyarıkAdi="kullanıcı adınızı giriniz";
$uyariSifre="sifrenizi giriniz";


if(isset($_POST['btn_giris']))
{

  $kayit_adi=htmlspecialchars( $_POST['kayit_adi']);
  $kayit_sifre= htmlspecialchars( $_POST['kayit_sifre']);
  

  if(!$kayit_adi)
  {

    echo $uyarıkAdi;

  }

  elseif(!$kayit_sifre)
  {
    echo $uyariSifre; 
  }

  else
  {
    $kayitsor=$db->prepare("SELECT * FROM proje.kayit_ol WHERE kayit_adi = ? and kayit_sifre = ?");
    $kayitsor->execute([

      $kayit_adi,$kayit_sifre
    ]);

    $say=$kayitsor->rowCount();

    if($say==1)
    {
      $_SESSION['kayit_adi']=$kayit_adi;
      echo "giriş başarılı";
      header('refresh: index.php.php?durum=basarili');
    }

    else 
    {
      
      echo "hata oluştu";
      header('location: index.php?durum=basarisiz');
    }
  }

}

?>