<!DOCTYPE html>
<html lang="TR">
<head>
    <meta charset="UTF-8">

    <title>KİTAP</title>
    
</head>
<body>
    
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