<!doctype html>
<html lang="en">
	<head>
    	<!-- Scripts for adobe typekit fonts -->
    	<script src="//use.typekit.net/fgc6foa.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
		<meta charset="utf-8">
		<title>MrMadsenMalmo</title>
        <link href="css/style.css" rel="stylesheet">
	</head>
	<body>
        <div class="center site">
            <div class="content1">
                <h1 class="name">Fredrik A. Madsen-Malmo</h1>
                <div class="short-border"></div>
                <h3 class="title">Web Designer &amp; Developer</h3>
                <!--<div class="nav-button">
                    <span class="nav-button-text">Work</span>
                </div>-->
                <div class="nav-button" data-ref="#about">
                    <span class="nav-button-text">About</span>
                </div>
                <div class="nav-button" data-ref="#contact">
                    <span class="nav-button-text">Contact</span>
                </div>
            </div>
        </div>
        <div class="center site" id="about">
            <div class="content2">
                <h1 class="about">About Me</h1>
                <div class="short-border"></div>
                <div class="about-info clearfix">
                	<img src="http://placehold.it/420x258" alt="me-img">
                    <div class="about-text">
                        <p>I'm a 15 year old boy who likes to experiment with web design and development on my spare time. I'm currently studying at a high school in Norway. I began showing interest in programming at the age of 13, and I've been working on improving my skills since.</p>
                        <p>If you want help on a project or need a basic website made, feel free to contact me using the form below.</p>
                    </div>
                </div>
                <div class="short-border"></div>
                <div class="contact-icons">
                    <a href="#"><img src="./img/fb.png"></a><!-- Facebook -->
                	<a href="#"><img src="./img/tw.png"></a><!-- Twitter -->
                    <a href="#"><img src="./img/gh.png"></a><!-- GitHub -->
                </div>
            </div>
        </div>
        <div class="center site" id="contact">
            <div class="content3">
                <h1 class="about">Contact</h1>
                <div class="short-border"></div>
                <form method="post" action="index.php"> <!-- Going to move this over to a dedicated page later -->
                	<input type="text" placeholder="Enter name.." name="name" id ="name">
                    <input type="email" placeholder="Enter email.." name="email" id="email">
                    <textarea name="message" placeholder="Enter message.." name="message" id="message"></textarea>
                    <button type="submit" name="submit"><span class="submit">Submit</span></button>
                </form>
            </div>
        </div>
        
        <img id="arrow" src="img/arrow-up2.png">
        
        <?php
			$raw_name = $_POST["name"];
			$raw_email = $_POST["email"];
			$raw_message = $_POST["message"];
			
			$subject = $raw_name . " <" . $raw_email . ">"; 

			if($raw_name != "" && $raw_email != "" && $raw_message != "") {
				mail("email", $subject, $raw_message);
			}	
		?>
        <script src="jquery.js" type="application/javascript"></script>
        <script src="script.js" type="application/javascript"></script>
    </body>
</html>