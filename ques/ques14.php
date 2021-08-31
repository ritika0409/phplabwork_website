<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
  <input type="text" name="n" placeholder="input number" required><br><br>
  <input type="submit" name="submit" value="Submit">
</form>
<hr>
<?php
if(isset($_REQUEST['submit']))
{
  $n=$_POST['n'];
  $sum=0;
  for($i=1,$j=1;$i<=$n;$j=$j+2,$i=$i+1)
  if ($j %2 != 0) {
    $sum=$sum+$j;
  }
  echo "THE SUM OF FIRST $n ODD NUMBERS IS $sum. ";
}
?>
