<?php
session_start();
require_once '../Base/DatabaseConnexion.php';
require_once '../Base/CRUD.php';

$db = new DatabaseConnexion();
$etudiant = new CRUD($db);


$create_table_sql = "
CREATE TABLE IF NOT EXISTS etudiants (
    numcard VARCHAR(50) PRIMARY KEY,
    prenom VARCHAR(50) NOT NULL,
    nom VARCHAR(50) NOT NULL,
    adresse VARCHAR(50) NOT NULL
);";
$etudiant->createtable($create_table_sql);


$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'create':
        create();
        break;
    case 'store':
        $data = [
            'numcard' => $_POST['numcard'],
            'prenom' => $_POST['prenom'],
            'nom' => $_POST['nom'],
            'adresse' => $_POST['adresse']
        ];
        $etudiant->create('etudiants', $data);
        index($etudiant);
        break;
    case 'index':
    default:
        index($etudiant);
        break;
}

function index($etudiant)
{
    $etudiants = $etudiant->read('etudiants');
    $_SESSION['etudiants'] = $etudiants;
    header('Location: /dossier_2024/L2TDSI/2024_dev_web_l2tdsi/ressourses/etudiants/index.php');
    exit;
}

function create()
{
    header('Location: /dossier_2024/L2TDSI/2024_dev_web_l2tdsi/ressourses/etudiants/create.php');
    exit;
}
