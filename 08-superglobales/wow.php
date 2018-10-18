<?php

// créer une fonction qui prend en argument une chaine (World of Warcraft) et qui retourne les initiales de chaque mot en majuscule (WOW).


$string = "word of warcraft";

function initiales($string)
{
    $words = explode(" ", $string);
    $initiale = '';

	foreach($words as $init){
		$initiale .= $init{0};
    }
    return strtoupper($initiale);
}
echo initiales($string);
echo '</br>';
//exercice deux
// Conjugaison : Créer une fonction qui permet de conjuguer un verbe (chercher par exemple). Cela doit renvoyer toutes les conjugaisons au présent.


function conjug ($verb){

$root = substr ($verb,0, -2);
$vowels = ['a','e','i','o','u','y'];

$subjects = [
  'je' => 'e',
  'j\''=>'e',
  'tu' => 'es',
  'il/elle/on' => 'e',
  'nous' => 'ons',
  'vous' => 'ez',
  'ils/elles/' => 'ent',
];

if (in_array(substr($verb,0,1), $vowels)){
  unset($subjects ['je']);
// $subjetcs = array_merge([j\ '' => 'e'], $subjects);
}

else {
unset($subjects ['j\'']);
}
var_dump ($subjects);

$output = ' ';

foreach ($subjects as $subject => $ending) {
$output .= $subject .' ' . $root . $ending. '</br>';

}

return $output;
}

echo conjug('chercher');
echo conjug('ajouter');
echo conjug('developper');

 ?>
