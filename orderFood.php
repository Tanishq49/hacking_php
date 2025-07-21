<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Food</title>
</head>
<body>
    <h4>
        You Can order: <br>
        pizza <br>
        burger <br>
        hotCoffee <br>
        coldCoffee <br>
    </h4>
    <form action="orderFood.php" method="post">
        <label>Enter the name of the food</label><br>
        <input type="text" name="food" required><br>
        <label>Enter the quantity</label><br>
        <input type="number" name="quantity" required><br>
        <button type="submit">Order</button>
    <?php
        //Setting the price of each food
        $pizza = 10;
        $burger = 2;
        $cold_coffee = 1;
        $hot_coffee = 1;

        $food_name = $_POST["food"];
        $food_quantity = $_POST["quantity"];

        //Adding the ifelse to give the output
        if ($food_name == "pizza"){
            echo "<br>";
            echo "Ordered the food successfully!";
            echo "<h2>You ordered {$food_quantity}{$food_name}s";
            $total_cost = $pizza * $food_quantity;
            echo "<br><p>The total cost is {$total_cost}</p></h2>";
        }elseif($food_name == "burger"){
            echo "<br>";
            echo "Ordered the food successfully!";
            echo "<h2>You ordered {$food_quantity}{$food_name}s";
            $total_cost = $burger * $food_quantity;
            echo "<br><p>The total cost is {$total_cost}</p></h2>";
        }elseif($food_name == "coldCoffee"){
            echo "<br>";
            echo "Ordered the food successfully!";
            echo "<h2>You ordered {$food_quantity}{$food_name}s";
            $total_cost = $cold_coffee * $food_quantity;
            echo "<br><p>The total cost is {$total_cost}</p></h2>";
        }elseif($food_name == "hotCoffee"){
            echo "<br>";
            echo "Ordered the food successfully!";
            echo "<h2>You ordered {$food_quantity}{$food_name}s";
            $total_cost = $hot_coffee * $food_quantity;
            echo "<br><p>The total cost is {$total_cost}</p></h2>";
        }
        
    ?>
       </form>
</body>
</html>