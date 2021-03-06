<?php
session_start();
ob_start();
include('baglan.php');
include 'yonetim_kontrol.php';


$kullanici_sorgu=$db->prepare("SELECT * FROM proje.kayit_ol");
$kullanici_sorgu->execute();

?>
<!-- --------------------------------------------------------------------------------- -->

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAYITLI KULLANICILAR</title>
<!-- ------------------------------------------------------------------------------- -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- ------------------------------------------------------------------------------- -->

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
<!-- --------------------------------------------------------------------------------- -->
    
</head>
<body>
    
<div id="YanMenu" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">

  &times;</a>

  <H2>HOŞGELDİN</H2>
  <h1><?php echo $_SESSION['yonetim_adi']; ?></h1>
  <img class="resim" src="kitap_resim/panel_image.jpg" width="270" height="215" />
  <a href="yonetim.php">GERİ GELEN KİTAPLAR</a> <!-- sayfaları buraya yazıcam -->
  <a href="#">KİTAP EKLE</a>
  <a href="#">YENİ ADMİN KAYIT</a>
  <a href="kayitli_kullanicilar.php">KAYITLI KULLANICILAR</a>
  <a href="./cikis.php"> <button type="submit" class="btn btn-primary" >Çıkış Yap</button></a>
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
<!-- --------------------------------------------- -->
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">ADI</th>
      <th scope="col">E-MAİL</th>
      <th scope="col">TELEFON NUMARASI</th>
      <th scope="col">KAYIT ZAMANI</th>
    </tr>
  </thead>

  <tbody>
  <!-- --------------------------------------------------------------------------------- -->
  <?php 
  while($kullanicicek=$kullanici_sorgu->fetch(PDO::FETCH_ASSOC)){ ?>


    <tr>
      <th scope="row"><?php echo $kullanicicek['id'] ?> </th>
      <td><?php echo $kullanicicek['kayit_adi'] ?></td>
      <td><?php echo $kullanicicek['kayit_email'] ?></td>
      <td><?php echo $kullanicicek['kayit_telefon'] ?></td>
      <td><?php echo $kullanicicek['kayit_ol_zaman'] ?></td>
    </tr>

  <?php } ?>
  
  <!-- --------------------------------------------------------------------------------- -->
    
 
    
  </tbody>
</table>
    
    
<!-- ------------------------------------------------------------------------------- -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>