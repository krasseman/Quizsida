<!DOCTYPE html>
<html lang="en">
<head>
<?php
   include 'variabels.php';
  ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
  
    </style>
</head>
<body>
<?php

        $answer1= $_POST['answerOne'];
        $answer2= $_POST['answerTwo'];
        $answer3= $_POST['answerThree'];
        $score = 0;

        if ($answer1 == "C"){$score++;}
        if ($answer2 == "A"){$score++;}
        if ($answer3 == "A"){$score++;}
        if ($answer4 == "C"){$score++;}
        if ($answer5 == "A"){$score++;}
        if ($answer6 == "A"){$score++;}
        if ($answer7 == "C"){$score++;}
        if ($answer8 == "A"){$score++;}
        if ($answer9 == "A"){$score++;}
        if ($answer10 == "C"){$score++;}
        

        echo "<h3> Your score is: $score <h3>"

?>
</body>

<html>