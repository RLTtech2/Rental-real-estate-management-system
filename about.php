<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="images/icon.png">
<title>Nyimbani Homes</title>
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
						<li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+254112285341">+(254) 112 285 341</a> </li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:tonnie24@gmail.com">Atlanticinc@co.ke</a></li>
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
							<li class="active"><a href="about.php"> <i class="fas fa-handshake"></i> About</a></li>
							<li><a href="portfolio.php">Portifolio</a></li>
							<li><a href="blog.php">Blog</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
						
					</nav>

					</div>
				</nav>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- about -->
	<div class="about-wthree">
			<h2 class="w3l_head w3l_head1">About Us</h2>
				<div class="furniture">
				<div class="container">
					<p>
						
					</p>
				</div>	
			</div>
			<!---Standards--->
			<section id="about-nyumbani" class="about-bubble-section">
				<div class="about-bubble">
					<h2>🏡 Welcome to Nyumbani</h2>
					<p>
					Nyumbani is a next-generation real estate platform built for transparency, security, and simplicity. 
					By leveraging Web3 technology, we empower property buyers, sellers, and managers to own and trade real estate assets 
					with confidence and blockchain-backed verification.
					</p>
					<p>
					Whether you're listing your first plot, managing multiple rentals, or exploring investment opportunities,
					Nyumbani connects you directly to verified listings with real-time smart contract interactions.
					</p>
					<p><strong>💡 Empowering property ownership. Decentralized. Secure. Yours 🫱🏾‍🫲🏼.</strong></p>
				</div>
			</section>

<!-----about us JS--->
	<script>
	//  floating effect
	const bubble = document.querySelector(".about-bubble");
	let direction = 1;

	setInterval(() => {
		const current = parseFloat(getComputedStyle(bubble).transform.split(',')[5]) || 0;
		const move = direction * 0.00;
		bubble.style.transform = `translateY(${current + move}px)`;

		if (Math.abs(current + move) > 5) direction *= -1;
	}, 80);
	</script>

		
	</div>
<!-- about -->
<!-- statistics -->
	<div class="statistics">
				<div class="container">
					<h3 class="w3l_head w3l_head1">Our Statistics</h3>
					<div class="statistics-grids">
						<div class="col-md-3 statistics-grid">
							<div class="counter numscroller"> 220</div>
							<h5>Active users</h5>
						</div>
						<div class="col-md-3 statistics-grid">
							<div class="counter numscroller">8</div>
							<h5>Partners</h5>
						</div>
						<div class="col-md-3 statistics-grid">
							<div class="counter numscroller">$10,529</div>
							<h5>Raised Fundings</h5>
						</div>
						<div class="col-md-3 statistics-grid">
							<div class="counter numscroller">2536</div>
							<h5>Questions</h5>
						</div>
                        <div class="col-md-3 statistics-grid">
							<div class="counter numscroller">105</div>
							<h5>Verified Locations</h5>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
<!-- //statistics -->
<!-- team -->

<section id="team" class="team-section">
    <h3 class="w3l_head w3l_head1">Our Team</h3> <br>
  <h2 class="team-title">👨‍💼 Meet the Nyumbani Team</h2>
  <div class="team-grid">
    <div class="team-card">
      <img src="images/me_time.png" alt="CEO" />
      <h3>John Doe</h3>
      <p>co-Founder & CEO</p>
      <div class="social-icons">
        <a href="#"><i class="fab fa-linkedin"></i></a>
        <a href="#"><i class="fab fa-x-twitter"></i></a>
        <a href="#"><i class="fab fa-pinterest"></i></a>
      </div>
    </div>

    <div class="team-card">
      <img src="images/Big_Dawg.png" alt="CTO" />
      <h3>David Leon</h3>
      <p>CTO & Blockchain Engineer</p>
      <div class="social-icons">
        <a href="#"><i class="fab fa-github"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
      </div>
    </div>

    <div class="team-card">
      <img src="images/rodri.jpeg" alt="Designer" />
      <h3>Amina Yusuf</h3>
      <p>UI/UX Designer</p>
      <div class="social-icons">
        <a href="#"><i class="fab fa-behance"></i></a>
        <a href="#"><i class="fab fa-dribbble"></i></a>
      </div>
    </div>
  </div>
</section>


<!----advisors and partners--->
<section id="partners" class="partners-section">
  <h2 class="partners-title">🤝 Our Partners & Advisors</h2>

  <!-- Swiper container -->
  <div class="swiper partners-slider">
    <div class="swiper-wrapper">

      <!-- Slide 1 -->
      <div class="swiper-slide partner-card">
        <img src="images/partner1.png" alt="Partner 1">
        <h3>Blockchain Africa</h3>
        <p>Advisory on smart contract regulation & blockchain law</p>
      </div>
<br><br>
      <!-- Slide 2 -->
      <div class="swiper-slide partner-card">
        <img src="images/partner2.png" alt="Partner 2">
        <h3>Kenya PropTech Alliance</h3>
        <p>Innovation and infrastructure partnerships</p>
      </div>
<br><br>
      <!-- Slide 3 -->
      <div class="swiper-slide partner-card">
        <img src="images/advisor1.jpg" alt="Advisor">
        <h3>Felix Mworia</h3>
        <p>Real Estate Investment Advisor</p>
      </div>

      <!-- Add more slides as needed -->
    </div>

    <!-- Swiper navigation -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper('.partners-slider', {
    loop: true,
    spaceBetween: 30,
    slidesPerView: 1,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      640: {
        slidesPerView: 1
      },
      768: {
        slidesPerView: 2
      },
      1024: {
        slidesPerView: 3
      }
    }
  });
</script>



 <!-- //team ---->

<h3 class="w3l_head w3l_head1">BlockChain Technology </h3>
<!-----about us intergrating blockchain---->
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4e44ce;
            --secondary: #2f80ed;
            --dark: #1a1a2e;
            --light: #e4e1e1ff;
            --success: #28a745;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        .about-section {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin: 4rem 0;
            position: relative;
        }
        
        .about-header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 3rem 2rem;
            text-align: center;
            position: relative;
        }
        
        .about-header h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }
        
        .about-header p {
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .web3-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(255, 255, 255, 0.2);
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.8rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            padding: 3rem;
        }
        
        .about-features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }
        
        .feature-card {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
        }
        
        .feature-icon {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }
        
        .feature-card h3 {
            margin-bottom: 0.5rem;
            color: var(--dark);
        }
        
        .blockchain-stats {
            background: var(--dark);
            color: white;
            padding: 3rem;
            border-radius: 12px;
            margin-top: 2rem;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
            text-align: center;
        }
        
        .stat-item h2 {
            font-size: 2.5rem;
            color: var(--secondary);
            margin-bottom: 0.5rem;
        }
        
        .connect-wallet-btn {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin: 2rem auto 0;
            transition: all 0.3s ease;
        }
        
        .connect-wallet-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(78, 68, 206, 0.4);
        }
        
        @media (max-width: 768px) {
            .about-content {
                grid-template-columns: 1fr;
                padding: 2rem 1rem;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="about-section">
            <div class="about-header">
                <div class="web3-badge">
                    <i class="fas fa-link"></i>
                    <span>Powered by Ethereum</span>
                </div> <br>
                <h1>Revolutionizing Real Estate with Blockchain</h1>
                <p>BlockEstate leverages Web3 technology to bring transparency, security, and efficiency to property transactions through smart contracts and decentralized ownership records.</p>
            </div>
            
            <div class="about-content">
                <div>
                    <h2>About Our Platform</h2>
                    <p>BlockEstate is the first decentralized real estate management system that enables peer-to-peer property transactions with immutable records on the blockchain. Our platform eliminates intermediaries, reduces costs, and provides unprecedented transparency in real estate dealings.</p>
                    
                    <div class="about-features">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h3>Secure Transactions</h3>
                            <p>All property transactions are secured by Ethereum smart contracts, ensuring tamper-proof records and automated execution.</p>
                        </div>
                        
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-file-contract"></i>
                            </div>
                            <h3>Smart Contracts</h3>
                            <p>Automated contract execution eliminates paperwork and reduces closing times from weeks to minutes.</p>
                        </div>
                        
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3>Tokenized Assets</h3>
                            <p>Fractional ownership through property NFTs enables new investment opportunities.</p>
                        </div>
                        
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <h3>Global Marketplace</h3>
                            <p>Borderless transactions open up international real estate markets to all investors.</p>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h2>Our Web3 Advantage</h2>
                    <p>By building on blockchain technology, BlockEstate solves the most pressing issues in real estate:</p>
                    <ul style="margin: 1rem 0 1rem 1.5rem;">
                        <li style="margin-bottom: 0.5rem;">No more title fraud with immutable records</li>
                        <li style="margin-bottom: 0.5rem;">Instant verification of property history</li>
                        <li style="margin-bottom: 0.5rem;">Automated escrow and payments</li>
                        <li style="margin-bottom: 0.5rem;">24/7 global market access</li>
                        <li>Reduced transaction costs (up to 90% savings)</li>
                    </ul>
                    
                    <div class="blockchain-stats">
                        <h3 style="text-align: center; margin-bottom: 1.5rem;">Blockchain Network Stats</h3>
                        <div class="stats-grid">
                            <div class="stat-item">
                                <h2 id="properties-listed">1,248</h2>
                                <p>Properties Listed</p>
                            </div>
                            <div class="stat-item">
                                <h2 id="transactions">5,736</h2>
                                <p>Transactions</p>
                            </div>
                            <div class="stat-item">
                                <h2 id="total-value">$342M</h2>
                                <p>Total Value</p>
                            </div>
                            <div class="stat-item">
                                <h2 id="users">12,894</h2>
                                <p>Active Users</p>
                            </div>
                        </div>
                    </div>
                    
                    <button class="connect-wallet-btn" id="connectWalletBtn">
                        <i class="fas fa-wallet"></i>
                        Connect Wallet
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Web3 Integration
        document.getElementById('connectWalletBtn').addEventListener('click', async () => {
            try {
                // Check if Web3 is installed
                if (window.ethereum) {
                    // Request account access
                    const accounts = await window.ethereum.request({ method: 'eth_requestAccounts' });
                    const account = accounts[0];
                    
                    // Update UI
                    document.getElementById('connectWalletBtn').innerHTML = 
                        `<i class="fas fa-check-circle"></i> Connected: ${account.substring(0, 6)}...${account.substring(38)}`;
                    
                    // You would typically fetch blockchain data here
                    console.log("Connected with address:", account);
                    
                    // Simulate fetching stats from blockchain
                    simulateBlockchainData();
                    
                } else {
                    alert('Please install MetaMask or another Web3 wallet to use this platform!');
                }
            } catch (error) {
                console.error("Error connecting wallet:", error);
            }
        });
        
        // Animated counter for stats
        function animateValue(id, start, end, duration) {
            const obj = document.getElementById(id);
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                const value = Math.floor(progress * (end - start) + start);
                obj.innerHTML = id === 'total-value' ? `$${value}M` : value.toLocaleString();
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }
        
        // Simulate fetching data from blockchain
        function simulateBlockchainData() {
            animateValue('properties-listed', 0, 1248, 2000);
            animateValue('transactions', 0, 5736, 2000);
            animateValue('total-value', 0, 342, 2000);
            animateValue('users', 0, 12894, 2000);
        }
        
        // Initialize with some animation
        window.addEventListener('load', () => {
            animateValue('properties-listed', 0, 1248, 1500);
            animateValue('transactions', 0, 5736, 1500);
            animateValue('total-value', 0, 342, 1500);
            animateValue('users', 0, 12894, 1500);
        });
    </script>
</body>
</html>





<!-- footer -->

	<?php
		include("footer.php");
	?>

