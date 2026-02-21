<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
{
    public $links;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->links = [
            [
                'name' => 'Dashboard',
                'route' => 'home',
                'is_active' => request()->routeIs('home'),
                'icon' => 'fas fa-home',
                'is_dropdown' => false,
            ],
            [
                'name' => 'Master Data',
                'route' => '#',
                'is_active' => request()->routeIs('master.*'),
                'icon' => 'fas fa-store',
                'is_dropdown' => true,
                'items' => [
                    [
                        'label' => 'Product Category',
                        'route' => 'master.product-category.index',
                    ],
                ],
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar');
    }
}
