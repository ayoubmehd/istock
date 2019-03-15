
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Produit</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID de commande
                  </th>
                  <th>
                    Produit
                  </th>
                  <th>
                    Fournisseur
                  </th>
                  <th>
                    Prix unitaire
                  </th>
                  <th>
                    Quantité
                  </th>
                  <th>
                    Date de commande
                  </th>
                </thead>
                <tbody>
                  <?php foreach($Lignecmd as $value): ?>
                    <tr>
                      <td>
                        <?php echo $value->IdCmd ?>
                      </td>
                      <td>
                        <?php echo $value->IdP ?>
                      </td>
                      <td>
                        <?php echo $value->IdF ?>
                      </td>
                      <td>
                        <?php echo $value->PrixUni ?>
                      </td>
                      <td>
                        <?php echo $value->Qtt ?>
                      </td>
                      <td>
                        <?php echo $value->DateCmd ?>
                      </td>
                      <td>
                        <a href="<?php echo base_url('index.php/LigneCmd/Modifier/' . $value->IdCmd) ?>" class="btn btn-secendary">Modifier</a>
                      </td>
                      <td>
                        <a href="<?php echo base_url('index.php/LigneCmd/Suprimer/' . $value->IdCmd) ?>" class="btn btn-danger">Suprimer</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>