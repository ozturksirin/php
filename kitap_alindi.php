<!DOCTYPE html>
<html lang="TR">
<head>
    <meta charset="UTF-8">

    <title>KİTAP</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
<body>



 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    
</body>
</html>

<!-- --------------------------------- -->

<?php

require_once 'baglan.php';

$onayYes="kitap başarılı bir şekilde kaydedildi en kısa sürede lütfen geri getiriniz!!(İYİ OKUMALAR :))";
$onayNo="işlem tamamlanamadı tekrar deneyiniz ya da bir görevliyle iletişime geçiniz teşekkürler";



if(isset($_GET['kitapgonderislemi'])) 
{


    $kitap_kaydet=$db ->prepare("INSERT INTO proje.kitapal SET 

    kitapAl_adi=:kitapAl_adi,
    kitapAl_yazar_adi=:kitapAl_yazar_adi,
    kitapAl_sayfa=:kitapAl_sayfa,
    kitapAl_yayin_evi=:kitapAl_yayin_evi,
    kitapAl_baski_no=:kitapAl_baski_no
        ");

    $alindi=$kitap_kaydet->execute(array(

        'kitapAl_adi' => $_GET['kitapAl_adi'],
        'kitapAl_yazar_adi' => $_GET['kitapAl_yazar_adi'],
        'kitapAl_sayfa' => $_GET['kitapAl_sayfa'],
        'kitapAl_yayin_evi' => $_GET['kitapAl_yayin_evi'],
        'kitapAl_baski_no' => $_GET['kitapAl_baski_no']
    ));

    if($alindi)
    {
        echo $onayYes;
        
    }

    else
        echo $onayNo;

}

?>

<html>

    <form class="donus" action="index.php">
        <button type="submit" name="anasayfaDon">ANASAYFAYA DÖN</button>
    </form>

</html>