<?php 

namespace Ducan\Mvcoop\Commons;

use eftec\bladeone\BladeOne;

class Controller
{
    public function renderViewClient($view, $data = []) {
        $templatePath = __DIR__ . '/../Views/Client';

        $blade = new BladeOne($templatePath);

        echo $blade->run($view, $data);
    }

    public function renderViewAdmin($view, $data = []) {
        $templatePath = __DIR__ . '/../Views/Admin';

        $blade = new BladeOne($templatePath);

        echo $blade->run($view, $data);
    }
}

