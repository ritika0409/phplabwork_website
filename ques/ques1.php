<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
  <input type="text" name="n1" placeholder="input string"><br><br>
  <input type="submit" name="submit" value="Submit" >
</form>
<hr>
<pre>
<?php
if(isset($_POST['submit']))
{$n1=$_POST['n1'];
  if($_POST['n1'])
    echo "REVERSE OF THE STRING IS ".strrev($n1);
  else
    echo"Enter the string";
}

?>
</pre>
