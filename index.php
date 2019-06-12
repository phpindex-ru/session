<?php

session_start();

if(empty($_SESSION['sessionid'])) {
  $sessionid = uniqid();
  $_SESSION['sessionid'][] = $sessionid;
}

foreach ($_POST as $key => $val ) {
  $_SESSION['items'][$key] = $val;
}
?>

<form action='<?php htmlentities($_SERVER['SCRIPT_NAME']) ?>' method='post'>
<input type='text' name='<?php echo uniqid() ?>'/> 
<input type='submit' value='Next'/>
</form>

<?php 

echo '<pre>';
if(isset($_SESSION)) { 
  print_r($_SESSION); 
}
echo '</pre>';

//session_destroy();

?>
