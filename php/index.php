<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>EXERCICE 1:<?php 
for ($i = 0; $i <= 100; $i++){
    echo $i."\n";
}
?></p>
<p>EXERCICE 2:<?php 
$dev = "back";
$technos = ["Php", "Ruby", "Javascript", "Html"];

if($dev === "front"){
    echo 'Je suis un dev front et je connais '.$technos[2]."\n". "et"."\n".$technos[3];
}else if($dev === "back"){
    echo 'Je suis un dev back et je connais '.$technos[0]."\n". "et"."\n".$technos[1];
}else{
    echo 'Devien dev deja';
}
?></p>
<p>EXERCICE 3:<?php 
$technos = array ("Php", "Ruby", "Javascript", "Html");
$technos.push("Python");
for($i=0; $i <= sizeof($technos); $i++){
    echo $technos[$i];
}
?></p>
</body>
</html>



