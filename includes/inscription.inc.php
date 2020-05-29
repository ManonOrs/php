
<section id = "inscription">
<form id="inscr" action="" method="POST">
    <span id="lbl_inscription"> Inscription </span></br>
	<input type="text" name="identifiant" id="identifiant" placeholder="Identifiant" required>
        <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" required>
        <input type="password" name="mdpver" id="mdpver" placeholder="Mot de passe" required>
	<input type="text" name="nom" id="nom" placeholder="Nom" required>
	<input type="text" name="prenom" id="prenom" placeholder="Prenom" required>
	<input type="date" name="daten" id="daten" placeholder="Date de naissance" required>
	<input type="text" name="adresse" id="adresse" placeholder="Adresse" required>
	<input type="int" name="cp" id="cp" placeholder="Code postal" required>
	<input type="text" name="ville" id="ville" placeholder="Ville" required>
	<input type="text" name="email" id="email" placeholder="Email" required>
        <input type="Submit" name="btn_inscription" id="btn_inscription" >
</form>

</section>
<?php

if(isset($_POST['btn_inscription'])){
	
		$identifiant = $_POST['identifiant'];
		$mdp = $_POST['mdp'];
                $mdpver = $_POST['mdpver'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$daten = $_POST['daten'];
		$Adresse = $_POST['adresse'];
		$cp = $_POST['cp'];
		$ville = $_POST['ville'];
		$email = $_POST['email'];
                
                if($mdp == $mdpver){
                $mdpdef = $mdp;}
                else{
                echo '<script type="text/javascript">window.alert("Le mot de passe doit etre identique");</script>';
                }
	}
?>