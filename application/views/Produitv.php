
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-4">
            <div class="input-group no-border">
              <form action="<?php echo base_url('index.php/Produitc/search') ?>" method="post">
                <input required id="search" type="search" name="search" value="" class="form-control" placeholder="Search...">
              </form>
            </div>
          </div>
        </div>
        <nav aria-label="Search results pages">
          <ul class="pagination justify-content-center">
            <?php echo $link ?>
          </ul>
        </nav>
        <div class="card">
          <div class="card-header card-header-primary">
            <h2 class="card-title font-weight-bold">Produit</h2>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <a href="<?php echo base_url('index.php/Produitc/ajouter') ?>" class="btn btn-primary">Ajouter</a>
              <table class="search table">
                <thead class="text-center text-primary">
                  <th>
                    ID Produit
                  </th>
                  <th>
                    Nome du produit
                  </th>
                  <th>
                    Date
                  </th>
                  <th>
                    Quantité
                  </th>
                  <th>
                    Prix d'achat
                  </th>
                  <th>
                    Date de création
                  </th>
                  <th>
                    User
                  </th>
                  <th>
                    Remarque
                  </th>
                  <th>
                  </th>
                  <th>
                  </th>
                  <th colspan="2">
                    Nouvelle
                  </th>
                </thead>
                <tbody>
                  <?php foreach($produit as $value): ?>
                    <tr>
                      <td>
                        <?php echo $value->IdP ?>
                      </td>
                      <td>
                        <?php echo $value->NomP ?>
                      </td>
                      <td>
                        <?php echo $value->DateEP ?>
                      </td>
                      <td>
                        <?php echo $value->QuteP ?>
                      </td>
                      <td>
                        <?php echo $value->PrixdachaP ?>
                      </td>
                      <td>
                        <?php echo $value->DateCreationP ?>
                      </td>
                      <td>
                        <?php echo $value->UserP ?>
                      </td>
                      <td>
                        <?php echo $value->RemarqueP ?>
                      </td>
                      <td>
                        <a href="<?php echo base_url('index.php/Produitc/Modifier/' . $value->IdP) ?>" class="btn btn-secendary">Modifier</a>
                      </td>
                      <td>
                        <button type="button" class="btn btn-success" data-client="<?php echo $value->IdP ?>" data-toggle="modal" data-target="#confirmeSuppr" data-whatever="@mdo">Suprimer</button>
                      </td>
                      <td>
                        <a href="<?php echo base_url('index.php/LigneCmd/Ajouter/' . $value->IdP) ?>" class="btn btn-success">commande</a>
                      </td>
                      <td>
                        <button type="button" class="btn btn-success" data-produit="<?php echo $value->IdP ?>" data-toggle="modal" data-target="#Achat" data-whatever="@mdo">Achat</button>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <?php echo $link ?>
          </ul>
        </nav>
        <!-- Start Modal -->


        <div class="modal fade" id="Achat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Entrer les information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form class="produit" method="post" action="<?php echo base_url('index.php/LigneAchats/StoreAchat/') ?>">
                <div class="modal-body">
                    <input value="" type="hidden" name="IdP">
                    <div class="form-group">
                      <select name="IdC" type="text" class="form-control">
                      </select>
                    </div>
                    <div class="form-group">
                      <label class="bmd-label-floating">Prix</label>
                      <input name="Prix" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="bmd-label-floating">Quantite</label>
                      <input name="Qtt" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="label">Date d'achat</label>
                      <input name="DateAchat" type="date" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
              </form>
            </div>
          </div>
        </div>



        <!-- Suprimer message de confirmation -->


        <div class="modal fade" id="confirmeSuppr" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Supprimer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h3>Voullez vous supprimer</h3>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <a href="<?php echo base_url('index.php/Produitc/Suprimer/') ?>" class="btn btn-danger">Suprimer</a>
              </div>
            </div>
          </div>
        </div>

        <!-- End Modal -->



      </div>
    </div>
  </div>