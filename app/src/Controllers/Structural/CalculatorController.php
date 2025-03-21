<?php

namespace App\Controllers\Structural;

use App\Controllers\AbstractController;

use App\Patterns\Structural\Facade\CalculatorFacade;
use App\Views\CalculatorView;

class CalculatorController extends AbstractController
{
    public static $name = 'Calculator';

    public function index(): void
    {
        parent::index();

        $calculator = new CalculatorFacade(CalculatorFacade::getAvailableCalculators()[0]);

        if (!empty($this->getPostData("operation")) && !empty($this->getPostData("input-a"))
                && !empty($this->getPostData("input-b"))) {
            $result = $calculator->doOperation(
                $this->getPostData("operation"),
                $this->getPostData("input-a"),
                $this->getPostData("input-b")
            );
        } else {
            $result = "data is not provided";
        }

        $view = new CalculatorView($calculator->getAvailableOperations(), $result);
        $view->render();

        parent::footer();
    }

    private function getPostData($key = null)
    {
        if (!is_null($key)) {
            return $this->post[$key] ?? '';
        }
        return $this->post["operation"] ?? [];
    }
}
