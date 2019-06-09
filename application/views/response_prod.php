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