$(document).ready(function(){
	$(document).on("click",".more",function(){
		var id=$(this).attr("id");
		$(".more").hide();
		$(".moreloading").show();
		$.ajax({
			type:'POST',
			url:'ajax.php',
			data:'id='+id,
			success:function(html){
				$("#menu_"+id).remove();
				$('#article_container').append(html);
			}
		});
	});
});