<?php
switch ($condition) {
    case 'case_value':
        # code...
        break;

    default:
        # code...
        break;
}

$letterGrade = "B";
switch ($letterGrade) {
    case "A":
        echo "Excellent";
        break;
    case "B":
        echo "Good";
        break;
    case "C":
        echo "Average";
        break;
    case "D":
        echo "Poor";
        break;
    case "F":
        echo "Fail";
        break;
    case "I":
        echo "Incomplete";
        break;
    default:
        echo "Invalid Grade";
}
?>
// The following code is invalid due to the trailing space on the inner expression

<?php switch ($foo): ?>
   <?php case 1: ?>  // ...
 <?php endswitch; ?> 

// While the following code is valid because the trailing space is removed:
<?php switch ($foo): ?>
<?php case 1: ?>
    ...
<?php endswitch; ?>