<?php
 // Vérification de la variable GET
  if(isset($_GET['id'])) {
include('connection.php');
    // Préparation et exécution de la requête de suppression
    $id = $_GET['id'];
    $mercure = $conn->prepare("DELETE FROM contacts WHERE id = '$id'");
    
    try {
      $mercure->execute();
    header("location:delete.php");
      exit();
    } catch(PDOException $e) {
      echo "Erreur lors de la suppression de l'utilisateur: " . $e->getMessage();
    }
    
  } else {
    echo "ID dde l'utilisateurs non spécifié";
  }
?>