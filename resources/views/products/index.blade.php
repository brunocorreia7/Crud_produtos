@extends('layouts.app')

@section('title', 'Product List')

@section('content')

<a href="{{ route('produtos.create') }}" class="btn btn-primary">
    ➕ Create new product
</a>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Actions</th>
    </tr>

    @forelse ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>$ {{ number_format($product->price, 2, '.', ',') }}</td>
            <td>{{ $product->quantity }}</td>
            <td>
                <a href="{{ route('produtos.edit', $product->id) }}" class="btn btn-secondary">
                    ✏️ Edit
                </a>

                <form action="{{ route('produtos.destroy', $product->id) }}"
                      method="POST"
                      style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">🗑 Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">No products found.</td>
        </tr>
    @endforelse
</table>

@endsection
