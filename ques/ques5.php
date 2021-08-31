<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
  <input type="text" name="array" placeholder="white,green,red" value="white,green,red"><br><br>
  <input type="submit" name="submit" value="Submit">
</form>
<hr>
<pre>
<?php
if(isset($_POST['submit']))
{ $arr=null;
  $arr = explode(',', $_POST['array']);
  if($arr != null) {
    sort($arr);
          foreach($arr as $c)
              echo "> $c<br>\n";
  }
  else echo"empty";

}
?>
</pre>
