<?php
require_once "admin/functions/db.php";

// Get post ID from URL
$post_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($post_id <= 0) {
    header("location: blog.php?error=invalid_id");
    exit;
}

// Fetch post details
$sql = "SELECT * FROM posts WHERE id = ?";
$stmt = $db->prepare($sql);
$stmt->execute([$post_id]);
$post = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$post) {
    header("location: blog.php?error=post_not_found");
    exit;
}

// Get related posts (excluding current post)
$related_sql = "SELECT * FROM posts WHERE id != ? ORDER BY date DESC LIMIT 3";
$related_stmt = $db->prepare($related_sql);
$related_stmt->execute([$post_id]);
$related_posts = $related_stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="images/icon.png">
<title><?php echo htmlspecialchars($post['title']); ?> - Blog</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo htmlspecialchars(substr(strip_tags($post['content']), 0, 160)); ?>">
<meta name="keywords" content="blog, real estate, property, rental management" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- Bootstrap JS (for modal support) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- banner -->
	<div class="banner1">
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
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="portfolio.php">Portifolio</a></li>
								<li class="active"><a href="blog.php"><i class="fas fa-blog"></i> Blog</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</nav>
					</div>
				</nav>
			</div>
		</div>
	</div>
<!-- //banner -->

<!-- Blog Post Content -->
<div class="gallery" style="padding: 60px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <article class="blog-post" style="background: #fff; padding: 40px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" style="margin-bottom: 30px;">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?php echo htmlspecialchars($post['title']); ?></li>
            </ol>
          </nav>
          
          <!-- Post Header -->
          <header style="margin-bottom: 30px; border-bottom: 2px solid #f8f9fa; padding-bottom: 20px;">
            <h1 style="color: #333; font-size: 2.5rem; margin-bottom: 15px; line-height: 1.2;"><?php echo htmlspecialchars($post['title']); ?></h1>
            <div class="post-meta" style="color: #666; font-size: 14px;">
              <span style="margin-right: 20px;">
                <i class="fa fa-user"></i> By <?php echo htmlspecialchars($post['author']); ?>
              </span>
              <span>
                <i class="fa fa-calendar"></i> <?php echo date("F j, Y", strtotime($post['date'])); ?>
              </span>
            </div>
          </header>
          
          <!-- Post Content -->
          <div class="post-content" style="line-height: 1.8; color: #333; font-size: 16px;">
            <?php echo nl2br(htmlspecialchars($post['content'])); ?>
          </div>
          
          <!-- Post Footer -->
          <footer style="margin-top: 40px; padding-top: 20px; border-top: 1px solid #eee;">
            <div class="post-actions" style="text-align: center;">
              <a href="blog.php" class="btn btn-primary">
                <i class="fa fa-arrow-left"></i> Back to Blog
              </a>
            </div>
          </footer>
        </article>
      </div>
      
      <!-- Sidebar -->
      <div class="col-md-4">
        <div class="sidebar" style="padding-left: 30px;">
          <!-- Related Posts -->
          <?php if (!empty($related_posts)): ?>
          <div class="widget" style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); margin-bottom: 30px;">
            <h4 style="color: #333; margin-bottom: 20px; font-size: 1.5rem;">Related Posts</h4>
            <?php foreach ($related_posts as $related_post): ?>
            <div class="related-post" style="margin-bottom: 20px; padding-bottom: 15px; border-bottom: 1px solid #eee;">
              <h5 style="margin-bottom: 10px;">
                <a href="single.php?id=<?php echo $related_post['id']; ?>" style="color: #333; text-decoration: none;">
                  <?php echo htmlspecialchars($related_post['title']); ?>
                </a>
              </h5>
              <small style="color: #666;">
                <i class="fa fa-calendar"></i> <?php echo date("M j, Y", strtotime($related_post['date'])); ?>
              </small>
            </div>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
          
          <!-- Quick Links -->
          <div class="widget" style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
            <h4 style="color: #333; margin-bottom: 20px; font-size: 1.5rem;">Quick Links</h4>
            <ul style="list-style: none; padding: 0;">
              <li style="margin-bottom: 10px;">
                <a href="index.php" style="color: #666; text-decoration: none;">
                  <i class="fa fa-home"></i> Home
                </a>
              </li>
              <li style="margin-bottom: 10px;">
                <a href="about.php" style="color: #666; text-decoration: none;">
                  <i class="fa fa-info-circle"></i> About Us
                </a>
              </li>
              <li style="margin-bottom: 10px;">
                <a href="contact.php" style="color: #666; text-decoration: none;">
                  <i class="fa fa-envelope"></i> Contact
                </a>
              </li>
              <li style="margin-bottom: 10px;">
                <a href="blog.php" style="color: #666; text-decoration: none;">
                  <i class="fa fa-blog"></i> All Posts
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- footer -->
<?php include("footer.php"); ?>

</body>
</html>