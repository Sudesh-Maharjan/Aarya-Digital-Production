<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class packagepoints extends Component
{
    public $packagepoint;
    /**
     * Create a new component instance.
     */
    public function __construct($packagepoint)
    {
        $this->packagepoint = $packagepoint;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.packagepoints');
    }
}
