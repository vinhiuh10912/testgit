<html>
    <head>
        <meta content="charset=utf-8">
        <title>bai 1.3</title>
    </head>
    <style type="text/css">
        .body {margin: auto; padding-left: 100px; padding-top: 20px;}
        
    </style>
    <body>
    <?php
do {
    // Gán giá trị ngẫu nhiên cho $x và $y trong khoảng từ 0 đến 1000
    $x = rand(0, 1000);
    $y = rand(0, 1000);

    // Đặt giá trị cố định của k là 2
    $k = 2;

    // Điều kiện: $x > $y và $x = k * $y
    $condition1 = $x > $y;
    $condition2 = $x == $k * $y;

} while (!$condition1 || !$condition2); // Lặp lại cho đến khi cả hai điều kiện đều thỏa mãn

// In kết quả
echo "x = $x\n";
echo "<br>";
echo "y = $y\n";
echo "<br>";
echo "Điều kiện thỏa mãn: x > y và x = k * y\n";
?>

    </body>
</html>