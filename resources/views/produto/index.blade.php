@extends('layouts.mainLayout')

@section('title', 'Gerenciar Produtos')

@section('content')
<div class="container-fluid">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4 gap-3">
        
        <div class="d-flex gap-2 w-100" style="max-width: 500px;">
            <div class="input-group shadow-sm">
                <span class="input-group-text bg-white border-end-0 text-muted ps-3">
                    <i class="fas fa-search"></i>
                </span>
                <input type="text" class="form-control border-start-0 ps-0" placeholder="Buscar por nome, SKU ou cor...">
            </div>
            <button class="btn btn-white bg-white border shadow-sm text-muted" title="Filtros Avançados">
                <i class="fas fa-filter"></i>
            </button>
        </div>

        <button type="button" class="btn text-white fw-bold shadow-sm d-flex align-items-center gap-2 px-4 py-2" 
   style="background-color: var(--primary-green); border-radius: 30px; border: none;"
   data-bs-toggle="modal" 
   data-bs-target="#createProductModal">
    <i class="fas fa-plus"></i> Novo Produto
</button>
    </div>

    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0" style="min-width: 800px;">
                    <thead class="bg-light">
                        <tr class="text-muted text-uppercase" style="font-size: 0.8rem; letter-spacing: 0.5px;">
                            <th class="ps-4 py-3 border-0">Produto</th>
                            <th class="py-3 border-0">Categoria</th>
                            <th class="py-3 border-0">Preço (Venda)</th>
                            <th class="py-3 border-0 text-center">Estoque</th>
                           
                            <th class="pe-4 py-3 border-0 text-end">Ações</th>
                        </tr>
                    </thead>
                    @foreach ($produto as $pro )
                    
                    
                    <tbody>
                        <tr class="border-bottom border-light">
                            <td class="ps-4 py-3">
                                <div class="d-flex align-items-center gap-3">
                                    
                                    <div>
                                        <h6 class="mb-0 fw-bold text-dark">{{$pro->nome}}</h6>
                                        <!--<small class="text-muted" style="font-size: 0.75rem;">SKU: NK-AIR-001</small>-->
                                    </div>
                                </div>
                            </td>
                            @foreach ($pro->variante as $variante )
                                <td><span class="badge bg-light text-secondary border">cal</span></td>
                                <td class="fw-bold text-dark">{{$variante->preco_venda}}</td>
                                <td class="text-center">
                                    <span class="fw-bold">{{$variante->estoque_atual}}</span> <small class="text-muted">un</small>
                                </td>
                                @endforeach
                                
                                <td class="pe-4 text-end">
                                    <button class="btn btn-sm btn-light text-muted border-0 me-1" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <a class="btn btn-sm btn-light text-danger border-0" href="{{ route('deleteProduto') }}" title="Excluir">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>

            <div class="d-flex justify-content-between align-items-center px-4 py-3 bg-light border-top">
                <small class="text-muted">Mostrando <strong>1-3</strong> de <strong>120</strong> itens</small>
                <nav>
                    <ul class="pagination pagination-sm mb-0 border-0">
                        <li class="page-item disabled"><a class="page-link border-0 bg-transparent" href="#">Ant</a></li>
                        <li class="page-item active"><a class="page-link border-0 bg-white text-dark shadow-sm rounded-circle mx-1" href="#">1</a></li>
                        <li class="page-item"><a class="page-link border-0 bg-transparent text-muted" href="#">2</a></li>
                        <li class="page-item"><a class="page-link border-0 bg-transparent text-muted" href="#">3</a></li>
                        <li class="page-item"><a class="page-link border-0 bg-transparent" href="#">Prox</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>


<!-- formulario de cadastro de produto-->
@include('produto.create')

@endsection