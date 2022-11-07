<?php
    include 'send_mess.php';
    //include 'evitererros.php';
   
    // on récupere les variables du formulaire toujours depuis l'attribut "name"
    // On utilise la fonction PHP htmlentities pour éviter d'enregistrer du code HTML dans la table
    //on se connecte à Mysql */
    try{
        //on se connecte à la base de données .
        $bdd=new PDO('mysql:host=localhost;dbname=mini_chat;charset=utf8','root','');
        $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //empty si l'user a bien saisi une valeur dans le formulaire 
        //isset pour tester une variable dont on est pas sure quelle soit affecté 
        
        if (isset($_POST['valider'])){
            if(!empty($_POST['pseudo']) && !empty($_POST['message']) && !empty($_POST['message'])){
                $valider=htmlspecialchars($_POST['valider']);
                $pseudo=htmlspecialchars($_POST['pseudo']);
                $message=nl2br(htmlspecialchars($_POST['message']));
                //on enregistre dans la table de données 
                //dans cet exemple on n'utilise pas de  méthode préparée ,on utilise PDO
                //La ligne suivante indique à PDO de bien générer une erreur fatale si un problème survient. On peut détecter et gérer les problèmes de cette manière.
                $insererMsg = $bdd->prepare('INSERT INTO messages (pseudo,message) VALUES(?,?)');
                $insererMsg->execute(array($pseudo,$message));
            }else{
             echo "veuillez completer tous les champs";
            }

        }
        //mysql_close();
    
    }catch(Exception $e){
        
        //en cas d'erreur ,on affiche une erreur et on arrete tout
         die('Erreur:'.$e->getMessage());   
}
