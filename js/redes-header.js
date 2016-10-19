$(function(){
	$('.red_social').prepend('<button class="volver" style="float: left; width: 50%;">volver</button>');
	$('.volver').click(function(){
		$('#partials').empty();
		$("#partials").load('partials/influencer/ver-redes.html');
	});
	var red = $('.red_social div').attr('class').replace('_data','');
	var id=17;  // I will get it from session vars

	$.ajax({  
	    type: "POST",  
	    url: "controllers/muestra-red.php",  
	    data: "red="+red+"&id="+id,  
		
	    success: function(data){
	  		$('.red_social div').append(data);
		}

	});
});
