<?php include "../layouts/master.php" ;?>
<div class="container bg-light divBreakClass1">
        <div class="container bg-light divBreakClass2">
            <div class="bg-white divBreakClass3">
                <nav aria-label="breadcrumb" class="divBreakClass4">
                    <ol class="breadcrumb divBreakClass5">
                        <li class="breadcrumb-item divBreakClass6"><a href="#">Accueil</a></li>
                        <li class="breadcrumb-item divBreakClass6"><a href="#">Enseignant</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Formulaire de miphone</li>
                    </ol>
                </nav>
                <div>
                    <div class="center row bg-light divAdmin">
                        <div class=""><strong>Formulaire de mis-à-jour des données d'un enseignant</strong></div>
                    </div>
                </div>
                <div class="center row container">
                    <form action="Ens_Controller.php?action=upd" method="post">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1 mb-2">Matricule</label>
                                <input type="text" class="form-control" name="matricule" id="exampleInputEmail1" placeholder="120967">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1 mb-2">Prénom</label>
                                <input type="text" name="prenom" class="form-control" id="exampleInputEmail1" placeholder="Moussa">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1 mb-2">Nom</label>
                                <input type="text" name="nom" class="form-control" id="exampleInputEmail1" placeholder="Diop">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1 mb-2">Matière</label>
                                <input type="number" class="form-control" name="phone" placeholder="787133864">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>

<?php include "../layouts/footer.php" ;?>