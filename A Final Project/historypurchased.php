<?php
require("history.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS_Designs/history.css">
    <title>Purchased</title>
</head>

<body>
    <div class="container">
        <h1>My Purchased</h1>
        <p>Payment thru GCash</p>
        <?php foreach ($rows as $row) : ?>
            <div class="content">
                <h3>Total Payment: <span><?php echo $row['total'];?></span></h3><br>
                <p>Contact Number: 0<?php echo $row['contactnumber'];?></p><br>
                <p>Purchased Date: <?php echo $row['purchasedate'];?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>