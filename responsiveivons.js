

  var x = window.matchMedia("(max-width: 1350px)");
    if (x.matches) { // If media query matches
        function user1hover(){
            document.getElementById("username1").style.visibility="visible";
            document.getElementById("hitpoint1").style.marginLeft="225px";      
            document.getElementById("likepoint1").style.marginLeft="265px";
            document.getElementById("time1").style.marginLeft="305px";
            document.getElementById("favorite1").style.marginLeft="345px";
        }        
        function user1default(){
            document.getElementById("username1").style.visibility="hidden";
            document.getElementById("hitpoint1").style.marginLeft="150px";      
            document.getElementById("likepoint1").style.marginLeft="185px";
            document.getElementById("time1").style.marginLeft="215px";
            document.getElementById("favorite1").style.marginLeft="245px";
        }
        function hitpoint1hover(){
            document.getElementById("hitpoint1").style.visibility="visible";
            document.getElementById("likepoint1").style.marginLeft="315px";
            document.getElementById("time1").style.marginLeft="355px";
            document.getElementById("favorite1").style.marginLeft="395px";
        }
        function hitpoint1default(){
            document.getElementById("hitpoint1").style.visibility="hidden";     
            document.getElementById("likepoint1").style.marginLeft="185px";
            document.getElementById("time1").style.marginLeft="215px";
            document.getElementById("favorite1").style.marginLeft="245px";
        }
        function likepoint1hover(){
            document.getElementById("likepoint1").style.visibility="visible";
            document.getElementById("time1").style.marginLeft="295px";
            document.getElementById("favorite1").style.marginLeft="335px";
        }
        function likepoint1default(){
            document.getElementById("likepoint1").style.visibility="hidden";   
            document.getElementById("time1").style.marginLeft="215px";
            document.getElementById("favorite1").style.marginLeft="245px";
        }
        function time1hover(){
            document.getElementById("time1").style.visibility="visible";
            document.getElementById("favorite1").style.marginLeft="315px";
        }
        function time1default(){
            document.getElementById("time1").style.visibility="hidden"; 
            document.getElementById("favorite1").style.marginLeft="245px";
        }
        function favorite1hover(){
            document.getElementById("favorite1").style.visibility="visible";
        }
        function favorite1default(){
            document.getElementById("favorite1").style.visibility="hidden"; }
        
    }
    else 
    {      
    }