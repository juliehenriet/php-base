<<?php



$eleves = [
    0 => [
        'nom' => 'Matthieu',
        'notes' => [10, 8, 16, 20, 17, 16, 15, 2]
    ],
    1 => [
        'nom' => 'Thomas',
        'notes' => [4, 18, 12, 15, 13, 7]
    ],
    2 => [
        'nom' => 'Jean',
        'notes' => [17, 14, 6, 2, 16, 18, 9]
    ],
    3 => [
        'nom' => 'Enzo',
        'notes' => [1, 14, 6, 2, 1, 8, 9]
    ]
];


// definir les nom avec notes

echo $eleves[2]['nom'];

//liste de nom

foreach ($eleves as $eleve ) {
echo" ". $eleve['nom']. " a eu ";

$noteCount = count($eleve['notes']);

//liste des notes

foreach( $eleve['notes'] as $key => $note){
echo $note;

if ($key === $noteCount-1){
echo '  ';
}
else if  ($key === $noteCount - 2){
echo ' et';

}

else{
echo' ,';

}

}
echo'</br>';

}

$jeanNotes = $eleves[2]['notes'];
$noteCount =count($jeanNotes);
foreach ($jeanNotes as $note) {
  $sum+=$note;
}

echo round($sum/$noteCount,2). '</br>'
echo array_sum($jeanNotes)/$noteCount;


foreach ($eleves as  $eleve {
$average =array_sum($eleve['note'])/count($eleve['note']);
echo $eleve['nom']
if($average>=10){
  echo 'a la moyenne </br>';

}

else{
  echo 'n\n a pas la moyenne </br>'
}

echo 'nombre d\eleve qui ont la moyenne :'.$countAverage;
var_dump ($bestNote);

$bestNote=0;
foreach($eleves as $eleve){
foreach($eleve['notes'] as $note)  {
  if($note===$bestNote){
    echo $eleve['nom'].'a la meileurs notes :' .$bestNote. '</br>'
    break;
  }
}
}

foreach($eleves as $eleve){
foreach($eleve['notes'] as $note)  {
  if(20===$note){
    $isTwenty= true;

break 2;
var_dump ('ici');
  }
}
}

$isTwenty =false;

 if ($isTwenty){
   echo 'quelqu un a eut 20';
 }

 else{

 }
}
