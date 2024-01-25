<?php
    $n = 10;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Tổng từ 1 -> <?php echo $n?></h1>
    <?php
        $t = 0;
        for($i = 1; $i <= $n; $i++)
            $t += $i;
    ?>
    <h2>Là: <?php echo $t?></h2>
</body>
</html>