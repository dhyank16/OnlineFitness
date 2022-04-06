<link href="navbar.css" rel="stylesheet">
<div class="nav flexbox navbg">
    <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
    </li>
    
    <?php
        require("db_connect.php");
        session_start();
        if(isset($_SESSION['login_user'])){
            $usr = $_SESSION['login_user'];
            echo '
                <li class="nav-item">
                    <a class="nav-link" href="enroll.php">Enroll</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Log Out</a></li>
            ';
            $sql = "SELECT is_admin FROM user WHERE user_id = '$usr'";
            $res = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($res);
            if ($row['is_admin'] == 1){
                echo '
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Admin</a></li>';
            }
        }
        else{
            echo '
            <li class="nav-item">
            <a class="nav-link" href="login.php">Log In</a></li>
            <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a></li>';
        }
    ?>
</div>