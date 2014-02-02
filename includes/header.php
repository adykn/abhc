<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<title>Get your Doctor online!!!</title>
		<meta name="keywords" content="" />
		<meta name="description" content="Reserve Doctor in your town online">
		<meta name="author" content="lazyprogrammers">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Libs CSS -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/fonts/font-awesome/css/font-awesome.css">
		<link rel="stylesheet" href="vendor/flexslider/flexslider.css" media="screen" />
		<link rel="stylesheet" href="vendor/fancybox/jquery.fancybox.css" media="screen" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">

		<!-- Current Page Styles -->
		<link rel="stylesheet" href="vendor/revolution-slider/css/settings.css" media="screen" />
		<link rel="stylesheet" href="vendor/revolution-slider/css/captions.css" media="screen" />
		<link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css" media="screen" />

		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Skin -->
		<link rel="stylesheet" href="css/skins/blue.css">
		
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="css/bootstrap-responsive.css" />
		<link rel="stylesheet" href="css/theme-responsive.css" />

		<!-- Favicons -->
		<link rel="shortcut icon" href="img/favicon.ico">
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">

		<!-- Head Libs -->
		<script src="vendor/modernizr.js"></script>

		<!--[if IE]>
			<link rel="stylesheet" href="css/ie.css">
		<![endif]-->

		<!--[if lte IE 8]>
			<script src="vendor/respond.js"></script>
		<![endif]-->

		<!-- Facebook OpenGraph Tags - Go to http://developers.facebook.com/ for more information.
		<meta property="og:title" content="Porto Website Template."/>
		<meta property="og:type" content="website"/>
		<meta property="og:url" content="http://www.crivos.com/themes/porto"/>
		<meta property="og:image" content="http://www.crivos.com/themes/porto/"/>
		<meta property="og:site_name" content="Porto"/>
		<meta property="fb:app_id" content=""/>
		<meta property="og:description" content="Porto - Responsive HTML5 Template"/>
		-->

	</head>
		<body>

		<div class="body">
			<header>
				<div class="container">
					<h1 class="logo">
						<a href="index.php">
							<img alt="Health Care" src="img/logo.png">
						</a>
					</h1>
					<div class="search">
						<form class="form-search" id="searchForm" action="page-search-results.html" method="get">
							<div class="control-group">
								<input type="text" class="input-medium search-query" name="q" id="q" placeholder="Search...">
								<button class="search" type="submit"><i class="icon-search"></i></button>
							</div>
						</form>
					</div>
					<nav>
						<ul class="nav nav-pills nav-top">
							<li><?php if (!isset($_SESSION['patient']) || !isset($_SESSION['drugstore']) || !isset($_SESSION['doctor'])){?>
								<a href="#loginhome" role="button" class=" btn" data-toggle="modal">login</a>
                                                        <?php }else{?>
                                                                <a href="signout.php?action=logout" role="button" class=" btn" data-toggle="modal">log Out</a>
                                                        <?php }?><form method="post" action="login.php">
								<div id="loginhome" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h3 id="myModalLabel">Please Login Here</h3>
								</div>
								<div class="modal-body">
									<select class="form-control" name="type">
									  <option >Select</option>
									  <option value="1">Doctor</option>
									  <option value="2">Patient</option>
									  <option value="3">Technician</option>
									  
									</select>
									<label>User Name</label>
									<input type="text" value="" maxlength="100" class="span3" name="name" id="name">
									<label>Password</label>
										<input type="password" value="" maxlength="100" class="span3" name="password" id="password">
								</div>
								<div class="modal-footer">
									<button class="btn btn-primary" name="btn">Login</button>
									<a href="#">Forgot Password</a>
								</div> </form><!-- end of modal-footer -->
							</div> <!-- end of modal -->
							</li>
							<li>
								<a href="registration-forms.php" role="button" class=" btn" >Registration</a>

							</li>
							<li class="phone">
								<span><i class="icon-phone"></i>(123) 456-7890</span>
							</li>
						</ul>
					</nav>
					<div class="social-icons">
						<ul class="social-icons">
							<li class="facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook">Facebook</a></li>
							<li class="twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter">Twitter</a></li>
							<li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin">Linkedin</a></li>
						</ul>
					</div>
					<nav>
						<ul class="nav nav-pills nav-main" id="mainMenu">
							<li class="">
								<a class="dropdown-toggle" href="index.php">
									Home
								</a>
								
							</li>
							<li>
								<a href="signup.php">Signup</a>
							</li>
							<li>
								<a href="registration-forms.php">Registration Froms</a>
							</li>
							
							<li>
								<a href="contact-us.php">Contact Us</a>
							</li>
						</ul>
					</nav>
				</div>
			</header>