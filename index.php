<!DOCTYPE html>
<html lang="en">
<head>
<?php
   include 'variabels.php';
  ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>USA Quiz</title>

    <style>
    body h1 {
         text-align: center;
    }

  
    </style>
</head>
<body>
    
    <h1> Har du vad som krävs för att bli medborgare i USA? </h1>
    
    <div id = "wrapper">

<?php
    echo "
    <form action ='process.php' method='post' id= 'quizForm' id='1'>

        <ol>

     $myQuestionOne
     $myQuestionTwo  
     $myQuestionThree 
     $myQuestionFour
     $myQuestionFive
     $myQuestionSix
     $myQuestionSeven
     $myQuestionEight
     $myQuestionNine
     $myQuestionTen
          
            </ol>
        <input type='submit' value='Submit Quiz' />
        </form>
   "
   ?>
    </div>
</body>
</html>