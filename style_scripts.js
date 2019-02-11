  window.addEventListener("load",fade);
function fade()
{
  setTimeout(fadeout, 500);
}
function fadeout()
{
  document.getElementById("yukleme_bolgesi").style.visibility = "hidden";
}

function openmenu()
{
  var menucb = document.getElementById("ch1");
var omenu = document.getElementById("omenu1");
if(menucb.checked == true)
  {
    omenu.style.width = "200px";
  }

else
  {
    omenu.style.width = "0px";
  }
  
}

function closemenu()
{
  var menucb = document.getElementById("ch1");
  var omenu = document.getElementById("omenu1");
  omenu.style.width = "0px";
  menucb.checked = false;
}

function scrollFunction(x) {

  if ($(window).width() >= 901) {
      if (document.getElementById(x).scrollTop >= 80 ) {
         if (document.getElementById("mail_verify") != null) {
      document.getElementById("zologo").style.marginTop = "10px";
    }
    document.getElementById("top_menu").style.height = "70px";
    document.getElementById("zologo").style.height = "50px";
    document.getElementById("sign_in_up").style.height ="0px";
    document.getElementById("sign_in_up").style.opacity = "0";
    document.getElementById("mid_block").style.top = "70px"
    document.getElementById("mid_block").style.height = "calc(100% - 70px)";
    document.getElementById("trends_block").style.top = "90px";
    document.getElementById("desktop_menu").style.fontSize = "14px";
    document.getElementById("desktop_menu").style.left ="160px";
    document.getElementById("article_container").style.top ="130px";

  } else {
    document.getElementById("zologo").style.marginTop = "0px";
    document.getElementById("top_menu").style.height = "150px";
    document.getElementById("zologo").style.height = "100px";
    document.getElementById("sign_in_up").style.height = "35px";
    document.getElementById("sign_in_up").style.opacity = "1";
    document.getElementById("mid_block").style.top = "185px";
    document.getElementById("mid_block").style.height = "calc(100% - 185px)";
    document.getElementById("trends_block").style.top = "190px";
    document.getElementById("desktop_menu").style.fontSize = "28px";
    document.getElementById("desktop_menu").style.left ="260px";
    document.getElementById("article_container").style.top ="30px";
  }

}
else
{
  document.getElementById("top_menu").style.height = "100px";
  document.getElementById("zologo").style.height = "100px";
  document.getElementById("mid_block").style.top = "100px";
  document.getElementById("mid_block").style.height = "calc(100% - 100px)";

}

}

function openSearch()
{
  if(document.getElementById("block").style.height > "0px")
  {
    document.getElementById("block").style.transitionDelay = "0s";
    document.getElementById("triangle").style.transitionDelay = "0.25s";
    document.getElementById("block_search").style.transitionDelay ="0s";


  }
  else
  {
    document.getElementById("block").style.transitionDelay = "0.25s"
    document.getElementById("triangle").style.transitionDelay = "0s";
    document.getElementById("block_search").style.transitionDelay ="0.25s";
  }




  if(document.getElementById("cb2").checked == true )
  {

    document.getElementById("block").style.height = "150px"; // 150 default
    document.getElementById("triangle").style.borderBottom = "10px solid #fff";
         setTimeout(function(){     document.getElementById("block_search").style.display = "block"; }, 500);
    
  }
  else
  {

    document.getElementById("block").style.height = "0";

    document.getElementById("triangle").style.borderBottom = "0 solid #fff";
    document.getElementById("block_search").style.display = "none";

  }
}

function slideshow() {
    if (document.getElementById("picture_radio1").checked == true ) {
      document.getElementById("slide_picture").src = "https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80";
    }
    else if(document.getElementById("picture_radio2").checked == true) {
      document.getElementById("slide_picture").src= "http://www.wearemoviegeeks.com/wp-content/uploads/pcs_236pub2.pub16.123.jpg";
    }
  }

  function bringfront()
  {
    var trend = document.getElementById("trends_block");
    var cont = document.getElementById("article_container");

    trend.style.zIndex = "1";
    cont.style.zIndex = "2";
  }

  function bringback() {
    var trend = document.getElementById("trends_block");
    var cont = document.getElementById("article_container");

    trend.style.zIndex = "2";
    cont.style.zIndex = "1";
  }