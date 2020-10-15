<?php

    function writeMsg() {
        echo 'Hello, World!';
    }

    function addName($name) {
        echo "Hello, World! I am $name.";
    }

    function addBorn($born) {
        echo " I was born on $born.";
    }

    function sumInt(int $a, int $b) {
        return $a + $b;
    }

    function myName($name) {
        return $name;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | functions</title>
</head>
<body>
    
    <h1>Learning a functions in PHP.</h1>
    <div>
        <p>1. Calling a function</p>
        <small>result: <?php echo writeMsg(); ?></small>
    </div>
    <div>
        <p>2. Add an argument to a function</p>
        <small>result: <?php echo addName("Alexandra"); ?></small>
        <br>
        <small>result: <?php echo addName("Zlatan") . addBorn("January 20th, 1997"); ?></small>
    </div>
    <div>
        <p>3. No Strict declaration: string can be sum</p>
        <small>ex input: 1 and "1 pot"</small>
        <br>
        <small>result: <?php echo sumInt(1, "1 pot"); ?></small>
    </div>
    <div>
        <p>4. Returning a value from a function</p>
        <small>ex input: "Alexandra"</small>
        <br>
        <small>return: I know where are you, <?php echo myName("Alexandra"); ?>!</small>
    </div>

</body>
</html>