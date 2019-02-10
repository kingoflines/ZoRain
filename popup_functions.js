	function tabcheck()
	{
	if(document.getElementById('tab1radio').checked)
	{
		
		document.getElementById('current_tab').innerHTML = "Kayıt Ol";
		document.getElementById('tab1').classList.add("active");
		document.getElementById('tab2').classList.remove("active");
		document.getElementById('tab3').classList.remove("active");
		document.getElementById('tab1_content').style.visibility = "visible";
		document.getElementById('tab2_content').style.visibility = "hidden";
		document.getElementById('tab3_content').style.visibility = "hidden";		
		document.getElementById("popup_window").style.height="750px";
		document.getElementById("hatamesaji").style.visibility="visible";
		document.getElementById("yanliskullanici").style.visibility="hidden";
		
	}
	else if(document.getElementById('tab3radio').checked){
		document.getElementById('current_tab').innerHTML = "Giriş Yap";
		document.getElementById('tab3').classList.add("active");
		document.getElementById('tab1').classList.remove("active");
		document.getElementById('tab2').classList.remove("active");
		document.getElementById('tab3_content').style.visibility = "visible";
		document.getElementById('tab2_content').style.visibility = "hidden";
		document.getElementById('tab1_content').style.visibility = "hidden";		
		document.getElementById("popup_window").style.height="420px";		
		document.getElementById("hatamesaji").style.visibility="hidden";
		
		document.getElementById("yanliskullanici").style.visibility="visible";
	}
	}
	function tab_signup()
	{
		document.getElementById('tab1radio').click();

	}	
	function tab_signin()
	{
		document.getElementById('tab3radio').click();

	}
	function cleardivs()
	{
		
		document.getElementById('tab3_content').style.visibility = "hidden";
		document.getElementById('tab2_content').style.visibility = "hidden";
		document.getElementById('tab1_content').style.visibility = "hidden";
		document.getElementById('tab1radio').checked = false;
		document.getElementById('tab2radio').checked = false;
		document.getElementById('tab3radio').checked = false;
		
	}