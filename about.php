<?php
    $title = 'About | Mithusic';
    $description = 'Know more about me, Checkout my facebook profile for more info...';
    include('./inc/header.php');
    
?>
	<style>
            .profile_container{
                margin-top:40px;
            }
            
            .profile_pic{
                width:100px;
			    height:100px;
                display:block;
                margin:auto;
                background:url('mithu.jpg');
                background-size:cover;
                border-radius:50%;
            }
            .profile_details{
               padding-left:0;
               width:100%;
               margin:auto;
               text-align:center;
            }
            .profile_details a{
                float:none !important;
                margin-top:5px;
				display:block;
				width:200px;
				margin-left:auto;
				margin-right:auto;
                font-weight:bold;
            }
            .profile_container #quote{
                padding-top: 40px !important;
            }

	</style>
    <div class="profile_container">
        <div id="profile">
            <div class="profile_pic"></div>
            <div class="profile_details">
                <h2 style="display:inline-block;margin:0;">Mithu Mondal</h2><br>
                <a class="btn-videos" style="float:left;color:black" href="https://www.facebook.com/mithu2649">View Fb Profile</a>
            </div>
        </div>
        <h2 id="quote" style="text-align:center;font-style:italic;clear:both;opacity:.3;padding-top:200px;">“Music is the literature of the heart; it commences where speech ends.” </h2>
    </div>
	</div>
<?php include('./inc/footer.php'); ?>