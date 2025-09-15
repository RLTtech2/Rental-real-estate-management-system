<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="images/icon.png">
<title>Nyumbani homes</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="this my Real estate management system">
<meta name="keywords" content="Coalition Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-----user icon--->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head> 
<body>
<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="w3_agile_banner_top">
				<div class="agile_phone_mail">
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i>+(254) 112 285 341</li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:tonniecharles24@gmail.com">info@nyumbanihomes.com</a></li>
					</ul>
				</div>
			</div>
			<div class="agileits_w3layouts_banner_nav">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.php"><img src="images/logo.png" class="img-responsive"></a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="portfolio.php">Portifolio</a></li>
							<li><a href="blog.php">Blog</a></li> 
							<li><a href="contact.php">Contact</a></li>
							<li><a href="./admin"><i class="fas fa-user"> </i> Login</a></li>
						</ul>
						
					</nav>

					</div>
				</nav>
			</div>
			<div class="wthree_banner_info">
				
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<h3>Lorem ipsum dolor ..?</h3>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
								
							</li>
							<li>
								<h3>Our Mission.. </h3>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
								
							</li>
							<li>
								<h3>Our SLogan </h3>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
							
							</li>
							<li>
								<h3>Our Vision... </h3>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
								
							</li>
							
						</ul>
					</div>
				</section>
				<!-- flexSlider -->
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
				<!-- //flexSlider --> 
			</div>
		</div>
	</div>
<!-- //banner -->

<!-- content -->
<div class="process all_pad agileits">
	
	<?php
				if (isset($_GET["subscribed"])) {
					echo 
					'<div class="alert alert-success" >
                          <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                         <strong>SUBSCRIBED!! </strong><p> Thank you for subscribing with us. We will keep you informed on what is happening with Company.</p>
                    </div>'
					;
				}
				elseif (isset($_GET["fail"])) {
					echo 
					'<div class="alert alert-danger" >
                          <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                         <strong>Ooops!! </strong><p> Looks like you are already subscribed to our mailing list :) </p>
                    </div>'
					;
				}
			?>	

</div>	
<!-- //process -->

<!-- Recent Blog Posts Section -->
<?php
require_once "admin/functions/db.php";

// Get latest 3 blog posts
$sql = "SELECT * FROM posts ORDER BY date DESC LIMIT 3";
$stmt = $db->prepare($sql);
$stmt->execute();
$recent_posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="gallery" style="background: #f8f9fa; padding: 60px 0;">
  <div class="container">
    <h2 class="w3l_head w3l_head1" style="text-align: center; margin-bottom: 50px;">Latest Blog Posts</h2>
    <div class="wthree_gallery_grids">
      <div class="row">
        <?php 
          if (empty($recent_posts)) {
            echo "<div class='col-md-12 text-center'><p style='color: #666; font-size: 18px;'>No blog posts available yet. Check back soon for updates!</p></div>";
          } else {
            foreach ($recent_posts as $post) {
              $postId = $post["id"];
              $title = htmlspecialchars($post["title"]);
              $excerpt = substr(strip_tags($post["content"]), 0, 150) . "...";
              $author = htmlspecialchars($post["author"]);
              $date = date("M j, Y", strtotime($post["date"]));

              echo '
              <div class="col-md-4">
                <div class="blog-card" style="border: 1px solid #ddd; padding: 25px; margin-bottom: 30px; border-radius: 10px; background: #fff; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                  <h4 style="color: #333; margin-bottom: 15px; font-size: 20px;">' . $title . '</h4>
                  <p style="color: #666; line-height: 1.6; margin-bottom: 20px;">' . $excerpt . '</p>
                  <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                    <small style="color: #888;">
                      <i class="fa fa-user"></i> ' . $author . ' 
                      <i class="fa fa-calendar" style="margin-left: 10px;"></i> ' . $date . '
                    </small>
                  </div>
                  <a href="blog.php" class="btn btn-primary btn-sm" style="width: 100%;">
                    <i class="fa fa-arrow-right"></i> View All Posts
                  </a>
                </div>
              </div>';
            }
          }
        ?>
      </div>
      <?php if (!empty($recent_posts)): ?>
      <div class="row">
        <div class="col-md-12 text-center">
          <a href="blog.php" class="btn btn-outline-primary btn-lg" style="margin-top: 30px;">
            <i class="fa fa-blog"></i> View All Blog Posts
          </a>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</div>



<!-- footer -->
	
	<?php 
		include("footer.php");
	?>
