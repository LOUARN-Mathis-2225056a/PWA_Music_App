<?php

namespace app\view;

use app\model\Template;

class Home
{
    public function show():void
    {
        ob_start();
        ?>
        <input
                type="file"
                id="fileElem"
                multiple
                accept="audio/*"
                style="display:none" />
        <a href="" id="fileSelect">Select some files</a>
        <div id="fileList">
            <p>No files selected!</p>
        </div>
        <script src="/assets/javascript/importMusic.js"></script>
        <?php
        (new Template('Home', ob_get_clean(), 'home'))->show();
    }
}