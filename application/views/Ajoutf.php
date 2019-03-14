
  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                </div>
                <div class="card-body">
                  <form action="<?php echo base_url("index.php/Fournisseurc/AjouterFournisseur");?>" method="POST" >
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Numéro</label>
                          <input type="text" name="NumFor" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Adress</label>
                          <input type="text" name="AdressFor" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Téléphone</label>
                          <input type="text" name="TéleFor" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Ville</label>
                          <input type="text" name="VilleFor" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Pays</label>
                          <input type="text" name="PaysFor" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fax</label>
                          <input type="text" name="FaxFor" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Réseaux Sociaux</label>
                          <input type="text" name="ResSFor" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Date De Création</label>
                          <input type="text" name="DateCreationFor" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Remarque</label>
                          <input type="text" name="RemarqueFor" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">User</label>
                        <input type="text" name="UserFor" class="form-control">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
