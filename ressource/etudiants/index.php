<?php
require '../layouts/master.php';?>

    <div class="container bg-light divBreakClass1">
        <div class="container bg-light divBreakClass2">
            <div class="bg-white divBreakClass3">
                <nav aria-label="breadcrumb" class="divBreakClass4">
                    <ol class="breadcrumb divBreakClass5">
                        <li class="breadcrumb-item divBreakClass6"><a href="#">Accueil</a></li>
                        <li class="breadcrumb-item divBreakClass6"><a href="#">Étudiant</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Listes des étudiants</li>
                    </ol>
                </nav>
                <div>
                    <div class="center row bg-light divAdmin">
                        <div class="col-4"><strong>Listes des étudiants</strong></div>
                        <div class="col-4"><strong>Nombre d'étudiants </strong></div>
                        <div class="col-4 text-end"><a href="EtudiantController.php?action=create" class="btn btn-outline-primary me-3"><span class="p-2">Ajouter un étudiant</span></a></div>
                    </div>
                </div>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Numéro carte</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Adresse</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr class="table-secondary">
                            <th scope="row">0929NDOI</th>
                            <td>Moustapha</td>
                            <td>Diaw</td>
                            <td>LatMingué</td>
                        </tr>
                    </tbody>
                </table>
                <nav aria-label="Page navigation example" class="navClass2">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link text-dark href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link bg-primary text-white href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

<?php require '../layouts/footer.php';?>