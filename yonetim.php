<?php
ob_start();
session_start();
include("baglan.php");
include 'yonetim_kontrol.php'


?>
<!-- --------------------------------------------------------------------------------- -->
<?php

if(isset($_POST['yonetim_giris']))
{
  $yonetim_adi= $_POST['yonetim_adi'];

  $yonetim_sifre=md5($_POST['yonetim_sifre']);

  $yonetim_sor=$db ->prepare("SELECT * FROM proje.yonetim WHERE yonetim_adi=:adi AND yonetim_sifre=:sifre");
  $yonetim_sor->execute(array(
    'adi'=>$yonetim_adi,
    'sifre'=>$yonetim_sifre
  ));

  $say=$yonetim_sor->rowCount();

  if($say==1)
  {
    $_SESSION['yonetim_adi']=$yonetim_adi;
    header("Location: yonetim.php?durum=YES");
    exit;

  }

  else
  {

    header("Location: yonetim_giris.php?durum=no");
    exit;
  }
}

?>
<!-- --------------------------------------------------------------------------------- -->


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">

    <title>YÖNETİM</title>

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
      <a class="nav-item nav-link" href="./kayit_ol.php">KAYIT OL</a>
      


      
      
    </div>
  </div>
</nav>
  

   </header>

   <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>

</head>
<!-- --------------------------------------------------------------------------------- -->

<body>



<div id="YanMenu" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">

  &times;</a>

  <H2>HOŞGELDİN</H2>
  <h1><?php echo $_SESSION['yonetim_adi']; ?></h1>
  <img class="resim" src="kitap_resim/panel_image.jpg" width="270" height="215" />
  <a href="yonetim.php">GERİ GELEN KİTAPLAR</a> <!-- sayfaları buraya yazıcam -->
  <a href="kitap_ekle.php">KİTAP EKLE</a>
  <a href="kayitli_kullanicilar.php">KAYITLI KULLANICILAR</a>
  <a href="./cikis.php"> <button type="submit">Çıkış Yap</button></a>
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">

  &#9776; Bilgiler</span>

</div>

<script>
function openNav() {
  document.getElementById("YanMenu").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("YanMenu").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>

<h1>DENETİM</h1>
    <?php echo "<br>"; ?>
<!-- --------------------------------------------------------------------------------- -->
  <?php  
  $uyariMetni="DÜZENLEME YAPTIKTAN SONRA SAYFAYI YENİLEYİNİZ!!";
  echo $uyariMetni;
  ?>
<!-- --------------------------------------------------------------------------------- -->

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
      <th scope="col">DENETİM</th>
      <th scope="col">DENETİM</th>
    </tr>

  </thead>
  <!-- --------------------------------------------------------------------------------- -->

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
      <td><?php echo $kitapcek['kitapal_zaman']?></td>
      <td><a href="duzenle.php?kitapAl_id=<?php echo $kitapcek['kitapAl_id']?>"> <button>DÜZENLE</button></td></a>
      <td><a href="kitap_geldi.php?kitapAl_id=<?php echo $kitapcek['kitapAl_id']?>&kitapsil=ok"> <button>KİTAP GELDİ(KAYDI SİL)</button></td></a>
      
    </tr>
    <?php } ?>
  </tbody>
 </table>

 <?php
 

 if(isset($_POST['duzenlemeislemi'])) 
{

  $kitapAl_id=$_POST['kitapAl_id'];

    $kitap_kaydet=$db ->prepare("UPDATE  proje.kitapal SET 

    kitapAl_adi=:kitapAl_adi,
    kitapAl_yazar_adi=:kitapAl_yazar_adi,
    kitapAl_sayfa=:kitapAl_sayfa,
    kitapAl_yayin_evi=:kitapAl_yayin_evi,
    kitapAl_baski_no=:kitapAl_baski_no
    WHERE kitapAl_id={$_POST['kitapAl_id']}
        ");

    $alindi=$kitap_kaydet->execute(array(

        'kitapAl_adi' => $_POST['kitapAl_adi'],
        'kitapAl_yazar_adi' => $_POST['kitapAl_yazar_adi'],
        'kitapAl_sayfa' => $_POST['kitapAl_sayfa'],
        'kitapAl_yayin_evi' => $_POST['kitapAl_yayin_evi'],
        'kitapAl_baski_no' => $_POST['kitapAl_baski_no']
    ));

    
    

}

?>
<!-- -------------------------------------------- -->
<h1>YENİ EKLENEN KİTAPLAR</h1>

<br>

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
<!-- --------------------------------------------------------------------------------- -->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>