<?php include "../layouts/master.php" ; ?>
    
    <?php
        require "../../public/php/conf.php";
        function recup()
        {
            try {
                $pdo=pdo();
                // Requête pour récupérer les données (par exemple, depuis une table 'contacts')
                $sql = "SELECT * FROM enseignant ORDER BY nom;";
                $result = $pdo->query($sql);
        
                $PDO = null;
                return $result;
            } catch (Exception $e) {
                echo "Erreur de connexion : " . $e->getMessage();
            }
        }
        function compter()
        {
            try {
                $pdo=pdo();
                // Requête pour récupérer les données (par exemple, depuis une table 'contacts')
                $sql = "SELECT COUNT(*) FROM enseignant;";
                $result = $pdo->query($sql);
                $count= $result->fetchColumn();

                $PDO = null;
                return $count;
            } catch (Exception $e) {
                echo "Erreur de connexion : " . $e->getMessage();
            }
        }
    ?>

    <div class="container bg-light divBreakClass1">
            <div class="container bg-light divBreakClass2">
                <div class="bg-white divBreakClass3">
                    <nav aria-label="breadcrumb" class="divBreakClass4">
                        <ol class="breadcrumb divBreakClass5">
                            <li class="breadcrumb-item divBreakClass6"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item divBreakClass6"><a href="#">Étudiant</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Liste des enseignants</li>
                        </ol>
                    </nav>
                    <div>
                        <div class="center row bg-light divAdmin">
                            <div class="col-4"><strong>Listes des enseignants</strong></div>
                            <div class="col-4"><strong>Nombre d'enseignants : <?php echo compter(); ?> </strong></div>
                            </div>
                        <div class="center row bg-light divAdmin">
                            <div class="col-4"><a href="Ens_Controller.php?action=create" class="btn btn-outline-primary me-3"><span class="p-2">Ajouter</span></a></div>
                            <div class="col-4"><a href="Ens_Controller.php?action=update" class="btn btn-outline-primary me-3"><span class="p-2">Modifier</span></a></div>
                            <div class="col-4"><a href="Ens_Controller.php?action=delete" class="btn btn-outline-primary me-3"><span class="p-2">Suprimer</span></a></div>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Matricule</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Téléphone</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                $result = recup();
                                // Vérifier si des résultats ont été récupérés
                                if (!empty($result))
                                {
                                    while($ligne = $result->fetch())
                                    {
                                        echo "<tr>";
                                        echo "<th scope='row'>" . htmlspecialchars($ligne['matricule']) . "</th>";
                                        echo "<td>" . htmlspecialchars($ligne['nom']) . "</td>";
                                        echo "<td>" . htmlspecialchars($ligne['prenom']) . "</td>";
                                        echo "<td>" . htmlspecialchars($ligne['phone']) . "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='4'>Aucune donnée trouvée.</td></tr>";
                                }
                            ?>
                            <!-- <tr class="table-secondary">
                                <th >0929NDOI</th>
                                <td>Moustapha</td>
                                <td>Diaw</td>
                                <td>LatMingué</td>
                            </tr> -->
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

<?php include "../layouts/footer.php" ; ?>