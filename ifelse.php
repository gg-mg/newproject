<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "Hello world";echo "<br>";
    
     if (4>7){
        echo "Hooray";
     }
     else{ echo "Not Hooray";}
    
    
    
    
    ?>
    <?php 
    for($counter=0; $counter<10; $counter++){

        echo $counter."<br>";
    }
        
    ?>
  <?php
    echo $_SERVER['PHP_SELF'];
  ?>


</body>
</html>
