<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AdminLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $title = 'SmartAdmin',
        public ?string $pageTitle = null,
        public ?string $breadcrumb1 = null,
        public ?string $breadcrumb2 = null,
        public ?string $breadcrumb3 = null,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.admin-layout');
    }
}
