
<?php

include('RESSOURCE/dataConnect.php');

$query = 'SELECT * FROM `etudiants`';
$result = mysqli_query($connect, $query);

if (!$result) {
    die("query Failed" . mysqli_error($connect));
}

?>