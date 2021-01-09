<?php
//session_start();


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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form name="form1" method="post" action="toevoegen.php">
    vraag: <input type="text" name="vraag"><br>
datum<input type="date" name="datum"><br>
    <button name="submit">voeg toe</button>
</form>

</body>
</html>
