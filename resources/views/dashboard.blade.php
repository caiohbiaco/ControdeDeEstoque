@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Cabeçalho com Dashboard, Produtos e Sair -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Dashboard</h1>
        <div>
            <!-- Botão de acesso rápido aos produtos -->
            <a href="{{ route('products.index') }}" class="btn btn-primary me-2">
                Produtos
            </a>
            <!-- Botão de logout -->
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-danger">Sair</button>
            </form>
        </div>
    </div>

    <!-- Cards de métricas -->
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Total de Produtos</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $totalProdutos ?? 0 }}</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Valor Total em Estoque</div>
                <div class="card-body">
                    <h5 class="card-title">R$ {{ number_format($valorTotal ?? 0, 2, ',', '.') }}</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">Últimas Transações</div>
                <div class="card-body">
                    <ul>
                        @forelse($ultimas ?? [] as $transacao)
                            <li>{{ $transacao->description ?? 'Sem descrição' }}</li>
                        @empty
                            <li>Nenhuma transação</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Botão flutuante para adicionar produto -->
<a href="{{ route('products.create') }}" 
   class="btn btn-success rounded-circle"
   style="position: fixed; bottom: 30px; right: 30px; width: 60px; height: 60px; display: flex; justify-content: center; align-items: center; font-size: 28px; box-shadow: 0 4px 6px rgba(0,0,0,0.2);">
   +
</a>
@endsection
