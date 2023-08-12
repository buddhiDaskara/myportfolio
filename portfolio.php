

<!DOCTYPE html>
<html>
    <head>
        
        <title>Photography Site</title>
        <meta name = "viewport" content = "width=device-width, intial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="main1.css">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		
		
    </head>
    <body>
        
        <!-- header -->
        <header class = "header">
			
            <div class = "nav-section">
                <div class = "brand-and-navBtn">
                    
                    <span class = "navBtn flex">
                        <i class = "fas fa-bars"></i>
                    </span>
                </div>

                <!-- navigation menu -->
                <nav class = "top-nav">
                    <ul>
                        <li><a href = "#">Home</a></li>
                        <li><a href = "#about">About</a></li>
						<li><a href = "#gallery">Gallery</a></li>
                        <li><a href = "#blog">Blog</a></li>
                        <li><a href = "#contact">Contact</a></li>
    					<li><a href = "myprojects.php">My Projects</a></li>
 					</ul>
                </nav>
                <span class = "search-icon">
                    <i class = "fas fa-search"></i>
                </span>
            </div>
			

            <div class = "container about">
                <div class = "about-content">
                    <div class = "about-img flex">
                        <img src = "images/C.png" alt = "photographer img">
                    </div>
                    <h2>I'm <span>Buddhini</span> Daskara</h2>
                    <h3>Photographer</h3>
                </div>

            </div>
			
			<!-- Form -->
			<?php
$name = $email = $message = "";
$nameErr = $emailErr = $messageErr = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Validate and Sanitize name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = sanitizeInput($_POST["name"]);
        if (!preg_match("/^[a-zA-Z]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
    // Validate and Sanitize email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = sanitizeInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    // Validate and Sanitize message
    if (empty($_POST["message"])) {
        $messageErr = "Message is required";
    } else {
        $message = sanitizeInput($_POST["message"]);
    }
}

// Function to sanitize input
function sanitizeInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
?>

			
			<div class = "Container">
			
<h1>Contact Me</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($name); ?>">
    <span class="error"><?php echo $nameErr; ?></span>
    <br><br>
    <label for="email">Email:</label>
    <input type="text" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>">
    <span class="error"><?php echo $emailErr; ?></span>
    <br><br>
    <label for="message">Message:</label>
    <textarea name="message" id="message" rows="5" cols="40"><?php echo htmlspecialchars($message); ?></textarea>
    <span class="error"><?php echo $messageErr; ?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

			</div>
			
			
        </header>
        <!-- end of header -->

        <!-- main -->
		<!--about-->
		<div id="about">
			<div class="container">
				<div class="row">
					<div class="about-col-1">
						<img src="images/p5.jpg">
					</div>
					<div class="about-col-2">
						<div class="transbox">
							<h1>About me</h1>
							<p><b>Hello, my name is Buddhini Daskara, and I am a photographer. I have always been passionate about capturing moments and telling stories through the lens of a camera. Photography is not just a profession for me; it is a way of expressing my creativity and connecting with the world around me.
							Photography is not just about taking pictures; it is about capturing moments that become cherished memories for a lifetime. I am honored to be a part of people's journeys and to be able to freeze time through my photographs.
							Thank you for taking the time to learn a little about me. I look forward to capturing moments and creating meaningful photographs that resonate with you and others.</b></p>						
						</div>
					</div>
					<div class="about-quotes">
							<blockquote>
								“What I like about photographs is that they capture a moment that’s gone forever, impossible to reproduce.”
								<span>-Karl Lagerfeld-</span>
							</blockquote>
					</div>
				</div>
				
				
			</div>
			
		</div>
		<!--end of the about-->

	<!--Gallery-->	
	<div id="gallery">		
        <section class = "section-one">
            <div class = "container">
                <div class = "sec-one-left">
                    <!-- image here -->
                    <div>
                        <h3>May the hinges of friendship never rust, nor the wings of love lose a feather</h3>
                        <p>In the captivating world of photography, a feather photograph captures the delicate and ethereal beauty of nature's most graceful creations. With its intricate details, soft textures, and gentle hues, a feather photograph embodies a sense of serenity and elegance.
                        Through careful composition and lighting, the photographer skillfully brings out the subtle nuances of the feather, showcasing its unique patterns, delicate contours, and feathery wisps. Each feather becomes a mesmerizing work of art, with its intricate barbs and vanes creating a visual symphony of lines and curves.</p>
                        <a href = "#" class = "btn">view all</a>
                    </div>
                </div>

                <div class = "sec-one-right">
                    <div class = "work-content">
						<h3>AMAZING TEAM WORK WITH PROFESSIONAL PHOTOGRAPHER</h3>
                        <p>In our remarkable display of teamwork, we joined forces with a highly skilled professional photographer to create awe-inspiring imagery that surpassed all expectations. From the initial planning stages to the final execution, our collective efforts seamlessly blended creativity, expertise, and coordination.<br>
						The project began with meticulous brainstorming sessions where our team, comprising individuals from diverse backgrounds, brought forth unique perspectives and ideas. Through open communication and active listening, we merged our visions with the photographer's expertise, ensuring a comprehensive understanding of the desired outcome.<br>
						This experience not only highlighted the power of collaboration but also strengthened our belief in the transformative potential of teamwork. The synergy between our team members and the professional photographer elevated the project to new heights, demonstrating the remarkable outcomes that can be achieved when talented individuals come together and work towards a common goal.
						
                        
							<ul>
								<li>Potrait Photography</li>
								<li>landscape Photography</li>
								<li>Wildlife Photography</li>
								<li>Fashion Photography</li>
								<li>Street Photography</li>
								<li>Sports Photography</li>
								<li>Documentry Photography</li>
								<li>Product Photography</li>
							</ul>
						</p>
						
                        <button class="view-all-button">view all</button>
							
						
                    </div>
                    <div class = "work-imgs">
                        <div class = "work-img-1">
                            <!--image here-->
                        </div>
                        <div class = "work-img-2">
                            <!-- image here -->
                        </div>
                    </div>
                    <h3>"If you truly love nature, you will find beauty everywhere."</h3>
                </div>
            </div>
        </section>
	<!--hover image-->
		<div class="ChangeImage-1">
			<img src="images/h1.jpeg" id="myImage" onmouseover="ChangeImage(1, this)" onmouseout="ChangeImage(2, this)">		
		</div>
	</div>
	<!--end of the gallery-->
	
	<!--Blog-->
	<div id="blog">
        <section class = "section-two">
            <div class = "container">
                <h2>FOLLOW ON INSTAGRAM</h2>
                <span>@buddhi_photographer</span>
                <div class = "insta-imgs">
                    <div>
                        <img src = "images/p1.jpg">
                        <div class = "icon-overlay flex">
                            <i class = "fab fa-instagram"></i>
                        </div>
                    </div>
                    <div>
                        <img src = "images/p2.jpg">
                        <div class = "icon-overlay flex">
                            <i class = "fab fa-instagram"></i>
                        </div>
                    </div>
                    <div>
                        <img src = "images/p3.jpg">
                        <div class = "icon-overlay flex">
                            <i class = "fab fa-instagram"></i>
                        </div>
                    </div>
                    <div>
                        <img src = "images/p4.jpg">
                        <div class = "icon-overlay flex">
                            <i class = "fab fa-instagram"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!--Slider-->
		<div class="wrapper">
			<ul class="flowers">
				<li class="card">
					<div class="img1"><img src="images/f1.jpg" alt="img"></div>
				</li>
				<li class="card">
					<div class="img2"><img src="images/f2.jpeg" alt="img"></div>
				</li>
				<li class="card">
					<div class="img3"><img src="images/f3.jpg" alt="img"></div>
				</li>
				<li class="card">
					<div class="img4"><img src="images/f4.jpg" alt="img"></div>
				</li>
				<li class="card">
					<div class="img5"><img src="images/f5.jpg" alt="img"></div>
				</li>
				<li class="card">
					<div class="img6"><img src="images/f6.jpg" alt="img"></div>
				</li>
				<li class="card">
					<div class="img7"><img src="images/f7.jpg" alt="img"></div>
				</li>
				<li class="card">
					<div class="img8"><img src="images/f8.jpg" alt="img"></div>
				</li>
				<li class="card">
					<div class="img9"><img src="images/f9.jpg" alt="img"></div>
				</li>
				<li class="card">
					<div class="img10"><img src="images/f10.jpg" alt="img"></div>
				</li>
				<li class="card">
					<div class="img11"><img src="images/f11.jpg" alt="img"></div>
				</li>
				<li class="card">
					<div class="img12"><img src="images/f12.jpg" alt="img"></div>
				</li>
				<li class="card">
					<div class="img13"><img src="images/f13.jpg" alt="img"></div>
				</li>
			</ul>
		</div>
        
	</div>
<!--end of the blog-->
<!-- end of main -->

        <!-- footer -->
        <footer class = "contact" id="contact">
            <div class = "contact-container container">
                <div>
                    <h2>Buddhi_D</h2>
                    <p>Photographers of nature often spend hours, days, or even months patiently waiting for the perfect moment to capture a sunrise, a rare animal sighting, or the fleeting beauty of a blooming flower. It requires a deep appreciation for nature, keen observation skills, and a willingness to embrace the unpredictable.</p>
                </div>
                <div>
                    <h3>Free Subscription!</h3>
                    <p>Unlock a world of limitless possibilities with our free subscription! Join now and gain access to exclusive content, exciting updates, and a wealth of knowledge at no cost. Don't miss out on this incredible opportunity to expand your horizons and indulge in a premium experience without spending a dime. Sign up today and embrace the freedom of a complimentary subscription!</p>
					
                    <div class = "subs">
                        <i class = "fas fa-envelope"></i>
                        <input type = "email" id = "email" placeholder="Email Address">
                        <button type = "submit">SUBSCRIBE</button>
                    </div>
                </div>
				<h3>Contact-071836663</h3>
				 <div class = "social-icons">
					
					<i class="fa-brands fa-facebook"></i>
					<i class="fa-brands fa-twitter"></i>
					<i class="fa-brands fa-youtube"></i>
					<i class="fa-brands fa-instagram"></i>
					
                </div>
            </div>
            <p>&copy; Copyright Buddhi_D</p>
        </footer>
        <!-- end of footer -->
      <script src="script1.js"></script> 
    </body>
</html>