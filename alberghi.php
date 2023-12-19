<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Alberghi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<?php

$scope = 'scope="col"';
$count = 1;

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>


<body>
    <h1>Hotels</h1>

    <h3><?php foreach ($hotels as $hotel) {
            echo $hotel["name"];
            echo "<br>";
        }
        ?>
    </h3>
    <br>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Distanza dal centro</th>
                <th scope="col">Voto</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $hotel) {
                echo "<tr>";
                echo "<th $scope> $count </th>";
                echo "<td>" . $hotel["name"] . "</td>";
                echo "<td>" . $hotel["distance_to_center"] . "</td>";
                echo "<td>" . $hotel["vote"] . "</td>";
                echo "</tr>";

                $count++;
            }
            ?>
        </tbody>
    </table>

    <h2>Filtra per voto</h2>
    <form action="ricerca.php">
        <input type="number" name="number" required>
        <button type="submit">Cerca</button>
    </form>
</body>

</html>