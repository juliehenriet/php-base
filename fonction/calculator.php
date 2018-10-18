


<!-- L'attribut action permet de rediriger l'URL vers un autre fichier -->
<form method="POST">
    <label for="num1"></label>
    <input type="text" id="num1" name="num1" placeholder="nombre1" />
      <label for="num2">+</label>
      <input type="text" id="num2" name="num2" placeholder="nombre2" />
     <button>calculer</button>

     <input type="radio" name="opérateur" id="opérateur" value="+">+</input>
     <input type="radio" name="opérateur" id="opérateur" value="-">-</input>
      <input type="radio" name="opérateur" id="opérateur" value="*">*</input>
       <input type="radio" name="opérateur" id="opérateur" value="/">/</input>
</form>

<?php

if (!empty($_POST)) {
    // $_POST contient ['nom' => 'Valeur', 'prenom' => 'Valeur']
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$opérateur = isset ($_POST ['opérateur'])? $_POST ['opérateur'] :'+' ;

if (!is_numeric($num1) || !is_numeric($num2)){
echo ' les nombres ne sont pas valide';
exit();
}

if ($num1 == 0 && $opérateur == '/'){
echo 'attention division par zero';
exit();
}

else if ($opérateur == '+'){
  echo $num1 + $num2;

}

else if ($opérateur == '-') {
echo $num1 - $num2;
}

else if ($opérateur == '*') {
echo $num1 * $num2;
}


else if ($opérateur == '/') {
echo $num1 / $num2;
}


}

?>
