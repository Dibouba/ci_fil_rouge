<?php echo form_open("action/pro_ajout"); ?>
<!--declaration d'une variable pour recupérer l'image-->
$b=<img src="<?php echo base_url("assets/images/guitare2.jpg"); ?>" class="img-fluid" alt="guitare1">
<!--propriété de l'id-->
<div class="col-xs-12 col-md-6">
    <div class="form-group row">
        <label for="id">ID</label>
        <input type="text" class="form-control" name="id" id="id" value='.pro_id.'>
    </div>
</div>
<!--propriété de l'image-->
<div class="col-xs-12 col-md-6">
    <div class="form-group row">
        <label for="photo">photo</label>
        <input type="text" class="form-control" name="photo" id="photo" value='.$b.'>
    </div>
</div>
<!--propriété de référence-->
<div class="col-xs-12 col-md-6">
    <div class="form-group row">
        <label for="ref">Référence</label>
        <input type="text" class="form-control" name="ref" id="ref" value=".pro_ref.">
    </div>
</div>
<!--propriété du nom-->
<div class="col-xs-12 col-md-6">
    <div class="form-group row">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" name="nom" id="name" value=".pro_nom.">
    </div>
</div>
<!--propriété de la description-->
<div class="col_xs-12 col-md-6">
    <div class="form-group row">
        <label for="descr">Description</label>
        <input type="text" class="form-control" name="descr" id="descr" value=".pro_decr">
    </div>
</div>
<!--propriété du prix unitaire-->
<div class="col-xs-12 col-md-6">
    <div class="form-group row">
        <label for="pu">Prix</label>
        <input type="text" class="form-control" name="pu" id="pu" value=".pro_pu.">
    </div>
</div>
<!--propriété du stocke-->
<div class="col-xs-12 col-md-6">
    <div class="form-group row">
        <label for="stock">Stock</label>
        <input type="text" class="form-control" name="stock" id="stock" value=".pro_stk.">
    </div>
</div>
<!--propriété de la catégori-->
<div class="col-xs-12 col-md-6">
    <div class="form-group row">
        <label for="cat">Catégorie</label>
        <input type="text" class="form-control" name="cat" id="cat" value=".pro_cat">
    </div>
</div>
<!--propriété sur le fournisseur-->
<div class="col-xs-12 col-md-6">
    <div class="form-group row">
        <label for="fourni">Fournisseur</label>
        <input type="text" class="form-control" name="fourni" id="fourni" value=".pro_fou.">
    </div>
</div>
<?php echo form_close();?>
<!-- les liens de redirection-->

<a href="<?php echo site_url("action/ajout")?>" class="btn btn-danger" role="button">Ajout Produit</a>
<a role="button" href="<?php echo site_url()?>" class="btn btn-warning">Modifier Produit</a>
<a role="button" href="<?php echo site_url()?>" class="btn btn-primary">Supprimer</button>