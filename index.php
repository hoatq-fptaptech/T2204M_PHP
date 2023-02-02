<?php
$title = "Nhật báo tài chính ngày 2-2-2023";
$sv = [
    "name"=> "Nguyen Van An",
    "age" => 18,
    "address" => "So 8 Ton That Thuyet"
];
$monans = [
    "Phở bò","Phở gà","Bún Huế"
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T2204M PHP</title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <h2>Sinh vien: <?php echo $sv["name"];?></h2>
    <p>Địa chỉ: <?php echo $sv["address"]; ?></p>
    <?php if($sv["age"]>=18): ?>
        <p><i>Đã đủ 18 tuổi</i></p>
    <?php else: ?>
        <p><i>Chưa đủ 18 tuổi</i></p>
    <?php endif; ?>

    <ul>
        <?php foreach ($monans as $m):?>
            <li><?php echo $m;?></li>
        <?php endforeach; ?>
    </ul>
    <a href="demo.php">Chuyển qua demo</a>
</body>
</html>
