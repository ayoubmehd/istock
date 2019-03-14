
      <!-- End Navbar -->
      <div class="content pagination">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="input-group no-border">
                <form action="<?php echo  base_url('index.php/Fournisseurc/search'); ?>" method="post">
                <input name="search"  type="text" value="" class="form-control" placeholder="Search...">
              </form>
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
              </div>
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <?php echo $link; ?>
                </ul>
              </nav>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h2 class="card-title font-weight-bold">Fournisseur</h2>
                </div>

                <div class="card-body ">

                  <div class="table-responsive">
                  <td><a href=<?php echo base_url("index.php/Fournisseurc/Ajoutf"); ?> target="_blank" class="btn btn-info">Ajouter</a></td>
                    <table class="table search">
                      <thead class="text-center text-primary">
                        <th>Numéro</th>
                        <th>Adress</th>
                        <th>Téléphone</th>
                        <th>Ville</th>
                        <th>Pays</th>
                        <th>Fax</th>
                        <th>Réseaux Sociaux</th>
                        <th>Date De Création</th>
                        <th>Remarque</th>
                        <th>User</th>
                      </thead>
                      <tbody>
                    <?php foreach ($Fournisseur as $value): ?>
                        <tr>
                          <td><?php echo $value->	NumFor; ?></td>
                          <td><?php echo $value-> AdressFor; ?></td>
                          <td><?php echo $value->	TéleFor; ?></td>
                          <td><?php echo $value->	VilleFor; ?></td>
                          <td ><?php echo $value-> PaysFor; ?></td>
                          <td ><?php echo $value-> FaxFor; ?></td>
                          <td ><?php echo $value->	ResSFor; ?></td>
                          <td ><?php echo $value->	DateCreationFor;?></td>
                          <td ><?php echo $value->	RemarqueFor; ?></td>
                          <td ><?php echo $value->	UserFor; ?></td>

                          <td><a href="<?php echo base_url("index.php/Fournisseurc/Modif/".$value ->NumFor) ?>" target="_blank" class="btn btn-info">Modifier</a></td>
                          <td>
                          <button class="btn btn-primary" type="button" data-toggle="modal" data-fournisseur="<?php echo $value->NumFor; ?>" data-target="#myModal">Supprimer</button>
                        </td>
                        </tr>
                      <?php endforeach; ?>
                      </tbody>
                    </table>
                    <li class="button-container">
                    </li>
                    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> </h4>
                          </div>
                          <div class="modal-body">
                            <form role="form">
                          <p class="text-center">voulez vous Supprimer ?</p>

                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary btn-primary pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> NON</button>
                            <a href="<?php echo base_url("index.php/Fournisseurc/Suprimer/")?>" class="btn btn-primary btn-default pull-left"><span class="glyphicon glyphicon-off"></span> OUI</a>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
