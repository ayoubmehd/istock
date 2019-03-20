<<<<<<< HEAD
 
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <div class="input-group no-border">
                    <form action="<?php echo base_url('index.php/Clientc/search') ?>" method="post">
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
                    <h2 class="card-title font-weight-bold">Client</h2>
                  </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <a href=<?php echo base_url("index.php/Clientc/Ajouterc");?> target="_blank" class="btn btn-info">Ajouter </a>
                    <table class="table search">
                      <thead class="text-center text-primary">
                        
                        <th>
                          CinC
                        </th>
                        <th>
                          NomC
                        </th>
                        <th>
                          PrenomC
                        </th>
                        <th>
                          EmailC
                        </th>
                        <th>
                          Adressc
                        </th>
                        <th>
                          TeleC
                        </th>
                        <th>
                          SexC
                        </th>
                        <th>
                          ResSoC
                        </th>
                        <th>
                          Date de creation
                        </th>
                        
                        <th>
                          RemarqueC
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach ($client as $value): ?>
                        <tr>
                          <td> 
                            <?php echo $value->CinC;?>
                          </td>
                          <td>
                            <?php echo $value->NomC;?>
                          </td>
                          <td>
                            <?php echo $value->PrenomC;?>
                          </td>
                          <td>
                            <?php echo $value->EmailC;?>
                          </td>
                          <td>
                            <?php echo $value->Adressc;?>
                          </td>
                          <td>
                            <?php echo $value->TeleC;?>
                          </td>
                          <td>
                            <?php echo $value->SexC;?>
                          </td>
                          <td>
                            <?php echo $value->ResSoC;?>
                          </td>                         
                          <td>
                            <?php echo $value->Datedecreation;?>
                          </td>                          
                          <td>
                            <?php echo $value->RemarqueC;?>
                          </td>
                          <td class="td-actions text-right">
                              <a href="<?php echo base_url("index.php/Clientc/Modif/").$value->CinC;?>" rel="tooltip" title="Modifier" class="btn btn-primary btn-link btn-sm">
                                  <i class="material-icons">edit</i>
                              </a>
                              <button type="button" rel="tooltip" data-toggle="modal" data-whatever="@mdo" title="Suprimmer" data-id="<?php echo $value->CinC; ?>" data-target="#confirmeSuppr" class="btn btn-danger btn-link btn-sm">
                                  <i class="material-icons">close</i>
                              </button>
                          </td>
                        </tr>
                        <?php endforeach;?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                  <!-- begin model-->
              <div class="modal fade" id="confirmeSuppr" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      
                      <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> </h4>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">voulez vous Supprimer ?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary btn-primary pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> NON</button>
                      <a href="<?php echo base_url("index.php/Clientc/Suprimer/") ?>" class="btn btn-primary btn-default pull-left"><span class="glyphicon glyphicon-off"></span> OUI</a>
                    </div>
                  </div>
                </div>
              </div>
                  <!--   end model-->
              <nav aria-label="Search results pages">
                <ul class="pagination justify-content-center">
                  <?php echo $link ?>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>

                    
                    
                    
                  
            
=======
 
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <div class="input-group no-border">
                    <form action="<?php echo base_url('index.php/Clientc/search') ?>" method="post">
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
                    <h2 class="card-title font-weight-bold">Client</h2>
                  </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <a href=<?php echo base_url("index.php/Clientc/Ajouterc");?> target="_blank" class="btn btn-info">Ajouter </a>
                    <table class="table search">
                      <thead class="text-center text-primary">
                        
                        <th>
                          CinC
                        </th>
                        <th>
                          NomC
                        </th>
                        <th>
                          PrenomC
                        </th>
                        <th>
                          EmailC
                        </th>
                        <th>
                          Adressc
                        </th>
                        <th>
                          TeleC
                        </th>
                        <th>
                          SexC
                        </th>
                        <th>
                          ResSoC
                        </th>
                        <th>
                          Date de creation
                        </th>
                        
                        <th>
                          RemarqueC
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach ($client as $value): ?>
                        <tr>
                          <td> 
                            <?php echo $value->CinC;?>
                          </td>
                          <td>
                            <?php echo $value->NomC;?>
                          </td>
                          <td>
                            <?php echo $value->PrenomC;?>
                          </td>
                          <td>
                            <?php echo $value->EmailC;?>
                          </td>
                          <td>
                            <?php echo $value->Adressc;?>
                          </td>
                          <td>
                            <?php echo $value->TeleC;?>
                          </td>
                          <td>
                            <?php echo $value->SexC;?>
                          </td>
                          <td>
                            <?php echo $value->ResSoC;?>
                          </td>                         
                          <td>
                            <?php echo $value->Datedecreation;?>
                          </td>                          
                          <td>
                            <?php echo $value->RemarqueC;?>
                          </td>
                          <td class="td-actions text-right">
                              <a href="<?php echo base_url("index.php/Clientc/Modif/").$value->CinC;?>" rel="tooltip" title="Modifier" class="btn btn-primary btn-link btn-sm">
                                  <i class="material-icons">edit</i>
                              </a>
                              <button type="button" rel="tooltip" data-toggle="modal" data-whatever="@mdo" title="Suprimmer" data-id="<?php echo $value->CinC; ?>" data-target="#confirmeSuppr" class="btn btn-danger btn-link btn-sm">
                                  <i class="material-icons">close</i>
                              </button>
                          </td>
                        </tr>
                        <?php endforeach;?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                  <!-- begin model-->
              <div class="modal fade" id="confirmeSuppr" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      
                      <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> </h4>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">voulez vous Supprimer ?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary btn-primary pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> NON</button>
                      <a href="<?php echo base_url("index.php/Clientc/Suprimer/") ?>" class="btn btn-primary btn-default pull-left"><span class="glyphicon glyphicon-off"></span> OUI</a>
                    </div>
                  </div>
                </div>
              </div>
                  <!--   end model-->
              <nav aria-label="Search results pages">
                <ul class="pagination justify-content-center">
                  <?php echo $link ?>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>

                    
                    
                    
                  
            
>>>>>>> ea634bc0baeb4d4688a09ea8485989506d1a03b1
      