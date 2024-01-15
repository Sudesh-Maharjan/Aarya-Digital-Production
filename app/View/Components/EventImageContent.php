<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EventImageContent extends Component
{
   
    public $description;
    public $image;

    /**
     * Create a new component instance.
     */
    public function __construct( $description, $image)
    {
        
        $this->description = $description;
        $this->image = $image;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.event-image-content');
    }
}
