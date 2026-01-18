@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')

<h2>Edit Product</h2>

<form action="{{ route('produtos.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <p>
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name', $product->name) }}">
    </p>

    <p>
        <label>Description</label>
        <textarea name="description">{{ old('description', $product->description) }}</textarea>
    </p>

    <p>
        <label>Price</label>
        <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}">
    </p>

    <p>
        <label>Quantity</label>
        <input type="number" name="quantity" value="{{ old('quantity', $product->quantity) }}">
    </p>

    <button type="submit" class="btn btn-primary">💾 Update</button>
    <a href="{{ route('produtos.index') }}" class="btn btn-secondary">⬅ Back</a>

</form>

@endsection
