$(function(){
	$("#agregar_facebook").click(function(event) {
        $('.menu_inicio').hide();
        $("#partials").load('partials/influencer/agregar-facebook.html');
        $("#contenido").show();
    });
})