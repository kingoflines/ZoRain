
$(document).ready(function(){
	$(document).on("click",".action2",function(){
		var id=$(this).attr("id");
		
		$.ajax({
			type:'POST',
			url:'begenajax.php',
			data:'id='+id,
			dataType:"json",
			success:function(cevap){
				
			}
		});
	});
});