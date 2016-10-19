$(function() {
    $("#perfil").click(function(event) {
        $('.menu_inicio').hide();
        $("#partials").load('partials/influencer/perfil.html');
        $("#contenido").show();
    });
    $("#red").click(function(event) {
        $('.menu_inicio').hide();
        $("#partials").load('partials/influencer/red.html');
        $("#contenido").show();
    });
    $("#agregar").click(function(event) {
        $('.menu_inicio').hide();
        $("#partials").load('partials/influencer/agregar.html');
        $("#contenido").show();
    });
    $("#cerrar").click(function(event){
        $("#contenido").hide();
        $("#partials").empty();
        $('.menu_inicio').show();

    });
    $('.volver').click(function(){
        $('#partials').empty();
        $("#partials").load('partials/influencer/red.html');
    });
});