<!--tableau pour lister toutes les données de la table produit-->
<div class="table-responsive table-bordered mt-4">
    <table class="table">
    <!--le header du tableau-->
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Photo</th>
                <th>Référence</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Stocke</th>
                <th>Catégorie</th>
                <th>Fournoisseur</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <!--le body du tableau-->
        <tbody>
          <?php
        //var_dump($mise);
        //la boucle qui permet de lister tous les produits
              foreach ($ajout as $value) {
                 // var_dump($value);
                  echo "<tr>";
                  echo "<td>" . $value->pro_id . "</td>";
                  echo "<td>" . $value->pro_photo . "</td>";
                  echo "<td>" . $value->pro_ref . "</td>";
                  echo "<td>" . $value->pro_nom . "</td>";
                  echo "<td>" . $value->pro_descr . "</td>";
                  echo "<td>" . $value->pro_pru . "</td>";
                  echo "<td>" . $value->pro_stk . "</td>";
                  echo "<td>" . $value->pro_cat_id . "</td>";
                  echo "<td>" . $value->pro_fou_id . "</td>";
                  echo "<td> <a type='button' class='btn btn-primary' href='". site_url("action/miseajour?id=".$value->pro_id)."'>Modifier</a> </td>";
                  echo "<td> <a type='button' class='btn btn-danger' href='".site_url("action/delete?id=".$value->pro_id)."'>Supprimer</a> </td>";
                  echo "</tr>";
              }
              
            ?>
        </tbody>
    </table>
</div>
<!--les liens de redirection-->
<a href="<?php echo site_url("action/pro_ajout")?>" class="btn btn-danger" role="button">Ajout Produit</a>
<!-- <a role="button" href="<?php echo site_url("action/update")?>" class="btn btn-warning">Modifier Produit</a>
<a role="button" href="<?php echo site_url("action/delete")?>" class="btn btn-primary">Supprimer</a> -->
