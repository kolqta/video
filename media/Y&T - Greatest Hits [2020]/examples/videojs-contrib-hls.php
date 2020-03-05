<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Display Webcam Stream</title>
<?php
if($_SERVER['SERVER_NAME'] == 'localhost'):
?>
	<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" href="../node_modules/video.js/dist/video-js.min.css">
	<link rel="stylesheet" href="../node_modules/@videojs/http-streaming/dist/video-js.min.css">

	<script src="../node_modules/video.js/dist/video.min.js"></script>
	<script src="../node_modules/videojs-contrib-hls/dist/videojs-contrib-hls.min.js"></script>
<?php
else:
?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://vjs.zencdn.net/7.6.6/video-js.css" rel="stylesheet" />

	<script src="https://unpkg.com/video.js/dist/video.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/5.15.0/videojs-contrib-hls.min.js"></script>
<?php
endif;
?>
	<script src="https://unpkg.com/videojs-flash/dist/videojs-flash.js"></script>
    
	<script>window.HELP_IMPROVE_VIDEOJS = false;</script>

<style>
#example-video, .vjs-text-track-settings, .vjs-control-bar {
	z-index: 9999;
	bachgroung-color: red;
}
.source-cod {
	z-index: -9999;
}
</style>

</head> 
<body>

<div class="container">
	<div class="row">
		<section class="source-info">
			<video id=example-video width=600 height=300 class="video-js vjs-default-skin" controls>
				<source
					src="https://d2zihajmogu5jn.cloudfront.net/bipbop-advanced/bipbop_16x9_variant.m3u8"
					type="application/x-mpegURL">
			</video>
		</section>
	</div>
	<div class="clearfix visible-xs"></div>
	<div class="row">
		<section class="source-cod">
			<h2>Getting Started</h2>
			<p>
				Get a copy of <a href="https://github.com/videojs/videojs-contrib-hls">videojs-contrib-hls</a> and include it in your page along with video.js:
			</p>
<pre>
&lt;video-js id=example-video width=960 height=540 class="vjs-default-skin" controls&gt;
  &lt;source
    src="https://example.com/index.m3u8"
    type="application/x-mpegURL"&gt;
&lt;/video-js&gt;

&lt;script src="https://unpkg.com/video.js/dist/video.min.js"&gt;&lt;/script&gt;
&lt;script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/5.15.0/videojs-contrib-hls.min.js"&gt;&lt;/script&gt;
&lt;script&gt;
var player = videojs('example-video');
player.play();
&lt;/script&gt;
</pre>
		</section>
	</div>
	<p><a href="../">back</a> </p>
</div>

<script>
var player = videojs('example-video');
player.play();
</script>

</body>
</html>