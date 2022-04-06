<html>
	<head>
		<link rel="icon" href="imgs/favicon.jpg" type="image/ico">
		<meta charset="utf-8">
		<title>Online Fitness Centre</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css2?family=Birthstone&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Akronim&family=Birthstone&display=swap" rel="stylesheet">
		
		<link href="home.css" rel="stylesheet">
		<script type="text/javascript">
			function form_validation()
			{
				var y=document.getElementById("exampleInputNumber1").value;
				var num=/^[0-9]{10,10}$/;
				if(!y.match(num)){
					alert("Contact number should be of 10 digits!");
					return false;
				}
				return true;
			}
		</script>
	</head>
	<body>
		<?php 
			include('navbar.php');
			if(isset($_POST['enquire'])){
				include('db_connect.php');
				$e_email = $_POST["e_email"];
				$e_name = $_POST["e_name"];
				$e_contact = $_POST["e_contact"];
				$e_query = $_POST["e_query"];

				$sql = "INSERT INTO enquiry (email, contact, name, enquiry) values ('$e_email', '$e_contact', '$e_name', '$e_query')";
				$result = mysqli_query($conn, $sql);

                if($result){
					echo "<div class='alert alert-success'>Query Posted Successfully. You will recieve a call within a Business Day</div>";
                } 
                else {
                    echo "<div class='alert alert-danger'>ERROR: Could not Post your Query ".mysqli_error($conn)."</div>"; //change
                }
			}
		?>

		<div class="container">

			<div class="animate"></div><hr>

			<div class="content">
				<figure class="text-center">
					<blockquote class="blockquote"><p>IT'S A SLOW PROCESS, BUT QUITTING WON'T SPEED IT UP!</p></blockquote>
					<figcaption class="blockquote-footer">Let's get started<cite class="cite" title="Source Title">TODAY</cite></figcaption>
				</figure>
				<p class="para">Our mission is to provide you with a total fitness experience designed to help you reach your goals. 
					A healthy lifestyle doesn’t start and stop at the gym—it starts with a plan, which is why we offer 
					solutions that incorporate <span>fitness</span>, <span>nutrition</span> and <span>recovery</span> to provide a 360 approach to your wellness journey. The first step begins with a coach, so contact us today to get started! We can’t wait to connect with you.</p>
			</div><hr>

			<h1 class="heading">What we offer to you..</h1>
			<div class="smallimgs">
				<a href="gym.php"><img src="Images\symbol1.jpg" class="smallimg" alt="Gym"></a>
				<a href="yoga.php"><img src="Images\symbol2.jpg" class="smallimg" alt="Yoga"></a>
				<a href="ZumbaVideoPage.php"><img src="Images\symbol3.jpg" class="smallimg" alt="Zumba"></a>
			</div>

			<div class="secondcontent">
				<a href="gym.php"><p class="para"><span class="cite">=></span>Gymming: There’s no secret formula. I lift heavy, work hard, and aim to be the best.</p></a>
				<a href="yoga.php"><p class="para"><span class="cite">=></span>Yoga: Yoga does not just change the way we see things, it transforms the person who sees.</p></a>
				<a href="ZumbaVideoPage.php"><p class="para"><span class="cite">=></span>Zumba: Zumba is a great way to exercise and fellowship with other people in a fun atmosphere.</p></a>
				<h4>(Thwo plans for you: Monthly, Yearly)</h4>
			</div><hr>

			<h1 class="heading">Member Benefits</h1>

			<div id="blockcontainer">
				<div class="blockdiv">
					<p class="para">1) It is always open 24/7, work from home and provides an exceptional workout at an exceptional price!</p>
				</div>
				<div class="blockdiv">
					<p class="para"> 2) It is the best solution, when it comes to anywhere access. No matter where you go, you will find us!</p>
				</div>
				<div class="blockdiv">
					<p class="para"> 3) Our Personal Trainers ensure you perform exercises safely while giving you the best results.</p>
				</div>
			</div><hr>

			<details>
				<summary>Have Some Enquiry? <span class="cite">Click Here</span></summary>
				<form action="" method="POST" onsubmit="return(form_validation());">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Email address</label>
						<input type="email" name="e_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
						<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
					</div>
					<div class="mb-3">
						<label for="exampleInputName1" class="form-label">Name</label>
						<input type="text" name="e_name" class="form-control" id="exampleInputName1" required>
					</div>
					<div class="mb-3">
						<label for="exampleInputNumber1" class="form-label">Contact Number</label>
						<input type="text" name="e_contact" class="form-control" id="exampleInputNumber1" step="1" required>
					</div>
					<div class="mb-3">
						<label for="exampleInputEnquiry1" class="form-label">Type Your Enquiry Here</label>
						<textarea class="form-control" name="e_query" id="exampleInputEnquiry1" required></textarea>
					</div>
					<input type="submit" class="btn btn-info" name="enquire">
				</form>
			</details>
		</div>
	</body>
</html>