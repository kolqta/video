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

	<script src="../node_modules/video.js/dist/video.min.js"></script>
	<script src="../node_modules/videojs-contrib-hls/dist/videojs-contrib-hls.min.js"></script>
<?php
else:
?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://vjs.zencdn.net/7.6.6/video-js.css" rel="stylesheet" />

	<script src="https://unpkg.com/video.js/dist/video.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@videojs/http-streaming@1.12.2/dist/videojs-http-streaming.cjs.min.js"></script>
<?php
endif;
?>

	<script>window.HELP_IMPROVE_VIDEOJS = false;</script>

<style>
</style>

</head> 
<body>

<div class="container">
	<section class="source-info">
		<video-js id=vid1 width=600 height=300 class="vjs-default-skin" controls>
			<source
				src="https://d2zihajmogu5jn.cloudfront.net/bipbop-advanced/bipbop_16x9_variant.m3u8"
				type="application/x-mpegURL">
		</video-js>
	</section>

	<section class="source-cod">
		<h2>Getting Started</h2>
		<p>
			Download <a href="https://github.com/videojs/http-streaming/releases/latest">videojs-http-streaming</a> and include it in your page alongside video.js:
		</p>
<pre>
&lt;video-js id=example-video width=960 height=540 class="vjs-default-skin" controls&gt;
  &lt;source
    src="https://example.com/index.m3u8"
    type="application/x-mpegURL"&gt;
&lt;/video-js&gt;

&lt;script src="https://unpkg.com/video.js/dist/video.min.js"&gt;&lt;/script&gt;
&lt;script src="https://cdn.jsdelivr.net/npm/@videojs/http-streaming@1.12.2/dist/videojs-http-streaming.cjs.min.js"&gt;&lt;/script&gt;
&lt;script&gt;
var player = videojs('example-video');
player.play();
&lt;/script&gt;
</pre>
	</section>
	<p><a href="../">back</a> </p>
</div>

<script>
var player = videojs('vid1');
player.play();
</script>

</body>
</html>