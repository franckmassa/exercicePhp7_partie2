<?php
$isOk = false;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice7</title>
</head>
<body>
  <p>
    <?php
    //echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
    if ($isOk == false){
      echo 'C\'est pas bon !!!';
    }else{
      echo 'C\'est ok !!!';
    }
    ?>
  </p>
</body>
</html>
