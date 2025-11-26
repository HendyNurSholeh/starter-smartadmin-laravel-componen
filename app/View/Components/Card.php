<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $title = null,
        public ?string $footer = null,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.card');
    }
}
