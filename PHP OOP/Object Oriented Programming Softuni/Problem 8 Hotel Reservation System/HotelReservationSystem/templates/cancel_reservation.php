<?php
foreach ($this->getData as $it) { ?>

    <?php foreach ($it as $k => $v) { ?>
        <?php echo   ' <form method="post" action="">
            <input type="hidden" name="cancel" value="'.$it['id'].'">
            <input type="submit" name="submit" value="Cancel ID:'.$it['id'].'">
            </form>';
        break;
    }
}