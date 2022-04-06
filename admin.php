<html>
    <head>
    <link rel="icon" href="imgs/favicon.jpg" type="image/ico">
        <title>Welcome Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Birthstone&display=swap" rel="stylesheet">

        <style>
            body{color: navy;}
            h1
            {
                font-family: birthstone;
            }
            tr, th{
                vertical-align: middle;
                color:midnightblue;
                text-align: center;
            }
        
            .flexbox1{
                display: flex;
                flex-flow: row wrap;
                justify-content: center;
            }
            .tdiv{
                background-color: azure;
                border-radius: 20px;
                padding: 20px;
                margin: 20px;
            }
            .prod{
                font-size: large;
                color: navy;
            }
            .show:hover{
                text-decoration: underline;
                font-weight: bold;
                cursor: pointer;
            }
            .bg{
                background-color: white;
            }
        </style>
        <script>
            function show(id){
                let row = document.getElementById(id);
                if(row.style.display == 'table-row'){
                    row.style.display = 'none';
                }
                else{
                    row.style.display = 'table-row';
                }
            }
        </script>
    </head>
    <body>
        <?php 
            include('navbar.php'); 
            if(!isset($_SESSION['login_user'])){
                header("location: home.php");
            }
            else{
                $usr = $_SESSION['login_user'];
                $sql = "SELECT is_admin FROM user WHERE user_id = '$usr'";
                $res = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($res);
                if ($row['is_admin'] == 0){
                    header("location: home.php");
                }
            } 
        ?>

        <div class="nav flexbox1">
            <a class=" alert alert-primary prod" href="ManageProducts.php">Add Product Quantity</a>
        </div>
        
        <div class="container">
            <div class="tdiv">
            <?php
        
                echo "<h1>My Orders:</h1>";
                $sql = "SELECT * from orders ORDER BY order_id DESC";
                $result = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($result);
                if($count > 0)
                {
                    echo "<table class='table'><tr><th>Order Id</th><th>Client Id</th><th>Date of Order</th><th>Date of Delivery</th></tr>";
                    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                    {      
                        echo "<tr>";
                            echo "<td>" . $row['order_id'] . "</td>";
                            echo "<td>" . $row['user_id'] . "</td>";
                            echo "<td>" . $row['order_date'] . "</td>";
                            echo "<td>" . $row['delivery_date'] . "</td>";
                            echo "<td class='show' onclick='show(".$row['order_id'].")'>Order Details</td>";
                        echo "</tr>";

                        $oid = $row['order_id'];
                        $sql1 = "SELECT * FROM ITEM WHERE order_id = '$oid'";
                        $result1 = mysqli_query($conn, $sql1);

                        echo "<tr style='display: none;' id='".$oid."'>";
                            echo "<td></td>";
                            echo "<td colspan = '3'>";
                                echo "<table class='bg table table-bordered'><tr><th>Product</th><th>Quantity</th></tr>";
                                while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
                                    echo "<tr>";
                                        $pid = $row1['product_id'];
                                        $sql2 = "SELECT title FROM product WHERE product_id = '$pid'";
                                        $result2 = mysqli_query($conn, $sql2);
                                        $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                                        echo "<td>" . $row2['title'] . "</td>";
                                        echo "<td>" . $row1['quantity'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                            echo "</td>";
                        echo "</tr>";

                    }
                    echo "</table>";
                    mysqli_free_result($result);
                }
                else
                {
                    echo "No orders found!";
                }
                echo "<hr></div><div class='tdiv'>";
                include("enquiry.php");
                echo"</div>";
            ?>
        </div>

    </body>
</html>