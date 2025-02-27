<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <h1>
    <?php

    $variable = "Variable is something like a container";
    echo ($variable);
    ?>
  </h1>
  <?php
  $another_variable = "Another variable value goes here";
  echo ("$another_variable");

  $third_variable = "Third variable value";
  echo ("{$third_variable}");
  ?>

</body>

</html>