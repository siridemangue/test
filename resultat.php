<?php
//variable on stock dans email le resultat du champ de saisie
    $user='root';
   $pass= '';
   $email = $_POST['email'];
    $dbh= new PDO('mysql:host=localhost;dbname=prospect',$user,$pass);
//afiche les erreurs
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   

    
//INSERT TO prospect (id,email) VALUES (1,'email')mysql requete//

$requetEmail =$dbh->prepare("INSERT INTO inscrit(email) VALUES (:_email)");
$requetEmail->bindParam(':_email',$email);

$requetEmail->execute();


function AfficherNbInscrit(){
    $Resultat="SELECT `id` FROM `inscrit` WHERE 1";
    $NbInscrit = $Resultat;
    
  

}
return $resultat;
?>

















