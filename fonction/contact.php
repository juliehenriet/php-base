<form method="POST">
    <label for="num1">email</label>
    <input type="text" id="email" name="email" placeholder="email" />
      <label for="num2">sujet</label>
      <input type="text" id="sujet" name="sujet" placeholder="sujet" />
        <label for="num2">votre message</label>
      <textarea type="textarea" id="message" name="message" placeholder="message"/> </textarea>
         <button>valider</button>
</form>

<?php
if (!empty($_POST)){

$email = $_POST['email'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];

var_dump($_POST);

if (false == filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit('Cet email n\'est pas valide');
}

if (strlen($sujet) == 0) {
    exit('Votre sujet ne doit pas être vide');
}

if (strlen($message) < 15){
    exit('votre message est trop petit min 15 caractères');
}

}
?>
