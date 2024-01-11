<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MediaCard extends Component
{
    public $media;

    public function __construct($media)
    {
        $this->media = $media;
    }

    public function render()
    {
        return view('components.media-card');
    }
}
