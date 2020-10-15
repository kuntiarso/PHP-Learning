<?php
    $min = min(3,10,30,44,57,32,52,654,21,436,5,7);
    $max = max(3,10,30,44,57,32,52,654,21,436,5,7);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | math</title>
</head>
<body>
    
    <h1>Learning math function in PHP.</h1>
    <div>
        <p>Minimum function: min()</p>
        <small>result: <?php echo $min; ?></small>
    </div>
    <div>
        <p>Maximum function: max()</p>
        <small>result: <?php echo $max; ?></small>
    </div>
    <div>
        <p>Round function: round()</p>
        <small>result: <?php echo round(2.7); ?></small>
        <br>
        <small>result: <?php echo round(2.2); ?></small>
    </div>
    <div>
        <p>Random function: rand()</p>
        <small>result: <?php echo rand(); ?></small>
    </div>
    <div>
        <p>Random with interval function: rand()</p>
        <small>result: <?php echo rand(1, 999); ?></small>
    </div>
</body>
</html>