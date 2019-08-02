<?php 
    $title = 'Photos | Mithusic';
    $description = 'More photos on Instagram and facebook | follow me on Instagram and Facebook for more...';
	include('./inc/header.php'); 
?>
    <link href="css/zoom.css" rel="stylesheet">
    <style>
                @media only screen and (min-width: 700px) {
                    .photos{
                       width:70% !important;
                       margin-left:auto;
                       margin-right:auto;
                       display:block;
                       -webkit-user-select:none;
                    }
                }
                .photos{
                    width:100%;
                }
                .morePhotos a{
                    text-decoration:none;
                    color:blue;
                }
                .morePhotos a:hover{
                    color:green;
                    text-decoration:underline;
				}
                .image_container{
                    margin:0;
                    padding:0;
                }
                .image{
                    list-style:none;
                    /* width:75px !important; */
                    height:75px !important;
                    display:inline-block;
                    margin:2px;
                    background-size:cover !important;
                    border-radius:10px;
                }
                .image:active{
                    opacity:.5;
                }
                @media only screen and (min-width: 700px) {
                    .image{
                        height:140px !important;
                        /* width:140px !important; */
                    }
                }

	</style>
    <div class="photos">
		<h2>&#x1f4f7; Photos</h2>
                <div class="container-main">
                    <?php
                    //recent songs.. in songs/recent folder
                        $dir1 = 'photos';
                        $files1 = scandir($dir1, 0);
                        $totalFiles1 = (count($files1) - 2);
                    ?>
                    <ul class="image_container">
                            <?php
                                for($i = 2; $i < count($files1); $i++){
                                    echo '
                                       <img data-action="zoom" class="image pull-left" src="photos/'.$files1[$i].'" >
                                    ';
                                }
                            ?>
                    </ul>
                </div>
             <!-- LightWidget WIDGET
                <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
                <iframe src="//lightwidget.com/widgets/763beb6418a45063bf5b685a54df91b1.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
             -->
        <h4 class="morePhotos">More Photos on: <a href="https://instagram.com/mithu_mon/">Instagram</a> | <a href="https://www.facebook.com/mithu2649/photos/">Facebook</a></h4>    
	</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="https://raw.githubusercontent.com/twbs/bootstrap/master/js/transition.js"></script>
  <script src="js/zoom.js"></script>
  
<?php include('./inc/footer.php'); ?>
