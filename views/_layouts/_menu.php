<?php

use app\Components\Web\View;

?>


<div class="block__menu">

    <div class="b_menu--wrapper">

        <ul class="b_menu--list">

            <?php foreach (View::$links as $link) : ?>
                <li class="b_menu--item">
                    <a class="b_menu--link" href="<?= $link->href ?>">
                        <?= $link->text ?>
                    </a>
                </li>
            <?php endforeach;?>

        </ul>

    </div>

</div>
