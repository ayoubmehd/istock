<<<<<<< HEAD

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Client</h4>
                  <p class="card-category">Modifier </p>
                </div>
                <div class="card-body">
                  <?php foreach ($clnt as  $value):?> 
                  
                  
                  <form method="post" action="<?php echo base_url("index.php/Clientc/Magclient/").$value->CinC;?>">
                    
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">CinC</label>
                          <input type="text" value="<?php echo $value->CinC;?>" name="CinC" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">NomC</label>
                          <input type="text" value="<?php echo $value->NomC;?>" name="NomC" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">PrenomC</label>
                          <input type="text" value="<?php echo $value->PrenomC;?>" name="PrenomC" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">EmailC</label>
                          <input type="text" value="<?php echo $value->PrenomC;?>" name="EmailC" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Adressc</label>
                          <input type="text" value="<?php echo $value->PrenomC;?>" name="Adressc" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">TeleC</label>
                          <input type="text" value="<?php echo $value->TeleC;?>" name="TeleC" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">SexC</label>
                          <input type="text" value="<?php echo $value->SexC;?>" name="SexC" class="form-control">
                        </div>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">ResSoC</label>
                          <input type="text" value="<?php echo $value->ResSoC;?>" name="ResSoC" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Datedecreation</label>
                          <input type="text" value="<?php echo $value->Datedecreation;?>" name="Datedecreation" class="form-control">
                        </div>
                      </div>
                      </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">RemarqueC</label>
                          <input type="text" value="<?php echo $value->RemarqueC;?>" name="RemarqueC" class="form-control">
                        </div>
                      </div>
                    </div><button type="submit" class="btn btn-round">UPDATE</button>
                    <div class="clearfix"></div>
                  </form>
                <?php endforeach; ?>
                </div>
              </div>
=======

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Client</h4>
                  <p class="card-category">Modifier </p>
                </div>
                <div class="card-body">
                  <?php foreach ($clnt as  $value):?> 
                  
                  
                  <form method="post" action="<?php echo base_url("index.php/Clientc/Magclient/").$value->CinC;?>">
                    
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">CinC</label>
                          <input type="text" value="<?php echo $value->CinC;?>" name="CinC" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">NomC</label>
                          <input type="text" value="<?php echo $value->NomC;?>" name="NomC" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">PrenomC</label>
                          <input type="text" value="<?php echo $value->PrenomC;?>" name="PrenomC" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">EmailC</label>
                          <input type="text" value="<?php echo $value->PrenomC;?>" name="EmailC" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Adressc</label>
                          <input type="text" value="<?php echo $value->PrenomC;?>" name="Adressc" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">TeleC</label>
                          <input type="text" value="<?php echo $value->TeleC;?>" name="TeleC" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">SexC</label>
                          <input type="text" value="<?php echo $value->SexC;?>" name="SexC" class="form-control">
                        </div>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">ResSoC</label>
                          <input type="text" value="<?php echo $value->ResSoC;?>" name="ResSoC" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Datedecreation</label>
                          <input type="text" value="<?php echo $value->Datedecreation;?>" name="Datedecreation" class="form-control">
                        </div>
                      </div>
                      </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">RemarqueC</label>
                          <input type="text" value="<?php echo $value->RemarqueC;?>" name="RemarqueC" class="form-control">
                        </div>
                      </div>
                    </div><button type="submit" class="btn btn-round">UPDATE</button>
                    <div class="clearfix"></div>
                  </form>
                <?php endforeach; ?>
                </div>
              </div>
>>>>>>> ea634bc0baeb4d4688a09ea8485989506d1a03b1
            </div>