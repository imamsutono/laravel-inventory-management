<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductCategoryRequest;
use App\Http\Requests\UpdateProductCategoryRequest;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    public $pageTitle = 'Product Category';

    public function index()
    {
        $pageTitle = $this->pageTitle;
        $query = ProductCategory::query();
        $categories = $query->paginate(10);
        confirmDelete('Deleting product category cannot be undone. Are you sure?');

        return view('product-category.index', compact('pageTitle', 'categories'));
    }

    public function store(StoreProductCategoryRequest $request)
    {
        ProductCategory::create($request->validated());
        toast()->success('Product Category created successfully.');

        return redirect()->route('master.product-category.index');
    }

    public function update(UpdateProductCategoryRequest $request, ProductCategory $productCategory)
    {
        $productCategory->update($request->validated());
        toast()->success('Product Category updated successfully.');

        return redirect()->route('master.product-category.index');
    }

    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->delete();
        toast()->success('Product Category deleted successfully.');

        return redirect()->route('master.product-category.index');
    }
}
