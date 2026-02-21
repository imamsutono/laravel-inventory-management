@extends('layouts.kai')

@section('page_title', $pageTitle)

@section('content')
    <div class="card">
        <div class="card-body p-5">
            <div>
                <x-product-category.product-category-form />
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 15px;">No</th>
                        <th>Category</th>
                        <th class="text-center" style="width: 100px;">Option</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $index => $category)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-product-category.product-category-form :id="$category->id" />
                                    <x-confirm-delete :id="$category->id" route="master.product-category.destroy" />
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">No data found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
