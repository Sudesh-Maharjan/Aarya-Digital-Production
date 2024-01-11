<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MediaMenus extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;

    public function __construct($title)
    {
        $this->title = $title;
    }


    public function render(): View|Closure|string
    {
        return view('components.media-menus');
    }
}
