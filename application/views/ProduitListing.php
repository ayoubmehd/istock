
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
        <div class="row">
            <div id="content" class="col-md-8">
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
                        <a href="<?php echo base_url('index.php/Produitc/ajouter') ?>" class="btn btn-primary">Ajouter</a>
                        <div class="row">
                            <?php foreach($produit as $value): ?>
                            <div class="col-md-6">
                                <div class="card border border-secondary" style="width: 18rem;">
                                    <input type="hidden" value="<?php echo $value->IdP ?>" class="produitListing">
                                    <div class="card-body">
                                        <h4 class="card-title nomP"><?php echo $value->NomP ?></h4>
                                        <p class="card-text remarqueP"><?php echo $value->RemarqueP ?></p>
                                        <p class="card-text prixP"><?php echo $value->PrixdachaP ?>MAD</p>
                                        <button type="button" class="btn btn-secondary to-panier">Panier</button>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <?php echo $link ?>
                    </ul>   
                </nav>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h2 class="card-title font-weight-bold">Panier</h2>
                    </div>
                    <form action="<?php echo base_url('index.php/LigneVent/Store') ?>" method="post">
                        <div class="card-body produits-panier">
                            <div class="form-group">
                                <select class="form-control" name="IdC" id="" required>
                                    <option value="" disabled selected>Choisire un client</option>

                                    <?php foreach($Clientm as $value): ?>

                                        <option value="<?php echo $value->CinC ?>"><?php echo $value->NomC . ' ' . $value->PrenomC ?></option>

                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-danger clear-btn">Clear</button>
                                <button type="submit" class="btn btn-success">Check Out</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>