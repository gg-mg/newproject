<?php 

$rows= file('plain_text.txt');

foreach($rows as $row){ 
  $bulbs = explode(":", $row);
  foreach($bulbs as $bulb){
    echo $bulb.'<br>';
  }
   
}

foreach($rows as $row){ 
    $pouts = explode(":", $row);
   print_r($pouts);
  //this is the result used to trim[0] and trim[1]
  //this divides the eploded text to Home and index.php for the first entry
  //second entry will split to Pactice Section 1 and 1.php and so on
  }
  echo '<br>';
  echo $_SERVER['PHP_SELF'];
  echo '<br>';
  echo basename($_SERVER['PHP_SELF']);
  
     
 

?>