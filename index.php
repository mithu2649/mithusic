<?php 
	$title = 'Welcome to Mithusic - Mithu\'s music archive';
	$description = 'Welcome to Mithusic - :: Listen to Mithu\'s songs, watch videos and more...';
	include('./inc/header.php'); 
?>
	<div id="recent_songs">
			<div class="container-main">
				<?php
				//recent songs.. in songs/recent folder
					$dir1 = 'recent';
					$files1 = scandir($dir1, 0);
					$totalFiles1 = (count($files1) - 2);

					echo '<h2>Recently Added ('.$totalFiles1.')</h2>'; 
				?>
				<ul class="songs_container">
						<?php
							for($i = 2; $i < count($files1); $i++){
								echo '
									<li class="song_name">
										<p style="margin:0;font-weight:bold;color:black;">'
										.substr($files1[$i], 0, -4).'</p><br>
										<audio class="audioPlayer">
											<source src="recent/'.$files1[$i].'" type="audio/mpeg">
										</audio>
										<button class="btnPlayPause" onclick="this.previousSibling.previousSibling.paused ? this.previousSibling.previousSibling.play() : this.previousSibling.previousSibling.pause()">&#x25b6;</button><button class="btnPlayPause" onclick="this.previousSibling.previousSibling.previousSibling.paused ? this.previousSibling.previousSibling.previousSibling.play() : this.previousSibling.previousSibling.previousSibling.pause()">&#10074;&#10074;</button><a class="btn-dwn" href="recent/'.$files1[$i].'" download="'.$files1[$i].'">Download</a>
									</li>
								';
							}
						?>
				</ul>
			</div>
	</div>
	
	<div id="all_songs">
			<div class="container-main">
				<?php
					//list of all songs in songs folder
					$dir = 'songs';
					$files = scandir($dir, 0);
					$totalFiles = (count($files) - 2);
						if($totalFiles < 1){
							echo '<h1>Songs are yet to be added..</h1><h3>Come again later..</h3><img src="broken.png" draggable="false" style="height:150px;width:150px;opacity:.2;">';
						}else{
							echo '<h2>All Songs ('.$totalFiles.')</h2>';
						}
				?>
					<ul class="songs_container">
						<?php
							for($i = 2; $i < count($files); $i++){
								echo '
									<li class="song_name">
										<p style="margin:0;font-weight:bold;color:black;">'
										.substr($files[$i], 0, -4).'</p><br>
										<audio class="audioPlayer">
											<source src="songs/'.$files[$i].'" type="audio/mpeg">
										</audio>
										<button class="btnPlayPause" onclick="this.previousSibling.previousSibling.paused ? this.previousSibling.previousSibling.play() : this.previousSibling.previousSibling.pause()">&#x25b6;</button><button class="btnPlayPause" onclick="this.previousSibling.previousSibling.previousSibling.paused ? this.previousSibling.previousSibling.previousSibling.play() : this.previousSibling.previousSibling.previousSibling.pause()">&#10074;&#10074;</button><a class="btn-dwn" href="songs/'.$files[$i].'" download="'.$files[$i].'">Download</a>
									</li>
								';
							}
						?>
					</ul>
			</div>
	</div>
<?php include('./inc/footer.php'); ?>
