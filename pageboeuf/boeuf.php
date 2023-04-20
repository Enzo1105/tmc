<html>
<?php include '../include/header.php'; ?>
<head>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>

<div class="accueilboeuf">
    <h1>BŒUF</h1>
    <p>Découvrez nos viandes de bœuf.</p>
</div>

<div>
    <center><h2 style="padding: 30px;">Liste de nos viandes de bœuf disponibles</h2></center>

<div class="flex">
    <div class="idbpv">
        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=tmc;charset=utf8', 'root', '');
        $req = $bdd->query('SELECT * FROM viande where id = 11');
        while ($donnees = $req->fetch()) {
            echo('<a href="../pageboeuf/pagesviandesboeuf/collierboeuf.php"><img class="imgid" src="../pageboeuf/img/viandeboeuf/' . $donnees["photo"] . '"> </a>' . "<br>" . "<b>" .
                 '<a><a class="nomviande"</a>' . $donnees['nom'] . '<a class="prix"</a>' . $donnees['prix'] . "€ /kg" . "</a></p>" .
                 '<a href="../pageboeuf/pagesviandesboeuf/collierboeuf.php"><button class="boutonpanier_">Voir fiche</button></a><button class="boutonpanier">Ajouter au panier</button>');
        }
        ?>
    </div>

    <div class="idbpv">
        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=tmc;charset=utf8', 'root', '');
        $req = $bdd->query('SELECT * FROM viande where id = 12');
        while ($donnees = $req->fetch()) {
            echo('<a href="../pageboeuf/pagesviandesboeuf/bavettealoyau.php"><img class="imgid" alt="" src="../pageboeuf/img/viandeboeuf/' . $donnees["photo"] . '">' . "<br>" . "<b>" .
                 '<a><a class="nomviande"</a>' . $donnees['nom'] . '<a class="prix"</a>' . $donnees['prix'] . "€ /kg" . "</a></p>" .
                 '<a href="../pageboeuf/pagesviandesboeuf/bavettealoyau.php"><button class="boutonpanier_">Voir fiche</button></a><button class="boutonpanier">Ajouter au panier</button>');
        }
        ?>
    </div>
</div>

    <div class="flex">
        <div class="idbpv">
            <?php
            $bdd = new PDO('mysql:host=localhost;dbname=tmc;charset=utf8', 'root', '');
            $req = $bdd->query('SELECT * FROM viande where id = 13');
            while ($donnees = $req->fetch()) {
                echo('<a href="../pageboeuf/pagesviandesboeuf/cotedeboeuf.php"><img class="imgid" alt="" src="../pageboeuf/img/viandeboeuf/' . $donnees["photo"] . '">' . "<br>" . "<b>" .
                     '<a><a class="nomviande"</a>' . $donnees['nom'] . '<a class="prix"</a>' . $donnees['prix']. "€ /kg" . "</a></p>" .
                     '<a href="../pageboeuf/pagesviandesboeuf/cotedeboeuf.php"><button class="boutonpanier_">Voir fiche</button></a><button class="boutonpanier">Ajouter au panier</button>');
            }
            ?>
        </div>

        <div class="idbpv">
            <?php
            $bdd = new PDO('mysql:host=localhost;dbname=tmc;charset=utf8', 'root', '');
            $req = $bdd->query('SELECT * FROM viande where id = 14');
            while ($donnees = $req->fetch()) {
                echo('<a href="../pageboeuf/pagesviandesboeuf/entrecote.php"><img class="imgid" alt="" src="../pageboeuf/img/viandeboeuf/' . $donnees["photo"] . '">' . "<br>" . "<b>" .
                     '<a><a class="nomviande"</a>' . $donnees['nom'] . '<a class="prix"</a>' . $donnees['prix']. "€ /kg" . "</a></p>" .
                     '<a href="../pageboeuf/pagesviandesboeuf/entrecote.php"><button class="boutonpanier_">Voir fiche</button></a><button class="boutonpanier">Ajouter au panier</button>');
            }
            ?>
        </div>
    </div>

    <div class="flex">
        <div class="idbpv">
            <?php
            $bdd = new PDO('mysql:host=localhost;dbname=tmc;charset=utf8', 'root', '');
            $req = $bdd->query('SELECT * FROM viande where id = 15');
            while ($donnees = $req->fetch()) {
                echo('<a href="../pageboeuf/pagesviandesboeuf/filetdeboeuf.php"><img class="imgid" alt="" src="../pageboeuf/img/viandeboeuf/' . $donnees["photo"] . '">' . "<br>" . "<b>" .
                     '<a><a class="nomviande"</a>' . $donnees['nom'] . '<a class="prix"</a>' . $donnees['prix']. "€ /kg" . "</a></p>" .
                     '<a href="../pageboeuf/pagesviandesboeuf/filetdeboeuf.php"><button class="boutonpanier_">Voir fiche</button></a><button class="boutonpanier">Ajouter au panier</button>');
            }
            ?>
        </div>

        <div class="idbpv">
            <?php
            $bdd = new PDO('mysql:host=localhost;dbname=tmc;charset=utf8', 'root', '');
            $req = $bdd->query('SELECT * FROM viande where id = 16');
            while ($donnees = $req->fetch()) {
                echo('<a href="../pageboeuf/pagesviandesboeuf/rumsteak.php"><img class="imgid" alt="" src="../pageboeuf/img/viandeboeuf/' . $donnees["photo"] . '">' . "<br>" . "<b>" .
                     '<a><a class="nomviande"</a>' . $donnees['nom'] . '<a class="prix"</a>' . $donnees['prix']. "€ /kg" . "</a></p>" .
                     '<a href="../pageboeuf/pagesviandesboeuf/rumsteak.php"><button class="boutonpanier_">Voir fiche</button></a><button class="boutonpanier">Ajouter au panier</button>');
            }
            ?>
        </div>
    </div>


</div>
</body>

<?php require '../include/footer.php'; ?>
</html>