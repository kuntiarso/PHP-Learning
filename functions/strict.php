<?php declare(strict_types=1);

    function sumInt(int $a, int $b) {
        return $a + $b;
    }

    $ex = sumInt(3, 4);

    function sumFloat(float $a, float $b) : float {
        return $a + $b;
    }
    
    $ex2 = sumFloat(4.2, 3.4);
    
    function sumFloatToInt(float $a, float $b) : int {
        return (int) ($a + $b);
    }
    
    $ex3 = sumFloatToInt(4.2, 3.4);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | strict types</title>
</head>
<body>
    
    <h1>Learning strict types in PHP.</h1>
    <div>
        <p>1. Use strict types to declare what data types we want to use in a function</p>
        <small>ex input: (3, "4")</small>
        <br>
        <small>return: will cause an error or blank page, because 4 is string not an integer.</small>
        <br>
        <br>
        <small>ex input: (3, 4)</small>
        <br>
        <small>return: <?php echo $ex; ?></small>
    </div>
    <div>
        <p>2. Use specific data types we want to return</p>
        <small>ex input: (4.2, 3.4)</small>
        <br>
        <small>return: <?php echo $ex2; ?></small>
        <br>
        <br>
        <small>ex input: parsing into (int)(4.2, 3.4)</small>
        <br>
        <small>return: <?php echo $ex3; ?></small>
    </div>

</body>
</html>