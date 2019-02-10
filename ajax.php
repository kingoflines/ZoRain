<?php
session_start();
$kullaniciadi=$_SESSION["kullanici_adi"];
  require("ayar.php");
  if(!empty($_POST["id"])){
    $id=$_POST["id"];
    $query=$db->query("SELECT count(*) as say FROM makaleler where makale_id>$id ");
    $row=$query->fetch();
    $toplam=$row["say"];
    $query=$db->query("SELECT * FROM makaleler where makale_id>$id limit 5");
    foreach($query as $row){
      $id=$row["makale_id"];
      $kullanicisi_id=$row["kullanici_id"];
          $kullanicicek=$db->query("SELECT * FROM kullanicilar where kullanici_id='$kullanicisi_id'",PDO::FETCH_ASSOC);
          foreach($kullanicicek as $row2){
            $kullaniciad=$row2["kullanici_adi"];
          }
      ?>
        <div class="article_block" id="<?php echo $row["makale_id"];?>">
    <span class="article_image"><img src="<?php echo $row["resim_linki"];?>" class="resim"></span>
    <span class="article_content">
    <span class="article_header"><?php echo $row["makale_baslik"];?></span>
          <?php echo $row["makale_icerik"];?>
    </span>
    <span class="actions">
      <span class="action"><img src="data/images/user.png"><span class="action_name"><?php echo $kullaniciad;?></span></span>
      <span class="action"><img src="data/images/view2.png"><span class="action_name"><?php
        $hitpoint=$row["goruntulenme_sayisi"];
          if($hitpoint>1000 && $hitpoint <1000000){
            $hitpoint=floor($hitpoint/1000);
            echo $hitpoint." B";
          }
          else if($hitpoint>1000000){
            $hitpoint=floor($hitpoint/1000000);
            echo $hitpoint." M";
          }
          else {
            echo $hitpoint;
          }
      ?> kez Görüntelendi</span></span>
      <span class="action2" id="<?php echo $id?>"><button><img id="resim" src="<?php
        $kulanici_idal=$db->query("SELECT * FROM kullanicilar where kullanici_adi='$kullaniciadi'");
        foreach($kulanici_idal as $row3){
            $kullaniciid=$row3["kullanici_id"];
        }
        $begenkontrol=$db->query("SELECT * FROM begeni where begenen_id='$kullaniciid' && begenilen_id='$id'");
        $begenivarmi=$begenkontrol->rowCount();
        if($begenivarmi==0){
          echo "data/images/like.png";
        }
        else{
          echo "data/images/like2.png";
        }      
      ?>"></button><span class="action_name">
          <?php
            $likepoint=$row["begeni_sayisi"];
            if($likepoint>1000 && $likepoint<1000000){
              $likepoint=floor($likepoint/1000);
              echo $likepoint." B";
            }
            else if($likepoint>1000000){
              $likepoint=floor($likepoint/1000000);
              echo $likepoint." M";
            }
            else{
              echo $likepoint;
            }          
          ?>      
      beğeni</span></span>
      <span class="action"><img src="data/images/clock.png"><span class="action_name"><?php echo $row["paylasim_zamani"];?></span></span>
      <span class="action"><button><img src="data/images/add.png"></button><span class="action_name">Favorilerime Ekle</span></span>      
    </span>
   </div>
      
      
      <?php
    }
  }
?>
<?php 
  $limit=5;
  if($toplam>$limit){
    
?>
<div class="menu" id="menu_<?php echo $id;?>">
<span class="more" id="<?php echo $id;?>">Daha Fazlasını Göster</span>
<span class="moreloading" style="display:none;" id="<?php echo $id;?>">Yükleniyor...</span>
</div><?php }
  else{
    
    ?><span class="finish" >Daha Fazla Gösterilecek Makale Yok</span><?php
  }

?>