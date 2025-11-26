<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Panel extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $title = null,
        public ?string $subtitle = null,
        public ?string $id = null,
        public bool $collapsed = false,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.panel');
    }
}
