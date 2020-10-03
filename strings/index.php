<?php 

    $stringOne = 'My name is Kuntiarso';
    $stringTwo = 'I was born on January, 1997';

    $name = 'KuNtiArso';
    $age = 23;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Strings</title>
</head>
<body>
    
    <h1>Learn about strings in PHP.</h1>
    <p><?php echo $stringOne; ?></p> <!-- print strings -->
    <p><?php echo $stringTwo; ?></p>
    
    <!-- print strings digabung -->
    <p><?php echo $stringOne . '. ' . $stringTwo . '.'; ?></p>

    <!-- use double quotes to print -->
    <p><?php echo "Hello, my name is $name.I am $age years old now."; ?></p>

    <!-- doubleQuotes inside doubleQuotes -->
    <p><?php echo "She said to me to wait like this, \"Hey, wait for me\"."; ?></p>
    <p><?php echo 'She said to me to wait like this, "Hey, wait for me".'; ?></p>

    <!-- get string characters by index number -->
    <p><?php echo $name[3]; ?></p>

    <!-- strings length -->
    <p><?php echo strlen($name); ?></p>
    
    <!-- strings uppercase and lowercase -->
    <p><?php echo strtoupper($name); ?></p>
    <p><?php echo strtolower($name); ?></p>
    
    <!-- strings replace -->
    <p><?php echo str_replace('t', 'c', $name); ?></p>

</body>
</html>