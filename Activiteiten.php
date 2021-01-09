 <?php
require '../config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="./Images/background.jpg">
<div class="Nav">
        <ul class="navBar-nav" id="ToggleNav">
            <li class="navItem Active">
                <a href="http://">Home</a>
            </li>
            <li class="navItem">
                <a href="http://">Profile</a>
            </li>
            <li class="navItem">
                <a href="http://">Friends</a>
            </li>
    </div>
<div>
<?php


$result = mysqli_query($mysqli, "SELECT * FROM fabelsenfeiten");

// maak uitlees pagina
if (mysqli_num_rows($result) == 0){
    echo "<p>Er zijn geen resultaten gevonden.</p>";
}

else{
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>vraag</th>";
    echo "<th>Datum</th>";
    echo "<th>feit</th>";
    echo "<th>fabel</th>";
    echo "<th>stem feit</th>";
    echo "<th>stem fabel</th>";
    echo "<th>Verwijder</th>";
    echo "</tr>";

    while ($rij = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $rij['ID_vraag'] . "</td>";
        echo "<td>" . $rij['vraag'] . "</td>";
        echo "<td>" . $rij['datum'] . "</td>";
        echo "<td>" . $rij['stem_feit'] . "</td>";
        echo "<td>" . $rij['stem_fabel'] . "</td>";
        //stem feit
        echo "<td> <a href='user_detail.php?id=".$rij['ID_vraag']."'>stem feit</a> </td>";
        //stem fabel
        echo "<td> <a href='user_wijzig.php?id=".$rij['ID_vraag']."'>stem fabel</a> </td>";
        // verwijder feit/fabel
        echo "<td> <a href='band_verwijder.php?id=".$rij['ID_vraag']."'>verwijder</a> </td>";
        echo "</tr>";
    }
    echo "</table>";

    //knop voor feit of fabel toevoegen
    echo "<a href='toevoeg.php'>vraag toevoegen</a><br>";
}
?>
