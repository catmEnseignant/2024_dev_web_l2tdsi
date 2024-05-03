<? 
include('config/dataConnect.php');
include('tableaux.php');

// if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST")
// {
    // $Prenom = $_POST['Prenom'];
    // $Nom = $_POST['Nom'];
    // $Adresse = $_POST['Adresse'];
    // $Email = $_POST['Email'];
    // $Age = $_POST['Age'];
    // $Reseau = $_POST['Reseau'];
    // $fichier = $_POST['fichier'];

    if(isset($_POST['Enregistrer']))
    {
        $_VerifyPrenom = isset($_POST['Prenom']) &&  !empty(($_POST['Prenom']));
        $_VerifyNom = isset($_POST['Nom']) &&  !empty(($_POST['Nom']));
        $_VerifyAdresse = isset($_POST['Adresse']) &&  !empty(($_POST['Adresse']));
        $_VerifyEmail = isset($_POST['Email']) &&  !empty(($_POST['Email'])) && filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL);
        $_VerifyAge = isset($_POST['Age']) &&  !empty(($_POST['Age']));

        if($_VerifyPrenom && $_VerifyNom && $_VerifyAdresse && $_VerifyEmail && $_VerifyAge)
        {
            $_Prenom = htmlspecialchars(strip_tags($_POST['Prenom']));
            $_Nom = htmlspecialchars(strip_tags($_POST['Nom']));
            $_Adresse = htmlspecialchars(strip_tags($_POST['Adresse']));
            $_Email = htmlspecialchars(strip_tags($_POST['Email']));
            $_Age = htmlspecialchars(strip_tags($_POST['Age']));

            $query = "INSERT INTO `administrateurs` (`Prenom`, `Nom`, `Adresse`, `Email`, `Age`, `Reseau`) VALUES ('$_Prenom', '$_Nom', '$_Adresse', '$_Email', '$_Age')";
            $result = mysqli_query($connect, $query);

            if(!$result) {
                die("Error !! ".mysqli_error($connection));
            } // else {
            //     die("Error !! ".mysqli_error($connection));
            // }

        } else {
            echo "Veuillez remplir tous les champs";
        }
    } else {
        echo "Name Enregistrer n'existe pas.";
    }
// } else {
//     echo "la methode POST n'existe pas.";
//}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Données du formulaire</title>
    </head>
    <body class="container">
        <h1>Traitement du formulaire</h1>
        <p>Prénom: <span class="fw-bolder"><?php if(isset($_Prenom)){ echo $_Prenom; } else { echo "No value";} ?> 
            </span></p>
        <p>Nom: <span class="fw-bolder"><?php if(isset($_Nom)){ echo $_Nom; } else { echo "No value";}?> </span></p>
        <p>Adresse: <span class="fw-bolder"><?php if(isset($_Adresse)){ echo $_Adresse; } else { echo "No value";}?> </span></p>
        <p>Email: <span class="fw-bolder"><?php if(isset($_Email)){ echo $_Email; } else { echo "No value";}?> </span></p>
        <p>Age: <span class="fw-bolder"><?php if(isset($_Age)){ echo $_Age; } else { echo "No value";}?> </span></p>
        <div class="alert alert-success text-center w-50" role="alert" style="margin: auto;">
            <span class="text-center fw-bolder text-success">Vos données ont bien été enregistrées</span>
        </div>
        <p class="text-center mt-2"><a href="index.php" class="btn btn-outline-primary fw-bolder">Retourner à la page d'accueil</a></p>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>