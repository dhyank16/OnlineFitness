<?php
    if(!isset($_SESSION['login_user'])){
        header("location: home.php");
    }

    function checkEnroll($course){
        
        include('db_connect.php');
        $id = $_SESSION['login_user'];

        $sql1 = "SELECT course_id FROM course WHERE name = '$course'";
        $result1 = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
        $cid = $row1['course_id'];

        $sql2 = "SELECT * FROM enroll WHERE course_id = '$cid' and user_id = '$id'";
        $result2 = mysqli_query($conn, $sql2);
        $count = mysqli_num_rows($result2);
        $flag = 0;
        if ($count > 0){
            $current_date = date('Y-m-d');
            while($row = mysqli_fetch_assoc($result2)){
                $start_date = $row['start_date'];
                $end_date = $row['end_date'];
                if($current_date <= $end_date && $current_date >= $start_date){
                    $flag = 1;
                    break;
                }
            }
            if($flag == 0){
                mysqli_close($conn);
                return false;
            }
        }
        else{
            mysqli_close($conn);
            return false;
        }
        mysqli_close($conn);
        return true;
    }
?>