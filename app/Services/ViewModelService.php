<?php

namespace App\Services;

class ViewModelService
{
    private $viewModel = [];

    public function set($name, $value)
    {
        $this->viewModel[$name] = $value;
    }

    public function get($name, $default = null)
    {
        if (isset($this->viewModel[$name])) {
            return $this->viewModel[$name];
        }
        return $default;
    }

    public function all()
    {
        return $this->viewModel;
    }
}
