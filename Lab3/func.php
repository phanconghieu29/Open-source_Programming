<?php
function F1()
{
    echo '<h1>Xin chao</h1>';
}

function F2()
{
    $s = "Ham f2<br>";
    $s .= "<h1>Hello</h1>";
    return $s;
}

function F3($n, $s = "Hello")
{
    for($i = 1; $i <= $n ; $i++)
    {
        ?>
        <h2><?php echo $s ?></h2>
        <?php
    }
}

function bcc($n, $c = 'blue')
{
    ?>
    <table bgcolor = '<?php echo $c ?>' border = 1>
        <?php
        for($i = 1; $i <= 10; $i ++)
        {
            ?>
            <tr>
                <td><?php echo $n ?></td>
                <td><?php echo $i ?></td>
                <td><?php echo $n * $i ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
}