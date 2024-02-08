<?php

namespace app\controller;
use app\view\Home as HomeView;
class Home
{
    public function execute(): void
    {
        (new HomeView())->show();
    }
}