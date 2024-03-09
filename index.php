<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="favicon.png" type="image/png">
	<title>Lyricode</title>
	
	<style>
		body {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100vh;
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
			background-color: lavender;
		}
		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			gap: 20px;
		}
		
		.song {
			width: 200px;
			text-align: center;
		}
		.song-title {
        margin-top: 10px;
        font-weight: bold;
        color: #000080;
        }
		.song-image {
            width: 150px;
            height: auto;
            border-radius: 10px;
		}
		
		.song-title{
			margin-top: 10px;
			font-weight: bold;
		}
		.song-artist {
            margin-top: 5px;
            font-size: 14px;
            color:  black;
        }
        
		</style>
</head>
  
<body>
<h1 style="display: flex; justify-content: flex-start; align-items: center;">
  <?php echo '<img src="logo.png" alt="Logo" width="95" height="100" style="margin-left:50px; margin-right: -25px; margin-top: 10px">'; ?>
  <span style="margin-right: 120px;">Lyricode</span>
</h1>
<div class="container">
        <div class="song">
            <img class="song-image" src="song1.jpg" alt="Illicit Affairs">
            <p class="song-title"><a href="song1.php">Illicit Affairs</a></p>
            <p class="song-artist">song by Taylor Swift</p>
        </div>
        <div class="song">
            <img class="song-image" src="song2.jpg" alt="Isip">
            <p class="song-title"><a href="song2.php">Isip</a></p>
            <p class="song-artist">song by Healy After Dark</p>
        </div>
        <div class="song">
            <img class="song-image" src="song3.jpg" alt="Drunk Text">
            <p class="song-title"><a href="song3.php">Drunk Text</a></p>
            <p class="song-artist">song by Henry Moodie</p>
        </div>
    </div>
    <div class="container">
        <div class="song">
            <img class="song-image" src="song4.jpg" alt="Yellow">
            <p class="song-title"><a href="song4.php">Yellow</a></p>
            <p class="song-artist">song by Coldplay</p>
        </div>
        <div class="song">
            <img class="song-image" src="song5.jpg" alt="My Love Mine all Mine">
            <p class="song-title"><a href="song5.php">My Love Mine all Mine</a></p>
            <p class="song-artist">song by song by Mitski</p>
        </div>
    <ul>
</body>
</html>