<?php
session_start();
$sayi;
    require("ayar.php");
    
        $kullaniciadi=$_SESSION["kullanici_adi"];
        $kullanici_id=$db->query("SELECT * FROM kullanicilar where kullanici_adi='$kullaniciadi'");
        foreach($kullanici_id as $row){        
        $kullanici=$row["kullanici_id"];
    }        
    if($_POST){	
        $likepost = $_POST["id"];
        $query=$db->query("SELECT * FROM begeni where begenen_id='$kullanici' && begenilen_id='$likepost'");
        $sayi=$query->rowCount();
        if($sayi==0){
            
        $v = $db->prepare("INSERT INTO begeni SET begenen_id=?, begenilen_id=? ");		
        $x = $v->execute(array($kullanici, $likepost));
        $begeniartir=$db->query("UPDATE makaleler set begeni_sayisi=begeni_sayisi+1 where makale_id='$likepost'");
        
        }
        else{
            $v = $db->prepare("DELETE  FROM begeni where begenen_id=? && begenilen_id=?");	
            $x = $v->execute(array($kullanici, $likepost));
            $begeniartir=$db->query("UPDATE makaleler set begeni_sayisi=begeni_sayisi-1 where makale_id='$likepost'");
        }        
    }
    else{
        
    }
    echo json_encode($sayi);
?>