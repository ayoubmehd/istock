
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Client</h4>
                  <p class="card-category">Ajouter </p>
                </div>
                <div class="card-body">
                  <form method="post" action="<?php echo base_url("index.php/Clientc/Ajouterclient");?>">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">CinC</label>
                          <input type="text" name="CinC" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">NomC</label>
                          <input type="text" name="NomC" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">PrenomC</label>
                          <input type="text" name="PrenomC" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">EmailC</label>
                          <input type="text" name="EmailC" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Adressc</label>
                          <input type="text" name="Adressc" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">TeleC</label>
                          <input type="text" name="TeleC" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">SexC</label>
                          <input type="text" name="SexC" class="form-control">
                        </div>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">ResSoC</label>
                          <input type="text" name="ResSoC" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Datedecreation</label>
                          <input type="text" name="Datedecreation" class="form-control">
                        </div>
                      </div>
                      </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">RemarqueC</label>
                          <input type="text" name="RemarqueC" class="form-control">
                        </div>
                      </div>
                    </div><button type="submit" class="btn btn-primary">INSERT</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
