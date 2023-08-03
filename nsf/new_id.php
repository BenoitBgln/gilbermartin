<?php
$mysqli = new mysqli("localhost", "id16342714_nsfadmin", "Trololol#2201", "id16342714_nsf", 3306);

// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

// mysqli, Requête préparée
$query = $mysqli->prepare('INSERT INTO nsf(id) VALUES(?)');
$query->bind_param('i', $_POST["id"]); // s = string, i = integer
$query->execute();

echo json_encode(array('success'=> TRUE));
?>