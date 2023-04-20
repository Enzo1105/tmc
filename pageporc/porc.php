<html>
<?php include '../include/header.php'; ?>
<head>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="accueilporc">
    <h1>PORC</h1>
    <p>Découvrez nos viandes de porc.</p>
</div>

<div class="listeporc">
    <center><h2 style="padding: 30px;">Liste de nos viandes de porc disponibles</h2></center>

    <div class="flex">
        <div class="idbpv">
            <?php
            $bdd = new PDO('mysql:host=localhost;dbname=tmc;charset=utf8', 'root', '');
            $req = $bdd->query('SELECT * FROM viande where id = 21');
            while ($donnees = $req->fetch()) {
                echo('<a href="../pageporc/pagesviandesporc/filetdeporc.php"><img class="imgid" alt="" src="../pageporc/img/viandesporc/' . $donnees["photo"] . '"></a>' . "<br>" . "<b>" .
                     '<a><a class="nomviande"</a>' . $donnees['nom'] . '<a class="prix"</a>' . $donnees['prix']. "€/kg" . "</a></p>" .
                     '<a href="../pageporc/pagesviandesporc/filetdeporc.php"><button class="boutonpanier_">Voir fiche</button></a><button class="boutonpanier">Ajouter au panier</button>');
            }
            ?>
        </div>

        <div class="idbpv">
            <?php
            $bdd = new PDO('mysql:host=localhost;dbname=tmc;charset=utf8', 'root', '');
            $req = $bdd->query('SELECT * FROM viande where id = 22');
            while ($donnees = $req->fetch()) {
                echo('<a href="../pageporc/pagesviandesporc/grilladedeporc.php"><img class="imgid" alt="" src="../pageporc/img/viandesporc/' . $donnees["photo"] . '"></a>' . "<br>" . "<b>" .
                     '<a><a class="nomviande"</a>' . $donnees['nom'] . '<a class="prix"</a>' . $donnees['prix']. "€/kg" . "</a></p>" .
                     '<a href="../pageporc/pagesviandesporc/grilladedeporc.php"><button class="boutonpanier_">Voir fiche</button></a><button class="boutonpanier">Ajouter au panier</button>');
            }
            ?>
        </div>
    </div>

    <div class="flex">
        <div class="idbpv">
            <?php
            $bdd = new PDO('mysql:host=localhost;dbname=tmc;charset=utf8', 'root', '');
            $req = $bdd->query('SELECT * FROM viande where id = 23');
            while ($donnees = $req->fetch()) {
                echo('<a href="../pageporc/pagesviandesporc/jarretdeporc.php"><img class="imgid" alt="" src="../pageporc/img/viandesporc/' . $donnees["photo"] . '"></a>' . "<br>" . "<b>" .
                     '<a><a class="nomviande"</a>' . $donnees['nom'] . '<a class="prix"</a>' . $donnees['prix']. "€/kg" . "</a></p>" .
                     '<a href="../pageporc/pagesviandesporc/jarretdeporc.php"><button class="boutonpanier_">Voir fiche</button></a><button class="boutonpanier">Ajouter au panier</button>');
            }
            ?>
        </div>

        <div class="idbpv">
            <?php
            $bdd = new PDO('mysql:host=localhost;dbname=tmc;charset=utf8', 'root', '');
            $req = $bdd->query('SELECT * FROM viande where id = 24');
            while ($donnees = $req->fetch()) {
                echo('<a href="../pageporc/pagesviandesporc/echinedeporc.php"><img class="imgid" alt="" src="../pageporc/img/viandesporc/' . $donnees["photo"] . '"></a>' . "<br>" . "<b>" .
                     '<a><a class="nomviande"</a>' . $donnees['nom'] . '<a class="prix"</a>' . $donnees['prix']. "€/kg" . "</a></p>" .
                     '<a href="../pageporc/pagesviandesporc/echinedeporc.php"><button class="boutonpanier_">Voir fiche</button></a><button class="boutonpanier">Ajouter au panier</button>');
            }
            ?>
        </div>
    </div>

    <div class="flex">
        <div class="idbpv">
            <?php
            $bdd = new PDO('mysql:host=localhost;dbname=tmc;charset=utf8', 'root', '');
            $req = $bdd->query('SELECT * FROM viande where id = 25');
            while ($donnees = $req->fetch()) {
                echo('<a href="../pageporc/pagesviandesporc/cotesfiletdeporc.php"><img class="imgid" alt="" src="../pageporc/img/viandesporc/' . $donnees["photo"] . '"></a>' . "<br>" . "<b>" .
                     '<a><a class="nomviande"</a>' . $donnees['nom'] . '<a class="prix"</a>' . $donnees['prix']. "€/kg" . "</a></p>" .
                     '<a href="../pageporc/pagesviandesporc/cotesfiletdeporc.php"><button class="boutonpanier_">Voir fiche</button></a><button class="boutonpanier">Ajouter au panier</button>');
            }
            ?>
        </div>

        <div class="idbpv">
            <?php
            $bdd = new PDO('mysql:host=localhost;dbname=tmc;charset=utf8', 'root', '');
            $req = $bdd->query('SELECT * FROM viande where id = 26');
            while ($donnees = $req->fetch()) {
                echo('<a href="../pageporc/pagesviandesporc/jambondeporc.php"><img class="imgid" alt="" src="../pageporc/img/viandesporc/' . $donnees["photo"] . '"></a>' . "<br>" . "<b>" .
                     '<a><a class="nomviande"</a>' . $donnees['nom'] . '<a class="prix"</a>' . $donnees['prix']. "€/kg" . "</a></p>" .
                     '<a href="../pageporc/pagesviandesporc/jambondeporc.php"><button class="boutonpanier_">Voir fiche</button></a><button class="boutonpanier">Ajouter au panier</button>');
            }
            ?>
        </div>
    </div>
</div>

</body>
<?php include '../include/footer.php'; ?>
</html>
