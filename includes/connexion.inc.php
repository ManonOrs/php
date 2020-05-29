<div id = "connexion">
<form>
    <span id="lbl_connexion"> Connexion </span></br>
	<input type="text" name="identifiant" id="identifiant" placeholder="Identifiant" required>
	<input type="password" name="mdp" id="mdp" placeholder="Mot de passe" required>
	<input type="Submit" name="btn_connexion" id="btn_connexion" >
        <a id="link_inscription" href="/pages/inscription.php">s'inscrire</a>

</div>

<?php 
	
	if(isset($_POST['btn_connexion'])){
	
		$identifiant = $_POST['identifiant'];
		$mdp = $_POST['mdp'];
		
	}