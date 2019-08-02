<?php 
    $title = 'Contact | Mithusic';
    $description = 'Get in touch with me, collaborate, etc. Email me at:...';
	include('./inc/header.php'); 
?>
    
    <style>
        #mail{
            width:250px;
            text-align:center;
            margin-left:auto;
            margin-right:auto;
            margin-top:75px;
        }
        #mail img{
            opacity:.5;
        }
        #mail a:hover{
            color:green;
        }
    </style>
    <div id="mail">
        <img src="social/email.png" alt="mail_icon" height="150px" width="150px" draggable="false">
        <h3>Mail me at: <a href="mailto:mithu2649@gmail.com">mithu2649@gmail.com</a></h3>           
    </div>

<?php include('./inc/footer.php'); ?>