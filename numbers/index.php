<?php

    $radius = 25;
    $age = 20;
    $pi = 3.14;

    // basic operators
    // order of operation PEMDAS (Parentheses, Exponents, Multiplicattion, Division, Addition, Substraction)
    // echo $pi * $radius;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Numbers</title>
</head>
<body>

    <h1>Learn about numbers in PHP.</h1>

    <p><?php echo 2 * (4+9) / 3 ?></p>
    <p><?php echo $radius++; ?></p> <!-- increment -->
    <p><?php echo ++$radius; ?></p> <!-- increment -->
    <p><?php echo $radius--; ?></p> <!-- decrement -->
    <p><?php echo --$radius; ?></p> <!-- decrement -->
    
    <p><?php echo $age += 10; ?></p> <!-- shorthand operator -->
    <p><?php echo $age -= 10; ?></p> <!-- shorthand operator -->
    <p><?php echo $age *= 2; ?></p> <!-- shorthand operator -->
    <p><?php echo $age /= 2; ?></p> <!-- shorthand operator -->
    
    <!-- number function -->
    <p><?php echo floor($pi); ?></p>
    <p><?php echo ceil($pi); ?></p>
    <p><?php echo pi(); ?></p>

</body>
</html>