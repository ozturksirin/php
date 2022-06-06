<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    
    <title>KAYIT OLUNDU</title>


</head>
<body>
    
</body>
</html>

<!-- -------------------------------------- -->

<?php
require_once 'baglan.php';

if(isset($_POST['insertislemi'])) 
{


    $kaydet=$db ->prepare("INSERT INTO proje.kayit_ol SET 

        kayit_adi=:kayit_adi,
        kayit_email=:kayit_email,
        kayit_telefon=:kayit_telefon,
        kayit_sifre=:kayit_sifre
        ");

    $insert=$kaydet->execute(array(

        'kayit_adi' => $_POST['kayit_adi'],
        'kayit_email' => $_POST['kayit_email'],
        'kayit_telefon' => $_POST['kayit_telefon'],
        'kayit_sifre' => $_POST['kayit_sifre']
    ));

    //echo $insert;
    //exit;

    if($insert){

        //echo "Kayıt Başarılı lütfen giriş yapınız";

        Header("Location:index.php?durum=ok");
        exit;

    }

    else{
        //echo "Kayıt başarısız lütfen kontrol edip tekrar deneyiniz";
        
        Header("Location:index.php?durum=no");
        exit;
    }
}



?>

