<?php
$pdo = new PDO('mysql:host=localhost;dbname=qlsv','root','');
$stm = $pdo->query('select * from sinhvien');
$data = $stm->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table img{
            width: 50px;
        }
    </style>
</head>
<body>
    <table border = 1>
        <?php
        foreach($data as $item)
        {
            ?>
            <tr>
                <td><?php echo $item['mssv'] ?></td>
                <td><?php echo $item['tensv'] ?></td>
                <td>
                    <img src="./image/<?php echo $item['hinh'] ?>" alt="">
                </td>
                <td><?php echo $item['diem'] ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>
