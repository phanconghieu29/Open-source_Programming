<style>
    .bcc {
        width: 120px;
        float: left;
        margin-top: 30px;
    }
</style>

<?php
include "func.php";

for($i = 1; $i <= 10; $i++)
{
    ?>
        <div class="bcc">
            <?php bcc($i, rand(0, 255).rand(0, 255).rand(0, 255)); ?>+
        </div>
    <?php
}