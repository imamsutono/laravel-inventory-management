<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FilterByField extends Component
{
    public $term;

    public $placeholder;

    /**
     * Create a new component instance.
     */
    public function __construct($term, $placeholder = 'Search ...')
    {
        $this->term = $term;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.filter-by-field');
    }
}
