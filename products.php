<html>
    <head>
        <title>Products</title>
        <link rel="icon" href="imgs/favicon.jpg" type="image/ico">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            body{
                background: linear-gradient(90deg, rgba(159,207,231,1) 0%, rgba(199,228,234,1) 63%, rgba(187,171,234,1) 100%);
            }
            tr{
                vertical-align: middle;
                color:midnightblue;
            }
            th{
                text-align: center;
            }
            .sbox{
                display: flex;
                justify-content: center;
            }
            .search{
                width: 500px;
            }
            .center{
                text-align: center;
            }
            .page-link:hover{text-decoration: none;}
            .inp{width: 45px;}
            .tdiv{
                background-color: azure;
                border-radius: 20px;
                padding: 20px;
                margin: 20px;
            }
            .cur:hover {cursor: pointer;}
        </style>
        <script>
            function add(id, max){
                let q = document.getElementById(`q${id}`);
                let v = Number(q.value);
                if (v != Number(max)){
                    v = v + 1;
                }
                q.value = v; 
                return false;
            }

            function subtract(id){
                let q = document.getElementById(`q${id}`);
                let v = Number(q.value);
                if( v != 0){
                    v = v - 1;
                }
                q.value = v; 
                return false;
            }
        </script>
    </head>
    <body> 
        <?php 
            include('navbar.php');
            include('db_connect.php');
            if(isset($_POST['order'])){
                if(!isset($_SESSION['login_user'])){
                    header("location: login.php");
                }
                else{

                    $uid = $_SESSION['login_user'];
                    $order_date = date("Y-m-d");
                    $delivery = date("Y-m-d", strtotime('+3 day', strtotime($order_date)));

                    $sql1 = "INSERT INTO orders (user_id, order_date, delivery_date) VALUES ('$uid','$order_date','$delivery')";
                    $result = mysqli_query($conn, $sql1);
                    $xyz = $conn->insert_id;
                    $flag = -1;

                    if($result){
                        $order_id = $conn->insert_id;
                        
                        $sql = "SELECT * FROM product";
                        $result = mysqli_query($conn, $sql);
                        $count = mysqli_num_rows($result);
                        $total = 0;
                        while($row = mysqli_fetch_assoc($result)){
                            $pid = $row['product_id'];
                            $v = $_POST['n'.$pid];
                            if($v != 0){
                                $flag = 0;
                                $sql1 = "INSERT INTO item (order_id, product_id, quantity) VALUES ('$order_id', '$pid' , '$v')"; 
                                $result1 = mysqli_query($conn, $sql1);
                                if(!$result){
                                    $flag = 1;
                                }

                                $sql1 = "SELECT * FROM product WHERE product_id = '$pid'";
                                $res = mysqli_query($conn, $sql1);
                                $row = mysqli_fetch_assoc($res);
                                $q = $row['quantity'];
                                $price = $row['price'];
                                $q = $q - $v;

                                $total = $total + $v*$price;

                                $sql1 = "UPDATE product SET quantity = '$q' WHERE product_id = '$pid'";
                                mysqli_query($conn, $sql1);
                            }
                        }
                    }
                    else{
                        $flag = 1;  
                    }

                    if($flag == 1){
                        echo "<div class='alert alert-danger center'>".mysqli_error($conn)."</div>";
                    }
                    else if($flag == -1){
                        $sql = "DELETE FROM orders WHERE order_id='$xyz'";
                        $result = mysqli_query($conn, $sql);
                        echo "<div class='alert alert-danger center'>No Items Selected</div>";
                    }
                    else{
                        echo "<div class='alert alert-success center'>Order Placed. Total Amount = Rs ".$total.". Will be Delivered in 3 Business Days.</div>";
                    }
                    
                }
            }
        ?>  
        <form action="" method="POST" class="container">
        <table class='table'>
            <tr>
                <th>Product</th>
                <th>Details</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>

        <?php
            $sql = "SELECT * FROM product";
            $result = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($result);
    
            while($row = mysqli_fetch_assoc($result)){

                echo "<tr id='".$row['product_id']."'>
                        <td class='center'><img src='".$row['image']."' height='200px'></td>
                        <td width='500px'><b>".$row['title']."</b><br>".$row['discription']."</td>
                        <td class='center'>Rs. ".$row['price']."</td>
                        <td class='center'>
                            <nav aria-label='Page navigation example'>
                                <ul class='pagination justify-content-center'>
                                    <li class='page-item'>
                                        <a class='page-link cur' id='s".$row['product_id']."' onclick='subtract(".$row['product_id'].")'>-</a>
                                    </li>
                                    <li class='page-item'><input readonly value='0' class='page-link inp' id='q".$row['product_id']."' name='n".$row['product_id']."' /></li>
                                    <li class='page-item'>
                                        <a class='page-link cur' id='a".$row['product_id']."' onclick='add(".$row['product_id'].",".$row['quantity'].")'>+</a>
                                    </li>
                                </ul>
                            </nav>
                        </td>
                    </tr>";
            }

        ?>
        </table>
        <div class="sbox"><input type="submit" class="btn btn-primary btn-lg btn-block" name="order" value="Place Order"></div></form><hr>
    </body>
</html>