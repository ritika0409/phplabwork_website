<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
<input type="number" name="size" placeholder="input number" required><br><br>
<input type="submit" name="submit" value="submit">
</form>
<hr>
<?php
if (isset($_REQUEST['submit'])) {
  $num = 0;
  $n1 = 0;
  $size= $_POST['size'];
  $n2 = 1;
  echo "<h3>Fibonacci series: </h3>";
  echo "\n";
  echo $n1.' '.$n2.' ';
  while ($num < ($size-2) )
  {
      $n3 = $n2 + $n1;
      echo $n3.' ';
      $n1 = $n2;
      $n2 = $n3;
      $num = $num + 1;
}
}
?>
