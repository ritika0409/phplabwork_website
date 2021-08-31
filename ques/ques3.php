<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post" >
  <input type="radio" value="1" name="opt" >
  <label for="opt1">Removes the whitespaces from a string</label><br>
  <input type="radio" value="2" name="opt" >
  <label for="opt2">Checks if a string contains another string.</label><br>
  <input type="radio" value="3" name="opt" >
  <label for="opt3">Checks if a string is all lower case.</label><br>
  <input type="radio" value="4" name="opt" >
  <label for="opt3"> Replace the first 'the' of the following string with 'That'.</label><br><br>
  <input type="text" name="str" placeholder="input a string" required><br>
  <input type="text" name="substr" placeholder="input a substring(if any)"><br><br>
  <input type="submit" name="submit" value="Submit"><br>
  <hr>
</form>
<pre>
<?php
  if(isset($_POST['submit']))
  {
        $s=$o=$ss=null;
        $s=$_POST['str'];
        $o=$_POST['opt'];
        $ss=$_POST['substr'];
        if($o=='1')
        echo str_replace(" ","",$s);
        if($o=='2')
        {
            if(stripos($s,$ss)!==FALSE)
            echo 'SubString found.';
            else
            echo 'SubString Not found.';
          }
        if($o=='3')
        {
            $f=1;
            if(preg_match("/[A-Z]/",$s)===1)
            {
                echo "Not in Lowercase";
                $f=0;
            }
            if($f==1)
                echo "String in Lowercase";
        }
        if($o=='4')
        echo preg_replace('/the/','That',$s,1);
  }
?>
</pre>
