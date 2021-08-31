<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
   <input type="text" name="a" placeholder="Enter the Numbers (comma seperated)" >
   <input type="submit" name="s" value="SORT">
</form>
<hr>
<?php
if (isset($_REQUEST['s']))
{
  $str = $_POST['a'];
  $numbers = explode(',',$str);
  if(!$str)
  echo"Enter the array";
  else{
  sort($numbers);
  echo "<br> The sorted array is: ";
  $arrlength = count($numbers);
  for($x = 0; $x < $arrlength; $x++) {
      echo $numbers[$x];
      echo " ";
  }}
}
?>
