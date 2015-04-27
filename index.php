<?php
//variable
   $user='root';
   $pass= '';
    
    $dbh= new PDO('mysql:host=localhost;dbname=prospect',$user,$pass);
//afiche les erreurs
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//on cree les tables
/*Table prospect
    $dbh->exec('CREATE TABLE IF NOT EXISTS prospect(
    id INT NOT NULL AUTO_INCREMENT,
    email varchar(32)NOT NULL,
    PRIMARY KEY(id)
 )');*/ 
?>
<h1>S'inscrire</h1>
    <form action="resultat.php" method="post">
	Email : <input type="email" name="email" /><br>
	
	<input type="submit" value="Envoyer">
    </form>
<div> textxtxtxtxttx</div>
<div> textxtxtxtxttx</div>
<div> textxtxtxtxttx</div>


