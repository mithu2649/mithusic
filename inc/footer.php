</div>  <!-- Main Content closed-->
<div id="footer">
	<p class="copyright">&copy; Copyright 2018 - Mithusic. All Rights Reserved. <br> <a href="index.php">www.mithusic.ml</a></p><br>
	<div id="social">
	    <a href="https://facebook.com/mithu2649"><img src="social/facebook.png" alt="facebook_connect"></a><a href="https://instagram.com/mithu_mon"><img src="social/instagram.png" alt="instagram_connect"></a><a href="https://twitter.com/tweetmithu"><img src="social/twitter.png" alt="twitter_connect"></a>
	<div><br><br><br><br><br>
</div>
<button class="btn-float">&#9998;</button>

		<div class="view-request" id="view-request" style="display:none">
			<div class="overlay" id="overlay" onclick="closes()"></div>
				<div id="form-container" class="request-form">
					<span class="close" onclick="closes()">&times;</span><br>
					<h2>Request a Song..</h2>
					<form id="requestForm" autocomplete="off">
							<p>Your Name</p>
							<input type="text" id="name" name="name" required><br>
							<p>Song</p>
							<input type="text" id="song" name="song" required><br>
							<p>Artist</p>
							<input type="text" id="artist" name="artist" required><br>
							<p>Album</p>
							<input type="text" id="album" name="album"><br><br><br>
							<input type="submit" id="requestSubmit" value="Submit">
							<input type="button" value="Cancel" onclick="closes()">
					</form>
				</div>
			</div>
        </div>
        
<script src="js/scripts.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>
    $('document').ready(function(){
        $('img[src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]').parent().parent().remove();
    });
</script>
</body>
</html>
