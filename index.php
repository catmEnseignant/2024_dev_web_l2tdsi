<?php

include('RESSOURCE/dataConnect.php');
include('RESSOURCE/tableaux.php');
?>

<div>
  <div class="center row bg-light divAdmin">
    <div class="col-4"><strong>Listes des etudiants </strong></div>
    <div class="col-4"><strong>Nombre d etudiants 4</strong></div>
    <div class="col-4 text-end"><a href="PageFormulaire.php" class="btn btn-outline-primary me-3 fw-bolder"><span class="p-2">Ajouter un administrateur</span></a></div>
  </div>
</div>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">number carte</th>
      <th scope="col">Nom</th>
      <th scope="col">prenom</th>
      <th scope="col">adresse</th>
      <th scope="col">email</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <tr class="table-secondary">
        <td><?php echo $row['number carte'] ?></td>
        <td><?php echo $row['nom'] ?></td>
        <td><?php echo $row['prenom'] ?></td>
        <td><?php echo $row['adresse'] ?></td>
        <td><?php echo $row['email'] ?></td>
      </tr>
    <?php } ?>
    <!-- <tr>
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
                          </tr> -->
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
</div>
</div>

<?php include('../html/Footer.html'); ?>