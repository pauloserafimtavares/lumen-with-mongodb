<?php

namespace App\ViewModels\v1;

class ViewModel
{
    public function mapper($attributes) : object
    {
        foreach($attributes as $key => $value)
        {
            $attribute = trim($key);
            $this->$attribute = $value;
        }

        return $this;
    }

}