<?php
//Chargement du fichier de connexion à la base de donnee
include("basededonne.php");

$date_jour = date('Y-m-d');

//Préparation de la liste des variables
$email = addslashes($_POST['email']);
$motdepasse = md5($_POST['motdepasse']);


// verifier que la personnne est inscrite

$requete = "SELECT * FROM etudiant WHERE email='".$email."'";
$statement = $conn->query($requete);
$data = $statement->fetch_assoc();

// Execution de la condition de l'existance du compte.
if (@$data['email'] == $email && @$data['mot_de_passe'] == $motdepasse) { // Debut verification existance utilisateur

  //Préparation requete de verification de date
  $requete_date = "SELECT * FROM presence WHERE id='".@$data['id']."' AND datesign='$date_jour'";
  $date_check = $conn->query($requete_date);
  $row_cnt = $date_check->num_rows;//On compte le nbre de ligne ou l'id est présent

    if($row_cnt == 0){//Si aucuun id n'est trouvé pour la date actuelle, on peut signer
      $signature= "INSERT INTO presence(id) VALUES('" . @$data['id'] . "')";

      //Execution de la requete d'insertion de la signature numerique
      if ($conn->query($signature)) {
      ?>
        <script language="Javascript">
        document.location.replace("./affichesign.php#rpp");
        </script>
      <?php
        //header('Location: affichesign.php');
      } else {
        echo "Erreur :" . $signature . "<br>" . $conn->error;
      }

    }else{//si l'id existe dejâ, on peut plus signer
      ?>
        <script language="Javascript">
        document.location.replace("./affichesign.php#rpn");       
        </script>
      <?php
    }
} else {
  echo "Mot de passe incorrect ou non enregistrer";
}// Fin verification existance utilisateur

?>