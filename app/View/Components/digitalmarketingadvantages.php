<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class digitalmarketingadvantages extends Component
{
    public $point;
    public $desc;
    /**
     * Create a new component instance.
     */
    public function __construct($point, $desc)
    {
        $this->point = $point;
        $this->desc = $desc;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.digitalmarketingadvantages');
    }
}
