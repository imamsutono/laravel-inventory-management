<?php

namespace App\View\Components\productCategory;

use App\Models\ProductCategory;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductCategoryForm extends Component
{
    public $id;

    public $name;

    public $action;

    /**
     * Create a new component instance.
     */
    public function __construct($id = null)
    {
        if ($id) {
            $this->id = $id;
            $this->name = ProductCategory::findOrFail($id)->name;
            $this->action = route('master.product-category.update', $id);
        } else {
            $this->action = route('master.product-category.store');
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-category.product-category-form');
    }
}
