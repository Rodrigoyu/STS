@extends('layouts.mainLayout')

@section('title', 'Visão Geral')

@section('content')
<div class="container-fluid">
    
    <div class="row g-4 mb-4">
        <div class="col-12 col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100 overflow-hidden">
                <div class="card-body p-0 d-flex align-items-center">
                    <div class="bg-success text-white p-4 d-flex align-items-center justify-content-center" style="width: 80px;">
                        <i class="fas fa-box fa-2x"></i>
                    </div>
                    <div class="p-3">
                        <h6 class="text-muted mb-1">Total de Produtos</h6>
                        <h3 class="fw-bold mb-0">1,250</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100 overflow-hidden">
                <div class="card-body p-0 d-flex align-items-center">
                    <div class="bg-warning text-white p-4 d-flex align-items-center justify-content-center" style="width: 80px;">
                        <i class="fas fa-exclamation-triangle fa-2x"></i>
                    </div>
                    <div class="p-3">
                        <h6 class="text-muted mb-1">Estoque Baixo</h6>
                        <h3 class="fw-bold mb-0 text-warning">8</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100 overflow-hidden">
                <div class="card-body p-0 d-flex align-items-center">
                    <div class="bg-primary text-white p-4 d-flex align-items-center justify-content-center" style="width: 80px;">
                        <i class="fas fa-dolly fa-2x"></i>
                    </div>
                    <div class="p-3">
                        <h6 class="text-muted mb-1">Saídas (Mês)</h6>
                        <h3 class="fw-bold mb-0">342</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100 overflow-hidden">
                <div class="card-body p-0 d-flex align-items-center">
                    <div class="bg-info text-white p-4 d-flex align-items-center justify-content-center" style="width: 80px;">
                        <i class="fas fa-money-bill-wave fa-2x"></i>
                    </div>
                    <div class="p-3">
                        <h6 class="text-muted mb-1">Valor Total</h6>
                        <h3 class="fw-bold mb-0">R$ 45k</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0 fw-bold text-secondary">
                <i class="fas fa-history me-2"></i> Últimas Movimentações
            </h5>
            <a href="#" class="btn btn-sm btn-outline-success">Ver Tudo</a>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col" class="ps-4">Produto</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Usuário</th>
                            <th scope="col">Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="ps-4 fw-bold text-dark">Nike Air Jordan (34/Vermelho)</td>
                            <td><span class="badge bg-danger bg-opacity-10 text-danger px-3">Saída</span></td>
                            <td class="fw-bold">- 1</td>
                            <td>Carlos Silva</td>
                            <td class="text-muted">Hoje, 10:30</td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-bold text-dark">Camiseta Básica (M/Branca)</td>
                            <td><span class="badge bg-success bg-opacity-10 text-success px-3">Entrada</span></td>
                            <td class="fw-bold">+ 50</td>
                            <td>Ana Gerente</td>
                            <td class="text-muted">Ontem, 16:45</td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-bold text-dark">Meia Esportiva (Único)</td>
                            <td><span class="badge bg-danger bg-opacity-10 text-danger px-3">Saída</span></td>
                            <td class="fw-bold">- 5</td>
                            <td>Carlos Silva</td>
                            <td class="text-muted">03/01/2026</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="alert alert-info">
    Usuário Logado: {{ Auth::check() ? 'Sim' : 'Não' }} <br>
    ID do Usuário: {{ Auth::id() ?? 'Nenhum ID encontrado' }}
</div>
</div>
@endsection