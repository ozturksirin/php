<?php

try
{

    $db=new PDO("mysql:host=localhost;dbAdi=proje;charset=utf8",'root','ozturk16**');

    
}

catch(PDOException $hata)
{
    echo $hata->getMessage();    
}

?>