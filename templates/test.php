<?php
/**
 * Template Name: Video test mobile
 * Template Post Type: post, page
 */
get_header();
?>


<button id="fullscreen">play fullscreen</button><br>
<div id="player"></div>



<script>
var player, iframe;
var $ = document.querySelector.bind(document);
	
	 var tag = document.createElement('script');

  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// init player
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
      width: '100%',
      videoId: 'FI0Zp6D47Ws',
      playerVars: { 'autoplay': 0, 'playsinline': 1 },
      events: {
        'onReady': onPlayerReady
      }
    });
  }

// when ready, wait for clicks
function onPlayerReady(event) {
  var player = event.target;
  iframe = $('#player');
  setupListener(); 
}

function setupListener (){
$('button').addEventListener('click', playFullscreen);
}

function playFullscreen (){
  player.playVideo();
  
  var requestFullScreen = iframe.requestFullScreen || iframe.mozRequestFullScreen || iframe.webkitRequestFullScreen;
  if (requestFullScreen) {
    requestFullScreen.bind(iframe)();
  }
}
	
// 	setInterval(function(){ 
// 		$("#fullscreen").click()	
// 	}, 100);

	

	
</script>


<?php get_footer(); ?>