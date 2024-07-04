<?php

if ($_GET['action'] == 'index'){
    index();
}

if ($_GET['action'] == 'create'){
    create();
}

if ($_GET['action'] == 'store'){
    store();
}



function index()
{
    header('location:index.php');
}

function create()
{
    header('location:create.php');
}

function store()
{
    $pdo = connectionDB();
    // Exemple de données à insérer (valeurs variables)
    $numero_carte = $_POST['numero_carte'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $adresse = $_POST['adresse'];

    $query = "INSERT INTO etudiants (numero_carte, prenom, nom, adresse) VALUES (:numero_carte, :prenom, :nom, :adresse)";
    // Préparation de la requête
    $statement = $pdo->prepare($query);


    // Liaison des paramètres avec les variables
    $statement->bindParam(':numero_carte', $numero_carte, PDO::PARAM_STR);
    $statement->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $statement->bindParam(':nom', $nom, PDO::PARAM_STR);
    $statement->bindParam(':adresse', $adresse, PDO::PARAM_STR);

    // Exécution de la requête préparée
    try {
        $exec = $statement->execute();
        echo "Ajout réussi";
    }catch (ErrorException $ex){
        print_r($ex);
    }
}


function connectionDB(){
    //Infos du serveur DB
    $mysqlHost="localhost";
    $dbname="db_dev_web_l2tdsi";
    $charset="utf8";
    $dsn = "mysql:host=$mysqlHost;" . "dbname=$dbname;" . "charset=$charset";

// les options
    $opt = array (
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false );


//Instanciation de l'objet PDO
    $mysqlLogin = "root";
    $mysqlPassword = "";
    $PDO = new PDO($dsn, $mysqlLogin, $mysqlPassword, $opt);
    return $PDO;
}