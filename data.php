<!DOCTYPE html>
<html>

        <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Admin Dashboard sleep</title>
                <link rel="stylesheet" href="styles.css">

        </head>

        <body>
                <?php
                include 'header.php';
                ?>
                <main>

                        <section class="main_section">
                                <?php
include('connection.php');
        $query2 = $conn->prepare("SELECT * FROM contacts");
        $query2->execute();
 ?>
                                <section class="section-1-table">
                                        <div class="title">
                                                <h3>Liste des utilisateurs</h3>
                                        </div>

                                        <table class="tableau">


                                                <tr>

                                                        <th>Id</th>
                                                        <th>Nom</th>
                                                        <th>Prenom</th>
                                                        <th>Numero de telephone</th>
                                                        <th>Email</th>
                                                        <th></th>
                                                </tr>



                                                <?php while ($data = $query2->fetch()) { ?>
                                                <tr>

                                                        <td><?= $data['id']?></td>
                                                        <td><?= $data['nom']?></td>
                                                        <td><?= $data['prenom']?></td>
                                                        <td><?= $data['numero_telephone']?></td>
                                                        <td><?= $data['email']?></td>
                                                        <td>
                                                                <button class='bt'>
                                                                        <a href="delete.php?id=<?= $data['id'] ?>"
                                                                                class="btn">Supprimer</a>
                                                                </button>

                                                        </td>
                                                </tr>
                                                <?php } ?>

                                        </table>
                                        <section>
                                                </div>
                                        </section>

                                        <?php 
                        
                                ?>
                                </section>
                </main>
        </body>

</html>