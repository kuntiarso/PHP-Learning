<?php

    // indexed arrays
    $peopleOne = ['gilang', 'riyadi', 'kuntiarso'];

    $peopleTwo = array('alexa', 'alexander');

    $ages = [20,30,40,50];
    $ages[1] = 25; // change arrays value by index
    $ages[] = 60; // automatically add new index of the array
    array_push($ages, 70); // push a value to an array

    // associative arrays (key & value pairs)
    $arraysOne = ['one' => 'black', 'two' => 'blue', 'three' => 'pink'];
    $arraysTwo = array('ten' => 'box', 'eleven' => 'triangle', 'twelve' => 'round');
    $arraysTwo['eleven'] = 'square';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Arrays</title>
</head>
<body>

    <h1>Learn arrays in PHP.</h1>

    <!-- get an array value by index -->
    <p><?php echo $peopleOne[1]; ?></p>
    <!-- print readable -->
    <p><?php print_r($ages); ?></p>
    <!-- count an array -->
    <p><?php echo count($ages); ?></p>
    <!-- how to merge multi array_search -->
    <p><?php print_r(array_merge($peopleOne, $peopleTwo)); ?></p>

    <hr>
    <br>
    <hr>
    
    <!-- calling associative arrays -->
    <p><?php echo $arraysOne['two']; ?></p>
    <p><?php print_r($arraysOne); ?></p> <!-- print readable arrays -->
    <p><?php print_r($arraysTwo); ?></p> <!-- print readable arrays -->
    <p><?php echo count($arraysOne); ?></p>
    <p><?php print_r(array_merge($arraysOne, $arraysTwo)); ?></p>

</body>
</html>