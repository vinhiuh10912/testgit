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
// Nhập một số nguyên bất kỳ
$number = 20;

// Tính bình phương của số
$square = $number ** 2;

// Định dạng số bằng hàm number_format()
// - number_format($number, số chữ số thập phân, ký tự thập phân, ký tự phân cách hàng nghìn)
$formatted_square = number_format($square, 0, '.', ',');

// Hiển thị kết quả
echo "Số ban đầu: $number<br>";
echo "Bình phương của số: $square<br>";
echo "Bình phương (định dạng): $formatted_square<br>";
?>

    </body>
</html>