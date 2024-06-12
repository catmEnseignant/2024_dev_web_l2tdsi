<?php
session_start();
require_once '../Base/DatabaseConnexion.php';
require_once '../Base/CRUD.php';

$db = new DatabaseConnexion();
$examen = new CRUD($db);

$create_table_sql = "
CREATE TABLE IF NOT EXISTS examens (
    idExam VARCHAR(50) PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    coef INT NOT NULL,
    date DATE NOT NULL,
    duree TIME NOT NULL
);";
$examen->createtable($create_table_sql);


$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'create':
        create();
        break;
    case 'store':
        $data = [
            'idExam' => $_POST['identifiant'],
            'nom' => $_POST['nom'],
            'coef' => $_POST['coef'],
            'date' => $_POST['date'],
            'duree' => $_POST['duree']
        ];
        $examen->create('examens', $data);
        index($examen);
        break;
    case 'edit':
        $idExam = $_GET['id'];
        $condition = 'idExam = "' . $idExam . '"';
        $examens = $examen->read('examens', '*', $condition);
        $_SESSION['examen'] = $examens;
        update();
        break;
    case 'update':
        $data = [
            'idExam' => $_POST['identifiant'],
            'nom' => $_POST['nom'],
            'coef' => $_POST['coef'],
            'date' => $_POST['date'],
            'duree' => $_POST['duree']
        ];
        $condition = $_POST['identifiant'];
        $examen->update('examens', $data, 'idExam = "' . $condition . '"');
        index($examen);
        break;
    case 'delete':
        $idExam = $_GET['idExam'];
        $condition = 'idExam = "' . $idExam . '"';
        $examen->delete('examens', $condition);
        index($examen);
        break;
    case 'index':
    default:
        index($examen);
        break;
}

function index($examen)
{
    $examens = $examen->read('examens');
    $_SESSION['examens'] = $examens;
    header('Location: /dossier_2024/L2TDSI/2024_dev_web_l2tdsi/ressourses/examens/index.php');
    exit;
}

function create()
{
    header('Location: /dossier_2024/L2TDSI/2024_dev_web_l2tdsi/ressourses/examens/create.php');
    exit;
}


function update()
{
    header('Location: /dossier_2024/L2TDSI/2024_dev_web_l2tdsi/ressourses/examens/create.php?action=edit');
    exit;
}
