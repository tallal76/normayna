<form action="index.php?page=connexion" method="post">
  <div class="form-group">
    <label for="mail">Email </label>
    <input type="email" name="mail" value="<?= $mail ?>" />
  </div>
  <div class="form-group">
    <label for="password">Mot de passe</label>
    <input type="password" name="password" />
  </div>
  <div class="form-group">
    <a class="passwordOublie" href="#">Mot de passe oublié ?</a>
  </div>
  <div class="form-group" style="text-align:center;">
    <input type="submit" value="Connexion" id="submitConnex" />
  </div>
  <input type="hidden" name="frmConnexion" />

</form>




