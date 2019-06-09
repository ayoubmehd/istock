
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
                        <form method="post" action="<?php echo base_url('index.php/LigneCmd/EnreCmd') ?>">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <select name="IdP" type="text" class="form-control">
                                            <option class="bmd-label-floating" disabled value="" selected>Coisire un produit</option>
                                            <?php foreach($produit as $p): ?>
                                                <option value="<?php echo $p->IdP ?>" <?php echo $p->IdP == $IdP ? 'selected' : '' ?>><?php echo $p->NomP ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select name="IdF" type="text" class="form-control">
                                            <option class="bmd-label-floating" disabled value="" selected>Coisire un fournisseur</option>
                                            <?php foreach($fournniseur as $f): ?>
                                                <option value="<?php echo $f->NumFor ?>"><?php echo $f->PaysFor . ' ' . $f->VilleFor ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Prix unitaire</label>
                                        <input name="PrixUni" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Quantit�</label>
                                        <input name="Qtt" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Date de commande</label>
                                        <input name="DateCmd" type="date" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Commander</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>