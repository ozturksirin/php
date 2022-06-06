<?php

require_once 'baglan.php';



?>

<!-- ----------------------------------------------------- -->

<!DOCTYPE html>
<html lang="TR">
<head>
    <meta charset="UTF-8">
    <title>KİTAP AL</title>

    <link rel="stylesheet" type="text/css" href="style.css">    

    
    <form action="kitap_alindi.php" method="GET">
        
        <input type="text" placeholder="Kitabın adı" name="kitapAl_adi"/>
        <input type="text" placeholder="Yazarın adı" name="kitapAl_yazar_adi"/>
        <input type="number" placeholder="Kitabın sayfası" name="kitapAl_sayfa"/>
        <input type="text" placeholder="Yayın evi" name="kitapAl_yayin_evi"/>
        <input type="number" placeholder="Baskı numarası" name="kitapAl_baski_no"/>
        <button type="submit" name="kitapgonderislemi">GÖNDER</button>
    </form>


</head> 
<body>
    
</body>
</html>