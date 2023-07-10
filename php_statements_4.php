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
<h3 class="text-center">4. Write a program to loop over the given JSON data. Display the values via loops or recursion.d</h3>

<div class="text-center fs-5" style="justify-content: center; margin-top:20vh">
<h4>Here is the output for my PHP code:</h4>
<br>
<div class="container w-50" style="border: 1px solid black">
<!--------------- my php codes------------------ -->

<?php
$students = '[{"name" : "John Garg","age"  : "15","school" : "Ahlcon Public school"},
    {"name" : "Smith Soy","age"  : "16","school" : "St. Marie school"},
    {"name" : "Charle Rena","age"  : "16","school" : "St. Columba school"}]';

$studentsArray = json_decode($students, true);

if ($studentsArray !== null) {
    foreach ($studentsArray as $student) {
        echo "<br>";
        echo "Name: " . $student['name'] . "\n"; 
        echo "Age: " . $student['age'] . "\n";
        echo "School: " . $student['school'] . "\n";
        echo "<br>";
        echo "<br>";
    }
} else {
    echo "Invalid JSON data.";
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
