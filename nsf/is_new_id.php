<?php
$mysqli = new mysqli("localhost", "id16342714_nsfadmin", "Trololol#2201", "id16342714_nsf", 3306);

// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

// mysqli, Requête préparée
$query = $mysqli->prepare('SELECT COUNT(*) AS count FROM nsf WHERE id = ?');
$query->bind_param('i', $_GET["id"]); // s = string, i = integer
$query->execute();

$result = $query->get_result();
$row = $result->fetch_assoc();
echo json_encode(array('is_new_id'=> !boolval($row["count"])));
?>