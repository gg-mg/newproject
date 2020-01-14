<?php 
$name = "James";
echo "<h1>This is Header 1</h1>"; 
echo "<h2>This is Header 1</h2>"; 

?>


<?php if($name = "James") { ?>
<p>Hello James!</p>
<?php } else { ?>
<p>You're not James.</p>
<?php } ?>

<?php

for($counter=1; $counter<=5; $counter++){
   $message = $message.$counter."|";
}
echo $message;
?>
<?php
echo "<br>";
for($counter=10; $counter<=100; $counter+=10){
    echo $counter."<br>";
}

?>