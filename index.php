<?php
/*
 * Flicker Leap PHP Engineer Test
 *
 * This is where the magic happens. Run all code in here to show your end result.
 */

require __DIR__ . '/vendor/autoload.php';

use FlickerLeap\Diamond;
use FlickerLeap\Rectangle;
use FlickerLeap\Square;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Flicker Leap - PHP Engineer Test</title>
    </head>
    <style type="text/css">
        body{line-height: 1em;}
    </style>
    <body>

        <h1>PHP Engineer Test</h1>

        <h2>Hello World</h2>

        <p>At the end of this test, you should have all the answers on this page.</p>

        <h2>Output a square</h2>

        <?php
            $newSquare = new Square();
            echo $newSquare->name . nl2br("\n");
            $newSquare->draw();
        ?>

        <h2>Output a diamond</h2>

        <?php
            // output your diamond here
        ?>

        <h2>Output your rectangle</h2>

        <?php
            $newRectangle = new Rectangle();
            echo $newRectangle->name . nl2br("\n");
            $newRectangle->draw();
        ?>

        <h2>Output the result of the API</h2>

        <?php
            $newDiamond = new Diamond();
            echo $newDiamond->name . nl2br("\n");
            $newDiamond->draw();
            // Use the Httpful client to output the API results here.
        ?>

        <h2>Recommendations</h2>

        <p><!-- Let us know how we can improve this test here --></p>

    </body>
</html>
