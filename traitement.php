<?php

DEFINE (SERVER,"localhost");
DEFINE (LOGIN,"adminsql");
DEFINE (MDP, "mdpsql");
DEFINE (BASE, "challenge");



$connect=mysqli_connect(SERVER,LOGIN,MDP,BASE)or die("pb de connexion au serveur");
$result=mysqli_query($connect,"SELECT * FROM tabClients WHERE idClient=".$_POST['id']);

while($data=mysqli_fetch_assoc($result)){
 echo "Prénom:".$data['clientPrenom']."<br> Nom: ".$data['clientName']."<br> Age:".$data['clientAge']."<br> Profession:".$data['clientJob']."<br> Email:".$data['clientMail']."<br> Téléphone:".$data['clientTel']."<br>";

}
?>
