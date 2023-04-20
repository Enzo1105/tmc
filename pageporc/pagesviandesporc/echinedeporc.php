<html>
<?php include '../../include/header.php'; ?>
<head>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
<div class="flex1">
    <div>
        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=tmc;charset=utf8', 'root', '');
        $req = $bdd->query('SELECT * FROM viande where id = 24');
        while ($donnees = $req->fetch()) {
            echo('<img class="imgid1" src="../../pageporc/img/viandesporc/' . $donnees['photo'] . '">');
        }
        ?>
    </div>
    <div class="divgauche">
        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=tmc;charset=utf8', 'root', '');
        $req = $bdd->query('SELECT * FROM viande where id = 24');
        while ($donnees = $req->fetch()) {
            echo('<a class="nomviande1"</a>' . $donnees['nom'] ."<br>" . '<a class="descriptionviande"</a>' . $donnees['descriptionv'] . "<br>" .
                '<p class="prixviande"</p>' . $donnees['prix'] .  "€ /kg" . "<br>" .
                '<input type="number" class="inputnombre" id="tentacles" min="1" max="100">' .
                '<button class="boutonpanier1">Ajouter au panier</button>');
        }
        ?>
    </div>
</div>
</body>
<?php include '../../include/footer.php'; ?>
</html>
