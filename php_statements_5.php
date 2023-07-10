<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>PHP Exercise</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 2px solid black;
            padding: 5px;
        }
        tr:nth-child(even) {
  background-color: #dddddd;
}
    </style>
</head>
<body>
<body>
    <div class="container-fluid bg-dark text-white">
        <h1>PHP Exercise</h1>
    </div>
    <br>
<h3 class="text-center">5. Write a division table program using the for loop.</h3>

<div class="text-center fs-5 mt-5" style="justify-content: center">
<h4>Here is the output for my PHP code:</h4>
<br>
<!--------------- my php codes------------------ -->
<div class="container text-center mb-5 mx-auto">
    <table>
        <tr>
            <th>&nbsp;</th> <!-- Empty corner cell -->
            <?php
                // Generate column headers
                for ($i = 1; $i <= 10; $i++) {
                    echo "<th>$i</th>";
                }
            ?>
        </tr>
        <?php
            // Generate rows and calculate divisions
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<th>$i</th>"; // Row header
                for ($j = 1; $j <= 10; $j++) {
                    $result = $i / $j;
                    echo "<td>$result</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</div>
</div>

<footer class="fixed-bottom bg-dark text-white text-center mt-5">
    <h5>&copy; Dante C. Alcantara Jr™</h5>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

