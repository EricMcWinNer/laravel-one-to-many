@extends('layouts.home')

@section('content')
    <div class="container">
        <div class="one-to-many">
            <div class="sidebar">
                <p>Category List</p>
                <a class="{{ !isset($current_category) ? 'selected' : '' }}" href="/">All categories</a>
                @foreach ($categories as $category)
                    <a href="/category/{{ $category->id }}"
                        class="{{ isset($current_category) && $current_category->id === $category->id ? 'selected' : '' }}">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
            <div class="content-wrapper">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-4 mb-3">
                            <div class="product">
                                <div class="badge bg-success nunito">{{ $product->category->name }}</div>
                                <div class="thumbnail">
                                    <img class="product-image" src="/storage/uploads/{{ $product->image }}" />
                                </div>
                                <p class="mt-4">{{ $product->name }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
