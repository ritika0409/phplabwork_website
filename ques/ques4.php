<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
    <input type="number" name="d" placeholder="Date" max="31" required>
    <input type="number" name="m" placeholder="Month" max="12" required>
    <input type="submit" name="calc" value="CALCULATE">
</form>
<hr>
<?php
if (isset($_REQUEST['calc']))
 {
$target_days = mktime(0,0,0,$_POST['m'],$_POST['d'],2020);
$today = time();
$diff_days = ($today-$target_days);
$days = (int)($diff_days/86400);
if($days>0)
$days=365-$days;
else {
  $days=-$days;
}
print "Days left till next birthday: $days days!"."\n";
}
?>
