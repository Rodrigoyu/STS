@extends('layouts.mainLayout')

@section('title', 'Gerenciar Usuários')

@section('content')
<div class="container-fluid">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4 gap-3">
        <div class="d-flex gap-2 w-100" style="max-width: 550px;">
            <div class="input-group shadow-sm">
                <span class="input-group-text bg-white border-end-0 text-muted ps-3">
                    <i class="fas fa-search"></i>
                </span>
                <input type="text" class="form-control border-start-0 ps-0" placeholder="Nome ou e-mail...">
            </div>
            
            <select class="form-select shadow-sm text-muted" style="max-width: 150px;">
                <option selected>Todas Funções</option>
                <option value="admin">Admin</option>
                <option value="gerente">Gerente</option>
                <option value="vendedor">Vendedor</option>
            </select>
        </div>

        <a href="#" class="btn text-white fw-bold shadow-sm d-flex align-items-center gap-2 px-4 py-2" 
           style="background-color: var(--primary-green); border-radius: 30px;">
            <i class="fas fa-user-plus"></i> Novo Usuário
        </a>
    </div>

    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr class="text-muted text-uppercase" style="font-size: 0.75rem; letter-spacing: 0.5px;">
                            <th class="ps-4 py-3 border-0">Usuário</th>
                            <th class="py-3 border-0">Função</th>
                            <th class="py-3 border-0">Status</th>
                            <th class="py-3 border-0">Cadastro</th>
                            <th class="pe-4 py-3 border-0 text-end">Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="border-bottom border-light">
                            <td class="ps-4 py-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="rounded-circle bg-success text-white d-flex justify-content-center align-items-center shadow-sm" 
                                         style="width: 45px; height: 45px; font-weight: bold; font-size: 1.1rem;">
                                        RO
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-0 fw-bold text-dark">Rodrigo Oliveira</h6>
                                        <small class="text-muted">rodrigo@admin.com</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-dark text-white px-3 py-2 rounded-pill fw-normal">
                                    <i class="fas fa-shield-alt me-1 text-warning"></i> Administrador
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="rounded-circle bg-success" style="width: 10px; height: 10px;"></span>
                                    <span class="text-success fw-bold small">Ativo</span>
                                </div>
                            </td>
                            <td class="text-muted small">
                                01 jan, 2026
                            </td>
                            <td class="pe-4 text-end">
                                <button class="btn btn-sm btn-light text-muted border-0 me-1" title="Editar">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                                <button class="btn btn-sm btn-light text-warning border-0" title="Bloquear Acesso">
                                    <i class="fas fa-ban"></i>
                                </button>
                            </td>
                        </tr>

                        <tr class="border-bottom border-light">
                            <td class="ps-4 py-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="rounded-circle bg-light d-flex justify-content-center align-items-center shadow-sm" 
                                         style="width: 45px; height: 45px; background-image: url('https://placehold.co/100'); background-size: cover;">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-0 fw-bold text-dark">Ana Silva</h6>
                                        <small class="text-muted">ana.gerente@loja.com</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-normal border border-primary border-opacity-10">
                                    Gerente
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="rounded-circle bg-success" style="width: 10px; height: 10px;"></span>
                                    <span class="text-success fw-bold small">Ativo</span>
                                </div>
                            </td>
                            <td class="text-muted small">
                                15 dez, 2025
                            </td>
                            <td class="pe-4 text-end">
                                <button class="btn btn-sm btn-light text-muted border-0 me-1">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                                <button class="btn btn-sm btn-light text-warning border-0">
                                    <i class="fas fa-ban"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td class="ps-4 py-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="rounded-circle bg-secondary bg-opacity-25 text-secondary d-flex justify-content-center align-items-center" 
                                         style="width: 45px; height: 45px; font-weight: bold;">
                                        CJ
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-0 fw-bold text-muted">Carlos Junior</h6>
                                        <small class="text-muted">carlos.vendas@loja.com</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-light text-secondary border px-3 py-2 rounded-pill fw-normal">
                                    Vendedor
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="rounded-circle bg-secondary" style="width: 8px; height: 8px;"></span>
                                    <span class="text-muted small">Inativo</span>
                                </div>
                            </td>
                            <td class="text-muted small">
                                20 nov, 2025
                            </td>
                            <td class="pe-4 text-end">
                                <button class="btn btn-sm btn-light text-muted border-0 me-1">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                                <button class="btn btn-sm btn-light text-danger border-0" title="Excluir">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            
            <div class="d-flex justify-content-between align-items-center px-4 py-3 bg-white border-top">
                <small class="text-muted">Mostrando <strong>3</strong> usuários</small>
                <nav>
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled"><a class="page-link border-0" href="#">&laquo;</a></li>
                        <li class="page-item active"><a class="page-link bg-success border-success" href="#">1</a></li>
                        <li class="page-item"><a class="page-link border-0 text-muted" href="#">2</a></li>
                        <li class="page-item"><a class="page-link border-0 text-muted" href="#">&raquo;</a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</div>
@endsection