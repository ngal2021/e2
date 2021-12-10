@extends('templates/master')

@section('title')
    New Product
@endsection

@section('head')
    <link href='/css/products/new.css' rel='stylesheet'>

@section('content')

    @if ($productSaved)
        <div test='new-confirmation' class='alert alert-succes'>Thank you, your product was added! <a
                href='/product?sku={{ $sku }}'>You
                can view it here.</a></div>
    @endif

    @if ($app->errorsExist())
        <div class='alert alert-danger'>Please correct the errors below</div>
    @endif

    <form method='POST' id='product-new' action='/products/save'>
        <h3>New Product Information</h3>
        <div class='form-group'>
            <label for='name'>Name</label>
            <input type='text' class='form-control' name='name' id='name' value='{{ $app->old('name') }}'>
        </div>
        <div class='form-group'>
            <label for='sku'>Sku</label>
            <input type='text' class='form-control' name='sku' id='sku' value='{{ $app->old('sku') }}'>
            <div>Only numbers, letters, dashes, and/or underscores.</div>
        </div>
        <div class='form-group'>
            <label for='description'>Description</label>
            <input test='description-textarea' type='text' class='form-control' name='description' id='description'
                value='{{ $app->old('description') }}'>
        </div>
        <div class='form-group'>
            <label for='price'>Price</label>
            <input type='number' class='form-control' name='price' id='price' value='{{ $app->old('price') }}'>
        </div>
        <div class='form-group'>
            <label for='available'>Available</label>
            <input type='radio' class='form-control' name='available' id='available' value='true'>
        </div>
        <div class='form-group'>
            <label for='weight'>Weight</label>
            <input type='number' class='form-control' name='weight' id='weight' value='{{ $app->old('weight') }}'>>
        </div>
        <div class='form-group'>
            <label for='available'>Perishable</label>
            <input type='radio' class='form-control' name='available' id='available' value='true'>
        </div>

        <button type='submit' class='btn btn-primary'>Submit Product</button>

        @if ($app->errorsExist())
            <ul class='error alert alert-danger'>
                @foreach ($app->errors() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <a href='/products'>&larr; Return to all products</a>
    @endsection
