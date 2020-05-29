<div id = "connexion">
<form>
    <span id="lbl_connexion"> Connexion </span></br>
	<input type="text" name="identifiantco" id="identifiantco" placeholder="Identifiant" required>
	<input type="password" name="mdpco" id="mdpco" placeholder="Mot de passe" required>
	<input type="Submit" name="btn_connexion" id="btn_connexion" >
        <a id="link_inscription" href="/pages/inscription.php">s'inscrire</a>

</div>

<?php 
	
	if(isset($_POST['btn_connexion'])){
	
		$identifiantco = $_POST['identifiantco'];
		$mdpco = $_POST['mdpco'];
		
	}