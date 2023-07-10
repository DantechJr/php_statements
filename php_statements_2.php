<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>PHP Exercise</title>
</head>
<body>
    <div class="container-fluid bg-dark text-white">
        <h1>PHP Exercise</h1>
    </div>
    <br>
<h3 class="text-center">2. There are two deals of an item to buy. The quantities and prices of the item are given below. Write a program in PHP to find the best deal to purchase the item.</h3>

<div class="text-center fs-5" style="justify-content: center; margin-top:20vh">
<h4>Here is the output for my PHP code:</h4>
<div class="container w-50 pb-5" style="border: 1px solid black">
<br>

<!--------------- my php codes------------------ -->
<?php
$quantity1 = 70;
$quantity2 = 100;
$price1 = 35;
$price2 = 30;

$totalCost1 = $quantity1 * $price1;
$totalCost2 = $quantity2 * $price2;

if ($totalCost1 < $totalCost2) {
    echo "Deal 1 is the best option. Total cost: $" . $totalCost1;
} elseif ($totalCost2 < $totalCost1) {
    echo "Deal 2 is the best option. Total cost: $" . $totalCost2;
} else {
    echo "Both deals have the same total cost: $" . $totalCost1;
}
?>

</div>
</div>

<footer class="fixed-bottom bg-dark text-white text-center">
    <h5>&copy; Dante C. Alcantara Jr™</h5>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>