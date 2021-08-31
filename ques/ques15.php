<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
  <input type="text" name="n" placeholder="input a string" required><br><br>
  <input type="submit" name="submit" value="Submit">
</form>
<hr>
<?php
       if(isset($_POST['submit']))
       {
           $m=$_POST['n'];
           $r=strrev($m);

           if(strcasecmp($m,$r)==0)
           {
               echo "It is a Palindrome.";
           }
           else
               echo "It is not a Palindrome.";
       }
   ?>
