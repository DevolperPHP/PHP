<?php
/*
 * Output in php usually work  with (ECHO) or (Print)
 * and you can use shortcuts or variables with it
 * Ex :
 * BY: Mohammed Majid (JUZEXMOD)
 */

//first let's use it simply

echo "Mohammed";
echo 20;

// use it with html

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Page</title>
</head>
<body>

<?php echo "Mohammed"; ?>
<?php echo 20; ?>

</body>
</html>


//lets use variables

<?php

$name = "Ali";
$age = 20;
$title = "PHP Page";

?>

//lets use it with HTML


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title ?></title>
</head>
<body>

<?php echo $name ?>
<?php echo $age ?>

</body>
</html>