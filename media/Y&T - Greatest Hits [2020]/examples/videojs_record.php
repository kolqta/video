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
	<link rel="stylesheet" href="../node_modules/videojs-record/dist/css/videojs.record.min.css">

	<script src="../node_modules/video.js/dist/video.min.js"></script>
	<script src="../node_modules/recordrtc/RecordRTC.min.js"></script>
	<script src="../node_modules/webrtc-adapter/out/adapter.js"></script>
	<script src="../node_modules/videojs-record/dist/videojs.record.min.js"></script>
<?php
else:
?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://vjs.zencdn.net/7.6.6/video-js.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/videojs-record@3.11.0/dist/css/videojs.record.min.css" rel="stylesheet" />

	<script src="https://unpkg.com/video.js/dist/video.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/RecordRTC/5.5.9/RecordRTC.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/7.3.0/adapter.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/videojs-record@3.11.0/dist/videojs.record.min.js"></script>
<?php
endif;
?>
	<script src="browser-workarounds.js"></script>
	
	<script>window.HELP_IMPROVE_VIDEOJS = false;</script>

<style>
</style>

</head> 
<body>

<div class="container">
	<section class="source-info">
		<video id="myScreenAudio" playsinline class="video-js vjs-default-skin"></video>
	</section>

	<section class="source-cod">
		<h2>Getting Started</h2>
<pre>
Start by including the video.js stylesheet and library:

&lt;link href="https://vjs.zencdn.net/7.6.6/video-js.css" rel="stylesheet"&gt;
&lt;script src="https://unpkg.com/video.js/dist/video.min.js"&gt;&lt;/script&gt;

If you're going to record audio and/or video you need to include RecordRTC as well:

&lt;script src="https://cdnjs.cloudflare.com/ajax/libs/RecordRTC/5.5.9/RecordRTC.min.js"&gt;&lt;/script&gt;
&lt;script src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/7.3.0/adapter.min.js"&gt;&lt;/script&gt;

The videojs-record plugin automatically registers itself when the script is included on the page:

&lt;script src="https://cdn.jsdelivr.net/npm/videojs-record@3.11.0/dist/videojs.record.min.js"&gt;&lt;/script&gt;

Add the extra stylesheet for the plugin that includes a custom font with additional icons:

&lt;link href="https://cdn.jsdelivr.net/npm/videojs-record@3.11.0/dist/css/videojs.record.min.css" rel="stylesheet"&gt;

Audio/video/image/screen

When recording either audio/video, video-only, screen-only, audio/screen, animated GIF or a single image, include a video element:

&lt;video id="myVideo" playsinline class="video-js vjs-default-skin"&gt;&lt;/video&gt;
&lt;script&gt;
var options = {
    controls: true,
    width: 320,
    height: 240,
    plugins: {
        record: {
            audio: true,
            video: true,
            maxLength: 10,
            debug: true
        }
    }
};

var player = videojs('myScreenAudio', options, function() {
    // print version information at startup
    var msg = 'Using video.js ' + videojs.VERSION +
        ' with videojs-record ' + videojs.getPluginVersion('record') +
        ' and recordrtc ' + RecordRTC.version;
    videojs.log(msg);
});

// error handling
player.on('deviceError', function() {
    console.log('device error:', player.deviceErrorCode);
});

player.on('error', function(element, error) {
    console.error(error);
});

// user clicked the record button and started recording
player.on('startRecord', function() {
    console.log('started recording!');
});

// user completed recording and stream is available
player.on('finishRecord', function() {
    // the blob object contains the recorded data that
    // can be downloaded by the user, stored on server etc.
    console.log('screen+audio capture ready: ', player.recordedData);
});
&lt;/script&gt;
</pre>
	</section>
	<p><a href="../">back</a> </p>
</div>

<script>
var options = {
    controls: true,
    width: 320,
    height: 240,
    plugins: {
        record: {
            audio: true,
            video: true,
            maxLength: 10,
            debug: true
        }
    }
};

// apply some workarounds for opera browser
applyVideoWorkaround();
applyScreenWorkaround();

var player = videojs('myScreenAudio', options, function() {
    // print version information at startup
    var msg = 'Using video.js ' + videojs.VERSION +
        ' with videojs-record ' + videojs.getPluginVersion('record') +
        ' and recordrtc ' + RecordRTC.version;
    videojs.log(msg);
});

// error handling
player.on('deviceError', function() {
    console.log('device error:', player.deviceErrorCode);
});

player.on('error', function(element, error) {
    console.error(error);
});

// user clicked the record button and started recording
player.on('startRecord', function() {
    console.log('started recording!');
});

// user completed recording and stream is available
player.on('finishRecord', function() {
    // the blob object contains the recorded data that
    // can be downloaded by the user, stored on server etc.
    console.log('screen+audio capture ready: ', player.recordedData);
});
</script>

</body>
</html>