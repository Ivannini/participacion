<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    //otra forma de definir la propiedad
    //public $titulo;
    /**
     * Create a new component instance.
     */
    public function __construct(public string $titulo)
    {
        //otro forma de definir la propiedad
        //$this->titulo = $titulo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
