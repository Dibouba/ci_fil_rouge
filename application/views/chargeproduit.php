<div class="table-responsive table-bordered mt-2">
    <table class="table">
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
            </tr>
        </thead>
        <tbody>
          <?php
             foreach($ajout as $value ){
                echo"<tr>";
               echo "<td>".$value->pro_id."</td>";
               echo "<td>".$value->pro_photo."</td>";
                echo"<td>".$value->pro_ref."</td>";
                echo"<td>".$value->pro_nom."</td>";
               echo "<td>".$value->pro_descr."</td>";
               echo "<td>".$value->pro_pru."</td>";
                echo "<td>".$value->pro_stk."</td>";
                 echo"<td>".$value->pro_cat_id."</td>";
                echo"<td>".$value->pro_fou_id."</td>";
                echo"</tr>";
             }
            ?>
        </tbody>
    </table>
</div>