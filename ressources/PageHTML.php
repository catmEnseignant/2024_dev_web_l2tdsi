-<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="PageCSS.css">
        <title>SOLOQUIZZ</title>
        <link rel="stylesheet" href="../public/style.css">
        
    </head>
    <body>
    <header class="headerClasse pb-2">
            <nav class="px-3 navbar navbar-expand-lg navbar-dark bg-dark fixed">
                <div class="nav container row px-1">
                    <div class="col">
                        <a class="navbar-brand" href="#"><img class="solo" src="Soloquizz.png"></a>
                    </div>
                    <div class="user col">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <button class="px-3 btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="user-img" src="user.png">
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-info">
                                        <li>
                                            <a class="dropdown-item text-dark" href="#">
                                                <span<ion-icon name="person"></ion-icon></span>
                                                <strong>&nbsp;Alassane Laye Diop</strong>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item text-dark" href="#">
                                                <span<ion-icon name="power"></ion-icon></span>&nbsp;Deconnexion</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div class="bg-light"> 
            <!-- <hr class="bg-primary" style="color: white;"> -->
            <nav class="nav-bar navbar navbar-expand-lg">
                <div class="container">
                    <div class="container-fluid row">
                        <div class="col-7">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="">
                                <ul class="UL navbar-nav lienNav">
                                    <li class="nav-item ">
                                        <a class="a1 nav-link" href="#">Tableau de bord</a>
                                    </li>
                                    <li class="nav-item">
                                        <a  class="a2 nav-link" href="#">Parametres</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link a2 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Certifications
                                        </a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item text-dark" href="#">Action</a></li>
                                        <li><a class="dropdown-item text-dark" href="#">Another action</a></li>
                                        <li><a class="dropdown-item text-dark" href="#">Something else here</a></li>
                                      </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link a2" href="#">Parametres</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link a2" href="#">Classes</a>
                                    </li>
                                </ul>
                            </div> 
                        </div>
                    </div>
                </div>
            </nav>
            <div style="width: auto;">
                <div class="card_3 row text-center shadow bg-light">
                    <div class="c3 col-3 shadow-lg ">Etudiants<br><strong class="text-dark">4</strong></div>
                    <div class="c2 text-center col-lg-3 shadow-lg rounded">Certifications<br><strong class="text-dark">2</strong></div>
                    <div class="c1 text-center col-lg-3 shadow-lg rounded">Classe<br><strong class="text-dark">5</strong></div>
                </div>
                <div class="div-1 container bg-light">
                    <div class="div-2 container bg-light">
                        <div class="div-3 bg-white">
                            <nav class="nav-1" aria-label="breadcrumb">
                                <ol class="breadcrumb" >
                                  <li class="li-a breadcrumb-item"><a href="#">Accueil</a></li>
                                  <li class="li-a breadcrumb-item"><a href="#">Administrateurs</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Listes des administrateurs</li>
                                </ol>
                            </nav>
                            <div>
                                <div class="entete-2 center row bg-light">
                                    <div class="col-4"><strong>Listes des adminstrateurs</strong></div>
                                    <div class="col-4"><strong>Nombre d'administrateurs 4</strong></div>
                                    <div class="col-4 text-end"><a href="PageHTMLFormulaire.php" class="btn btn-outline-primary me-3"><span class="p-2">Ajouter un administrateur</span></a></div>
                                </div>
                            </div>

                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Réseau</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr class="table-secondary">
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                  </tr>
                                  <tr class="table-secondary">
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                  </tr>
                                </tbody>
                            </table>
                            <nav class="after-tab" aria-label="Page navigation example">
                              <ul class="pagination">
                                <li class="page-item"><a class="page-link text-dark" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link bg-primary text-white href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                              </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
        <!--Footer 2-->
            <div class="pied">
              <div class="container">
                  <p class="text-white text-center"><span>Ministèrer de l'enseignement supérieur, de la Recherche et de l'innovation <span class="text-primary">(MESRI)</span></span><br/>
                  <span>Université Cheikh Anta Diop de DAKAR <span class="text-primary">(UCAD)</span></span><br/>
                  <span>Transmission des données et sécurités de linformation <span class="text-primary">(TDSI)</span></span></p>
              </div>
            </div>
        </footer>  

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>