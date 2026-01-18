@extends('layouts.app')

@section('title', 'Create Product')

@section('content')

<h2>Create Product</h2>

<form action="{{ route('produtos.store') }}" method="POST">
    @csrf

    <p>
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <small>{{ $message }}</small>
        @enderror
    </p>

    <p>
        <label>Description</label>
        <textarea name="description">{{ old('description') }}</textarea>
        @error('description')
            <small>{{ $message }}</small>
        @enderror
    </p>

    <p>
        <label>Price</label>
        <input type="number" step="0.01" name="price" value="{{ old('price') }}">
        @error('price')
            <small>{{ $message }}</small>
        @enderror
    </p>

    <p>
        <label>Quantity</label>
        <input type="number" name="quantity" value="{{ old('quantity') }}">
        @error('quantity')
            <small>{{ $message }}</small>
        @enderror
    </p>

    <button type="submit" class="btn btn-primary">💾 Save</button>
    <a href="{{ route('produtos.index') }}" class="btn btn-secondary">⬅ Back</a>
</form>

@endsection
