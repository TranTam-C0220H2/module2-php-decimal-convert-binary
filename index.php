<?php
include 'Stack.php';
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label>Decimal Number: <input type="number" name="decimalNumber"></label>
    <input type="submit" value="Convert">
</form>
<?php
$stack = new Stack(100);
$decimalNumber = $_POST['decimalNumber'];
while ($decimalNumber != 0) {
    $remainder = $decimalNumber % 2;
    $stack->push($remainder);
    $decimalNumber = floor($decimalNumber / 2);
}
echo 'Binary Number: ';
$arrayBinaryNumber = $stack->getStack();
foreach ($arrayBinaryNumber as $item) {
    echo $stack->pop();
}
?>
</body>
</html>
