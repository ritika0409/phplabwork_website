<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
  <input type="text" name="n1" placeholder="input 1st number" required><br>
  <input type="text" name="n2" placeholder="input 2nd number"><br>
  <input type="text" name="n3" placeholder="input 3rd number"><br><br>
  <input type="submit" name="submit" value="Submit">
</form>
<hr>
<pre>
<?php
if(isset($_POST['submit']))
{$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];

if($n1>$n2&&$n1>$n3)
$max=$n1;
else if($n2>$n1&&$n2>$n3)
$max=$n2;
else if($n3>$n1&&$n3>$n2)
$max=$n3;
echo "LARGEST OF THREE IS ".$max;
}
?>
</pre>
