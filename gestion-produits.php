<html>
<head>
<title>Exo 1</title>
</head>
 
<body>
<?php
function update_dispo($quantité){
if($quantité>0) return true;
if($quantité<0) return false;
}
 
function restockage($quantité,$nb_ajout){
if($quantité>0) return true;
if($quantité>0) return true;
}
function achat($quantité,$nb_achat){
if($quantité>0) return true;
if($quantité<0) return false;
}
 
?>
</body>