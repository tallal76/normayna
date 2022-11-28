<form action="index.php?page=majProduit" method="post">

    
        <fieldset>
            <legend>Filtrer par categorie</legend>
            <div>
                 <select name="repa">
        <?php
        foreach ($requette as $key => $value) {
            $nom =   $value['Libelle'];
            echo "<option value=" . $nom . ">";
            echo "$nom";
            echo "</option>";
        }
        ?>

    </select>
                <input type="submit" value="Rechercher">
            </div>

        </fieldset>






</form>