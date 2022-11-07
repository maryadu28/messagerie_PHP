<?php

$bdd=new PDO('mysql:host=localhost;dbname=mini_chat;charset=utf8','root','');
$recupereMsg = $bdd->query('SELECT * FROM messages ');
while($msg =$recupereMsg->fetch()){
?>
    <div class="message"> 
    <p><?= $msg['date_envoi']; ?> <strong><?= $msg['pseudo']; ?></strong></p>
       <p><?= $msg['message']; ?></p>
    </div>
<?php   
}
?> 