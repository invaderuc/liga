$('#btnGetLigas').click(function(){	
	$.post(base_url+"cliga/getliga",
		function(data){
			alert(data)
		});
});