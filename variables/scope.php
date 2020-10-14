<!-- this is variable scope in PHP -->

<?php

    $x = 5;

    function myTest() {
        $x = 10;
        echo "Variable x inside function is: $x";
    }

    function myTest2() {
        global $x;
        echo "Variable x inside function is: $x";
    }

    function myTest3() {
        static $x=0;
        echo $x;
        $x++;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Variable Scope</title>
</head>
<body>
    
    <h1>Learning variable scope in PHP.</h1>
    <p>Here all the variables name is similar which is <strong>$x</strong>.</p>
    <ol>
        <li>
            <div>
                <h4>Global Scope</h4>
                <p><?php echo "Variable x outside function is: $x"; ?></p>
            </div>
        </li>
        <li>
            <div>
                <h4>Local Scope</h4>
                <p><?php echo myTest(); ?></p>
            </div>
        </li>
        <li>
            <div>
                <h4>Global Keyword</h4>
                <small><i>ex: global $x;</i></small>
                <p><?php echo myTest2(); ?></p>
            </div>
        </li>
        <li>
            <div>
                <h4>Static Keyword</h4>
                <small><i>ex: static $x = 0;</i></small>
                <p><?php echo myTest3(); ?></p>
                <p><?php echo myTest3(); ?></p>
                <p><?php echo myTest3(); ?></p>
                <p><?php echo myTest3(); ?></p>
            </div>
        </li>
    </ol>

</body>
</html>