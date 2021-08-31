<!DOCTYPE html>
<html>

<head>
  <title> Ritika's Labwork </title>
  <link rel="stylesheet" href="lab.css">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Luckiest+Guy&display=swap" rel="stylesheet">
</head>
<body>
  <div class="header">
    <div class="heading">PHP LABWORK</div>
    <div class="subheading">By: Ritika Jindal(7840)</div>
  </div>
  <div class="agroup">
    <?php
    for ($i=1; $i <= 15; $i++)
  {echo"<a href='?page=$i' >Question $i</a><br>";}
  ?>

</div>
<div class="m_content">
  <?php
  if(isset($_REQUEST['page']))
  {
    switch ($_REQUEST['page']) {
      case '1': echo "<h1>Reverse a string</h1>";
                echo "<p>Enter the string to be reversed!</p>";
                include("ques/ques1.php");
                break;
      case '2': echo "<h1>Sort an Array</h1>";
                echo "<p>Enter the array separated by a comma!</p>";
                include("ques/ques2.php");
                break;
      case '3': echo "<h1>Menu Driven: String Function</h1>";
                echo "<p>Choose an option and enter the string!</p>";
                include("ques/ques3.php");
                break;
      case '4': echo "<h1>Birthday Countdown</h1>";
                echo "<p>Enter the date and month!</p>";
                include("ques/ques4.php");
                break;
      case '5': echo "<h1>Sort and Print an Array</h1>";
                echo "<p>Enter the array separated by a comma!</p>";
                include("ques/ques5.php");
                break;
      case '6': echo "<h1>HELLO!</h1>";
                echo "<p>Choose a language!</p>";
                include("ques/ques6.php");
                break;
      case '7': echo "<h1>Email Validation</h1>";
                echo "<p></p>";
                include("ques/ques8.php");
                break;
      case '8':echo "<h1>Largest of three numbers</h1>";
                echo "<p>Enter the numbers!</p>";
                include("ques/ques10.php");
                break;
      case '9':echo "<h1>Factorial</h1>";
                echo "<p>Enter the number!</p>";
                include("ques/ques11.php");
                break;
      case '10':echo "<h1>Prime Number</h1>";
                echo "<p>Enter the number!</p>";
                include("ques/ques12.php");
                break;
      case '11':echo "<h1>Even Numbers</h1>";
                echo "<p>Enter the number!</p>";
                include("ques/ques13.php");
                break;
      case '12':echo "<h1>Sum of Odd Numbers </h1>";
                echo "<p>Enter the number!</p>";
                include("ques/ques14.php");
                break;
      case '13':echo "<h1>Palindrome String</h1>";
                echo "<p>Enter the string!</p>";
                include("ques/ques15.php");
                break;
      case '14':echo "<h1>Fibonacci Series</h1>";
                echo "<p>Enter the number!</p>";
                include("ques/ques16.php");
                break;
      case '15':echo "<h1>PATTERN</h1>";
                echo "<p>Enter the number!</p>";
                include("ques/ques17.php");
                break;
    }
  }
  ?>

  </div>
</body>
</html>
