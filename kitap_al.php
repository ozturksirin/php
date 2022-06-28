<?php

require_once 'baglan.php';

ob_start();
session_start();
include 'oturum_kontrol.php';
//include 'yonetim_kontrol.php';


?>

<!-- ----------------------------------------------------- -->

<!DOCTYPE html>
<html lang="TR">
<head>

<style>

  	/* Coded with love by Mutiullah Samim */
		body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
			background: #60a3bc !important;
		}
		.user_card {
			height: 400px;
			width: 350px;
			margin-top: auto;
			margin-bottom: auto;
			background: #f39c12;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;

		}
		.brand_logo_container {
			position: absolute;
			height: 170px;
			width: 170px;
			top: -75px;
			border-radius: 50%;
			background: #60a3bc;
			padding: 10px;
			text-align: center;
		}
		.brand_logo {
			height: 150px;
			width: 150px;
			border-radius: 50%;
			border: 2px solid white;
		}
		.form_container {
			margin-top: 100px;
		}
		.login_btn {
			width: 100%;
			background: #c0392b !important;
			color: white !important;
		}
		.login_btn:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.login_container {
			padding: 0 2rem;
		}
		.input-group-text {
			background: #c0392b !important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}
		.input_user,
		.input_pass:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
			background-color: #c0392b !important;
		}
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <meta charset="UTF-8">
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
      <a href="./cikis.php"> <button type="submit"  >Çıkış Yap</button></a>
      
      
    </div>
  </div>
</nav>
  

   </header>
   <title>KİTAP AL</title>
</head> 



<!-- --------------------------------------------------------------------------------- -->
<body>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    
<head>
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="./kitap_resim/kitap_icon.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="kitap_alindi.php" method="GET">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="kitapAl_adi" class="form-control input_user" required="" placeholder="KİTABIN ADI">
						</div>
            <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="kitapAl_yazar_adi" class="form-control input_user" required="" placeholder="YAZARIN ADI">
						</div>
            <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="number" name="kitapAl_sayfa" class="form-control input_user" required="" placeholder="SAYFA SAYISI">
						</div>
            <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="kitapAl_yayin_evi"class="form-control input_user" required="" placeholder="YAYIN EVİ">
						</div>
            <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="number" name="kitapAl_baski_no" class="form-control input_user" required="" placeholder="BASKI NUMARASI">
						</div>
						
            
						
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="kitapgonderislemi" class="btn login_btn">KİTABI AL</button>
				   </div>
					</form>
				</div>
		
				
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>







    
<!-- 
    <link rel="stylesheet" type="text/css" href="style.css">    

    
    <form action="kitap_alindi.php" method="GET">
        
        <input type="text" required="" placeholder="Kitabın adı" name="kitapAl_adi"/>
        <input type="text" required="" placeholder="Yazarın adı" name="kitapAl_yazar_adi"/>
        <input type="number" required="" placeholder="Kitabın sayfası" name="kitapAl_sayfa"/>
        <input type="text" required="" placeholder="Yayın evi" name="kitapAl_yayin_evi"/>
        <input type="number" required="" placeholder="Baskı numarası" name="kitapAl_baski_no"/>
        <button type="submit" required="" name="kitapgonderislemi">GÖNDER</button>
    </form>

    -->
    <h1>ALINAN KİTAPLAR</h1>
    <?php echo "<br>"; ?>
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
    </tr>

  </thead>
  <!-- --------------------------------------------------------------------------------- -->
  <?php 
  
  $kitap_listele=$db ->prepare("SELECT * FROM proje.kitapal");
  $kitap_listele->execute();
  $say=0;
  while($kitapcek=$kitap_listele->fetch(PDO::FETCH_ASSOC))
  { $say++;?>
      
  
  <!-- --------------------------------------------------------------------------------- -->
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


 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


 
    
 <p>© 2022 Öztürk Şirin Onyedi eylül üniversitesi Bandırma Meslek Yüksekokulu</p>
 </body>
</html>

<!-- --------------------------------------------------------------------------------- -->
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
      header('location: index.php?durum2=basarili');

      
    }

    else 
    {
      
      echo "hata oluştu";
      header('location: index.php?durum=basarisiz');
    }
  }

}

?>