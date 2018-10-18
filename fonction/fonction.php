<?php
//on créer une fonction qui calcul le carrée d'un nombre



function carre ($nombreCarré){

return ($nombreCarré * $nombreCarré);

}

echo carre (15);
echo '</br>';

//l'aire d'un imagerectangle



function rectangle ($largeur, $hauteur){
  return ($largeur * $hauteur);
};

echo rectangle(2,5);
echo '</br>';

//cercle



function cercle ($rayon){
  return carre ($rayon) * M_PI;
}

echo cercle (5);
echo '</br>';

//calculer le prix ttc



function convertht ($ht, $taux){
return $ht * (1 + $taux/100);
};

echo convertht (10,20);
echo '</br>';

function convert ($ht, $taux, $withTax = true){
if($withTax){

return $ht * (1 + $taux/100);
};
return $ht / (1 + $taux/100);
};

echo convert (10,20);
echo convert (10,20, false);
echo '</br>';
 ?>
