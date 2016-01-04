<!DOCTYPE html>
<html>
<head> 
<title>Home page</title>
    <link rel="stylesheet" href="cssdd.css">
     <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href='http://fonts.googleapis.com/css?family=Changa+One' rel='stylesheet' type='text/css'>
	<meta charset="utf-8">
	
	<script src="/js/npm.js"></script>
   <script src="/js/bootstrap.min.js"></script>
	<script src="/js/jquery-2.1.4.min.js"></script>

	 <script type="text/javascript">


<!--Скрипт генерации случайной webm -->
function RandomWebm() {
  $('.video').trigger('pause');
  
 
  setTimeout("$('#webm').load('/ #webm');", 1000);
  
  $('.play').prop('disabled', true);
  setTimeout("$('.press').prop('disabled', false);", 1000);
}
</script>
</head>
<body>
  <center> <img src= "images/LOGO.png"> </center>
<div class="nav">
    <ul>
        <li><a href="index.html">home</a></li>
      <li ><a href="about.html">about</a> </li>
        <li><a href="contacts.html">contact</a></li> 
        <li><a href="upload.html">upload</a></li>
      
      
    </ul>
</div>

<div id= "webm">
<?
require('array.php');
$i=rand(0,25);


?>

 <center>
<div class="embed-responsive embed-responsive-16by9">
     <video class="video" width="640" height="360" controls="controls" autoplay="autoplay" loop="loop" tabindex="0">
	 <source src="webm/<?php echo $video[$i]; ?>" type='video/webm; codecs="vp8, vorbis"'>
	 </video>
   
</div>
  </center>
  </div>
  
  <div>
 <center>  
  <section class="press">
<button onclick="RandomWebm()">start</button>
</section>
 </center>
  </div>
  
  <div id="footer">
    <center> &copy; Maxim Pylyov, Anrdew Kaplenko, Anton Larionov, Georgy Titov, 2015</center>
  </div>
</body>​
</html>