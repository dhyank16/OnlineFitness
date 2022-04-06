<html>
    <head>
        <title>Gym</title>
        <link rel="icon" href="imgs/favicon.jpg" type="image/ico">
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
            margin: 0;
        }   
        .dietcontainer
        {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 0;
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
            if (checkEnroll('gym') == false){
                header("location: home.php");
            };
        ?>

        <figure class="text-center">
        <blockquote class="blockquote">
            <p>The last three or four reps is what makes the muscle grow.</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            This area of pain divides the champion from someone else who is not a<cite title="Source Title"> champion.</cite>
        </figcaption>
    </figure>
        <hr>
    <figure class="text-center">
        <blockquote class="blockquote">
            <p>Diet Plan</p>
        </blockquote>
        <figcaption class="blockquote-footer">Follow the same EVERY<cite title="Source Title"> WEEK.</cite></figcaption>
    </figure>
    <div class="dietcontainer">
        <div class="card" style="width: 18rem;">
            <div class="card-header">Monday</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Breakfast:</strong> Scrambled eggs with mushrooms and oatmeal.</li>
                    <li class="list-group-item"><strong>Snack:</strong> Low-fat cottage cheese with blueberries.</li>
                    <li class="list-group-item"><strong>Lunch:</strong> Venison burger, white rice and broccoli.</li>
                    <li class="list-group-item"><strong>Snack:</strong> Protein shake and a banana.</li>
                    <li class="list-group-item"><strong>Dinner:</strong> Salmon, quinoa and asparagus.</li>
                </ul>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-header">Tuesday</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Breakfast:</strong> Protein pancakes with light-syrup, peanut butter and raspberries.</li>
                    <li class="list-group-item"><strong>Snack:</strong> Hard-boiled eggs and an apple.</li>
                    <li class="list-group-item"><strong>Lunch:</strong> Sirloin steak, sweet potato and spinach salad with vinaigrette.</li>
                    <li class="list-group-item"><strong>Snack:</strong> Protein shake and walnuts.</li>
                    <li class="list-group-item"><strong>Dinner:</strong> Ground turkey and marinara sauce over pasta.</li>
                </ul>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-header">Wednesday</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Breakfast:</strong> Chicken sausage with egg and roasted potatoes.</li>
                    <li class="list-group-item"><strong>Snack:</strong> Greek yogurt and almonds.</li>
                    <li class="list-group-item"><strong>Lunch:</strong> Turkey breast, basmati rice and mushrooms.</li>
                    <li class="list-group-item"><strong>Snack:</strong> Protein shake and grapes.</li>
                    <li class="list-group-item"><strong>Dinner:</strong> Mackerel, brown rice and salad leaves with vinaigrette.</li>
                </ul>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-header">Thursday</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Breakfast:</strong> Ground turkey, egg, cheese and salsa in a whole-grain tortilla.</li>
                    <li class="list-group-item"><strong>Snack:</strong> Yogurt with granola.</li>
                    <li class="list-group-item"><strong>Lunch:</strong> Chicken breast, baked potato, sour cream and broccoli.</li>
                    <li class="list-group-item"><strong>Snack:</strong> Protein shake and mixed berries.</li>
                    <li class="list-group-item"><strong>Dinner:</strong> Stir-fry with chicken, egg, brown rice, broccoli, peas and carrots.</li>
                </ul>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-header">Friday</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Breakfast:</strong> Blueberries, strawberries and vanilla Greek yogurt on overnight oats.</li>
                    <li class="list-group-item"><strong>Snack:</strong> Jerky and mixed nuts.</li>
                    <li class="list-group-item"><strong>Lunch:</strong> Tilapia fillets with lime juice, black and pinto beans and seasonal veggies.</li>
                    <li class="list-group-item"><strong>Snack:</strong> Protein shake and watermelon.</li>
                    <li class="list-group-item"><strong>Dinner:</strong> Ground beef with corn, brown rice, green peas and green beans.</li>
                </ul>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-header">Saturday</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Breakfast:</strong> Ground turkey and egg with corn, bell peppers, cheese and salsa.</li>
                    <li class="list-group-item"><strong>Snack:</strong> Can of tuna with crackers.</li>
                    <li class="list-group-item"><strong>Lunch:</strong> Tilapia fillet, potato wedges and bell peppers.</li>
                    <li class="list-group-item"><strong>Snack:</strong> Protein shake and pear.</li>
                    <li class="list-group-item"><strong>Dinner:</strong> Diced beef with rice, black beans, bell peppers, cheese and pico de gallo.</li>
                </ul>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-header">Sunday</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Breakfast:</strong> Eggs sunny-side up and avocado toast.</li>
                    <li class="list-group-item"><strong>Snack:</strong> Protein balls and almond butter.</li>
                    <li class="list-group-item"><strong>Lunch:</strong> Pork tenderloin slices with roasted garlic potatoes and green beans.</li>
                    <li class="list-group-item"><strong>Snack:</strong> Protein shake and strawberries.</li>
                    <li class="list-group-item"><strong>Dinner:</strong> Turkey meatballs, marinara sauce and parmesan cheese over pasta.</li>
                </ul>
        </div>
    </div>
    <hr>

    <div class="container">
        <div class="card" style="width:430px;">
            <div class="card-body">
                <h5 class="card-title">Cardio</h5>
                <h6 class="card-subtitle mb-2 text-muted">Full Body</h6>
                <iframe width="400" height="315" src="https://www.youtube.com/embed/XGtjACeyHtc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <hr><p class="card-text">Equipments used: Skipping Rope, Yoga Mat</p>
                <p class="card-text">Difficulty Level:</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                    </div>
                </div>
            </div>
        </div>
        <div class="card" style="width:430px;">
            <div class="card-body">
                <h5 class="card-title">Shoulder and Arms</h5>
                <h6 class="card-subtitle mb-2 text-muted">Shoulder and Arms</h6>
                <iframe width="400" height="315" src="https://www.youtube.com/embed/X-xyd4krBf8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <hr><p class="card-text">Equipments used: Adjustable Dumbbells</p>
                <p class="card-text">Difficulty Level:</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    </div>
                </div>
            </div>
        </div>
        <div class="card" style="width:430px;">
            <div class="card-body">
                <h5 class="card-title">Back</h5>
                <h6 class="card-subtitle mb-2 text-muted">Back</h6>
                <iframe width="400" height="315" src="https://www.youtube.com/embed/s8taXR3mYa8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <hr><p class="card-text">Equipments used:  Bar and Weights, Adjustable Dumbbells</p>
                <p class="card-text">Difficulty Level:</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                    </div>
                </div>
            </div>
        </div>
        <div class="card" style="width:430px;">
            <div class="card-body">
                <h5 class="card-title">Chest and Triceps</h5>
                <h6 class="card-subtitle mb-2 text-muted">Chest and Triceps</h6>
                <iframe width="400" height="315" src="https://www.youtube.com/embed/3DuMwZYwvrc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <hr><p class="card-text">Equipments used: Bar and Weights, Adjustable Dumbbells</p>
                <p class="card-text">Difficulty Level:</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                    </div>
                </div>
            </div>
        </div>
        <div class="card" style="width:430px;">
            <div class="card-body">
                <h5 class="card-title">Abs</h5>
                <h6 class="card-subtitle mb-2 text-muted">Abs</h6>
                <iframe width="400" height="315" src="https://www.youtube.com/embed/usAghy-j-QM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <hr><p class="card-text">Equipments used: Yoga Mat, Adjustable Dumbbells</p>
                <p class="card-text">Difficulty Level:</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                    </div>
                </div>
            </div>
        </div>
        <div class="card" style="width:430px;">
            <div class="card-body">
                <h5 class="card-title">Legs</h5>
                <h6 class="card-subtitle mb-2 text-muted">Legs</h6>
                <iframe width="400" height="315" src="https://www.youtube.com/embed/0kL8IPL8QBw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <hr><p class="card-text">Equipments used: Bar and Weights</p>
                <p class="card-text">Difficulty Level:</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>