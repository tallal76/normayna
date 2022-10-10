<form action="index.php?page=update" method="post">

    <div>
        <label for="theme">Thème :</label>
        <input type="text" name="theme" id="theme" value="<?= $theme ?>">
    </div>
    <div>
        <label for="adresse">Adresse :</label>
        <textarea name="adresse" id="adresse" cols="30" rows="4"><?= $adresse ?></textarea>
    </div>
    <div>
        <label for="date">Date :</label>
        <input type="datetime-local" name="date" id="date" value="<?= $date ?>">
    </div>
    <div>
        <label for="description">Description :</label>
        <textarea name="description" id="description" cols="30" rows="4"><?= $description ?></textarea>
    </div>
    <div>
        <label for="video">Lien du video :</label>
        <textarea name="video" id="video" cols="30" rows="10"><?= $video ?></textarea>
    </div>
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Envoyer" />
    </div>
    <input type="hidden" name="frmUpdate" />
    <input type="hidden" name="id" value="<?= $id ?>">
</form>