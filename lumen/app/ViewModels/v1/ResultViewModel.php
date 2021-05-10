<?php

namespace App\ViewModels\v1;

use App\ViewModels\v1\ViewModel;
use Exception;

class ResultViewModel extends ViewModel
{

    public $success;
    public $data;
    public $errors;
    public $warnings;

    public function __construct()
    {
        $this->success = true;
        $this->errors = [];
        $this->warnings = [];
    }

    public function addMessageWarning(string $message): void
    {
        $this->warnings[] = $message;
    }

    public function addException(Exception $e): void
    {
        $this->success = false;
        $this->errors[] = "Ocorreu uma falha no arquivo {$e->getFile()} na linha {$e->getLine()}, {$e->getMessage()}";
    }

    public function addMessageError(string $error): void
    {
        $this->errors[] = $error;
        $this->success = false;
    }
}
