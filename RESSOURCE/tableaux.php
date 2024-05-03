
<?php

include('config/dataConnect.php');

    $query = 'SELECT * FROM `administrateurs`';
    $result = mysqli_query($connect, $query);

    if(!$result){
        die("query Failed".mysqli_error($connect));
    }

?>