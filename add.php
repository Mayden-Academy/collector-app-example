<?php

require('includes/db.php');
require('includes/functions.php');

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
    <h1>Add Pokemon</h1>

    <div class="admin-bar">
        <a href="index.php"><< Back</a>

        <?php

            if (!empty($_GET) && !empty($_GET['error'])) {
                $errors = ['1' => 'Invalid data, please try again.', '2' => 'Database error, please try again.'];
                echo '<p>' . $errors[$_GET['error']] . '</p>';
            }

        ?>
    </div>

    <form method="POST" action="add-pokemon.php">
        <h3>New Pokemon</h3>
        <div>
            <label>ID<span>*</span>:</label>
            <input type="number" required name="id" placeholder="0">
        </div>

        <div>
            <label>Name<span>*</span>:</label>
            <input type="text" required name="name" placeholder="Pokemon Name">
        </div>

        <div>
            <input type="submit" value="Add">
        </div>
    </form>

</div>



</body>
</html>

