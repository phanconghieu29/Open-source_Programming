<?php
$m2 = [
    ['id'=>1, 'name'=> 'Dog', 'img'=>'h1.jpg'],
    ['id'=>2, 'name'=> 'Cat', 'img'=>'h2.jpg'],
    ['id'=>3, 'name'=> 'Rabbit', 'img'=>'h3.jpg']
];
?>
<style>
    td img{
        width: 120px;
    }
</style>
<table>
    <?php
    foreach($m2 as $k => $item)
    {
        ?>
        <tr>
            <td><?php echo $item['id']?></td>
            <td><?php echo $item['name']?></td>
            <td>
                <img src=".img/<?php echo $item['img']?>">
            </td>
        </tr>
        <?php
    }
    ?>
</table>