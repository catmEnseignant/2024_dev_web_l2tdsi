
<?php 
    include('../html/Header.html'); 
    include('config/dataConnect.php');
    include('tableaux.php');
?>

<div>
                        <div class="bg-white p-1">
                            <div>
                                <div class="m-2 center row bg-light divAdmin">
                                    <div class="col-4"><strong>Listes des adminstrateurs</strong></div>
                                    <div class="col-4"><strong>Nombre d'administrateurs 4</strong></div>
                                </div>
                            </div>
        
                            <form method="post" action="submit_Form.php" class="col-12">
                                <div class="row mt-3 mt-md-0">
                                    <div class="col-6 mb-3">
                                        <input type="text" name="Prenom" class="form-control" id="Prenom" placeholder="Prénom">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <input type="text" name="Nom" class="form-control" id="Nom" placeholder="Nom">
                                    </div>
                                </div>
                                <div class="row mt-3 mt-md-0">
                                    <div class="col-6 mb-3">
                                        <input type="text" name="Adresse" class="form-control" id="Adresse" placeholder="Adresse">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <input type="email" name="Email" class="form-control" id="Email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="row mt-3 mt-md-0">
                                    <div class="col-6 mb-3">
                                        <input type="number" name="Age" class="form-control" id="Age" placeholder="Age">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <input type="text" name="Reseau" class="form-control" id="Reseau" placeholder="Réseau">
                                    </div>
                                    <!-- <div class="col-6 mb-3">
                                        <input type="file" accept="image/*" name="fichier" class="form-control" id="fichier" placeholder="Aucun fichier choisi">
                                    </div> -->
                                </div>
                                <input type="submit" class="btn btn-primary w-100 text-center fw-bolder" id="enregistrer" value="Enregistrer" name="Enregistrer">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../html/Footer.html'); ?>