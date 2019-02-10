<?php
  session_start();
  require("ayar.php");
  if(empty($_SESSION["kullanici_adi"])){
      ?><meta http-equiv="refresh" content="0; url=index.php"><?php
  }
  $kullaniciadi=$_SESSION["kullanici_adi"];
  $kullanicibilgi=$db->query("SELECT * FROM kullanicilar where kullanici_adi='$kullaniciadi'");
?>
<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="popup_functions.js"></script>
  <meta charset="utf-8">
  <title>ZO-RAIN</title>
  <link rel="stylesheet" type="text/css" href="popup.css">
  <link rel="stylesheet" type="text/css" href="loader_style.css">
  <link rel="stylesheet" type="text/css" href="slidezo.css"></link>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="style_scripts.js">
  
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=0.9"> 
  <script type="text/javascript" src="jquery-3.3.1.min.js">
  </script>
  <script src="JSPOPUP.js"></script><script src="begen.js"></script>
  <script src="/responsiveivons.js"></script>
  <link rel="stylesheet" type="text/css" href="fonts.css">
</head>

<body onresize="scrollFunction('mid_block')" onload="fade()">
<span style="visibility=hidden" class="begenn" id="begenn"></span>
<div class="yukleme_bolgesi" id="yukleme_bolgesi" style="visibility: visible;">
<?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 17.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<div class="tutucu">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="416.798px" height="235.875px" viewBox="0 0 416.798 235.875" enable-background="new 0 0 416.798 235.875"
	 xml:space="preserve">
<path class="p1" fill="none" stroke="#fff" stroke-miterlimit="10" d="M26.015,31.899l134.74,0.005L84.958,170.576h126.995
	c0,0,30.208,2.156,48.208-22.219h32.625c0,0-17.75,49.25-76,50.75H36.327l79.208-140.5L26.015,31.899z"/>
<polygon class="p2" fill="none" stroke="#fff" stroke-miterlimit="10" points="57.702,45.524 108.202,62.44 35.869,195.357 97.411,62.295 
	"/>

<polygon class="p4" fill="none" stroke="#fff" stroke-miterlimit="10" points="64.536,58.045 84.348,64.607 55.411,118.357 79.848,64.795 
	"/>
<path class="p5" fill="none" stroke="#fff" stroke-miterlimit="10" d="M188.161,163.67h-41.75c0,0-34.875-47.313,0-97.813
	s99.125-37.417,118.125-20.333l10.083,8.75l133.917,20.615l-153.359,0.297c0,0-36.224-38.411-79.391-0.453
	C175.786,74.732,131.702,122.482,188.161,163.67z"/>
</svg>
</div>
</div>

<div id="mail_verify">
  <span class="mail_verify_content">
  <i class="fas fa-envelope"></i> Onay postası "kayit_oldugunuz@gmail.com" adresine gönderilmiştir. Lütfen siz olduğunuzu doğrulayın.
  </span>
</div>

<div class="top_menu" id="top_menu">
    
     <span class="logo"><a href="index.html"><img id="zologo" src="data/images/beyazlogo.png"></a></span>

     <div id="desktop_menu">
     
     <span class="menu_item">Anasayfa <i class="fas fa-home"></i></span>
     <span class="menu_item">Yazılım <i class="fas fa-keyboard"></i>
      <div class="dropdown_menu">
        <span class="dropdown_item"><a href="k1.html">Alt Kategori 1</a></span>
        <span class="dropdown_item"><a href="k2.html">Alt Kategori 2</a></span>
        <span class="dropdown_item"><a href="k3.html">Alt Kategori 3</a></span>
      </div>
    </span>  

     <span class="menu_item">Tasarım <i class="fas fa-paint-brush"></i>
      <div class="dropdown_menu">
        <span class="dropdown_item"><a href="k1.html">Alt Kategori 1</a></span>
        <span class="dropdown_item"><a href="k2.html">Alt Kategori 2</a></span>
        <span class="dropdown_item"><a href="k3.html">Alt Kategori 3</a></span>
      </div>
    </span>
     <span class="menu_item">Hakkımızda <i class="fas fa-info"></i></span>
     <span class="menu_item">İletişim <i class="fas fa-envelope"></i></span>

     </div>


     <label class="mobile_search">
      <input type="checkbox" name="mobile_search_popup_checkbox" id="cb2" onclick="openSearch()">
     <span><i class="fas fa-search"></i></span>
   </label>

      <label class="menulabel">
      <span class="menu">MENU
        <input type="checkbox" class="menubox" id="ch1" onclick="openmenu()">
       </input> 
        <i class="fas fa-bars"></i>
      
     </span>
     </label>

      <div class="top_search">
       <div class="search_label">
       <input type="text" name="search" class="search_box">
       <button class="search_button hoverlay">Ara</button>
       </div>
     </div>

</div>


<div class="mobile_search_popup">
  <span id="triangle"> </span>
        <div id="block">
          
          <dir class="block_search" id="block_search">
            <input type="text" name="search" class="block_search_box">
            <button class="mobile_search_button hoverlay">Ara</button>
          </dir>


        </div>

</div>
  
    <div class="sign_in_up" id="sign_in_up">
      <div id="user_panel">
      <span class="top_item">
        <img src="<?php 
          foreach($kullanicibilgi as $row4){
            $resimlink=$row4["kullanici_resimlinki"];
            $onaydurum=$row4["kullanici_postaonay"];
          }
          echo $resimlink;
        ?>"><?php echo $kullaniciadi;?></span>
      <span class="top_item">Makalelerim<i class="fas fa-pen-alt"></i></span>
      <span class="top_item">Gelen Kutusu
      	<span class="unread_messages"><p id="message_counter">5</p></span>
      </span>
      <span class="top_item">Ayarlar<i class="fas fa-cog"></i></span>
      <span class="top_item" id="log_out"> <a href="logout.php" class="cikis"> Çıkış</a><i class="fas fa-sign-out-alt"></i></span>
      </div>
    </div>

    
  
  <div class="open_menu" id="omenu1">
    <button class="header" onclick="closemenu()">MENU</button>
    <span class="container">
    <ul>
      <li>Anasayfa</li>
      <li>Haberler</li>
      <li>Kategoriler</li>
      <li>Hakkımızda</li>
      <li>İletişim</li>
    </ul>
    </span>
    <div class="sign_in_up_mobile">
      <button class="mobile_sign_in hoverlay">Giriş yap</button>
      <button class="mobile_sign_up hoverlay">Kayıt ol</button>
    </div>
  </div>
  
  
  <div class="mid_block" id="mid_block" onscroll="scrollFunction('mid_block')">

  <div id="article_container">
    <?php      
        
        $makalecek=$db->query("SELECT * FROM makaleler limit 5"); 
        foreach($makalecek as $row){    
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
      <span class="action2" id="<?php echo $id?>"><button><img src="<?php
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
      <span class="action"> <button><img src="data/images/add.png"></button><span class="action_name">Favorilerime Ekle</span></span>      
    </span>
   </div>
          <?php
        } ?>
        <div class="menu" id="menu_<?php echo $id;?>">
          <span class="more" id="<?php echo $id;?>">Daha Fazlasını Göster</span>
          <span class="moreloading" style="display:none;" id="<?php echo $id;?>">Yükleniyor...</span>
        </div>
    </div>


    </div>

  	<div class="trends_block" id="trends_block">
      <span class="trend_header">Editörlerimizin Seçtikleri</span>
      <div class="category_container">
      <span class="trend_category">
	  <span class="title">Başlıkta birden fazla satıra izin vermeli mi vermemeli mi karar veremedim</span>
	  <div id="cerceve">
		<div id="serit">
			<div class="slideimg"><img src="slider_resimler/atatürk.jpg" style="width:100%"/></div>
			<div class="slideimg"><img src="slider_resimler/atatürk1.jpg"/></div>
			<div class="slideimg"><img src="slider_resimler/atatürk2.jpg"/></div>
			<div class="slideimg"><img src="slider_resimler/atatürk3.jpg"/></div>
			<div class="slideimg"><img src="slider_resimler/atatürk4.jpg"/></div>
		</div>
	  </div>
      </span>
      </div>

      <span class="trend_header">En Çok Okunan Tasarım Makaleleri</span>
      <div class="category_container">
      <span class="trend_category">
	  <span class="title">Dinamik Başlık</span>
	   <div id="cerceve">
		<div id="serit">
			<div class="slideimg"><img src="slider_resimler/altay.jpg"/></div>
			<div class="slideimg"><img src="slider_resimler/atak.jpg"/></div>
			<div class="slideimg"><img src="slider_resimler/cirit.jpg"/></div>
			<div class="slideimg"><img src="slider_resimler/bayraktar.jpg"/></div>
			<div class="slideimg"><img src="slider_resimler/yalçın.jpg"/></div>
		</div>
	  </div>
      </span>
      </div>

      <span class="trend_header">En Çok Okunan Yazılım Makaleleri</span>
      
      <div class="category_container">
      <span class="trend_category">
	  <span class="title">Dinamik Başlık</span>
	   <div id="cerceve">
		<div id="serit">
			<div class="slideimg"><img src="slider_resimler/peyamisafa.jpg"/></div>
			<div class="slideimg"><img src="slider_resimler/nfk.jpg"/></div>
			<div class="slideimg"><img src="slider_resimler/nazım.jpg"/></div>
			<div class="slideimg"><img src="slider_resimler/akif.jpg"/></div>
			<div class="slideimg"><img src="slider_resimler/namık.jpg"/></div>
		</div>
	  </div>
      </span>
      </div>
  	</div>


  </div>
  <?php
  
  
  
  if($onaydurum==1){
    ?> <script type="text/javascript">
        document.getElementById("mail_verify").style.visibility="hidden";
      </script><?php
  
}
?>
</body>
</html>