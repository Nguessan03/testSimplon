<!DOCTYPE html>
<html>

        <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Admin Dashboard</title>
                <link rel="stylesheet" href="styles.css">
        </head>
        <title>paramètre Formulaires</title>

        </head>

        <body>
                <?php  include 'insert.php'; ?>
                <div class="formsub">
                        <form action="" method="POST" enctype="multipart/form-data">

                                <!--pour le message de succès -->
                                <div style="color:blue;"><?php if (isset($part)) {
                                echo $part;} ?></div>
                                <div style="color:blue;"><?php if (isset($error)) {
                                echo $error;} ?></div>

                                <div class="form-title">Ajout de Participant</div>
                                <input type="text" name="lastname" placeholder="Entrzez votre nom">
                                <input type="text" name="firstname" placeholder="Entrzez votre prenom">
                                <input type="tel" name="telephone" placeholder="Entrzez votre numero de telephone">
                                <input type="email" name="email" placeholder="Adresse e-mail">

                                <!--pour le message de champs vide -->
                                <div style="color:red;"><?php  if(isset($erreur)){echo $erreur;} ?></div>

                                <input type="submit" name="envoyer" value="Ajouter">
                        </form>
                </div>
        </body>

</html>