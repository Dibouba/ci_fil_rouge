<div class="row mt-5 offset-1">
    <div class="col-xs-12 col-md-6">
        <a href="<?php echo site_url("action/ajout") ?>" class="btn btn-danger" role="button">Ajout Produit</a>
        <a role="button" href="<?php echo site_url() ?>" class="btn btn-warning">Modifier Produit</a>
        <a role="button" href="<?php echo site_url() ?>" class="btn btn-primary">Supprimer</a>
    </div>
</div>
<?php echo form_open("action/pro_ajout"); ?>
<!--declaration d'une variable pour recupérer l'image-->


<!--propriété de l'id-->
<div class="col-xs-12 col-md-6">
    <div class="form-group ">
        <label for="id">ID</label>
        <input type="text" class="form-control" name="id" id="id">
    </div>
</div>
<!--propriété de l'image-->
<div class="col-xs-12 col-md-6">
    <div class="form-group">
        <label for="photo">photo</label>
        <input type="text" class="form-control" name="photo" id="photo">
    </div>
</div>
<!--propriété de référence-->
<div class="col-xs-12 col-md-6">
    <div class="form-group">
        <label for="ref">Référence</label>
        <input type="text" class="form-control" name="ref" id="ref">
    </div>
</div>
<!--propriété du nom-->
<div class="col-xs-12 col-md-6">
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" name="nom" id="name">
    </div>
</div>
<!--propriété de la description-->
<div class="col_xs-12 col-md-6">
    <div class="form-group">
        <label for="descr">Description</label>
        <input type="text" class="form-control" name="descr" id="descr">
    </div>
</div>
<!--propriété du prix unitaire-->
<div class="col-xs-12 col-md-6">
    <div class="form-group">
        <label for="pu">Prix</label>
        <input type="text" class="form-control" name="pu" id="pu">
    </div>
</div>
<!--propriété du stocke-->
<div class="col-xs-12 col-md-6">
    <div class="form-group">
        <label for="stock">Stock</label>
        <input type="text" class="form-control" name="stock" id="stock">
    </div>
</div>
<!--propriété de la catégori-->
<div class="col-xs-12 col-md-6">
    <div class="form-group">
        <label for="cat">Catégorie</label>
        <input type="text" class="form-control" name="cat" id="cat">
    </div>
</div>
<!--propriété sur le fournisseur-->
<div class="col-xs-12 col-md-6">
    <div class="form-group">
        <label for="fourni">Fournisseur</label>
        <input type="text" class="form-control" name="fourni" id="fourni">
    </div>
</div>
<!-- les liens de redirection-->


<button type="submit" class="btn btn-dark">valider</button>
<?php echo form_close(); ?>