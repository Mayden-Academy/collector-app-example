<?php

require('includes/db.php');
require('includes/functions.php');

if (empty($_POST) || empty($_POST['id']) && !empty($_POST['name'])) {
    header('Location: add.php?error=1');
}

$name = $_POST['name'];
$id = $_POST['id'];

$sql = 'INSERT INTO pokemon (`id`, `name`) VALUES (?,?);';
$query = $db->prepare($sql);
$success = $query->execute([$id,$name]);

if ($success) {
    header('Location: index.php');
} else {
    header('Location: add.php?error=2');
}

?>