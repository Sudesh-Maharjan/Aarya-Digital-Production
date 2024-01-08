<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class trainingmaincard extends Component
{
    public $trainingcardtitle;
    public $urltraining;
    /**
     * Create a new component instance.
     */
    public function __construct($trainingcardtitle, $urltraining)
    {
        $this->trainingcardtitle = $trainingcardtitle;
        $this->urltraining = $urltraining;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.trainingmaincard');
    }
}
