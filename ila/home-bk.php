<<<<<<< HEAD
<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';

	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome Smart Learn English- <?php echo $userRow['userEmail']; ?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="assets/js/ui/1.12.1/themes/base/jquery-ui.css">
<script src="assets/js/jquery-1.12.4.js"></script>
<script src="assets/js/ui/1.12.1/jquery-ui.js"></script>
<script>
$( function() {
	$( "input" ).checkboxradio();
} );
</script>
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Contents</a>
        </div><!-- /navbar-header -->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Documents</a></li>
            <li class="active"><a href="#">Vocabulary</a></li>
            <li><a href="#">Units</a></li>
						<li><a href="#">Others</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $userRow['userEmail']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!-- /.container -->
    </nav>
		<!--end nav-->

	<div id="wrapper">

		<div class="container">

	    	<div class="widget">
	    		<h6>Learning Vocabulary by Pictures!</h6>
					<fieldset>
						<legend>Select a Category: </legend>
						<label for="radio-1">Animal</label>
						<input type="radio" name="radio-1" id="radio-1">
						<label for="radio-2">Body</label>
						<input type="radio" name="radio-1" id="radio-2">
						<label for="radio-3">Body Care</label>
						<input type="radio" name="radio-1" id="radio-3">
						<label for="radio-4">Body Care</label>
						<input type="radio" name="radio-1" id="radio-4">
						<label for="radio-5">Books and Things to Read</label>
						<input type="radio" name="radio-1" id="radio-5">
						<label for="radio-6">Buildings</label>
						<input type="radio" name="radio-1" id="radio-6">
						<label for="radio-7">Business English</label>
						<input type="radio" name="radio-1" id="radio-7">
						<label for="radio-8">Calendar</label>
						<input type="radio" name="radio-1" id="radio-8">
						<label for="radio-9">Cars</label>
						<input type="radio" name="radio-1" id="radio-9">
						<label for="radio-10">Celebrations</label>
						<input type="radio" name="radio-1" id="radio-10">
						<label for="radio-11">City</label>
						<input type="radio" name="radio-1" id="radio-11">
						<label for="radio-12">Clothers</label>
						<input type="radio" name="radio-1" id="radio-12">
						<label for="radio-13">Colors</label>
						<input type="radio" name="radio-1" id="radio-13">
						<label for="radio-14">Computers</label>
						<input type="radio" name="radio-1" id="radio-14">
						<label for="radio-15">Countries</label>
						<input type="radio" name="radio-1" id="radio-15">
						<label for="radio-16">Family</label>
						<input type="radio" name="radio-1" id="radio-16">
						<label for="radio-17">Eating, Food | Drinks</label>
						<input type="radio" name="radio-1" id="radio-17">
						<label for="radio-18">Gardening and Plants</label>
						<input type="radio" name="radio-1" id="radio-18">
						<label for="radio-19">Geography</label>
						<input type="radio" name="radio-1" id="radio-19">
						<label for="radio-20">Health</label>
						<input type="radio" name="radio-1" id="radio-20">
						<label for="radio-21">Holidays</label>
						<input type="radio" name="radio-1" id="radio-21">
						<label for="radio-22">House</label>
						<input type="radio" name="radio-1" id="radio-22">
						<label for="radio-23">Jobs, Occupations and Professions</label>
						<input type="radio" name="radio-1" id="radio-23">
						<label for="radio-24">Law</label>
						<input type="radio" name="radio-1" id="radio-24">
						<label for="radio-25">Miscellaneous</label>
						<input type="radio" name="radio-1" id="radio-25">
						<label for="radio-26">Money</label>
						<input type="radio" name="radio-1" id="radio-26">
						<label for="radio-27">Music</label>
						<input type="radio" name="radio-1" id="radio-27">
						<label for="radio-28">Office</label>
						<input type="radio" name="radio-1" id="radio-28">
						<label for="radio-29">People</label>
						<input type="radio" name="radio-1" id="radio-29">
						<label for="radio-30">Seasons</label>
						<input type="radio" name="radio-1" id="radio-30">
						<label for="radio-31">Sports</label>
						<input type="radio" name="radio-1" id="radio-31">
						<label for="radio-32">Time</label>
						<input type="radio" name="radio-1" id="radio-32">
						<label for="radio-33">Transportation</label>
						<input type="radio" name="radio-1" id="radio-33">
						<label for="radio-34">Travel</label>
						<input type="radio" name="radio-1" id="radio-34">
						<label for="radio-35">Weather</label>
						<input type="radio" name="radio-1" id="radio-35">
						<label for="radio-36">Food</label>
						<input type="radio" name="radio-1" id="radio-36">
					</fieldset>

				</div>
				<!--end div widget-->

				<div class="content">
					<!--div class="responsive"-->
						<div class="gallery">
							<figure>
								<a target="_blank" href="assets/images/carrot.jpg">
									<img src="assets/images/carrot.jpg" alt="Food">
								</a>
								<figcaption>
									<h4>Vitamin A</h4>
                	<p>Carrots were one of the vegetables examined in recent research on foods rich in beta-carotene and bone health. </p>
								</figcaption>
								<div class="desc">carrot</div>
						</figure>
						</div><!-- end div gallery - caroot.jpg -->
					<!--end div responsive -->

					<!--div class="responsive"-->
						<div class="gallery">
							<figure>
								<a target="_blank" href="assets/images/melon.jpg">
									<img src="assets/images/melon.jpg" alt="Food">
								</a>
								<figcaption>
									<h4>Vitamin A, C</h4>
                	<p>Watermelon: Health benefits, nutrition, and risks.</p>
								</figcaption>
								<div class="desc">melon</div>
						</figure>
						</div><!-- end div gallery - melon.jpg -->
					<!-- end div response -->

					<!--div class="responsive"-->
						<div class="gallery">
							<figure>
								<a target="_blank" href="assets/images/peach.jpg">
									<img src="assets/images/peach.jpg" alt="Food">
								</a>
								<figcaption>
									<h4>This is a cool title!</h4>
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
								</figcaption>
								<div class="desc">peach</div>
						</figure>
						</div><!-- end div gallery - peach.jpg -->
					<!-- end div responsive -->

					<!--div class="responsive"-->
						<div class="gallery">
							<figure>
								<a target="_blank" href="assets/images/strawberry.jpg">
									<img src="assets/images/strawberry.jpg" alt="Food">
								</a>
								<figcaption>
									<h4>This is a cool title!</h4>
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
								</figcaption>
								<div class="desc">strawberry</div>
						</figure>
						</div><!-- end div gallery - strawberry.jpg -->
					<!--end div responsive -->

					<!--div class="responsive"-->
						<div class="gallery">
							<figure>
								<a target="_blank" href="assets/images/grapes.jpg">
									<img src="assets/images/grapes.jpg" alt="Food">
								</a>
								<figcaption>
									<h4>This is a cool title!</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
								</figcaption>
								<div class="desc">grapes</div>
						</figure>
						</div><!-- end div gallery - grapes.jpg -->
					<!--end div responsive -->

					<!--div class="responsive"-->
						<div class="gallery">
							<figure>
								<a target="_blank" href="assets/images/pear.jpg">
									<img src="assets/images/pear.jpg" alt="Food">
								</a>
								<figcaption>
									<h4>This is a cool title!</h4>
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
								</figcaption>
								<div class="desc">pear</div>
						</figure>
						</div><!-- end div gallery - pear.jpg -->
					<!-- end div response -->

					<!--div class="responsive"-->
						<div class="gallery">
							<figure>
								<a target="_blank" href="assets/images/pineapple.jpg">
									<img src="assets/images/pineapple.jpg" alt="Food">
								</a>
								<figcaption>
									<h4>This is a cool title!</h4>
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
								</figcaption>
								<div class="desc">pineapple</div>
						</figure>
						</div><!-- end div gallery - pineapple.jpg -->
					<!-- end div responsive -->

				</div>
				<!--end div content-->

	 	</div>
		<!--end div container->

  </div>
	<!end div wrapper->

</body>
</html>
<?php ob_end_flush(); ?>
=======
<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';

	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome Smart Learn English- <?php echo $userRow['userEmail']; ?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="assets/js/ui/1.12.1/themes/base/jquery-ui.css">
<script src="assets/js/jquery-1.12.4.js"></script>
<script src="assets/js/ui/1.12.1/jquery-ui.js"></script>
<script>
$( function() {
	$( "input" ).checkboxradio();
} );
</script>
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Contents</a>
        </div><!-- /navbar-header -->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Documents</a></li>
            <li class="active"><a href="#">Vocabulary</a></li>
            <li><a href="#">Units</a></li>
						<li><a href="#">Others</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $userRow['userEmail']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!-- /.container -->
    </nav>
		<!--end nav-->

	<div id="wrapper">

		<div class="container">

	    	<div class="widget">
	    		<h6>Learning Vocabulary by Pictures!</h6>
					<fieldset>
						<legend>Select a Category: </legend>
						<label for="radio-1">Animal</label>
						<input type="radio" name="radio-1" id="radio-1">
						<label for="radio-2">Body</label>
						<input type="radio" name="radio-1" id="radio-2">
						<label for="radio-3">Body Care</label>
						<input type="radio" name="radio-1" id="radio-3">
						<label for="radio-4">Body Care</label>
						<input type="radio" name="radio-1" id="radio-4">
						<label for="radio-5">Books and Things to Read</label>
						<input type="radio" name="radio-1" id="radio-5">
						<label for="radio-6">Buildings</label>
						<input type="radio" name="radio-1" id="radio-6">
						<label for="radio-7">Business English</label>
						<input type="radio" name="radio-1" id="radio-7">
						<label for="radio-8">Calendar</label>
						<input type="radio" name="radio-1" id="radio-8">
						<label for="radio-9">Cars</label>
						<input type="radio" name="radio-1" id="radio-9">
						<label for="radio-10">Celebrations</label>
						<input type="radio" name="radio-1" id="radio-10">
						<label for="radio-11">City</label>
						<input type="radio" name="radio-1" id="radio-11">
						<label for="radio-12">Clothers</label>
						<input type="radio" name="radio-1" id="radio-12">
						<label for="radio-13">Colors</label>
						<input type="radio" name="radio-1" id="radio-13">
						<label for="radio-14">Computers</label>
						<input type="radio" name="radio-1" id="radio-14">
						<label for="radio-15">Countries</label>
						<input type="radio" name="radio-1" id="radio-15">
						<label for="radio-16">Family</label>
						<input type="radio" name="radio-1" id="radio-16">
						<label for="radio-17">Eating, Food | Drinks</label>
						<input type="radio" name="radio-1" id="radio-17">
						<label for="radio-18">Gardening and Plants</label>
						<input type="radio" name="radio-1" id="radio-18">
						<label for="radio-19">Geography</label>
						<input type="radio" name="radio-1" id="radio-19">
						<label for="radio-20">Health</label>
						<input type="radio" name="radio-1" id="radio-20">
						<label for="radio-21">Holidays</label>
						<input type="radio" name="radio-1" id="radio-21">
						<label for="radio-22">House</label>
						<input type="radio" name="radio-1" id="radio-22">
						<label for="radio-23">Jobs, Occupations and Professions</label>
						<input type="radio" name="radio-1" id="radio-23">
						<label for="radio-24">Law</label>
						<input type="radio" name="radio-1" id="radio-24">
						<label for="radio-25">Miscellaneous</label>
						<input type="radio" name="radio-1" id="radio-25">
						<label for="radio-26">Money</label>
						<input type="radio" name="radio-1" id="radio-26">
						<label for="radio-27">Music</label>
						<input type="radio" name="radio-1" id="radio-27">
						<label for="radio-28">Office</label>
						<input type="radio" name="radio-1" id="radio-28">
						<label for="radio-29">People</label>
						<input type="radio" name="radio-1" id="radio-29">
						<label for="radio-30">Seasons</label>
						<input type="radio" name="radio-1" id="radio-30">
						<label for="radio-31">Sports</label>
						<input type="radio" name="radio-1" id="radio-31">
						<label for="radio-32">Time</label>
						<input type="radio" name="radio-1" id="radio-32">
						<label for="radio-33">Transportation</label>
						<input type="radio" name="radio-1" id="radio-33">
						<label for="radio-34">Travel</label>
						<input type="radio" name="radio-1" id="radio-34">
						<label for="radio-35">Weather</label>
						<input type="radio" name="radio-1" id="radio-35">
						<label for="radio-36">Food</label>
						<input type="radio" name="radio-1" id="radio-36">
					</fieldset>

				</div>
				<!--end div widget-->

				<div class="content">
					<!--div class="responsive"-->
						<div class="gallery">
							<figure>
								<a target="_blank" href="assets/images/carrot.jpg">
									<img src="assets/images/carrot.jpg" alt="Food">
								</a>
								<figcaption>
									<h4>Vitamin A</h4>
                	<p>Carrots were one of the vegetables examined in recent research on foods rich in beta-carotene and bone health. </p>
								</figcaption>
								<div class="desc">carrot</div>
						</figure>
						</div><!-- end div gallery - caroot.jpg -->
					<!--end div responsive -->

					<!--div class="responsive"-->
						<div class="gallery">
							<figure>
								<a target="_blank" href="assets/images/melon.jpg">
									<img src="assets/images/melon.jpg" alt="Food">
								</a>
								<figcaption>
									<h4>Vitamin A, C</h4>
                	<p>Watermelon: Health benefits, nutrition, and risks.</p>
								</figcaption>
								<div class="desc">melon</div>
						</figure>
						</div><!-- end div gallery - melon.jpg -->
					<!-- end div response -->

					<!--div class="responsive"-->
						<div class="gallery">
							<figure>
								<a target="_blank" href="assets/images/peach.jpg">
									<img src="assets/images/peach.jpg" alt="Food">
								</a>
								<figcaption>
									<h4>This is a cool title!</h4>
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
								</figcaption>
								<div class="desc">peach</div>
						</figure>
						</div><!-- end div gallery - peach.jpg -->
					<!-- end div responsive -->

					<!--div class="responsive"-->
						<div class="gallery">
							<figure>
								<a target="_blank" href="assets/images/strawberry.jpg">
									<img src="assets/images/strawberry.jpg" alt="Food">
								</a>
								<figcaption>
									<h4>This is a cool title!</h4>
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
								</figcaption>
								<div class="desc">strawberry</div>
						</figure>
						</div><!-- end div gallery - strawberry.jpg -->
					<!--end div responsive -->

					<!--div class="responsive"-->
						<div class="gallery">
							<figure>
								<a target="_blank" href="assets/images/grapes.jpg">
									<img src="assets/images/grapes.jpg" alt="Food">
								</a>
								<figcaption>
									<h4>This is a cool title!</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
								</figcaption>
								<div class="desc">grapes</div>
						</figure>
						</div><!-- end div gallery - grapes.jpg -->
					<!--end div responsive -->

					<!--div class="responsive"-->
						<div class="gallery">
							<figure>
								<a target="_blank" href="assets/images/pear.jpg">
									<img src="assets/images/pear.jpg" alt="Food">
								</a>
								<figcaption>
									<h4>This is a cool title!</h4>
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
								</figcaption>
								<div class="desc">pear</div>
						</figure>
						</div><!-- end div gallery - pear.jpg -->
					<!-- end div response -->

					<!--div class="responsive"-->
						<div class="gallery">
							<figure>
								<a target="_blank" href="assets/images/pineapple.jpg">
									<img src="assets/images/pineapple.jpg" alt="Food">
								</a>
								<figcaption>
									<h4>This is a cool title!</h4>
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
								</figcaption>
								<div class="desc">pineapple</div>
						</figure>
						</div><!-- end div gallery - pineapple.jpg -->
					<!-- end div responsive -->

				</div>
				<!--end div content-->

	 	</div>
		<!--end div container->

  </div>
	<!end div wrapper->

</body>
</html>
<?php ob_end_flush(); ?>
>>>>>>> aaaf96b1a48f0e5a8fe3e9458fec0b82e302150b
