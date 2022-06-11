<?php

include ("baglan.php");         

if($_GET['kitapsil']=="ok")
{
    $sil=$db->prepare("DELETE FROM proje.kitapal WHERE KitapAl_id=:id");
    $kontrol=$sil ->execute(array(
        'id'=>$_GET['kitapAl_id']
    ));

    if($kontrol){
        header("location:yonetim.php?durum=ok");
        exit;
    }

    else{
        header("location:yonetim.php?durum=no");
        exit;
    }

}
?>