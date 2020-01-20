<?php 
// get the data from the request
    $first_name = $_GET['first_name'];
    $last_name = $_GET['last_name'];
?>

<?php
$x=14;
$y=8;
echo $result = intdiv($x, $y); //divides 14 by 8 and gives the whole number that 8 goes in 14.

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Name Test</title>
</head>
<body>
    <h2>Welcome</h2>
    <p>Fist name:<?php echo $first_name; ?></p>
    <p>Last name:<?php echo $last_name; ?></p>
</body>
</html>