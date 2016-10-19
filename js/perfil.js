$(function(){
	'use strict'
	var id = 17;
	$.ajax({  
	    type: "POST",  
	    url: "controllers/muestra-perfil.php",  
	    data: "id="+id,  
		
	    success: function(data){
	  		$('.perfil .datos').append(data);
		}

	});

	$('.editar').click(function(){
		$('.editar').hide();
		$('.datos input').prop("disabled", false);
		$('.datos textarea').prop("disabled", false);
		$('.guardar').show();
	});

	$('.guardar').click(function(){
		var id = 17;
		var nombre = $('.datos #nombre').val();
		var region = $('.datos #region').val();
		var comuna = $('.datos #comuna').val();
		var region = $('.datos #region').val();
		var descripcion = $('.datos #descripcion').val();
		$.ajax({  
		    type: "POST",  
		    url: "controllers/actualiza-perfil.php",  
		    data: "id="+id+"&nombre="+nombre+"&comuna="+comuna+"&descripcion="+descripcion+"&region="+region,  
			
		    success: function(data){
		    	if(data == 'exito'){
		    		$('.guardar').hide();
					$('.datos input').prop("disabled", true);
					$('.datos textarea').prop("disabled", true);
					$('.editar').show();
		    	}else{
		    		$('.perfil').append('<div><p style="color:red">error al actualiza perfil</p></div>');
		    	}
			}
		}); 
		

	});

	$('.ver-redes').click(function(){
		 $('#partials').empty();
         $("#partials").load('partials/influencer/ver-redes.html');
	});


})
