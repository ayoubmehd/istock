
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">    
          <div class="card-header card-header-primary">
            <h4 class="card-title">Edit Profile</h4>
            <p class="card-category">Complete your profile</p>
          </div>
          <div class="card-body">
            <form action="<?php echo base_url('index.php/Produitc/Enregistrer') ?>" method="post">
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nom de produit</label>
                    <input name="NomP" type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="bmd-label-floating">Date Ep</label>
                    <input name="DateEP" type="date" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Quentité</label>
                    <input name="QuteP" type="number" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">date de création</label>
                    <input name="DateCreationP" type="date" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Prix d'achat</label>
                    <input name="PrixdachaP" type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">User</label>
                    <input name="UserP" type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Remarque</label>
                    <input name="RemarqueP" type="text" class="form-control">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary pull-right">Enregistrer</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>