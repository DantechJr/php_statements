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
<h3 class="text-center">1. Using IF...ELSE statement, write a code that check if given string is more than 5 characters.</h3>

<div class="text-center  fs-5" style="justify-content: center; margin-top:20vh">
<h4>Here is the output for my PHP code:</h4>
<div class="container w-50 pb-5" style="border: 1px solid black">

<br>
<!-- ------------my php codes--------------- -->
    <?php
    $word1 = 'class';
    $word2 = 'kodego';
    $word3 = 'top';

    if (strlen($word1) > 5) {
        echo "$word1 is more than 5 characters long.";
    } else {
        echo "$word1 is not more than 5 characters long.";
    }
    echo "<br>";
    if (strlen($word2) > 5) {
        echo "$word2 is more than 5 characters long.";
    } else {
        echo "$word2 is not more than 5 characters long.";
    }
    echo "<br>";
    if (strlen($word3) > 5) {
        echo "$word3 is more than 5 characters long.";
    } else {
        echo "$word3 is not more than 5 characters long.";
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




