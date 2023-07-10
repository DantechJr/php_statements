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
<h3 class="text-center">3. Using SWITCH CASE statement, write a code that determine the number of days in a given month. Return "invalid" if the operator is invalid</h3>

<div class="text-center fs-5" style="justify-content: center; margin-top:20vh">
<h4>Here is the output for my PHP code:</h4>
<div class="container w-50 pb-5" style="border: 1px solid black">

<br>
<!--------------- my php codes------------------ -->

<?php
if (isset($_POST['submit'])) {
    $monthName = $_POST['month'];

    switch ($monthName) {
        case 'January':
        case 'March':
        case 'May':
        case 'July':
        case 'August':
        case 'October':
        case 'December':
            $numDays = 31;
            break;
        case 'April':
        case 'June':
        case 'September':
        case 'November':
            $numDays = 30;
            break;
        case 'February':
            $numDays = 28;
            break;
        default:
            $numDays = 'invalid';
            break;
    }

    if ($numDays == 'invalid') {
        $result = "Invalid month name.";
    } else {
        $result = "The month of " . $monthName . " has " . $numDays . " days.";
    }
}
?>

<form method="post">
    <select name="month" id="month">
        <option value="January">January</option>
        <option value="February">February</option>
        <option value="March">March</option>
        <option value="April">April</option>
        <option value="May">May</option>
        <option value="June">June</option>
        <option value="July">July</option>
        <option value="August">August</option>
        <option value="September">September</option>
        <option value="October">October</option>
        <option value="November">November</option>
        <option value="December">December</option>
        <option value="Default">Default</option>
    </select>
    <input type="submit" name="submit" value="Check">
</form>

<?php
if (isset($result)) {
    echo $result;
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
