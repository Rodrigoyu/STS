@extends('layouts.mainLayout')

@section('title', 'Categorias')

@section('content')
<div class="container-fluid">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4 gap-3">
        <div class="d-flex gap-2 w-100" style="max-width: 400px;">
            <div class="input-group shadow-sm">
                <span class="input-group-text bg-white border-end-0 text-muted ps-3">
                    <i class="fas fa-search"></i>
                </span>
                <input type="text" class="form-control border-start-0 ps-0" placeholder="Buscar categoria...">
            </div>
        </div>

        <a href="#" class="btn text-white fw-bold shadow-sm d-flex align-items-center gap-2 px-4 py-2" 
           style="background-color: var(--primary-green); border-radius: 30px;">
            <i class="fas fa-plus"></i> Nova Categoria
        </a>
    </div>

    <div class="row g-4">
        
        <div class="col-md-6 col-xl-4">
            <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden group-hover-effect">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-light d-flex justify-content-center align-items-center text-success" 
                                 style="width: 50px; height: 50px; font-size: 1.2rem;">
                                <i class="fas fa-tshirt"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-dark mb-0">Roupas</h5>
                                <small class="text-muted">Principal</small>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-light text-muted rounded-circle" type="button" data-bs-toggle="dropdown">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end border-0 shadow">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2 text-primary"></i> Editar</a></li>
                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt me-2"></i> Excluir</a></li>
                            </ul>
                        </div>
                    </div>

                    <p class="text-muted small mb-4 line-clamp-2">
                        Camisetas, calças, casacos e vestuário em geral para todos os gêneros.
                    </p>

                    <div class="bg-light rounded-3 p-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-muted small fw-bold">Produtos Vinculados</span>
                            <span class="badge bg-white text-dark border shadow-sm rounded-pill px-3">120 Itens</span>
                        </div>
                        <hr class="my-2 text-muted opacity-25">
                        <div class="d-flex flex-wrap gap-1 mt-2">
                            <span class="badge bg-white border text-muted fw-normal rounded-pill">Camisetas</span>
                            <span class="badge bg-white border text-muted fw-normal rounded-pill">Calças Jeans</span>
                            <span class="badge bg-white border text-muted fw-normal rounded-pill">+3</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer p-0 border-0 bg-success" style="height: 4px;"></div>
            </div>
        </div>

        <div class="col-md-6 col-xl-4">
            <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-light d-flex justify-content-center align-items-center text-primary" 
                                 style="width: 50px; height: 50px; font-size: 1.2rem;">
                                <i class="fas fa-shoe-prints"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-dark mb-0">Calçados</h5>
                                <small class="text-muted">Principal</small>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-light text-muted rounded-circle" type="button" data-bs-toggle="dropdown">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end border-0 shadow">
                                <li><a class="dropdown-item" href="#">Editar</a></li>
                                <li><a class="dropdown-item text-danger" href="#">Excluir</a></li>
                            </ul>
                        </div>
                    </div>

                    <p class="text-muted small mb-4">
                        Tênis esportivos, sapatos sociais, sandálias e botas.
                    </p>

                    <div class="bg-light rounded-3 p-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-muted small fw-bold">Produtos Vinculados</span>
                            <span class="badge bg-white text-dark border shadow-sm rounded-pill px-3">45 Itens</span>
                        </div>
                        <hr class="my-2 text-muted opacity-25">
                        <div class="d-flex flex-wrap gap-1 mt-2">
                            <span class="badge bg-white border text-muted fw-normal rounded-pill">Nike</span>
                            <span class="badge bg-white border text-muted fw-normal rounded-pill">Adidas</span>
                            <span class="badge bg-white border text-muted fw-normal rounded-pill">Social</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer p-0 border-0 bg-primary" style="height: 4px;"></div>
            </div>
        </div>

        <div class="col-md-6 col-xl-4">
            <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-light d-flex justify-content-center align-items-center text-warning" 
                                 style="width: 50px; height: 50px; font-size: 1.2rem;">
                                <i class="fas fa-stopwatch"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-dark mb-0">Acessórios</h5>
                                <small class="text-muted">Principal</small>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-light text-muted rounded-circle" type="button" data-bs-toggle="dropdown">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end border-0 shadow">
                                <li><a class="dropdown-item" href="#">Editar</a></li>
                                <li><a class="dropdown-item text-danger" href="#">Excluir</a></li>
                            </ul>
                        </div>
                    </div>

                    <p class="text-muted small mb-4">
                        Relógios, pulseiras, bonés e outros itens complementares.
                    </p>

                    <div class="bg-light rounded-3 p-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-muted small fw-bold">Produtos Vinculados</span>
                            <span class="badge bg-white text-dark border shadow-sm rounded-pill px-3">8 Itens</span>
                        </div>
                        <hr class="my-2 text-muted opacity-25">
                        <div class="d-flex flex-wrap gap-1 mt-2">
                            <span class="badge bg-white border text-muted fw-normal rounded-pill">Relógios</span>
                            <span class="badge bg-white border text-muted fw-normal rounded-pill">Bonés</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer p-0 border-0 bg-warning" style="height: 4px;"></div>
            </div>
        </div>

    </div>
</div>
@endsection