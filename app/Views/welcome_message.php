
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
echo "Hello World <br>";
?>

<h2>
<?php 
function GreetingMessage(){
    echo "Assalam o alaikum function";
}
GreetingMessage();
?>
</h2>

<?php 
$cars = array('BMW', 'mercedes', 'toyota');

foreach($cars as $car){
    echo "$car<br>";
}
?>

</body>
</html>