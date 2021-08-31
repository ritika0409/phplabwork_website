<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
  <input type="email" name="Email" placeholder="Enter Email ID."><br><br>
  <input type="submit">
</form><br>
<?php
  if ($_SERVER['REQUEST_METHOD']=='POST') {
    echo "<hr>";
    if (!empty($_REQUEST['Email'])) {
      $ID=$_POST['Email'];
      $spaceCheck=explode(' ',$ID);
      $dotCheck=explode('.',$ID);
      $CheckA=explode('@',$ID);
      if(count($spaceCheck)>1)
      {
        echo "Invalid spaces";
      }
      else if(count($dotCheck)!=2)
      {
        echo "Invalid dots";
      }
      else {
        $afterDot=str_split($dotCheck[1]);
        if(count($afterDot)<2)
        {
          echo "Invalid char after dots";
        }
        else if(count($CheckA)!=2) {
          echo "Invalid @";
        }
        else {
          $DotNACheck=explode('.',$CheckA[1]);
          $afterA=str_split($DotNACheck[0]);
          if(count($afterA)<2)
          {
            echo "Invalid char between @ and .";
          }
          else {
            echo "Valid Email";
          }
        }
      }
    }
    else {
      echo "No Input.";
    }
  }
?>
