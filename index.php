<?php

require('includes/db.php');
require('includes/functions.php');

$pokemonArray = getCollection($db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Collection</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>

<div class="container">
    <h1>Pokemon Collection</h1>

    <div class="admin-bar">
        <a href="add.php">Add Pokemon</a>
    </div>

    <?php
    foreach($pokemonArray as $pokemon) {
        echo displayPokemon($pokemon);
    }
    ?>

</div>



</body>
</html>

