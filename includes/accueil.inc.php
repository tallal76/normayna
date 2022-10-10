<?php
if (isset($_SESSION['login'])) {
    echo "Bienvenue <strong>". $_SESSION['login']."</strong>";
    ?>
    <div class="boite">
    <div class="contenu_carou_auto">
        <div class="caroussel-image">
            <img src="./assets/imgslider/briwate.jpg" alt>
            <img src="./assets/imgslider/couscous-mergez.jpg" alt>
            <img src="./assets/imgslider/msmen-farsi.jpg" alt>
            <img src="./assets/imgslider/msmn.jpg" alt>
            <img src="./assets/imgslider/poulet.jpg" alt>
            <img src="./assets/imgslider/viande-prune.jpg" alt>
            <img src="./assets/imgslider/chekhchoukha-plat-algerien.jpeg" alt>
            <img src="./assets/imgslider/téléchargement.jpg" alt>
        </div>
    </div>

<?php } else { ?>
<div class="boite">
    <div class="contenu_carou_auto">
        <div class="caroussel-image">
            <img src="./assets/imgslider/briwate.jpg" alt>
            <img src="./assets/imgslider/couscous-mergez.jpg" alt>
            <img src="./assets/imgslider/msmen-farsi.jpg" alt>
            <img src="./assets/imgslider/msmn.jpg" alt>
            <img src="./assets/imgslider/poulet.jpg" alt>
            <img src="./assets/imgslider/viande-prune.jpg" alt>
            <img src="./assets/imgslider/chekhchoukha-plat-algerien.jpeg" alt>
            <img src="./assets/imgslider/téléchargement.jpg" alt>
        </div>
    </div>

    <?php } ?>