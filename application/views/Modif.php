<<<<<<< HEAD

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                </div>


                <div class="card-body">
                  <?php foreach ($getfrn as $value): ?>

                  <form action="<?php echo base_url("index.php/Fournisseurc/MagFournisseur/").$value ->	NumFor;?>" method="POST" >


                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Numéro</label>
                          <input type="text" value="<?php echo $value->	NumFor; ?>" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Adress</label>
                          <input type="text"value="<?php echo $value->AdressFor	; ?>" name="AdressFor" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Téléphone</label>
                          <input type="text" value="<?php echo $value-> TéleFor; ?>" name="TéleFor" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Ville</label>
                          <input type="text" value="<?php echo $value-> VilleFor; ?>" name="VilleFor" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Pays</label>
                          <input type="text" value="<?php echo $value-> PaysFor; ?>" name="PaysFor" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fax</label>
                          <input type="text" value="<?php echo $value-> FaxFor; ?>" name="FaxFor" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Réseaux Sociaux</label>
                          <input type="text" value="<?php echo $value-> ResSFor; ?>" name="ResSFor" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Date De Création</label>
                          <input type="text"  value="<?php echo $value-> DateCreationFor; ?>"  name="DateCreationFor" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Remarque</label>
                          <input type="text"  value="<?php echo $value-> RemarqueFor; ?>"  name="RemarqueFor" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">User</label>
                        <input type="text" value="<?php echo $value-> UserFor; ?>" name="UserFor" class="form-control">
                        <button type="submit" class="btn btn-primary">Modifier</button>
                      </div>
                    </div>
                  </div>
                <div class="clearfix"></div>
                  </form>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
=======

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                </div>


                <div class="card-body">
                  <?php foreach ($getfrn as $value): ?>

                  <form action="<?php echo base_url("index.php/Fournisseurc/MagFournisseur/").$value ->	NumFor;?>" method="POST" >


                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Numéro</label>
                          <input type="text" value="<?php echo $value->	NumFor; ?>" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Adress</label>
                          <input type="text"value="<?php echo $value->AdressFor	; ?>" name="AdressFor" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Téléphone</label>
                          <input type="text" value="<?php echo $value-> TéleFor; ?>" name="TéleFor" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Ville</label>
                          <input type="text" value="<?php echo $value-> VilleFor; ?>" name="VilleFor" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Pays</label>
                          <input type="text" value="<?php echo $value-> PaysFor; ?>" name="PaysFor" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fax</label>
                          <input type="text" value="<?php echo $value-> FaxFor; ?>" name="FaxFor" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Réseaux Sociaux</label>
                          <input type="text" value="<?php echo $value-> ResSFor; ?>" name="ResSFor" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Date De Création</label>
                          <input type="text"  value="<?php echo $value-> DateCreationFor; ?>"  name="DateCreationFor" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Remarque</label>
                          <input type="text"  value="<?php echo $value-> RemarqueFor; ?>"  name="RemarqueFor" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">User</label>
                        <input type="text" value="<?php echo $value-> UserFor; ?>" name="UserFor" class="form-control">
                        <button type="submit" class="btn btn-primary">Modifier</button>
                      </div>
                    </div>
                  </div>
                <div class="clearfix"></div>
                  </form>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
>>>>>>> ea634bc0baeb4d4688a09ea8485989506d1a03b1
