<form action="index.php?page=ajoutProduit" method="post" enctype="multipart/form-data">

    <div>
        <label for="libelle">Nom :</label>
        <input type="text" name="libelle" id="libelle" value="<?= $libelle ?>" />
    </div>
    <div>
        <label for="prix">Prix :</label>
        <input type="text" name="prix" id="prix" value="<?= $prix ?>" />
    </div>
    <div>
    <label for="file">Image :</label>
        <input type="file" name="file" value="<?= $file ?>" />
    </div>
    <div>
        <label for="categorie">Categorie :</label>
    <select name="categorie" id="categorie"></select>
    </div>
    
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Enregistrer" />
    </div>
    <input type="hidden" name="frmProduit" />
</form>