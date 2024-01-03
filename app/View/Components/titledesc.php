<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class titledesc extends Component
{
    public $titledesc;
    /**
     * Create a new component instance.
     */
    public function __construct($titledesc)
    {
        $this->titledesc = $titledesc;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.titledesc');
    }
}
