<?php

include("baglan.php");


?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kayıt Ol</title>

    <link rel="stylesheet" type="text/css" href="style.css"> 

    <h1>KAYIT OL</h1>

    <form action="kayit_tamam.php" method="POST">

        <input type="text" required="" placeholder="Kullanıcı adınız" name="kayit_adi"/><br><br>
        <input type="email" required=""  placeholder="E-mail" name="kayit_email"/><br><br>
        <input type="number" required="" placeholder="Telefon numarası" name="kayit_telefon"/><br><br>
        <input type="password" required="" placeholder="Şifre giriniz" name="kayit_sifre"/><br><br>
        <button type="submit" name="insertislemi">KAYDET</button>
        
    </form>

</head>
<body>
    
</body>
</html>