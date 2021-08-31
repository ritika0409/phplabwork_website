<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
  <input type="text" name="n1" placeholder="input a number" required><br><br>
  <input type="submit" name="submit" value="Submit">
</form>
<hr>
<pre>
<?php
if(isset($_POST['submit']))
{$n1=$_POST['n1'];
  $fac=1;
  for($i=1;$i<=$n1;$i=$i+1)
  $fac=$fac*$i;
echo "Factorial of a number is ".$fac;
}
?>
</pre>
