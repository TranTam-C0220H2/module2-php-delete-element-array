<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$arrayIntNumber = [0, -4, 6, 33, 4, 9, 9, 34, -64, -64];
echo 'Mang khoi tao: ' . implode(', ', $arrayIntNumber);
?>
<form method="get">
    <label>So can xoa: <input type="number" name="number"></label>
    <input type="submit" value="Xoa">
</form>
<?php
include 'delete-element-array.php';
$number = $_GET['number'];
if (count(placeDeleteElementArray($arrayIntNumber, $number)) == 0) {
    echo 'So can xoa khong nam trong mang khoi tao.';
} else {
    echo 'Mang sau khi da xoa: ' . implode(', ', deleteElementArray($arrayIntNumber, $number));
}
?>
</body>
</html>