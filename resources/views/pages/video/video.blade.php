<!DOCTYPE html>
<html>
    <head>
      
        <link rel="stylesheet" href="{{ asset('css/video-js.css') }}">
        <!-- js -->
        <script type="text/javascript" src="<?php echo asset('js/video.js')?>"></script>
        
        <title>VideoJS</title>
    </head>
    <body>

      <video 
        id="example_video_1" 
        class="video-js vjs-default-skin" 
        controls preload="none" width="800" height="600"
        poster=""
        data-setup="{}">


    <source src="video.mp4" type='video/mp4' />
  
  
    <track kind="captions" src="<?php echo asset('demo.captions.vtt')?>" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
    <track kind="subtitles" src="<?php echo asset('demo.captions.vtt')?>" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
  </video>




       
    </body>
</html>

