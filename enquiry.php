
<?php
    echo "<h1>My Enquiries:</h1>";
    $sql = "SELECT * from enquiry ORDER BY enquiry_id DESC";
    $result = mysqli_query($conn, $sql);
    $count=mysqli_num_rows($result);
    if($count>0)
    {
        echo "<table class='table'><tr><th>Enquiry Id</th><th>Client Name</th><th>Contact Number</th><th>Email</th><th>Enquiry</th></tr>";
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
        {      
            echo "<tr>";
            echo "<td>" . $row['enquiry_id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['contact'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['enquiry'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    else
    {
        echo "No Enquiries Found!";
    }

    mysqli_close($conn);
?>