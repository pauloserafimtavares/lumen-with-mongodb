<?php

namespace App\Http\Controllers\v1;

use App\ViewModels\v1\ResultViewModel;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public $result;

    public function __construct()
    {
        $this->result = new ResultViewModel();
    }

    
}
