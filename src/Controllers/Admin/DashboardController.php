<?php

namespace Ducan\Mvcoop\Controllers\Admin;

use Ducan\Mvcoop\Commons\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return $this->renderViewAdmin(__FUNCTION__);
    }
}
