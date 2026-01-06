@extends('layouts.mainLayout')

@section('title', 'Histórico de Movimentações')

@section('content')
<div class="container-fluid">

    <div class="row mb-4 g-3">
        <div class="col-md-6 col-lg-3">
            <div class="card border-0 shadow-sm rounded-4 p-3 d-flex flex-row align-items-center gap-3">
                <div class="rounded-circle bg-success bg-opacity-10 p-3 text-success">
                    <i class="fas fa-arrow-down fa-lg"></i>
                </div>
                <div>
                    <small class="text-muted text-uppercase fw-bold" style="font-size: 0.7rem;">Entradas (Hoje)</small>
                    <h4 class="fw-bold mb-0 text-dark">+ 150</h4>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card border-0 shadow-sm rounded-4 p-3 d-flex flex-row align-items-center gap-3">
                <div class="rounded-circle bg-danger bg-opacity-10 p-3 text-danger">
                    <i class="fas fa-arrow-up fa-lg"></i>
                </div>
                <div>
                    <small class="text-muted text-uppercase fw-bold" style="font-size: 0.7rem;">Saídas (Hoje)</small>
                    <h4 class="fw-bold mb-0 text-dark">- 32</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm rounded-4 mb-4">
        <div class="card-body p-3">
            <form class="row g-3 align-items-end">
                <div class="col-md-4">
                    <label class="form-label text-muted small fw-bold">Buscar Produto</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-0"><i class="fas fa-search text-muted"></i></span>
                        <input type="text" class="form-control bg-light border-0" placeholder="Nome, SKU...">
                    </div>
                </div>
                
                <div class="col-md-3">
                    <label class="form-label text-muted small fw-bold">Data</label>
                    <input type="date" class="form-control bg-light border-0 text-muted">
                </div>

                <div class="col-md-3">
                    <label class="form-label text-muted small fw-bold">Tipo</label>
                    <select class="form-select bg-light border-0 text-muted">
                        <option selected>Todos</option>
                        <option value="entrada">Entrada</option>
                        <option value="saida">Saída</option>
                    </select>
                </div>

                <div class="col-md-2 d-grid">
                    <button type="button" class="btn btn-primary fw-bold text-white shadow-sm" style="background-color: var(--primary-green); border: none;">
                        Filtrar
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr class="text-muted text-uppercase" style="font-size: 0.75rem; letter-spacing: 0.5px;">
                            <th class="ps-4 py-3 border-0">Data/Hora</th>
                            <th class="py-3 border-0">Produto / Variação</th> <th class="py-3 border-0 text-center">Tipo</th>
                            <th class="py-3 border-0 text-center">Qtd.</th>
                            <th class="py-3 border-0">Motivo</th>
                            <th class="py-3 border-0">Responsável</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr class="border-bottom border-light">
                            <td class="ps-4 py-3">
                                <span class="fw-bold text-dark d-block">05/01/2026</span>
                                <small class="text-muted">14:30</small>
                            </td>
                            <td>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-0 fw-bold text-dark" style="font-size: 0.95rem;">Nike Air Jordan 1</h6>
                                    <small class="text-muted" style="font-size: 0.8rem;">
                                        <i class="fas fa-tag me-1 text-light-green"></i> Vermelho / Tamanho 40
                                    </small>
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-2 rounded-pill border border-danger border-opacity-10">
                                    <i class="fas fa-arrow-up me-1"></i> Saída
                                </span>
                            </td>
                            <td class="text-center">
                                <span class="fw-bold text-danger fs-6">- 1</span>
                            </td>
                            <td>
                                <span class="text-dark small"><i class="fas fa-shopping-cart text-muted me-1"></i> Venda #1023</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <div class="rounded-circle bg-secondary text-white d-flex justify-content-center align-items-center small" style="width: 25px; height: 25px;">R</div>
                                    <span class="text-muted small">Rodrigo</span>
                                </div>
                            </td>
                        </tr>

                        <tr class="border-bottom border-light">
                            <td class="ps-4 py-3">
                                <span class="fw-bold text-dark d-block">04/01/2026</span>
                                <small class="text-muted">09:15</small>
                            </td>
                            <td>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-0 fw-bold text-dark" style="font-size: 0.95rem;">Camiseta Básica</h6>
                                    <small class="text-muted" style="font-size: 0.8rem;">
                                        <i class="fas fa-tag me-1 text-light-green"></i> Branca / M
                                    </small>
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill border border-success border-opacity-10">
                                    <i class="fas fa-arrow-down me-1"></i> Entrada
                                </span>
                            </td>
                            <td class="text-center">
                                <span class="fw-bold text-success fs-6">+ 50</span>
                            </td>
                            <td>
                                <span class="text-dark small"><i class="fas fa-truck text-muted me-1"></i> Fornecedor ABC</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <div class="rounded-circle bg-info text-white d-flex justify-content-center align-items-center small" style="width: 25px; height: 25px;">A</div>
                                    <span class="text-muted small">Admin</span>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="ps-4 py-3">
                                <span class="fw-bold text-dark d-block">03/01/2026</span>
                                <small class="text-muted">18:00</small>
                            </td>
                            <td>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-0 fw-bold text-dark" style="font-size: 0.95rem;">Relógio Digital</h6>
                                    <small class="text-muted" style="font-size: 0.8rem;">
                                        <i class="fas fa-tag me-1 text-light-green"></i> Preto / Único
                                    </small>
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-2 rounded-pill border border-danger border-opacity-10">
                                    <i class="fas fa-arrow-up me-1"></i> Saída
                                </span>
                            </td>
                            <td class="text-center">
                                <span class="fw-bold text-danger fs-6">- 1</span>
                            </td>
                            <td>
                                <span class="text-danger small fw-bold"><i class="fas fa-exclamation-circle me-1"></i> Avaria/Perda</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <div class="rounded-circle bg-secondary text-white d-flex justify-content-center align-items-center small" style="width: 25px; height: 25px;">R</div>
                                    <span class="text-muted small">Rodrigo</span>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
</div>
@endsection