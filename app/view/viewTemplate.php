<?php

namespace app\view;

use app\model\Template;

class Exemple
{
    public function show():void
    {
        ob_start();
        ?>
        <?php
        (new Template('Exemple page', ob_get_clean(), 'exemple'))->show();
    }
}