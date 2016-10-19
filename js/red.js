$(function(){
	'use strict'
	$('.red #facebook').click(function(){
		$('#partials').empty();
        $("#partials").load('partials/influencer/facebook.html');
	});
	$('.red #instagram').click(function(){
		$('#partials').empty();
        $("#partials").load('partials/influencer/instagram.html');
	});
	$('.red #pinterest').click(function(){
		$('#partials').empty();
        $("#partials").load('partials/influencer/pinterest.html');
	});
	$('.red #twitter').click(function(){
		$('#partials').empty();
        $("#partials").load('partials/influencer/twitter.html');
	});
	$('.red #youtube').click(function(){
		$('#partials').empty();
        $("#partials").load('partials/influencer/youtube.html');
	});

	
})
