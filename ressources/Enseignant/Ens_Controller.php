<?php
    require "../../public/php/conf.php";

    function verify(array $tab)
    {
        
        if (isset($tab['matricule']) && !empty($tab['matricule'])&&isset($tab['nom']) && !empty($tab['nom']) && isset($tab['prenom']) && !empty($tab['prenom'])  && isset($tab['phone']) && !empty($tab['phone']))
        {
            echo "Succefull";
        }
        else
        {
            if ($_GET['action'] === 'upd')
            {
                update();
                return; 
            }

            if ($_GET['action'] === 'del')
            {
                if(isset($tab['matricule']) && !empty($tab['matricule']) && isset($tab['nom']) && !empty($tab['nom']))
                {
                    echo "Succefull";
                }
                else
                {
                    delete();
                    return;
                }
            }

            if ($_GET['action'] === 'store') {
                create();
                return;
            }
        }
    }

    
    function create()
    {
        header('Location: create.php');
        exit();
    }
    function update()
    {
        header('Location: update.php');
        exit();
    }
    function delete()
    {
        header('Location: delete.php');
        exit();
    }


    function index()
    {
        header('Location: index.php');
        exit();
    }

    function store()
    {
        try {
            $pdo=pdo();

            // echo "conexion reussie";
            $sql = "INSERT INTO enseignant (matricule, nom, prenom, phone) VALUES (:matricule, :nom, :prenom, :phone);";
            $stmt = $pdo->prepare($sql);

            // // Vérifier que les données POST sont définies
            // if (!isset($_POST['matricule'], $_POST['nom'], $_POST['prenom'], $_POST['adresse'])) {
            //     throw new Exception('Toutes les données du formulaire ne sont pas fournies.');
            // }

            $stmt->bindParam('matricule', $_POST['matricule']);
            $stmt->bindParam('nom', $_POST['nom']);
            $stmt->bindParam('prenom', $_POST['prenom']);
            $stmt->bindParam('phone', $_POST['phone']);

            $stmt->execute();

            return "L'étudiant a été ajouté avec succès.";
        } catch (Exception $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
    }

    function upd()
    {
        try {
            $pdo=pdo();

            $sql="UPDATE enseignant SET nom = :nom, prenom = :prenom, phone = :phone WHERE matricule = :matricule;";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':nom', $_POST['nom']);
            $stmt->bindParam(':prenom', $_POST['prenom']);
            $stmt->bindParam(':phone', $_POST['phone']);
            $stmt->bindParam(':matricule', $_POST['matricule']);

            $stmt->execute();

            return "Données modifiées avec succès.";
        } catch (Exception $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
    }
    
    function del()
    {
        try {
            $pdo=pdo();

            $sql="DELETE FROM enseignant WHERE matricule = :matricule AND nom = :nom ;";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':matricule', $_POST['matricule']);
            $stmt->bindParam(':nom', $_POST['nom']);

            $stmt->execute();

            return "Données supprimées avec succès.";
        } catch (Exception $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
    }



    if ($_GET['action'] === 'create') {
        create();
    }

    if ($_GET['action'] === 'index')
    {
        index();
    }
    if ($_GET['action'] === 'update')
    {
        update();
    }
    if ($_GET['action'] === 'delete')
    {
        delete();
    }

    if ($_GET['action'] === 'store')
    {
        verify($_POST);
        $result = store();

        if ($result === "L'étudiant a été ajouté avec succès.") {
            index();
            return;
        } 
        else 
        {
            create();
            return;
        }
    }

    if ($_GET['action'] === 'upd')
    {
        verify($_POST);
        $result = upd();

        if ($result === "Données modifiées avec succès.") {
            index();
            return;
        } 
        else 
        {
            update();
            return;
        }
    }

    if ($_GET['action'] === 'del')
    {
        verify($_POST);
        $result = del();

        if ($result === "Données supprimées avec succès.")
        {
            index();
            return;
        } 
        else 
        {
            delete();
            return;
        }
    }

?>
