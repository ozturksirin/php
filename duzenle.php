<?php
ob_start();
session_start();
require_once 'baglan.php';
include 'yonetim_kontrol.php';



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
      
      
    </div>
  </div>
</nav>
  

   </header>

</head> 


<meta charset="UTF-8">          
    <title>DÜZENLE</title>

    <link rel="stylesheet" type="text/css" href="style.css">    

    <!-- ----------------------------------------------------- -->
<?php
    $kitapduzenle=$db ->prepare("SELECT * FROM proje.kitapal WHERE kitapAl_id=:id");
$kitapduzenle->execute(array(

    'id' => $_GET['kitapAl_id']
));

$duzenle=$kitapduzenle->fetch(PDO::FETCH_ASSOC);
?>

    <form action="yonetim.php" method="POST">
        
        <input type="text"  value="<?php echo $duzenle['kitapAl_adi']  ?>" name="kitapAl_adi"/>
        <input type="text" value="<?php echo $duzenle['kitapAl_yazar_adi']  ?>" name="kitapAl_yazar_adi"/>
        <input type="number" value="<?php echo $duzenle['kitapAl_sayfa']  ?>" name="kitapAl_sayfa"/>
        <input type="text"  value="<?php echo $duzenle['kitapAl_yayin_evi']  ?>" name="kitapAl_yayin_evi"/>
        <input type="number"  value="<?php echo $duzenle['kitapAl_baski_no']  ?>" name="kitapAl_baski_no"/>
        <input type=" hidden" value="<?php echo $duzenle['kitapAl_id']  ?>" name="kitapAl_id"/>
        <button type="submit"  name="duzenlemeislemi">DÜZENLE</button>
    </form>

    
    <h1>ALINAN KİTAPLAR</h1>
    <?php echo "<br>"; ?>
    <!-- ----------------------------------------------------- -->

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
  <!-- ----------------------------------------------------- -->
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
      <td><?php echo $kitapcek['kitapal_zaman'] ?></td>
      
    </tr>
    <?php } ?>
  </tbody>
 </table>
 <!-- --------------------------------------- -->



 





 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


 <body>
    
 </body>
</html>