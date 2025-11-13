@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Cadastrar Novo Produto</h1>

    {{-- Exibe mensagens de erro --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ops!</strong> Há alguns erros no formulário.<br><br>
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Formulário de criação --}}
    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nome do Produto:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Ex: Notebook Dell" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrição:</label>
            <textarea name="description" id="description" class="form-control" rows="3" placeholder="Descreva o produto"></textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Preço:</label>
            <input type="number" name="price" id="price" class="form-control" placeholder="Ex: 3500.00" step="0.01" min="0" required>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantidade em Estoque:</label>
            <input type="number" name="quantity" id="quantity" class="form-control" placeholder="Ex: 10" min="0" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar Produto</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection
