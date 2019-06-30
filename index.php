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
        
echo '-------------------------------------------------';
      
print_r(testvariable(111, 222, 333, 444));

$array = [
array( 'a' => 1, 'b' => '2', 'c' => '', 'd' => 4,  'e' => 5, 'f' => 6,  'j' => 7),
array( 'a' => 11, 'b' => '', 'c' => 33, 'd' => 44,  'e' => 55, 'f' => 66,  'j' => 77)
];

echo '<pre>';
foreach ($array as $key => $val) {
  chestertester($val['a'], $val['b'], $val['c'], $val['d'], $val['e'], $val['f'], $val['j']);
  echo '<br>';
  testvariable($val['a'], $val['b'], $val['c'], $val['d']);
  
}
echo '</pre>';

echo '<br><br><br>';

function chestertester($a, $b, $c, $d, $e, $f, $j) {

  !isset($a) || !empty($a) ? $a = $a : $a = '0';
  !isset($b) || !empty($b) ? $b = $b : $b = '0';
  !isset($c) || !empty($c) ? $c = $c : $c = '0';
  !isset($d) || !empty($d) ? $d = $d : $d = '0';
  !isset($e) || !empty($e) ? $e = $e : $e = '0';
  !isset($f) || !empty($f) ? $f = $f : $f = '0';
  !isset($j) || !empty($j) ? $j = $j : $j = '0';

  echo'<pre>';
      print_r(func_get_args());
  echo'</pre>'; 

  echo $a . ' ' . $b . ' ' . $c .' ' . $d . ' ' . $e . ' ' . $f . ' ' . $j;
}

function testvariable($a, $b, $c, $d) {

  !isset($a) || !empty($a) ? $a = $a : $a = '0';
  !isset($b) || !empty($b) ? $b = $b : $b = '0';
  !isset($c) || !empty($c) ? $c = $c : $c = '0';
  !isset($d) || !empty($d) ? $d = $d : $d = '0';

  echo'<pre>';
      print_r(func_get_args());
  echo'</pre>';  

  echo $a . ' ' . $b . ' ' . $c .' ' . $d;

}
      
      
      
      
$string = 'Хорошая погода в Волгограде';
$string = preg_replace('/Волгограде/', 'Питере', $string); 
echo $string;
      

?>

https://www.codexworld.com/simple-php-shopping-cart-using-sessions/
