<html>
    <head>
    <link rel="icon" href="imgs/favicon.jpg" type="image/ico">
        <title>Yoga</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Birthstone&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
        .pointscontainer
        {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 0;
        }
        .asideimg
        {
            border-radius: 50%;
        }
    </style>
    </head>
    <body>
        <?php
            include('navbar.php'); 
            include('check_enroll.php');
            if (checkEnroll('yoga') == false){
                header("location: home.php");
            };
        ?>

        <figure class="text-center">
        <blockquote class="blockquote">
            <p>True yoga is not about the shape of your body, but the shape of your life. Yoga is not to be performed; it is to be lived. Yoga doesn’t care about what you have been; it cares about the person you are becoming.</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            Yoga is designed for a vast and profound purpose, and for it to be truly called yoga<cite title="Source Title">,its essence must be embodied.</cite>
        </figcaption>
    </figure>
        <hr>
    <figure class="text-center">
        <blockquote class="blockquote">
            <p>Things to remember before you start</p>
        </blockquote>
        <figcaption class="blockquote-footer">A peep into the world of<cite title="Source Title"> YOGA.</cite></figcaption>
    </figure>
    <div class="pointscontainer">
        <div class="card" style="width: 30rem;">
            <div class="card-header">KEY POINTS:</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">The right clothes and accessories.</li>
                    <li class="list-group-item">Eat on time.</li>
                    <li class="list-group-item">Leave your phone and footwear outside.</li>
                    <li class="list-group-item">Do not quit impulsively.</li>
                    <li class="list-group-item">Do it for yourself and allow yourself to relax.</li>
                    <li class="list-group-item">Pay attention to your breath.</li>
                    <li class="list-group-item">Push yourself, but do not force a pose.</li>
                    <li class="list-group-item">Do not compare.</li>
                    <li class="list-group-item">Yoga can be intense, but it doesn't have to be.</li>
                    <li class="list-group-item">You do not have to be ultra flexible.</li>
                </ul>
        </div>
    </div>
    <hr>
    <hr>
    <figure class="text-center">
        <blockquote class="blockquote">
            <p>All right! We’ve covered everything from what you need for a class to the practice itself, and some basic terms. But what will yoga do?</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            Yoga Will Improve Not Only Your Health, But Also The Quality Of Life.
        </figcaption>
    </figure>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imgs\1.jpg" class="d-block w-100" alt="Asana">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Asana</h5>
                    <p>A yoga pose or posture is called an asana. It is a Sanskrit word.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs\2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>A full yoga breath</h5>
                    <p>A typical full yoga breath is when you inhale deeply, but without any force. The breath first goes into the lower lungs, thereby allowing your abdomen to rise visibly. It then fills the mid-portion of the lungs, where you will feel the sides of the ribs expand. You finally take the air to the top of the lungs, thereby feeling your chest rise. Once you have filled your lungs to their full capacity, exhale slowly, and relax.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pranayama</h5>
                    <p>Pranayama or life force comprises of yogic breathing techniques. These are used as effective tools for both stress management and in the preparation of the mind for meditation.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs\4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Meditation</h5>
                    <p>Through meditation, you attain peace of mind. The techniques in this practice can be used to develop concentration, increase your focus and attention span, and relax completely. With meditation, you can overcome a restless mind with ease.</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <hr>

    <div class="container">
        <div class="card" style="width:600px;">
            <div class="card-body">
                <h5 class="card-title">Yoga</h5>
                <h6 class="card-subtitle mb-2 text-muted">Full Body</h6>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/brjAjq4zEIE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <hr><p class="card-text">Equipments used: Yoga Mat</p>
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