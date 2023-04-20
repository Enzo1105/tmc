<html>
<?php include '../include/header.php'; ?>
<head>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="accueilveau">
    <h1>VEAU</h1>
    <p>Découvrez nos viandes de veau.</p>
</div>

<div class="listeboeuf">
    <center><h2 style="padding: 30px;">Liste de nos viandes de veau disponibles</h2></center>

    <div class="flex">
        <div class="idbpv">
            <?php
            $bdd = new PDO('mysql:host=localhost;dbname=tmc;charset=utf8', 'root', '');
            $req = $bdd->query('SELECT * FROM viande where id = 31');
            while ($donnees = $req->fetch()) {
                echo('<a href="../pageveau/pagesviandesveau/collierdeveau.php"><img class="imgid" alt="" src="../pageveau/img/viandesveau/' . $donnees["photo"] . '"></a>' . "<br>" . "<b>" .
                     '<a><a class="nomviande"</a>' . $donnees['nom'] . '<a class="prix"</a>' . $donnees['prix']. "€/kg" . "</a></p>" .
                     '<a href="../pageveau/pagesviandesveau/collierdeveau.php"><button class="boutonpanier_">Voir fiche</button></a><button class="boutonpanier">Ajouter au panier</button>');
            }
            ?>
        </div>

        <div class="idbpv">
            <?php
            $bdd = new PDO('mysql:host=localhost;dbname=tmc;charset=utf8', 'root', '');
            $req = $bdd->query('SELECT * FROM viande where id = 32');
            while ($donnees = $req->fetch()) {
                echo('<a href="../pageveau/pagesviandesveau/cotesdecouvertesdeveau.php"><img class="imgid" alt="" src="../pageveau/img/viandesveau/' . $donnees["photo"] . '"></a>' . "<br>" . "<b>" .
                     '<a><a class="nomviande"</a>' . $donnees['nom'] . '<a class="prix"</a>' . $donnees['prix']. "€/kg" . "</a></p>" .
                     '<a href="../pageveau/pagesviandesveau/cotesdecouvertesdeveau.php"><button class="boutonpanier_">Voir fiche</button></a><button class="boutonpanier">Ajouter au panier</button>');
            }
            ?>
        </div>
    </div>

    <div class="flex">
        <div class="idbpv">
            <?php
            $bdd = new PDO('mysql:host=localhost;dbname=tmc;charset=utf8', 'root', '');
            $req = $bdd->query('SELECT * FROM viande where id = 33');
            while ($donnees = $req->fetch()) {
                echo('<a href="../pageveau/pagesviandesveau/cotespremieresdeveau.php"><img class="imgid" alt="" src="../pageveau/img/viandesveau/' . $donnees["photo"] . '"></a>' . "<br>" . "<b>" .
                     '<a><a class="nomviande"</a>' . $donnees['nom'] . '<a class="prix"</a>' . $donnees['prix']. "€/kg" . "</a></p>" .
                     '<a href="../pageveau/pagesviandesveau/cotespremieresdeveau.php"><button class="boutonpanier_">Voir fiche</button></a><button class="boutonpanier">Ajouter au panier</button>');
            }
            ?>
        </div>

        <div class="idbpv">
            <?php
            $bdd = new PDO('mysql:host=localhost;dbname=tmc;charset=utf8', 'root', '');
            $req = $bdd->query('SELECT * FROM viande where id = 34');
            while ($donnees = $req->fetch()) {
                echo('<a href="../pageveau/pagesviandesveau/grenadinsdeveau.php"><img class="imgid" alt="" src="../pageveau/img/viandesveau/' . $donnees["photo"] . '"></a>' . "<br>" . "<b>" .
                     '<a><a class="nomviande"</a>' . $donnees['nom'] . '<a class="prix"</a>' . $donnees['prix']. "€/kg" . "</a></p>" .
                     '<a href="../pageveau/pagesviandesveau/grenadinsdeveau.php"><button class="boutonpanier_">Voir fiche</button></a><button class="boutonpanier">Ajouter au panier</button>');
            }
            ?>
        </div>
    </div>

    <div class="flex">
        <div class="idbpv">
            <?php
            $bdd = new PDO('mysql:host=localhost;dbname=tmc;charset=utf8', 'root', '');
            $req = $bdd->query('SELECT * FROM viande where id = 35');
            while ($donnees = $req->fetch()) {
                echo('<a href="../pageveau/pagesviandesveau/jarretdeveau.php"><img class="imgid" alt="" src="../pageveau/img/viandesveau/' . $donnees["photo"] . '"></a>' . "<br>" . "<b>" .
                     '<a><a class="nomviande"</a>' . $donnees['nom'] . '<a class="prix"</a>' . $donnees['prix']. "€/kg" . "</a></p>" .
                     '<a href="../pageveau/pagesviandesveau/jambondeporc.php"><button class="boutonpanier_">Voir fiche</button></a><button class="boutonpanier">Ajouter au panier</button>');
            }
            ?>
        </div>
    </div>

</div>

</body>
<?php include '../include/footer.php'; ?>
</html>