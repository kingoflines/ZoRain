<?php
  session_start();
  ob_start();
  require("ayar.php");
  if(!empty($_SESSION["kullanici_adi"])){
    ?><meta http-equiv="refresh" content="0; url=user.php"><?php
  }
  $kayitkontrol=1;
  function kisalt($kelime, $str)
      {
        if (strlen($kelime) > $str)
        {
          if (function_exists("mb_substr")) $kelime = mb_substr($kelime, 0, $str, "UTF-8").'..';
          else $kelime = substr($kelime, 0, $str).'..';
        }
        return $kelime;
      }
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
  <script src="JSPOPUP.js"></script>  
<script src="https://www.google.com/recaptcha/api.js?hl=tr"></script>
  <script src="/responsiveivons.js"></script>
  <link rel="stylesheet" type="text/css" href="fonts.css">
</head>

<body onresize="scrollFunction('mid_block')" onload="fade()">

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
      <div class="container
      ">

        <a href="#focus"><button onclick="tab_signin()" class="hoverlay" id="sign_inb">Giriş Yap</button></a>

            <a href="#focus"><button class="sign_upb hoverlay" onclick="tab_signup()">Kayıt Ol</button></a>
          </div>
    </div>

    <div id="focus">

  <div class="sign_popup" id="popup_window">
    <span class="top_popup_bar">
    <img id="popup_logo" src="data/images/beyazlogo.png">
    <span id="current_tab"></span>

    <a id="popup_exit" href="#"><button id="popup_exit_button" onclick="cleardivs()" class="hoverlay">x</button></a>
    </span>

    <div class="tabs">
      <span class="tabs-container">

      <label for="tab1radio" class="tab" id="tab1"><p>Kayıt Ol</p>
      <input onchange="tabcheck()" type="radio" name="tab" id="tab1radio"></label>
      
      <label for="tab2radio" class="tab" id="tab2"><p>E-posta Onay</p>
      <input type="radio" name="tab" id="tab2radio"></label>

      <label for="tab3radio" class="tab" id="tab3"><p>Giriş Yap</p>
      <input onchange="tabcheck()" type="radio" name="tab" id="tab3radio"></label>


      </span>
    </div>

    <div class="tab_contents">
    <?php        
    $kayitsekmesiac=0;  
     $hatamesaji="";
     $kayitdurdur=0;
          if(isset($_POST["registerform"])){
            
              
            if (isset($_POST['g-recaptcha-response'])) {
              $captcha = $_POST['g-recaptcha-response'];
          }          
          if (!$captcha) {
            $hatamesaji="Lütfen Bot Olmadığınızı Doğrulayın";       
            $kayitdurdur=1;       
        } 
          $kontrol = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfGP5AUAAAAALckBfxtm6m1wzQjEr6U_qopW58g&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
          if ($kontrol == false) {
            $hatamesaji="Spam Kayıt Uyarısı";
                                  }
        else{
          if(isset($_POST["username"]) && isset($_POST["userpass"]) && isset($_POST["usernick"]) && isset($_POST["useremail"]) && $kayitdurdur==0){
              $adi_soyadi=$_POST["username"];
              $kullanici_adi=$_POST["usernick"];
              $kullanici_sifre=$_POST["userpass"];
              $kullanici_sifre_tekrar=$_POST["userpassagain"];
              $kullanici_eposta=$_POST["useremail"];
              if(empty($adi_soyadi) || empty($kullanici_adi) ||empty($kullanici_sifre)|| empty($kullanici_sifre_tekrar) || empty($kullanici_eposta )){
                $hatamesaji="Lütfen Boş Alan Bırakmayın";
              }
              else if($kullanici_sifre!=$kullanici_sifre_tekrar){
                $hatamesaji="Şifreler Eşleşmiyor";
              }
              else { 
                $kullanicikontrol=$db->query("SELECT * FROM kullanicilar where kullanici_adi='$kullanici_adi'");
                $kullanicisayisi=$kullanicikontrol->rowCount();
                if($kullanicisayisi==0){
                  $kullanici_postaonay="false";             
                  $kullanici_resimlinki="data/images/doga.jpg";
                  $sorgu=$db->prepare("INSERT INTO kullanicilar SET adi_soyadi=?,kullanici_adi=?,kullanici_sifre=?,kullanici_eposta=?,kullanici_postaonay=?,kullanici_resimlinki=?");
                  $ekle=$sorgu->execute([$adi_soyadi,$kullanici_adi,$kullanici_sifre,$kullanici_eposta,$kullanici_postaonay,$kullanici_resimlinki]);
                  if($ekle){     
                    $kayitkontrol="registertrue";   
                    setcookie("register", "registertrue",time() + (15));    
                    ?><meta http-equiv="refresh" content="0; url=index.php#focus"><?php
                  }
                  else{
                    $hata=$sorgu->errorInfo();
                    echo "hata: ".$hata[2];
                  }
                }
                else{
                  $hatamesaji="Kullanıcı Adı Malesef Alınmış";
                }
              }
            }          
        }  
      }
          ?>
      <div id="tab1_content" style="visibility: hidden; overflow: auto;"> 
        <form action="" method="POST" id="register_form" class="register_form">
          <label for="" class="errormessage" style="visibility:hidden;" id="hatamesaji">
            <?php
            if(empty($hatamesaji)){

            }
            else{
            echo $hatamesaji;   
            $kayitsekmesiac=1;         
            }
            ?>
          </label><br><br>
          <label for="" class="register_label">Adınız Soyadınız*</label><br>
          <input type="text" name="username" id="username" class="register_input"><br><br>
          <label for="" class="register_label">Kullanıcı Adınız*</label><br>
          <input type="text" name="usernick" id="usernick" class="register_input"><br><br>
          <label for="" class="register_label">Şifreniz*</label><br>
          <input type="password" name="userpass" id="userpass" class="register_input"><br>        <br>  
          <label for="" class="passinformation">En Az 6 Karakter İçermelidir</label><br>
          <label for="" class="passinformation">En Az 1 Büyük Karakter İçermelidir</label><br>
          <label for="" class="passinformation">En Az 1 Küçük Karakter İçermelidir</label><br>
          <label for="" class="passinformation">En Az 1 Sayı İçermelidir</label><br>
          <label for="" class="register_label" id="responsivelabel">Tekrar Şifreniz*</label><br>
          <input type="password" name="userpassagain" id="userpassagain" class="register_input"><br><br>
          <label for="" class="register_label">E-Posta Adresiniz</label><br>
          <input type="email" name="useremail" id="useremail" class="register_input"><br><br>
          <label for="" class="passinformation">E-Posta Doğrulaması Gerekmektedir. Lütfen Doğru Girin</label><br>
          <input type="checkbox" name="" id="contract" class="contractbox"><b class="contract">Kullanıcı <a href="#">Sözleşmesini</a> Okudum Ve Kabul Ediyorum</b><br><br>
          <div class="g-recaptcha" data-sitekey="6LfGP5AUAAAAAP_Kr1qrLNlk9aViyziD7cp1OGf1"></div><br>
          <input type="submit" name="registerform" value="Kayıt Ol" class="registerbtn">
        </form>
        <br><br>
      </div>
      
      <div id="tab2_content" style="visibility: hidden">
      <label for="" class="registersuccess">Kayıt İşlemi Başarı İle Tamamlandı Lütfen E-Posta Adresinizi Onaylayınız.</label>
        <button class="epostaonaybtn">Doğrulama İşlemi İçin E-Posta Adresime Git</button><br><br>
        <label for="" class="epostainformation">Doğrulama İşlemi Gerçekleştiğinde Otomatik Olarak Giriş Yap Sekmesine Yönlendirilirsiniz...</label>
      </div>

      <div id="tab3_content" style="visibility: hidden;">
        <form action="" method="post" class="sign_form">
        <?php
      if(isset($_POST["signform"]))
      {
        $giris_kullaniciadi =$_POST["signusername"];
        $giris_sifre =$_POST["signuserpass"];
        $query  = $db->query("SELECT * FROM kullanicilar WHERE kullanici_adi='$giris_kullaniciadi' && kullanici_sifre='$giris_sifre'",PDO::FETCH_ASSOC);
        if ( $say = $query -> rowCount() ){
          if( $say > 0 ){
            $_SESSION["kullanici_adi"]=$giris_kullaniciadi;?><meta http-equiv="refresh" content="0; url=user.php"><?php
          }else{            
            
          }
        }
        else{
          ?><label for="" class="yanliskullanici" id="yanliskullanici"><?php echo "Kullanıcı Adı Yada Şifre Hatalı"; ?></label><br><br> <script>
              
              document.getElementById('tab3radio').click();
              document.getElementById("popup_window").style.height="420px";
            </script><?php
        }
      }      
      ?></label>
          <label for="" class="sign_label">Kullanıcı Adınız</label><br>
          <input type="text" name="signusername" id="signusername" class="sign_input"><br><br>
          <label for="" class="sign_label">Şifreniz</label><br>
          <input type="password" name="signuserpass" id="signuserpass" class="sign_input"><br><br>
          <input type="checkbox" name="remember" id="remember"> <span class="rememberme"> Beni Hatırla</span> <a href="#" class="forgotpass">Şifremi Unuttum</a><br><br>
          <input type="submit" name="signform" value="Giriş Yap" class="signbtn">
        </form>
      </div>
    </div>
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
      <span class="action"><button><img src="data/images/like.png"></button><span class="action_name">
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
        if($kayitsekmesiac==1){
      ?><script type="text/javascript">
        
      tab_signup();
      document.getElementById("hatamesaji").style.visibility="visible";      
      document.getElementById("register_form").style.marginTop="25px";                  
            </script><?php
      }
      ?>
  <?php 
    $usern=$_SESSION["kayitkontrol"];
            if(isset($_COOKIE["register"])){
              ?>
                <script type="text/javascript">  
                
		document.getElementById('tab2radio').click();
                  document.getElementById('current_tab').innerHTML = "E-posta Onayla";
		document.getElementById('tab2').classList.add("active");
		document.getElementById('tab1').classList.remove("active");
		document.getElementById('tab3').classList.remove("active");
		document.getElementById('tab2_content').style.visibility = "visible";
		document.getElementById('tab1_content').style.visibility = "hidden";
		document.getElementById('tab3_content').style.visibility = "hidden";		
	  document.getElementById("popup_window").style.height="300px";              
                </script>
              <?php
              }                 
            ?>
</body>
</html>