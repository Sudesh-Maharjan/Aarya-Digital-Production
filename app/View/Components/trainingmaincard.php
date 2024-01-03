<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class trainingmaincard extends Component
{
    public $trainingcardtitle;
    /**
     * Create a new component instance.
     */
    public function __construct($trainingcardtitle)
    {
        $this->trainingcardtitle = $trainingcardtitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.trainingmaincard');
    }
}
