<?php
ob_start();
session_start();
include 'baglan.php';
include 'yonetim_kontrol.php';

if(isset($_GET['kitapekle'])) 
{


    $kitap_ekle=$db ->prepare("INSERT INTO proje.kitapEkle SET 

    kitap_adi=:kitap_adi,
    kitap_yazar_adi=:kitap_yazar_adi,
    kitap_sayfa=:kitap_sayfa,
    kitap_yayin_evi=:kitap_yayin_evi,
    kitap_baski_no=:kitap_baski_no,
    kitap_zaman=:kitap_zaman
        ");

    $ekle=$kitap_ekle->execute(array(

        'kitap_adi' => $_GET['kitap_adi'],
        'kitap_yazar_adi' => $_GET['kitap_yazar_adi'],
        'kitap_sayfa' => $_GET['kitap_sayfa'],
        'kitap_yayin_evi' => $_GET['kitap_yayin_evi'],
        'kitap_baski_no' => $_GET['kitap_baski_no'],
        'kitap_zaman' => isset($_GET['kitap_zaman'])
    ));

    if($ekle)
    {
        echo '<div class="alert alert-success" role="alert">
           Kayıt başarılı bir şekilde eklendi
         </div>';
        
    }

    else
    { 
        echo '<div class="alert alert-danger" role="alert">
        Kayıt başarılı bir şekilde eklendi
      </div>';;
    }

}

?>
<!-- -------------------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html lang="TR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KİTAP EKLE</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <header>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="./yonetim.php">YÖNETİM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="./hakkında.html">HAKKINDA <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="./iletisim.html">İLETİŞİM</a>  
      
    </div>
  </div>
</nav>
  

   </header>

</head>


<body>


<form action="kitap_ekle.php" method="GET">
  <div class="form-group">
    <label for="formGroupExampleInput">KİTAP ADI</label>
    <input type="text" class="form-control"required="" id="formGroupExampleInput"name="kitap_adi">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">YAZAR ADI</label>
    <input type="text" class="form-control"required="" id="formGroupExampleInput2"name="kitap_yazar_adi">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">SAYFA SAYISI</label>
    <input type="text" class="form-control"required="" id="formGroupExampleInput2"name="kitap_sayfa">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">YAYIN EVİ</label>
    <input type="text" class="form-control"required="" id="formGroupExampleInput2"name="kitap_yayin_evi">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">BASKI NUMARASI</label>
    <input type="text" class="form-control"required="" id="formGroupExampleInput2"name="kitap_baski_no">
  </div>

  <button type="submit"  name="kitapekle">KİTAP EKLE</button>
  
</form>


 <!-- ----------------------------------------------------- -->

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
<!-- ------------------------------------------------------------------------ -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>