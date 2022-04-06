<html>
    <head>
        <title>Enroll</title>
        <link rel="icon" href="imgs/favicon.jpg" type="image/ico">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <style>
            .col1{padding: 25px;}
            .col{
                font-size: large;
            }
            .tdiv{
                background-color: azure;
                border-radius: 20px;
                padding: 30px;
                margin: 30px;
            }
            .opt{padding-left: 10%;}
            input{
                margin: 10px;
            }
        </style>

    </head>
    <body>
        <?php
            include('navbar.php'); 
            require('db_connect.php');
            include('check_enroll.php'); ?>
            <div class="container">
        <?php
            if(isset($_POST['getp'])){
                $course = $_POST['course'];
                $plan = $_POST['plan'];
                $sql = "SELECT * FROM course WHERE name = '$course'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                if($plan == 'monthly'){
                    echo "<div class='alert alert-success'>Monthly Amount For ". $course ." is Rs.".$row['fees_monthly']."</div>";
                }
                else{
                    echo "<div class='alert alert-success'>Yearly Amount For ". $course ." is Rs.".$row['fees_yearly']."</div>";
                }
            }

            if(isset($_POST['enroll'])) {
                $course = $_POST['course'];
                $plan = $_POST['plan'];
                if(checkEnroll($course)){
                    echo"<div class='alert alert-danger'>You are already enrolled in this course</div>";
                }
                else{
                    $id = $_SESSION['login_user'];
                    $sql1 = "SELECT course_id FROM course WHERE name = '$course'";
                    $result1 = mysqli_query($conn, $sql1);
                    $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
                    $cid = $row1['course_id'];

                    $start = date("Y-m-d");
                    if($plan == 'monthly'){
                        $end = date("Y-m-d", strtotime('+1 month', strtotime($start)));
                    }
                    else{
                        $end = date("Y-m-d", strtotime('+1 year', strtotime($start)));
                    }

                    $sql = "INSERT INTO ENROLL(user_id, course_id, start_date, end_date)
                    VALUES ('$id','$cid','$start','$end')";
                    $result = mysqli_query($conn, $sql);
                    if($result){

                        $sql = "SELECT email FROM user WHERE user_id='$id'";
                        $res = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($res);

                        $to = $row['email'];
                        $subject = "Enrollment in Online Fitness Center";
                        
                        $message = "<b>You are Successfully Enrolled for  <i>".$course."</i>.</b>";
                        $message .= "<p>Your Membership is Already Activated and will be Valid till ". $end.".</p>";
                        
                        $header = "From:fitness.center151@gamil.com \r\n";
                        $header .= "MIME-Version: 1.0\r\n";
                        $header .= "Content-type: text/html\r\n";
                        
                        $retval = mail ($to,$subject,$message,$header);
                        
                        if( $retval == true ) {
                            echo "<div class='alert alert-info'>You Are Enrolled Successfully. Check Email for Futher Details.</div>";
                        }else {
                            echo "<div class='alert alert-danger'>ERROR: Email</div>";
                        }
                    }
                    else{
                        echo "<div class='alert alert-danger'>ERROR: Could not Enroll You</div>";
                    }
                }
            }
            
        ?>
   
        <form action="" method="POST" class="tdiv">
            <output class="row"></output>
            <div class="row">
                <div class="col col1">
                    <div class="alert alert-info">Choose your Preferred Course</div>
                    <div class="opt">
                        <input type="radio" name="course" id="yoga" value="Yoga" checked>
                        <label for="yoga">Yoga</label><br>
                        <input type="radio" name="course" value="Gym" id="gym">
                        <label for="gym">Gym</label><br>
                        <input type="radio" name="course" value="Zumba" id="zumba">
                        <label for="zumba">Zumba</label><br><br>
                    </div>
                    
                </div>

                <div class="col col1">
                    <div class="alert alert-info">Choose your Preferred Plan </div>
                    <div class="opt">
                        <input type="radio" name="plan" id="monthly" value="monthly" checked>
                        <label for="monthly">Monthly</label><br>
                        <input type="radio" name="plan" id="yearly" value="yearly">
                        <label for="yearly">Yearly</label><br><br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input id="getp" type="submit" class="btn btn-primary" name="getp" value="Get Price">
                </div>
                <div class="col">
                    <input type="submit" name="enroll" id="submit" class="btn btn-primary" value="Enroll">
                </div>
            </div>
        </form>
    </div>
        
    </body>
</html>