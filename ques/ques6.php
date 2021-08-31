<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
  <div class="dropdown">
    <br>
    <div class="dropdown-content">
    <input type="submit" name="Eng" value="ENGLISH">
    <input type="submit" name="Ger" value="GERMAN">
    <input type="submit" name="Fre" value="FRENCH" >
    <input type="submit" name="Por" value="PORTUGUESE">
     <input type="submit" name="Spa" value="SPANISH" >
    </div>
  </div>
</form>
<hr>
<div class="ans">
  <?php
  if (isset($_REQUEST['Eng'])) {
    echo "HELLO";
  }
  elseif (isset($_REQUEST['Ger'])) {
    echo "HALLO";
  }
  elseif (isset($_REQUEST['Fre'])) {
    echo "BONJOUR";
  }
  elseif (isset($_REQUEST['Por'])) {
    echo "OLA";
  }
  elseif (isset($_REQUEST['Spa'])) {
    echo "HOLA";
  }
?>
</div>
