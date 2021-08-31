<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
  <input type="text" name="n" placeholder="input a number" required><br><br>
  <input type="submit" name="submit" value="Submit">
</form>
<hr>
<?php
        if(isset($_POST['submit']))
        {
            $m=$_POST['n'];
            if($m>0)
            {
                for($i=1; $i<=$m; $i++)
                {
                    for($j=1; $j<=$i; $j++)
                    {
                        echo "* ";
                    }
                    echo "<br/>";
                }
            }
            else
                echo $m." is not a Non-Negative Integer.";
        }
    ?>
