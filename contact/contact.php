<html>
<?php include '../include/header.php'; ?>
<head>
    <link rel="stylesheet" href="../style.css"/>
</head>
<body>
<div class="formulaire">
    <form action="https://submit-form.com/NdV9KGOP">
        <h2>Nous contacter</h2>
        <br>
        <div class="separation"></div>
        <br>
        <div class="corps-formulaire">
            <div class="gauche">
                <div class="groupe">
                    <label for="name">Prénom et nom</label>
                    <input type="text" id="name" name="name" placeholder="Prénom et nom" required=""/>
                    <br>
                    <br>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Adresse email" required=""/>
                </div>
            </div>

            <div class="droite">
                <div class="groupe">
                    <label for="message">Message</label>
                    <textarea
                            id="message"
                            name="message"
                            placeholder="Message"
                            required
                    ></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="buttoncontact">Envoyer le message</button>
    </form>
</div>
</body>
</html>