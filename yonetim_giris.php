<?php

include("baglan.php");

if(isset($_GET['durum'])=="no")
{
  ?>
      <div class="alert alert-danger">    
        <strong>HATA! </strong>GİRİŞ BAŞARISIZ GİRİŞ BİLGİLERİNİZİ TEKRAR KONTROL EDİNİZ!!
      </div>
    <?php
  }
  ?>


<!-- --------------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html lang="TR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YÖNETİM GİRİŞ</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body>
<!-- ---------------------------- -->
<form action="yonetim.php" method="POST" >
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase"> YÖNETİM PANELİ GİRİŞ</h2>
              <p class="text-white-50 mb-5">LÜTFEN KULLANICI ADINIZ VE ŞİFRENİZİ GİRİNİZ</p>

              <div class="form-outline form-white mb-4"> <!-- bu alan doldurması zorunludur şeklinde ayarlanıcak -->
                <input type="text" name= "yonetim_adi" required=""  class="form-control form-control-lg" />
                <label class="form-label">KULLANICI ADI</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="yonetim_sifre" required=""  id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">ŞİFRE</label>
              </div>
                
                    <button class="btn btn-outline-light btn-lg px-5" name="yonetim_giris" type="submit">GİRİŞ</button>
                </form>
              

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