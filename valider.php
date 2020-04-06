<?php

$maconnexion =mysqli_connect("localhost","root","root","aukebab")
	or die("Connexion au serveur impossible");
	//Ajoute les infos dans la base de donnée//
	$requete="insert into inscription
	values(NULL,'$_POST[nom]','$_POST[prenom]','$_POST[username]','$_POST[password]','$_POST[password2]','$_POST[mail]','$_POST[mail2]')";
	$Resultat=mysqli_query($maconnexion,$requete)
	or die("Exécution de la requête impossible");
	//affiche pour contrôle les informations ajoutées//
	echo" <b> Voici les informations que vous avez ajouté : </b><br>
	<ul>
	<li> Nom d'utilisateur       : $_POST[username]
	<li> E-mail      : $_POST[mail]
	<li> Mot de passe : $_POST[password]
	<li> Votre inscription vous sera confirmé par e-mail
</ul>";
?>