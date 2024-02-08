<?php

namespace app\controller;
use app\view\Exemple as ExempleView;
class Exemple
{
    public function execute(): void
    {
        (new ExempleView())->show();
    }
}