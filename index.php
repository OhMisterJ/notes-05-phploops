<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Notes 05 loops php</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>

        <div class="main">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <h1>PHP Conditionals</h1>
        <!-- Add your site or application content here -->
        <?php 
            // Conditionals in PHP are written and function very similarly to conditions in JS

        $num = 45;

        if ($num === 45) {
            echo '<br>The number is 45';
        }   else {
            echo '<br>The number is NOT 45';
        }

        // If, Else If conditionals work in much the same way as well

        $score = 67;

        if ($score >= 90) {
            echo '<br>You got an A.';
        }   else if ($score >= 80) {
            echo '<br>You got a B.';
        }   else if ($score >= 70) {
            echo '<br>You got a C.';
        }   else if ($score >= 60) {
            echo '<br>You got a D.';
        }   else {
            echo '<br>You Failed';
        }

        echo '<h1>PHP Loops</h1>';

        // PHP Loops look like Javascript Loops. They come in much the same variety as well. For example, you have the standard FOR Loop.
        for ($i = 0; $i <= 10; $i++) {
            echo '<br>Your number is ' . $i . ', good work.';
        }

        echo '<br>';

        // The one major difference in PHP versus Javascript is how you itterate through an Array.  In PHP, you can loop of itterate through an array using the foreach loop. This style of loop was built specifically to deal with PHP arrays

        $myCrayons = array('red', 'green', 'blue', 'orange', 'purple', 'brown', 'yellow', 'white', 'black', 'pink');

        foreach ($myCrayons as $i) {
            echo '<br>You have a ' . $i . ' color crayon in the box.';
        }

        echo '<br>';

        // The PHP While Loop 

        $myWhile = 10;

        while ($myWhile > 0) {
            echo '<br>You still have more than 0. You have ' . $myWhile;
            $myWhile--;
        }

        echo '<br>';

        // The PHP Do While Loop

        $myDo = 0;

        do {
            echo '<br>Let\'s add something until we have 10 because you have ' . $myDo;
            $myDo++;
        }   while ($myDo < 10);




        
        ?> 

           

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        </div>
    </body>
</html>


































