
<section id = "inscription">
<form id="inscr" action="" method="POST">
    <span id="lbl_inscription"> Inscription </span></br>
	<input type="text" name="identifiant" id="identifiant" placeholder="Identifiant" required>
        <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" required>
        <input type="password" name="mdpver" id="mdpver" placeholder="Mot de passe" required>
	<input type="text" name="nom" id="nom" placeholder="Nom" required>
	<input type="text" name="prenom" id="prenom" placeholder="Prenom" required>
	<input type="date" name="datver" id="datver" placeholder="Date de naissance" required>
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
		$datver = $_POST['datver'];
		$adresse = $_POST['adresse'];
		$cp = $_POST['cp'];
		$ville = $_POST['ville'];
		$email = $_POST['email'];
                
                if($mdp == $mdpver){
                $mdpdef = $mdp;}
                else{
                echo '<script type="text/javascript">window.alert("Le mot de passe doit etre identique");</script>';
                }
                
                $cnx1 = new PDO('mysql:host=127.0.0.1;dbname=nolark', 'nolarkuser', 'nolarkpwd');
                $req1 = "INSERT INTO `utilisateur` (`identifiant`,`mdp`, `nom`, `prenom`, `email`, `date_naissance`, `adresse`, `ville`, `cp`)
                        VALUES ('".$identifiant."','".$mdpdef."','".$nom."','".$prenom."','".$email."','".$datver."','".$adresse."','".$ville."','".$cp."')";
                $res1 = $cnx1->prepare($req1);
                $res1->execute();
	}
?>