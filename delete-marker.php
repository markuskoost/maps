<?php
require 'connection.php';

$id = $_POST['id'];

if (isset($_POST['delete'])) {
    $delete = "DELETE FROM markers WHERE id = '$id'";

    if ($mysqli->query($delete) === TRUE) {
        $referer = $_SERVER['HTTP_REFERER'];
        header("Location: $referer");
    } else {
        echo "Error deleting record: " . $mysqli->error;
    }
}