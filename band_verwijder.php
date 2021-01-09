<?php
// session_start();

// include 'header.php';
// if (!isset($_SESSION['Gebruikersnaam'])){
//     header("location:inlog.php");
// }

// else{
//     echo "<p>Welkom, " . $_SESSION['Gebruikersnaam'] .  "</p>";

//     if ($_SESSION['level'] == 0){
//         echo "<p>U heeft geen rechten om deze pagina te bekijken.</p>";
//         echo "<p><a href='band_uilees.php'>Ga terug</a> </p>";
//         exit();
//     }

// }
require '../config.php';
$userid = $_GET['id'];
$query = "SELECT * FROM fabelsenfeiten WHERE ID_vraag= " . $userid;
$resultaat = mysqli_query($mysqli, $query);
if (mysqli_num_rows($resultaat) ==0)
{
    echo "<p>Er is geen user met ID $userid.</p>";
}
else
{
    $rij = mysqli_fetch_array($resultaat);
    ?>
    <p>Wilt u de volgende user verwijderen?</p>
    <form name="form1" method="post" action="band_verwijder_verwerk.php">
        <input type="hidden" name="ID_vraag" value="<?php echo $rij['ID_vraag'] ?>" readonly>
        <p>
            Naam:
            <input type="text" name="Name" value="<?php echo $rij["Naam"] ?>" disabled/>
        </p>
        <p>
            <button type="submit" name="submit">Verwijder</button>
        </p>
    </form>
    <p><a href="band_uilees.php">TERUG</a> naar overzicht. </p>
    <?php
}
?>