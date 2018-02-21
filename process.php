<!DOCTYPE html>
<html lang="en">
<head>
<?php
   include 'variabels.php';
  ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>USA quiz</title>

    <style>
   body h1 {
       text-align: center;
   }
    </style>
</head>
<body>
<?php

        $answer1= $_POST['answerOne'];
        $answer2= $_POST['answerTwo'];
        $answer3= $_POST['answerThree'];
        $answer4= $_POST['answerFour'];
        $answer5= $_POST['answerFive'];
        $answer6= $_POST['answerSix'];
        $answer7= $_POST['answerSeven'];
        $answer8= $_POST['answerEight'];
        $answer9= $_POST['answerNine'];
        $answer10= $_POST['answerTen'];
        
        $score = 0;
     
        if ($answer1 == "C"){$score++;}
        if ($answer2 == "A"){$score++;}
        if ($answer3 == "C"){$score++;}
        if ($answer4 == "B"){$score++;}
        if ($answer5 == "B"){$score++;}
        if ($answer6 == "C"){$score++;}
        if ($answer7 == "C"){$score++;}
        if ($answer8 == "A"){$score++;}
        if ($answer9 == "A"){$score++;}
        if ($answer10 == "B"){$score++;}
        
        $b= 7;
        if ($score > $b) {
            echo "<h3> Din poäng är: $score av 10, du är välkommen till USA! </h3>"
        ;}

        if ($score < $b) {
            echo "<h3> Din poäng är: $score av 10! <br> Du är EJ välkommen till USA! <h3"
        ;}

?>

</body>

<html>