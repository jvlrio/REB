<?php
session_start();
$_SESSION['islogged'] == true;
//require('Functions\Carts.php');
require_once('connection.php');
if (isset($_GET['playerid'])) {
    $playerid = $_GET['playerid'];
    $query = "SELECT * FROM cart WHERE playerid = '$playerid'";
    $result = $conn->query($query);

    if (!$result){
        die("Query failed: " . $conn->error);
    } else {
        $rows = $result->fetch_all(MYSQLI_ASSOC);
    }
} 
$Total = 0;
?>
<!DOCTYPE html>
<html lang="en">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Prompt:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="CSS_Designs/myCart.css">
<script src="https://kit.fontawesome.com/2288793923.js" crossorigin="anonymous"></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
</head>

<body>
    <div class="container">
        <h1>CHECKOUT</h1>
        <div class="order">
            <?php
            if ($rows != NULL) :
                foreach ($rows as $row) : ?>
                    <div class="per-order">
                        <div class="order-image">
                            <img src="<?php echo $row['picture']; ?>" alt="product" class="products">
                        </div>
                        <div class="order-text">
                            <h2><?php echo $row['ProductName'] ?></h2>
                            <p>PHP <span><?php echo $row['Price'];
                                            $Price = $row['Price'];
                                            $Total += $Price; ?></span></p>
                        </div>
                        <a type="submit" href="deleteproduct.php?ProductID=<?php echo $row['ProductID'];?>&&playerid=<?php echo $row['playerid'];?>">Delete</a>
                    </div>
                <?php endforeach;
            else : ?>
                <img src="https://i.pinimg.com/originals/49/e5/8d/49e58d5922019b8ec4642a2e2b9291c2.png" class="nodata" ="nodatafound" width="100%">
            <?php endif; ?>
        </div>
        
        <div class="payment">
            <div class="Payment-Content">
                <br><br><br><h1>PAYMENT</h1>
                <h3>TOTAL PAYMENT:
                    <span>₱ <?php echo $Total; ?>.00</span>
                </h3>
            </div>
            <div class="Payment-Gcash">
                <form action="historyadding.php" method="Post">
                    <input type="hidden" name="playerid" value="<?php echo $playerid; ?>">
                    <input type="hidden" name="total" value="<?php echo $Total; ?>">
                    <input type="text" name="cnumber" placeholder="GCash No." required class="inputcss"><br>
                    <input type="hidden" name="purdate" value="<?php echo date("Y-m-d") ?>">
                    <button type="Submit" name="submit">Checkout</button>
                </form>
            </div>

        </div>
    </div>
</body>

</html>