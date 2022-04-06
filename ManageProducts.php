<html>
    <head>
        <title>Welcome Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Birthstone&display=swap" rel="stylesheet">
        <style>

            h1 {
                font-family: birthstone,cursive;
                margin-left: 50px ;
            }

            form {
                
                width: 50%;
            }
            .fdiv{
                border: 1px solid navy;
                border-radius: 10px;
                padding: 30px;
                margin: 30px;;
            }
            .tdiv{
                background-color: azure;
                border-radius: 20px;
                padding: 30px;
                margin: 20px;
            }
            
        </style>
    </head>
    <body>
        <?php require('navbar.php'); ?>

        <div class="container">
            <div class="tdiv">

        <h1>Add Stocks Available</h1>
        <div class="fdiv">
        <form action="" method="post">
            <div class="form-group">
                <label for="sel">Select Product: </label>
                <select name="productname" id="sel">
                    <?php 
                        $sql = "SELECT * from product";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                            echo "<option value=".$row['product_id'].">";
                            echo $row['title'];
                            echo " (" . $row['quantity'] . ")";
                            echo "</option>";
                        }
                        mysqli_free_result($result);
                    ?>
                </select>
            </div>
            <br>
            <div class="form-group">
                <input class="form-control" type="number" name="productqty" placeholder="Quantity to be Added" min="1" step="1">
            </div>
            <br>
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </form>
        <?php
    
        if(isset($_POST['submit'])) 
        {
            $id = $_POST['productname'];
            $sql = "SELECT quantity FROM product WHERE product_id ='$id'";
            $result = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($result);
            if ($count=0)
            {
                echo "<div class='alert alert-danger'>No such product found!</div>";
            }
            else
            {
                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                {      
                    $qty=$row['quantity'];
                    $enteredqty=$_POST['productqty'];
                    $newqty=(int)$qty+(int)$enteredqty;
                }
                $sql1= "UPDATE product SET quantity='$newqty' where product_id='$id'";
                $result1 = mysqli_query($conn, $sql1);
                if($result1)
                {
                    header("location: ManageProducts.php");
                }
                else
                {
                    echo "<div class='alert alert-danger center'>".mysqli_error($conn)."</div>";
                }
            }
        }
        mysqli_close($conn);
        ?>
        </div>
        </div>
        </div>
    </body>
</html>