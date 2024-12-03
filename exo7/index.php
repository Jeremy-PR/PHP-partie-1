<?php

$lastname = "Sabatier";
$firstname = "Marion";  // Corrected variable name
$age = 53;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<h1>
<?php
echo "Bonjour " . $lastname . " " . $firstname . ", tu as " . $age . " ans.";
?>
</h1>
  
</body>

</html>
