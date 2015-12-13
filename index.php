<html>
	<head>
		<meta charset="utf-8">
		<title>NowPlaying</title>
		<script src="js/jquery.min.js"></script>
		<script src="js/mediaelement-and-player.min.js"></script>
		<link rel="stylesheet" href="css/style.css" media="screen">
		<link rel="stylesheet" media="screen" href="css/particles.css">
	</head>
	<body>
		<!-- particles.js container -->
		<div id="particles-js"></div>
	
		<div class="info">
			<img class="cover" src="img/cover.png" alt="">
			<div class="t-a">
				<h1 class="title">Roses</h1>
				<h1 class="artist">The Chainsmokers (feat. Rozes)</h1>
			</div>
		</div>
		
		<div class="audio-player">
			<audio id="audio-player" src="media/demo.mp3" type="audio/mp3" controls="controls" autoplay></audio>
		</div>

		<script>
			$(document).ready(function() {
				$('#audio-player').mediaelementplayer({
					alwaysShowControls: true,
					features: ['playpause','volume','progress'],
					audioVolume: 'horizontal',
					audioWidth: 100,
					audioHeight: 120
				});
			});
		</script>

		<!-- scripts -->
		<script src="js/particles.js"></script>
		<script src="js/app.js"></script>
	</body>
</html>