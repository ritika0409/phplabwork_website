<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
  <input type="text" name="n" placeholder="input a number" required><br><br>
  <input type="submit" name="submit" value="Submit">
</form>
<hr>
<pre>
<?php
if(isset($_POST['submit']))
{$n=$_POST['n'];
  echo "First $n even numbers are ";
  for($i=1,$j=0;$i<=$n;$j=$j+2,$i=$i+1)
  echo "$j,";
}
?>
</pre>
