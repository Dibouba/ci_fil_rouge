<!--les liens de redirection-->
<div class="row mt-5 offset-1">
    <div class="col-xs-12 col-md-6">
        <a href="<?php echo site_url("action/pro_ajout") ?>" class="btn btn-danger" role="button">Ajout Produit</a>
        <!-- <a role="button" href="<?php echo site_url("action/update_id") ?>" class="btn btn-warning">Modifier Produit</a>
        <a role="button" href="<?php echo site_url("action/delete") ?>" class="btn btn-primary">Supprimer</a> -->
    </div>
</div>
<?php echo form_open('action/update'); ?>
<!--propriété de l'id-->
<div class="col-xs-12 col-md-6">
    <div class="form-group ">
        <label for="id">ID</label>
        <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $_POST['id'];?>" readonly>
    </div>
</div>
<!--propriété de l'image-->
<div class="col-xs-12 col-md-6">
    <div class="form-group">
        <label for="photo">photo</label>
        <input type="text" class="form-control" name="photo" id="photo" value="<?php echo $_POST['photo'];?>">
    </div>
</div>
<!--propriété de référence-->
<div class="col-xs-12 col-md-6">
    <div class="form-group">
        <label for="ref">Référence</label>
        <input type="text" class="form-control" name="ref" id="ref" value="<?php echo $_POST['ref'];?>">
    </div>
</div>
<!--propriété du nom-->
<div class="col-xs-12 col-md-6">
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" name="nom" id="nom" value="<?php echo $_POST['nom']?>">
    </div>
</div>
<!--propriété de la description-->
<div class="col_xs-12 col-md-6">
    <div class="form-group">
        <label for="descr">Description</label>
        <input type="text" class="form-control" name="descr" id="descr" value="<?php echo $_POST['descr'];?>">
    </div>
</div>
<!--propriété du prix unitaire-->
<div class="col-xs-12 col-md-6">
    <div class="form-group">
        <label for="pu">Prix</label>
        <input type="text" class="form-control" name="pu" id="pu" value="<?php echo $_POST['pu'];?>">
    </div>
</div>
<!--propriété du stocke-->
<div class="col-xs-12 col-md-6">
    <div class="form-group">
        <label for="stock">Stock</label>
        <input type="text" class="form-control" name="stock" id="stock" value="<?php echo $_POST['stock'];?>">
    </div>
</div>
<!--propriété de la catégori-->
<div class="col-xs-12 col-md-6">
    <div class="form-group">
        <label for="cat">Catégorie</label>
        <input type="text" class="form-control" name="cat" id="cat" value="<?php echo $_POST['cat'];?>">
    </div>
</div>
<!--propriété sur le fournisseur-->
<div class="col-xs-12 col-md-6">
    <div class="form-group">
        <label for="fourni">Fournisseur</label>
        <input type="text" class="form-control" name="fourni" id="fourni" value="<?php echo $_POST['fourni'];?>">
    </div>
</div>
<!-- bouton de validation-->
<button type="submit" class="btn btn-dark">valider</button>
<?php echo form_close(); ?>