<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    
    <title>KAYIT OLUNDU</title>


</head>
<body>
    
</body>
</html>

<!-- --------------------------------------------------------------------------------- -->

<?php
require_once 'baglan.php';





if (isset($_POST['insertislemi']))
{
    $kayit_adi= htmlspecialchars($_POST['kayit_adi']);
    $kayit_email= htmlspecialchars($_POST['kayit_email']) ;
    $kayit_telefon= htmlspecialchars($_POST['kayit_telefon']) ;
    $kayit_sifre=htmlspecialchars($_POST['kayit_sifre']);
    $kayit_sifre2=htmlspecialchars($_POST['kayit_sifre2']);
            
    if($kayit_sifre==$kayit_sifre2)
    {
        if(strlen($kayit_sifre)>=6)
        {

            $kayitsor=$db->prepare("SELECT * FROM proje.kayit_ol WHERE kayit_adi=:kAdi");
            $kayitsor->execute(array(
                'kAdi' =>$kayit_adi
            ));

            $say=$kayitsor->rowCount();

            if($say==0)
            {
                $sifre=md5($kayit_sifre);
                //$kullaniciyetki=1;
            

            
                $kaydet=$db ->prepare("INSERT INTO proje.kayit_ol SET 
                kayit_adi=:kayit_adi,
                kayit_email=:kayit_email,
                kayit_telefon=:kayit_telefon,
                kayit_sifre=:kayit_sifre,
                kayit_sifre2=:kayit_sifre2
                ");

                $insert=$kaydet->execute(array(

                'kayit_adi' => $_POST['kayit_adi'],
                'kayit_email' => $_POST['kayit_email'],
                'kayit_telefon' => $_POST['kayit_telefon'],
                'kayit_sifre' => $_POST['kayit_sifre'],
                'kayit_sifre2' => $_POST['kayit_sifre2']
                ));
               

                //echo $insert;
                //exit;

                if($insert)
                {

                    //echo "Kayıt Başarılı lütfen giriş yapınız";

                     Header("Location:kayit_ol.php?durumok=ok");
            
                     exit;
                 }

                else
                {
                    //echo "Kayıt başarısız lütfen kontrol edip tekrar deneyiniz";
            
                    Header("Location:kayit_ol.php?durum=no");
                    exit;
              
                }
            } 
            else
            {
                header("Location:kayit_ol.php?durum2hata=hata");
            
                exit;
        
            }

            
            
        }
        else
        {
            header("Location:kayit_ol.php?durum1=hata");
            exit;
        }
        
        
    }

    else
    {
        header("Location:kayit_ol.php?durumSifre=sifre");
        exit;
    }
    

    

}



     
    
    







/*

if(isset($_POST['insertislemi'])) 
{


    $kaydet=$db ->prepare("INSERT INTO proje.kayit_ol SET 

        kayit_adi=:kayit_adi,
        kayit_email=:kayit_email,
        kayit_telefon=:kayit_telefon,
        kayit_sifre=:kayit_sifre,
        kayit_sifre2=:kayit_sifre2
        ");

    $insert=$kaydet->execute(array(

        'kayit_adi' => $_POST['kayit_adi'],
        'kayit_email' => $_POST['kayit_email'],
        'kayit_telefon' => $_POST['kayit_telefon'],
        'kayit_sifre' => $_POST['kayit_sifre'],
        'kayit_sifre2' => $_POST['kayit_sifre2']
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

*/

?>

