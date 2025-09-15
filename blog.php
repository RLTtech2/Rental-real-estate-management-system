<?php
require_once "admin/functions/db.php";

// Get search and filter parameters
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$category = isset($_GET['category']) ? trim($_GET['category']) : '';

// Build the SQL query
$sql = "SELECT * FROM posts WHERE 1";

if (!empty($search)) {
    $sql .= " AND (title LIKE :search OR content LIKE :search OR author LIKE :search)";
}

if (!empty($category)) {
    $sql .= " AND category = :category";
}

$sql .= " ORDER BY date DESC";

$stmt = $db->prepare($sql);

if (!empty($search)) {
    $searchParam = "%$search%";
    $stmt->bindParam(':search', $searchParam);
}

if (!empty($category)) {
    $stmt->bindParam(':category', $category);
}

$stmt->execute();
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="images/icon.png">
<title>Blogs</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<!-- gallery -->

<!----search--->
<style>
  .search-filter-form {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 8px;
    max-width: 800px;
    margin: 0 auto 2rem auto;
  }
  
  .search-filter-form input,
  .search-filter-form select {
    flex: 1 1 90%;
    min-height: 48px; /* Better touch target */
    padding: 12px 15px;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    font-size: 16px;
    background-color: #eee1b9ff;
    transition: all 0.3s ease;
  }

  .search-filter-form input:focus,
  .search-filter-form select:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.1);
    outline: none;
    background-color: #fff;
  }

  .search-filter-form button {
    flex: 1 1 90%; /* Full width on mobile */
    min-height: 48px;
    padding: 12px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .search-filter-form button:hover {
    background-color: #8b00ccff;
	color: gold;
	border-radius: 13rem;
  }

  /* Desktop layout (768px and up) */
  @media (min-width: 768px) {
    .search-filter-form {
      gap: 12px;
    }
    
    .search-filter-form input {
      flex: 3 1 100px; /* Search field takes more space */
    }
    
    .search-filter-form select {
      flex: 2 1 150px;
    }
    
    .search-filter-form button {
      flex: 1 1 100px; /* Button stays compact */
    }
  }
</style>
 <br> <br>
<form method="GET" class="search-filter-form">
  <input 
    type="text" 
    name="search" 
    placeholder="Search posts..." 
    value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>"
    aria-label="Search posts"
  >
  
  <select name="category" aria-label="Filter by category">
    <option value="">All Categories</option>
    <option value="Investment" <?php echo (isset($_GET['category']) && $_GET['category'] == 'Investment') ? 'selected' : ''; ?>>Investment</option>
    <option value="Smart Property" <?php echo (isset($_GET['category']) && $_GET['category'] == 'Smart Property') ? 'selected' : ''; ?>>Smart Property</option>
    <option value="Land" <?php echo (isset($_GET['category']) && $_GET['category'] == 'Land') ? 'selected' : ''; ?>>Land</option>
  </select>

  <button type="submit">
    
    <span class="mobile-text">🔍 Search</span>
  </button>
</form>

<!-- gallery -->
<div class="gallery">
  <div class="container">
    <h2 class="w3l_head w3l_head1">Blog</h2>
    <div class="wthree_gallery_grids">
      <div class="row">
        <?php 
          if (empty($posts)) {
            echo "<div class='col-md-12 text-center'><b style='color:brown;'>Sorry, there are no posts yet :( New content will be uploaded soon!</b></div>";
          } else {
            foreach ($posts as $row) {
              $postId = $row["id"];
              $title = htmlspecialchars($row["title"]);
              $excerpt = substr(strip_tags($row["content"]), 0, 200) . "...";
              $content = nl2br(htmlspecialchars($row["content"]));
              $author = htmlspecialchars($row["author"]);
              $date = date("F j, Y", strtotime($row["date"]));

              echo '
              <div class="col-md-4">
                <div class="blog-card" style="border: 1px solid #ddd; padding: 20px; margin-bottom: 20px; border-radius: 8px; background: #fff; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                  <h4 style="color: #333; margin-bottom: 15px;">' . $title . '</h4>
                  <p style="color: #666; line-height: 1.6;">' . $excerpt . '</p>
                  <a href="single.php?id=' . $postId . '" class="btn btn-primary btn-sm" style="margin-bottom: 15px;">
                    <i class="fa fa-eye"></i> Read More
                  </a>
                  <br>
                  <h6 style="color: orange; margin: 0;">
                    <i class="fa fa-user"></i> ' . $author . ' 
                    <b style="color: #000;">|</b> 
                    <i class="fa fa-calendar"></i> ' . $date . '
                  </h6>
                </div>
              </div>

';
            }
          }
        ?>
      </div>
    </div>
    <script src="js/jzBox.js"></script>
  </div>
</div>

<!-- //gallery -->
<!-- footer -->
	
	<?php 
		include("footer.php");
	?>
