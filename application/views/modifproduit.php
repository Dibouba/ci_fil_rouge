
<?php echo form_open('action/miseajour'); ?>
<!--propriété de l'id-->
<div class="col-xs-12 col-md-6">
    <div class="form-group ">
        
        <input type="hidden" class="form-control" name="pro_id" id="pro_id" value="<?php echo $produits->pro_id; ?>">
    </div>
</div>
<!--propriété de l'image-->
<div class="col-xs-12 col-md-6">
    <div class="form-group">
        <label for="photo">photo</label>
        <input type="text" class="form-control" name="photo" id="photo" value="<?php echo $produits->pro_photo;?>">
    </div>
</div>
<!--propriété de référence-->
<div class="col-xs-12 col-md-6">
    <div class="form-group">
        <label for="ref">Référence</label>
        <input type="text" class="form-control" name="ref" id="ref" value="<?php echo $produits->pro_ref;?>">
    </div>
</div>
<!--propriété du nom-->
<div class="col-xs-12 col-md-6">
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" name="nom" id="nom" value="<?php echo $produits->pro_nom;?>">
    </div>
</div>
<!--propriété de la description-->
<div class="col_xs-12 col-md-6">
    <div class="form-group">
        <label for="descr">Description</label>
        <input type="text" class="form-control" name="descr" id="descr" value="<?php echo $produits->pro_descr;?>">
    </div>
</div>
<!--propriété du prix unitaire-->
<div class="col-xs-12 col-md-6">
    <div class="form-group">
        <label for="pu">Prix</label>
        <input type="text" class="form-control" name="pu" id="pu" value="<?php echo $produits->pro_pru;?>">
    </div>
</div>
<!--propriété du stocke-->
<div class="col-xs-12 col-md-6">
    <div class="form-group">
        <label for="stock">Stock</label>
        <input type="text" class="form-control" name="stock" id="stock" value="<?php echo $produits->pro_stk;?>">
    </div>
</div>
<!--propriété de la catégori-->
<div class="col-xs-12 col-md-6">
    <div class="form-group">
        <label for="cat">Catégorie</label>
        <select class="form-control" name="cat" id="cat">
            <?php 
                foreach ($categories as $cat){
                    echo "<option id='".$cat->cat_nom."' value='".$cat->cat_id." '";
                    if ($cat->cat_id == $produits->pro_cat_id) {echo "selected";}
                    echo ">".$cat->cat_nom."</option>";
                }
            ?>
        </select>
        <!-- <input type="text" class="form-control" name="cat" id="cat" value="<?php echo $produits->pro_cat_id;?>"> -->
    </div>
</div>
<!--propriété sur le fournisseur-->
<div class="col-xs-12 col-md-6">
    <div class="form-group">
        <label for="fourni">Fournisseur</label>
        <select class="form-control" name="fourni" id="fourni">
            <?php 
                foreach ($fournisseurs as $four){
                    echo "<option id='".$four->fou_nom."' value='".$four->fou_id." '";
                    if ($four->fou_id == $produits->pro_fou_id) {echo "selected";}
                    echo ">".$four->fou_nom."</option>";
                }
            ?>
        </select>
    </div>
</div>
<!-- bouton de validation-->
<button type="submit" name="valider" id="valider" class="btn btn-dark">Modifier</button>
<?php echo form_close(); ?>