<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class maintitle extends Component
{
    public $maintitle;

    /**
     * Create a new component instance.
     */
    public function __construct($maintitle)
    {
        $this->maintitle = $maintitle;
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.maintitle');
    }
}
