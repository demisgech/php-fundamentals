<?php include_once dirname(__FILE__) . "/header.php" ?>

<h1 class="text-secondary ">
  <?php

  $variable = "Variable is something like a container";
  echo ($variable);
  ?>
</h1>
<?php
$another_variable = "Another variable value goes here";
echo ("$another_variable");

$third_variable = "Third variable value";
echo "{$third_variable}";
?>

<?php include_once "footer.php" ?>