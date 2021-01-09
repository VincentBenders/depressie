<?php
// session_start();
// include 'header.php';
// if (!isset($_SESSION['Gebruikersnaam'])){
//     header("location:inlog.php");
// } else{
//     echo "<p>Welkom, " . $_SESSION['Gebruikersnaam'] . "</p>";

//     if ($_SESSION['level'] == 0){
//         echo "<p> U heeft geen rechten om deze pagina te bekijken.</p>";
//         echo "<p><a href='band_uilees.php'>terug</a></p>";
//     }
// }


if (isset($_POST['submit'])){
    require '../config.php';

    $vraag = $_POST['vraag'];
    $Datum = $_POST['datum'];


    $query = "INSERT INTO `fabelsenfeiten` 
    VALUE  (NULL, '$vraag', '$Datum', '0', '0')";

    if (mysqli_query($mysqli, $query)){
        echo "<p>Uw vraag is toegevoegd!<p/>";
        echo "<p><a href='band_uilees.php'>TERUG<a/> <p/>";
    }
    else {
        echo "<p>FOUT bij toevoegen.<p/>";
        var_dump($query);
        echo "<p><a href='band_uilees.php'>TERUG<a/> <p/>";
    }
}
else
{
    echo "<p> Geen gegevens ontvangen. . .<p/>";

}

