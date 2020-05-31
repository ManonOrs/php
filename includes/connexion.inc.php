<div id = "connexion">
<form>
    <span id="lbl_connexion"> Connexion </span></br>
	<input type="text" name="identifiantco" id="identifiantco" placeholder="Identifiant" required>
	<input type="password" name="mdpco" id="mdpco" placeholder="Mot de passe" required>
	<input type="Submit" name="btn_connexion" id="btn_connexion" >
        <a id="link_inscription" href="/pages/inscription.php">s'inscrire</a>

</div>

<?php 

        $etatco = "Déconecter";
        global $etatco;
	
	if(isset($_POST['btn_connexion'])){
	
		$identifiantco = $_POST['identifiantco'];
		$mdpco = $_POST['mdpco'];
                
                $cnx2 = new PDO('mysql:host=127.0.0.1;dbname=nolark', 'nolarkuser', 'nolarkpwd');
                $req2 = 'SELECT mdp FROM utilisateur WHERE identifiant ="'.$identifiantco.'";';
                $res2 = $cnx2->prepare($req1);
                $res2->execute();
                
                $mdp = $res2;
                
                if($mdpco == $mdp){
                    $etatco = "Connecter";
                }
		
	}