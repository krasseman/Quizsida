<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz</title>

</head>
<body>
  <?php
   include 'variabels.php';
  ?>


<?php



    foreach($questions as $a)
    {
echo "
<div class = 'questionbox'>
<form action='process.php' method='post' id='quizForm' id='1'>

    <ol>

        <li>
        <h3> ".$a['question']."</h3>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' />
        <label for='answerOne1'>1) ".$a['answer1']." </label>
        </div>
        </li>


        <div>
        <input type='radio' name='answerOne' id='answerOne' value='X' />
        <label for='answerOneX'>X) ".$a['answer2']."</label>
        </div>

        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' />
        <label for='answerOneB'>2) ".$a['answer3']."</label>
        </div>

    </ol>
</div>
    "

;
    }

?>


</body>
</html>