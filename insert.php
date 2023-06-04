<?php
include 'connection.php';
if (isset($_POST['envoyer'])) {

        // fonction pour sécuriser les champs du formulaire 
        function secure_input($input)
        {

                $input = trim($input);
                $input = addslashes($input);
                $input = strip_tags($input);
                $input = nl2br($input);
                $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
                return $input;
        }


        if (!empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['telephone']) && !empty($_POST['email'])) {

                $lastname = secure_input($_POST['lastname']);
                $firstname = secure_input($_POST['firstname']);
                $numero_tel = secure_input($_POST['telephone']);
                $email = secure_input($_POST['email']);

                // Préparer la requête SQL pour insérer les données dans la base de données
                $query = $conn->prepare("INSERT INTO contacts (nom, prenom, numero_telephone, email) VALUES ('$lastname', '$firstname', '$numero_tel', '$email')");
                $query->execute();

                if ($query) {

                        $part = 'participant Ajouter avec succès';
                } else {
                        $error = 'Echec de lors de l\'enregidtrement ';
                }


        }else{
                $erreur = ' Veuillez remplir tous les champs';
        }
}

?>