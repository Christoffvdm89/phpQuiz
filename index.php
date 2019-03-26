<!DOCTYPE html>
<html>
<body>

<h1>My first PHP Quiz</h1>



<?php

$questions=[     ["1. How many stars are there on the flag of China?<br>",
                 "2. What is the currency of Mongolia?<br>",
                 "3. In which country is there a natural gas pit nicknamed the ‘Door to Hell’ that has been on fire since 1971?<br>",
                 "4. In 2013 which two airlines merged to become the world’s largest airline?<br>",
                 "5. Jaktogos went on sale in 2013. What are they?<br>",
                 "6. Which celebrity was carried by their minders along the Great Wall of China?<br>",
                 "7. In 1976, Saigon changed its name to …?<br>",
                 "8. Which country has more lakes than the rest of the world combined?<br>",
                 "9. Which country has the world's highest waterfall?<br>",
                 "10. Persepolis FC is a football club of which country?<br>",
                 "11. What year did Albert Einstein die?<br>",
                 "12. Which is the largest planet in the solar system?<br>",
                 "13. How many Presidents have there been of the USA?<br>",
                 "14. What colour is Cerulean?<br>",
                 "15 What are a group of Dolphins called?<br>",
                 "16. Who discovered Penicillin?<br>",
                 "17. What date was President John F Kennedy assassinated?<br>",
                 "18. How many men have walked on the moon?<br>",
                 "19. Who has won the most Academy Awards?<br>",
                 "20. What is the currency of Brazil?<br>"],
                 ["question1","question2","question3","question4","question5","question6","question7","question8","question9","question10","question11","question12","question13","question14","question15","question16","question17","question18","question19","question20"],
                 [["2","5","7","1"],
                  ["Yena","Kirgin","Topchok","Tugrik"],
                  ["Turkmenistan","Azerbaijan","Bulgaria","Iceland"],
                  ["Air France and KLM","American Airlines and US Airways","British Airways and Iberia","Lufthansa and Germanwings"],
                  ["A hot potato snack, served with cheese and chilli, popular in Mexico","Raincoats that tourists can buy from vending machines across the London Underground","A jacket covered in pockets allowing passengers to pack everything into their coats","A fashionable take on the plastic poncho originally from Tokyo"],
                  ["Lady Gaga","Justin Bieber","Harry Styles","Daniel Radcliffe"],
                  ["Ho Chi Minh City","Pattaya","Saigon City","Hanoi"],
                  ["Finland","China","Norway","Canada"],
                  ["America","Japan","Venezuela","Uganda"],
                  ["Turkey","Greece","Iran","Egypt"],
                  ["1954","1949","1960","1955"],
                  ["Jupiter","Neptune","Eart","Mars"],
                  ["36","29","46","44"],
                  ["Red","Blue","Yellow","Green"],
                  ["School","Herd","Pod","Pool"],
                  ["Alexander Fleming?","Thomas Edison","Marie Curie","George Orwell"],
                  ["November 22 1962","November 22 1963","October 29 1964","November 24 1962"],
                  ["10","5","12","9"],
                  ["James Cameron","Walt Disney","Katherine Hepburn","Steven Spielberg"],
                  ["Dollar","The Bhat","Real","Krona"]]
            ];
/*
for ($x=0; $x<count($questions[0]) ; ++$x) { 
  echo "\n".$questions[0][$x];
  
  for ($z=0; $z<=3; ++$z) {
    echo "\n<input type=\"radio\" name=\"". $questions[1][$x]. "\"value=\"". $questions[2][$x][$z]. "\">\"". $questions[2][$x][$z]."\"";
  } echo "<br><br>";
};
*/
?>

<div>


</div>




<?php

if(isset($_POST['submit'])){
  $x=0;
  
if (isset($_POST['question1']) && $_POST['question1']==="5"  ){
  $x++;
}

if (isset($_POST['question2']) && $_POST['question2']==="Tugrik"){
    $x++;
}
  
if (isset($_POST['question3']) && $_POST['question3']==="Turkmenistan"){
    $x++;
}
if (isset($_POST['question4']) && $_POST['question4']==="American Airlines and US Airways"){
    $x++;
}
if (isset($_POST['question5']) && $_POST['question5']==="A jacket covered in pockets allowing passengers to pack everything into their coats"){
  $x++;
}
if (isset($_POST['question6']) && $_POST['question6']==="Justin Bieber"){
    $x++;
}
if (isset($_POST['question7']) && $_POST['question7']==="Ho Chi Minh City"){
    $x++;
}
if (isset($_POST['question8']) && $_POST['question8']==="Canada"){
  $x++;
}
if (isset($_POST['question9']) && $_POST['question9']==="Venezuela"){
  $x++;
}
if (isset($_POST['question10']) && $_POST['question10']==="1955"){
  $x++;
}
if (isset($_POST['question11']) && $_POST['question12']==="Jupiter"){
  $x++;
}
if (isset($_POST['question13']) && $_POST['question13']==="44"){
  $x++;
}
if (isset($_POST['question14']) && $_POST['question14']==="Blue"){
  $x++;
}
if (isset($_POST['question15']) && $_POST['question15']==="Pod"){
  $x++;
}
if (isset($_POST['question16']) && $_POST['question16']==="Alexander Fleming?"){
  $x++;
}
if (isset($_POST['question17']) && $_POST['question17']==="November 22 1963"){
  $x++;
}
if (isset($_POST['question18']) && $_POST['question18']==="12"){
  $x++;
}
if (isset($_POST['question19']) && $_POST['question19']==="Walt Disney"){
  $x++;
}
if (isset($_POST['question20']) && $_POST['question20']==="Real"){
  $x++;
}
  echo "Your score is $x <br>";
  if ($x>15) {
    echo "Well done";
  }elseif ($x>10) {
    echo "You only did ok";
  }else{
    echo "Please try again";
  }
 
}




?>

<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<?php for ($x=0; $x<count($questions[0]) ; ++$x) { ?>

<h3><?php  echo $questions[0][$x] ?></h3>

<?php  for ($z=0; $z<=3; ++$z) { ?>

<input type="radio" name="<?php echo $questions[1][$x]; ?>" value="<?php echo $questions[2][$x][$z]; ?>"> 
<span> <?php echo $questions[2][$x][$z] ?> </span>
<?php }?>
<?php }?>


 <input type="submit" value="submit" name="submit">
</form>

</body>
</html>