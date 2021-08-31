<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
  <input type="text" name="n1" placeholder="input a number" required><br><br>
  <input type="submit" name="submit" value="Submit">
</form>
<hr>
<pre>
<?php
if(isset($_POST['submit']))
{$n1=$_POST['n1'];
  $flag=1;
  for($i=$n1-1;$i>1;$i=$i-1)
  if($n1%$i==0)
  $flag=0;
if($flag)
echo $n1." is a prime number";
else
echo $n1." is not a prime number";
}
?>
</pre>
