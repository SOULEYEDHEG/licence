<form action="" method="POST">
  <input type="text" name="nom">
  <input type="submit" name="envoyer" value="envoyer">
</form>

<?php 

if (isset($_POST["envoyer"])) {
  echo $_POST["nom"];
}



?>