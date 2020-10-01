<?php
//Chargement du fichier de connexion à la base de donnee
include("basededonne.php");

//Préparation de la liste des variables
$email = addslashes($_POST['email']);
$nom = addslashes($_POST['nom']);
$motdepasse = md5($_POST['motdepasse']);
$confmotdepasse = md5($_POST['confmotdepasse']);

if ($motdepasse === $confmotdepasse) {

//Preparation de la requete de verification
$requete = "SELECT * FROM etudiant WHERE email='".$email."'";
$statement = $conn->query($requete);
$row_count = $statement->num_rows;
// Execution de la condition de l'existance du compte.
if ($row_count >= 1) {
	echo "Vous etes deja inscrit";
} else {
	//Préparation de la requête d'insertion.
	$insUser = "INSERT INTO etudiant(mot_de_passe, nom, email) VALUES('" . $motdepasse . "','" . $nom . "','" . $email . "')";

	//Execution de la requete
	if ($conn->query($insUser) === TRUE) {
		echo "<script language = 'javascript'>";
		echo "alert('Félicitations !! vous etes inscrit') ";
		echo "</script>";
	} else {
		echo "Erreur :" . $insUser . "<br>" . $conn->error;
	}
}
} else {
	echo "Merci de rentrer le meme mot de passe";
} //Fin else verification mot de passe confirme

?>
