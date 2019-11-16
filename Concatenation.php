<?php
/*
 * It's like mix tow variables or mix a php with HTML in the same code
 * BY : Mohammed Majid (JUZEXMOD)
 */
$name = "Mohammed";
$age = 20;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>doctor2</title>
</head>
<body>

<?php echo $name . " " . $age . "<br/>"; ?> //I mixed between tow variables and a html code

<h1>Hello World <?php echo "from" . " php" . "anyway"; ?></h1>

</body>
</html>