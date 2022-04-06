<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="imgs/favicon.jpg" type="image/ico">
	<meta charset="utf-8">
	<title>Zumba Plan</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Birthstone&display=swap" rel="stylesheet">
	<style>
		body
		{
			border: 10px double black;
		}
		.card
		{
			margin: 10px;
		}
		.container
		{
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
		}	

		img
		{
			border-radius: 50%;
		}
	</style>
</head>
<body>
		<?php
            include('navbar.php'); 
            include('check_enroll.php');
            if (checkEnroll('zumba') == false){
                header("location: home.php");
            };
        ?>
	<figure class="text-center">
  		<blockquote class="blockquote">
    		<p>Zumba offers a new approach to fitness and dance, and encompasses the  same love and passion for dance that we all do.</p>
  		</blockquote>
  		<figcaption class="blockquote-footer">
  			When you’re in a Zumba class, it’s like you’re turning on the radio, and discovering new <cite title="Source Title">songs and rhythms.</cite>
  		</figcaption>
	</figure>
	<div class="container">
		<div class="card border-secondary mb-3" style="max-width:30rem;">
		  	<div class="card-header">Nwebies Tip</div>
		  	<div class="card-body text-secondary">
		    	<p class="card-text">Certified Zumba instructor Michele Schmidt explains that beginners and students of all fitness levels are welcome in all classes. Students should come to class with an open mind and be ready to sweat, move, and shake their booty! New students may want to arrive to class a few minutes early and let their instructor know they're a newbie, so that he or she can provide any additional cues during the class. Most new students tend to stand in the back, but Michele recommends standing near the front or in a spot that has a good view of the instructor. It typically takes a student three classes to feel like they "get" movements and routines. Michele says, "Instructors also have their own unique styles, so it's important to try out a few in your area to find one that jives with you.</p>
		  	</div>
		</div>
		<div class="card border-secondary mb-3" style="max-width:30rem;">
		  	<div class="card-header">How often should you take zumba?</div>
		  	<div class="card-body text-secondary">
		    	<p class="card-text">Michele recommends "starting out twice a week so your body and mind will begin to remember routines, and you'll build your strength and endurance." Students that get really addicted may attend class from three to five times a week. However, like any fitness program, it's good to balance out cardio classes with strength training, stretching (yoga), and rest days.</p>
		  	</div>
		</div>
		<div class="card border-secondary mb-3" style="max-width:30rem;">
		  	<div class="card-header">Will zumba help you lose weight?</div>
		  	<div class="card-body text-secondary">
		    	<p class="card-text">Because Zumba is an intense cardio workout, it can help a person lose weight as well as increase muscle tone. Typically an hour long, "classes include interval training and strengthening movements (like squats and lunges) to maximize your calorie and fat burn, as well as to improve overall body tone," Michele says. "Proper diet and nutrition is also an important part of any weight loss program — many Zumba teachers have said that 'you can't out-dance a bad diet!'"</p>
		  	</div>
		</div>
		<div class="card border-secondary mb-3" style="max-width:30rem;">
		  	<div class="card-header">Nwebies Tip</div>
		  	<div class="card-body text-secondary">
		    	<p class="card-text">Certified Zumba instructor Michele Schmidt explains that beginners and students of all fitness levels are welcome in all classes. Students should come to class with an open mind and be ready to sweat, move, and shake their booty! New students may want to arrive to class a few minutes early and let their instructor know they're a newbie, so that he or she can provide any additional cues during the class. Most new students tend to stand in the back, but Michele recommends standing near the front or in a spot that has a good view of the instructor. It typically takes a student three classes to feel like they "get" movements and routines. Michele says, "Instructors also have their own unique styles, so it's important to try out a few in your area to find one that jives with you.</p>
		  	</div>
		</div>
	</div>
	<hr>

    <div class="container">
		<div class="card" style="width:600px;">
		 	<div class="card-body">
			    <h5 class="card-title">Zumba</h5>
			    <h6 class="card-subtitle mb-2 text-muted">Full Body</h6>
			    <iframe width="560" height="315" src="https://www.youtube.com/embed/o5soep1e8Ik" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			    <p class="card-text">Difficulty Level:</p>
			    <div class="progress">
	  				<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
	  				</div>
				</div>
	  		</div>
		</div>
	</div>
</body>
</html>