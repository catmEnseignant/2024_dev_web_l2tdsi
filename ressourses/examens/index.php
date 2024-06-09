<?php
session_start();
require '../layouts/master.php';
$examen = $_SESSION['examens'];

?>

<div class="container bg-light divBreakClass1">
    <div class="container bg-light divBreakClass2">
        <div class="bg-white divBreakClass3">
            <nav aria-label="breadcrumb" class="divBreakClass4">
                <ol class="breadcrumb divBreakClass5">
                    <li class="breadcrumb-item divBreakClass6"><a href="/dossier_2024/L2TDSI/2024_dev_web_l2tdsi/ressourses/index.php">Accueil</a></li>
                    <li class="breadcrumb-item divBreakClass6"><a href="#">Éxamen</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Listes des examens</li>
                </ol>
            </nav>
            <div>
                <div class="center row bg-light divAdmin">
                    <div class="col-4"><strong>Listes des examens</strong></div>
                    <div class="col-4"><strong>Nombre d'examens </strong></div>
                    <div class="col-4 text-end"><a href="ExamenController.php?action=create" class="btn btn-outline-primary me-3"><span class="p-2">Ajouter un examen</span></a></div>
                </div>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Identifiant</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Coeficient</th>
                        <th scope="col">Date</th>
                        <th scope="col">Durée</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($examen as $examens) : ?>
                        <tr class="table-secondary">
                            <td scope="row"><?php echo $examens['idExam']; ?></td>
                            <td><?php echo $examens['nom']; ?></td>
                            <td><?php echo $examens['coef']; ?></td>
                            <td><?php echo $examens['date']; ?></td>
                            <td><?php echo $examens['duree']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <nav aria-label="Page navigation example" class="navClass2">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link text-dark href=" #">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link bg-primary text-white href=" #">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<?php require '../layouts/footer.php'; ?>