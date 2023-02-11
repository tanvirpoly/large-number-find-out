<!DOCTYPE html>
<html>
<head>
  <title>Largest Number Find Out</title>
</head>
<body>

  <h2>PHP Program to find out the largest of three numbers</h2>

<form method="post" action="large-number-find-out.php">
  Enter the first number:<br>
  <input type="text" name="number1"><br>
  Enter the second number:<br>
  <input type="text" name="number2"><br>
  Enter the third number:<br>
  <input type="text" name="number3">
  <br> <br>
  <input type="submit" name="submit">
</form>

<br>
</body>



</html>

<?php
if(isset($_POST["submit"])){
      $number1=$_POST["number1"];
      $number2=$_POST["number2"];
      $number3=$_POST["number3"];
      if($number1>$number2 && $number1>$number3){
        echo "The lergest number is: ". $number1;
      }
      else{
        if($number2>$number1 && $number2>$number3){
          echo "The lergest number is: ". $number2;
        }
        else
          echo "The lergest number is: ". $number3;
      }
  }
 
?>

