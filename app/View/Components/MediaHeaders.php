<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MediaHeaders extends Component
{
    public $active;

    public function __construct($active)
    {
        $this->active = $active;
    }

    public function render()
    {
        return view('components.media-headers');
    }
}
