@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Editar Produto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nome do Produto:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrição:</label>
            <textarea name="description" id="description" class="form-control" rows="3">{{ $product->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Preço:</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}" step="0.01" required>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantidade em Estoque:</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $product->quantity }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Produto</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection
