@extends('layouts.app')

@section('title', 'Product Details')

@section('content')

<h2>Product Details</h2>

<p><strong>ID:</strong> {{ $product->id }}</p>
<p><strong>Name:</strong> {{ $product->name }}</p>
<p><strong>Description:</strong> {{ $product->description }}</p>
<p><strong>Price:</strong> $ {{ number_format($product->price, 2, '.', ',') }}</p>
<p><strong>Quantity:</strong> {{ $product->quantity }}</p>

<a href="{{ route('produtos.index') }}" class="btn btn-secondary">⬅ Back</a>
<a href="{{ route('produtos.edit', $product->id) }}" class="btn btn-primary">✏️ Edit</a>

@endsection
