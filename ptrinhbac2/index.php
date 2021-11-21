<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    Nhập a:
    <input type="text" name="a" ><br><br>
    Nhập b:
    <input type="text" name="b" ><br><br>
    Nhập c:
    <input type="text" name="c" ><br><br>
    <button>Gửi</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    include('ptrinh.php');
$quad=new QuadraticEquation($a,$b,$c);
$quad->getter();
echo 'Delta= '.$quad->getDiscriminant().'<br>';
$quad->getRoot1();
}
?>

</body>
</html>
