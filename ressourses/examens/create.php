<?php
session_start();
require '../layouts/master.php'; 
$examen = $_SESSION['examen'] ?? null;
$action = $_GET['action'] ?? '';
?>

<div class="container bg-light divBreakClass1">
    <div class="container bg-light divBreakClass2">
        <div class="bg-white divBreakClass3">
            <nav aria-label="breadcrumb" class="divBreakClass4">
                <ol class="breadcrumb divBreakClass5">
                    <li class="breadcrumb-item divBreakClass6"><a href="#">Accueil</a></li>
                    <li class="breadcrumb-item divBreakClass6"><a href="/dossier_2024/L2TDSI/2024_dev_web_l2tdsi/ressourses/examens/index.php">Examen</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Formulaire Examen</li>
                </ol>
            </nav>
            <div>
                <div class="center row bg-light divAdmin">
                    <div class="col-4"><strong>Formulaire Examen</strong></div>
                </div>
            </div>
            <div class="center row container">
                <form action="ExamenController.php?action=<?php echo $action == 'edit' ?  'update' : 'store'; ?>" method="post">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1 mb-2">Identifiant</label>
                            <input type="number" class="form-control" name="identifiant" id="exampleInputEmail1" placeholder="20220982HZT" <?php echo $action == 'edit' ? 'value="' . $examen[0]['idExam'] . '"' : ''; ?>>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1 mb-2">Nom</label>
                            <input type="text" name="nom" class="form-control" id="exampleInputEmail1" placeholder="Mathematique" <?php echo $action == 'edit' ? 'value="' . $examen[0]['nom'] . '"' : ''; ?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1 mb-2">coef</label>
                            <input type="number" name="coef" class="form-control" id="exampleInputEmail1" placeholder="1" <?php echo $action == 'edit' ? 'value="' . $examen[0]['coef'] . '"' : ''; ?>>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1 mb-2">Date</label>
                            <input type="date" class="form-control" name="date" placeholder="15/01/2024" <?php echo $action == 'edit' ? 'value="' . $examen[0]['date'] . '"' : ''; ?>>
                        </div>

                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1 mb-2">Durée</label>
                            <input type="time" class="form-control" name="duree" placeholder="2h" <?php echo $action == 'edit' ? 'value="' . $examen[0]['duree'] . '"' : ''; ?>>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="">
                                <label for="exampleInputEmail1 mb-2"></label>
                                <button type="submit" class="btn btn-primary form-control"><?php echo $action == 'edit' ? 'Modifier' : 'Enregistrer'; ?></button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php require '../layouts/footer.php'; ?>