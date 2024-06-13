<?php
    

function pdo()
{
    $DB_DSN=("mysql:host=localhost;dbname=devWeb");
    $DB_USER=("root");
    $DB_PASS=("");

    $pd = new PDO($DB_DSN, $DB_USER, $DB_PASS);
    $pd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pd;
}
