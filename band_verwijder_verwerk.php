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

    $userid = $_POST['ID_vraag'];
    $Naam = $_POST['Naam'];

    $query = "DELETE FROM fabelsenfeiten WHERE ID_vraag= " . $userid;

    echo $query . "<br/>";

    if (mysqli_query($mysqli, $query)){
        echo "<p> $Naam is verwijderd!</p>";
    }
    else{
        echo "<p> FOUT bij verwijderen van $Naam.</p>";
        echo mysqli_error($mysqli);
    }
} else {
    echo "<p> Geen gegevens gevonden...</p>";
}
echo "<p><a href='band_uilees.php'>TERUG<a/> <p/>";
?>
