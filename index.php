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
    <div id = "wrapper">
<?php
    echo "
    <form action ='process.php' method='post' id= 'quizForm' id='1'>

        <ol>

     $myQuestionOne
     $myQuestionTwo  
     $myQuestionThree 
          
            </ol>
        <input type='submit' value='Submit Quiz' />
        </form>
   "
   ?>
    </div>
</body>
</html>