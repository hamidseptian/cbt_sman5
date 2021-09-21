

 <!DOCTYPE html>
<html lang="zxx">
<head>
	<title>SMA Negeri 5 Pariaman</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->


	<link rel="stylesheet" href="divisima/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="divisima/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="divisima/css/flaticon.css"/>
	<link rel="stylesheet" href="divisima/css/slicknav.min.css"/>
	<link rel="stylesheet" href="divisima/css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="divisima/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="divisima/css/animate.css"/>
	<link rel="stylesheet" href="divisima/css/style.css"/>
	<script src="divisima/js/jquery-3.2.1.min.js"></script>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->


	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					
					<div class="col-lg-1 text-center text-lg-left">
						<!-- logo -->
						<a href="./index.html" class="site-logo">
							<img src="gambar/logo.jpg" alt="" width="100px">
						</a>
					</div>
					<div class="col-lg-8">
						<h4>SMA Negeri 5 Pariaman</h4>
						
					</div>
<div class="col-lg-3">
                        <div class="user-panel pull-right">
                            <div class="up-item">
                                <a href="?m=login" class="btn btn-info" style="float: right;">Login</a>
                            </div>
                        </div>
                    </div>
					
					
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li></li>
		
				
				
				
				</ul>
			</div>
		</nav>
	</header>



	<?php if (isset($_GET['m'])) { ?>
		 
<!-- 	<div class="page-top-info">
		<div class="container">
			<h4><?php include "template/judul_konten.php" ?></h4>
		</div>
	</div> -->


	<section class="contact-section" style="margin-bottom: 20px">
		<div class="container">
			<div class="row">
				<?php include "template/konten.php" ?>
			</div>
		</div>

	</section>
	<?php } 
	else {
		include "form/home/home.php";
	}?>





	<section class="footer-section">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-12 col-sm-12">
					<div class="footer-widget about-widget">
						<h2>SMA Negeri 5 Pariaman</h2>
						
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6052634895877!2d100.13498709999999!3d-0.5921214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4e2787529ebfd%3A0xd266ae99a11cea5f!2sSMA%20Negeri%205%20Pariaman!5e0!3m2!1sid!2sid!4v1598721601239!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			
				
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</div>
		</div>
	</section>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="divisima/js/jquery-3.2.1.min.js"></script>
	<script src="divisima/js/bootstrap.min.js"></script>
	<script src="divisima/js/jquery.slicknav.min.js"></script>
	<script src="divisima/js/owl.carousel.min.js"></script>
	<script src="divisima/js/jquery.nicescroll.min.js"></script>
	<script src="divisima/js/jquery.zoom.min.js"></script>
	<script src="divisima/js/jquery-ui.min.js"></script>
	<script src="divisima/js/main.js"></script>


<script type="text/javascript">
    $jj =jQuery.noConflict();
    $ju =jQuery.noConflict();
    function getkey(e)
            {
            if (window.event)
               return window.event.keyCode;
            else if (e)
               return e.which;
            else
               return null;
            }
            
        function goodchars(e, goods, field)
            {
                var key, keychar;
                key = getkey(e);
                if (key == null) return true;
                 
                keychar = String.fromCharCode(key);
                keychar = keychar.toLowerCase();
                goods = goods.toLowerCase();
                 
                // check goodkeys
                if (goods.indexOf(keychar) != -1)
                    return true;
                // control keys
                if ( key==null || key==0 || key==8 || key==9 || key==27 )
                   return true;
                    
                if (key == 13) {
                    var i;
                    for (i = 0; i < field.form.elements.length; i++)
                        if (field == field.form.elements[i])
                            break;
                    i = (i + 1) % field.form.elements.length;
                    field.form.elements[i].focus();
                    return false;
                    };
                // else return false
                return false;
            }
</script>


	</body>
</html>
