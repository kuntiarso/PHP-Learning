<?php 
    // variable
    $name = "Kuntiarso";
    $age = 23;

    $name = "Kunti"; // overwritten

    // constant = tidak bisa di overwritten
    define("NAME", "Kuntiar");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Variables</title>
</head>
<body>

    <h1>Learning variables in PHP</h1>
    <div><?php echo $name; ?></div> <!-- calling variable --> 
    <div><?php echo $age; ?></div>
    <div><?php echo NAME; ?></div> <!-- calling constant -->
    
</body>
</html>