<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <title>FAImaison - CloudFrancois</title>
 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
  </head>
  <body>

<div class="container">
	<section class="source-info">
		<h3>FAImaison</h3>
		<video id="video"controls loop autoplay width="640" data-playlist="http://localhost/mysite/video/myvideo/media/Y&T - Greatest Hits [2020]/01. Y&T - Don't Bring Me Down.mp3"></video>
		<p>
			<button id="video-next-source">Next source</button>
			<button id="video-randomize-source">Random source</button>
		</p>
	</section>
	
	<section class="source-cod">
		<h2>Getting Started</h2>
		<p>
			<strong>Playlist&nbsp;:</strong> <a href="http://live.cloudfrancois.fr/playlist/faimaison">http://live.cloudfrancois.fr/playlist/faimaison</a></li>
		</p>
	</section>
</div>
<script src="m3uStreamPlayer.js"></script>
<script>
m3uStreamPlayer.init({selector: '#video', debug: true});
/**
* Buttons
*/
<!-- var buttonNextSource = document.querySelector('#video-next-source'); -->
<!-- var buttonRandomizeSource = document.querySelector('#video-randomize-source'); -->
<!-- buttonNextSource.addEventListener('click', function(){ m3uStreamPlayer.nextSource(document.querySelector('#video')); }) -->
<!-- buttonRandomizeSource.addEventListener('click', function(){ v.randomizeSource(document.querySelector('#video')); }) -->

</script>
</body>
</html>
