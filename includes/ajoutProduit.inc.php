/*je doit envoier que le nom de limage dans la base de donne mais le chemin reste fix apres je concatene avec la valeur recuperer pour afficher */
/*CONSTRAINT `FK_01` FOREIGN KEY (`clef_id`) REFERENCES `table2` (`id`) ON DELETE CASCADE ON UPDATE CASCADE*/
<h1>Ajouter un Produit</h1>
<?php
if (isset($_POST['frmProduit'])) {
    $libelle = htmlentities(trim($_POST['libelle']));
    $prix = htmlentities(trim($_POST['prix']));
    /* $file = htmlentities(trim($_POST['file'])); */


    $erreurs = array();

    if (mb_strlen($libelle) === 0)
        array_push($erreurs, "Il manque votre nom");

    if (mb_strlen($prix) === 0)
        array_push($erreurs, "Il manque votre Prix");

    /*   if (mb_strlen($file) === 0)
        array_push($erreurs, "Il manque votre image"); */


    if (count($erreurs)) {
        $messageErreur = "<ul>";

        for ($i = 0; $i < count($erreurs); $i++) {
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }

        $messageErreur .= "</ul>";

        echo $messageErreur;

        include './includes/frmProduit.php';
    } else {
/*remplir la list





/* tester si l'image existe */
        if (isset($_FILES['file'])) {
            $tmpName = $_FILES['file']['tmp_name'];
            $name = $_FILES['file']['name'];
            $size = $_FILES['file']['size'];
            $error = $_FILES['file']['error'];
         

            $requete = "INSERT INTO produits (Titre, Prix, Url)
            VALUES ('$libelle', '$prix', '$name');";

            $queryInsert = new Sql();
            $queryInsert->inserer($requete);
           move_uploaded_file($tmpName, './assets/images/' . $name);
            header('Location:./index.php?page=maj');
        }
    }
} else {
    $libelle = $prix = $name = "";
    include './includes/frmProduit.php';
}
