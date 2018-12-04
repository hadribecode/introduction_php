//INDEX.PHP

<?php
session_start();
$_SESSION['nom']="hadrien";
$_SESSION['prenom']="soumoy";
$_SESSION['age']="25";
echo '<form action="exo02.php" method="post" enctype="multipart/form-data">
    <br><input type="submit" value="Valider" name="submit"/>
    </form>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

</body>
</html>