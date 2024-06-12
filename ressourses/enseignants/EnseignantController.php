<?php
session_start();
require_once '../Base/DatabaseConnexion.php';
require_once '../Base/CRUD.php';
$db = new DatabaseConnexion();
$enseignant = new CRUD($db);
$create_table_sql = "
CREATE TABLE IF NOT EXISTS enseignants (
    matricule VARCHAR(50) PRIMARY KEY,
    prenom VARCHAR(50) NOT NULL,
    nom VARCHAR(50) NOT NULL,
    adresse VARCHAR(50) NOT NULL
);";

$enseignant->createtable($create_table_sql);
$_SESSION['enseignant'] = $enseignant->read('enseignants');
$action = $_GET['action'] ?? 'index';
switch ($action) {
    case 'create':
        create();
        break;
    case 'store':
        $data = [
            'matricule' => $_POST['matricule'],
            'prenom' => $_POST['prenom'],
            'nom' => $_POST['nom'],
            'adresse' => $_POST['adresse']
        ];
        $enseignant->create('enseignants', $data);
        index($enseignant);
        break;
    case 'edit':
        $matricule = $_GET['id'];
        $condition = 'matricule = "' . $matricule . '"';
        $enseignants = $enseignant->read('enseignants', '*', $condition);
        $_SESSION['enseignants'] = $enseignants;
        update();
        break;
    case 'update':
        $data = [
            'matricule' => $_POST['matricule'],
            'prenom' => $_POST['prenom'],
            'nom' => $_POST['nom'],
            'adresse' => $_POST['adresse']
        ];
        $condition = $_POST['matricule'];
        $enseignant->update('enseignants', $data, 'matricule = "' . $condition . '"');
        index($enseignant);
        break;
    case 'delete':
        $matricule = $_GET['matricule'];
        $condition = 'matricule = "' . $matricule . '"';
        $enseignant->delete('enseignants', $condition);
        index($enseignant);
        break;
    case 'index':
    default:
        index($enseignant);
        break;
}


function index($enseignant)
{
    $data = $enseignant->read('enseignants');
    $_SESSION['enseignant'] = $data;
    header('Location: /dossier_2024/L2TDSI/2024_dev_web_l2tdsi/ressourses/enseignants/index.php');
    exit;
}

function create()
{
    header('Location: /dossier_2024/L2TDSI/2024_dev_web_l2tdsi/ressourses/enseignants/create.php');
    exit;
}


function update()
{
    header('Location: /dossier_2024/L2TDSI/2024_dev_web_l2tdsi/ressourses/enseignants/create.php?action=edit');
    exit;
}
