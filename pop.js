
		var sifrem=document.getElementById("Psw");
		var sifremOnay=document.getElementById("Pswcon");
		var birsayi=document.getElementById("madde1");
		var buyukharf=document.getElementById("madde2");
		var kucukharf=document.getElementById("madde3");
		var uzunluk=document.getElementById("madde4");
		
		sifrem.onfocus =function sartlar(){
		document.getElementById("Sartlar").style.visibility="visible";
		document.getElementById("Fieldset").style.height="467px";
		document.getElementById("kayitol").style.position="absolute";
		document.getElementById("kayitol").style.top="379px";
		
		}
		sifrem.onblur=function sartlarsil(){
		document.getElementById("Sartlar").style.visibility="hidden";
		document.getElementById("Fieldset").style.height="387px";
		document.getElementById("kayitol").style.position="absolute";
		document.getElementById("kayitol").style.top="302px";
		
		}
		
		function mouseon(){
		document.getElementById("kayitol").style.backgroundColor="red";
		}
		function mouseoff(){
		document.getElementById("kayitol").style.backgroundColor="rgb(49, 140, 0)";
		}
		sifrem.onkeyup=function sifreozellik(){
		var kkucukHarf=/[a-z]/g;
		if( sifrem.value.match(kkucukHarf)){
		document.getElementById("madde3").className="dogru";
		}
		else{
		document.getElementById("madde3").className="yanlis";

		}
		var bbuyukHarf=/[A-Z]/g;
		if(sifrem.value.match(bbuyukHarf)){
		document.getElementById("madde2").className="dogru";

		}
		else{
		document.getElementById("madde2").className="yanlis";

		}
		var EnazBirSayi=/[0-9]/g;
		if(sifrem.value.match(EnazBirSayi)){
		document.getElementById("madde1").className="dogru";

		}else{
		document.getElementById("madde1").className="yanlis";
		
		}
		
		var Uzunluk=sifrem.value.length
		if(Uzunluk>=6){
			document.getElementById("madde4").className="dogru";

		
		}else{
			document.getElementById("madde4").className="yanlis";
		}
	    }
		function sifreonay(){
		if(document.form.Sifrem.value==document.form.SifremOnay.value)
		{}
		else{
		alert("Åifreleriniz eÅŸleÅŸmemektedir!");
		}
		
		}