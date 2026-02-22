


<div class="modal fade" id="createProductModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4">
            
            <div class="modal-header border-0 p-4 pb-0">
                <h5 class="modal-title fw-bold text-dark d-flex align-items-center gap-2">
                    <span class="bg-success bg-opacity-10 text-success rounded-circle d-flex justify-content-center align-items-center" style="width: 40px; height: 40px;">
                        <i class="fas fa-box"></i>
                    </span>
                    Cadastrar Novo Produto
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body p-4">
                
                <form action="{{ route('cadastraProdutos') }}" method="POST"> @csrf
                    
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label class="form-label text-muted small fw-bold">Nome do Produto</label>
                            <input type="text" name='nome' class="form-control bg-light border-0" placeholder="Ex: Tênis Nike Air Jordan" required>
                        </div>
                        
                        <div class="col-md-6">
                            <label class="form-label text-muted small fw-bold">Categoria</label>
                            
                            <select name="categoria_id" class="form-select">
    <option value="">Selecione uma Categoria</option>
    @foreach($categorias as $cat)
        <option value="{{ $cat->id }}">{{ $cat->nome }}</option>
    @endforeach
</select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-muted small fw-bold">Marca/Fabricante</label>
                            <input type="text" name='marca' class="form-control bg-light border-0" placeholder="Ex: Nike">
                        </div>
                        
                        <div class="col-12"><hr class="text-muted opacity-25"></div>
                        
                        <div class="col-md-6">
                            <label class="form-label text-muted small fw-bold">Preço de Custo (R$)</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-0 text-muted">R$</span>
                                <input type="number" name='preco_custo' step="0.01" class="form-control bg-light border-0" placeholder="0,00">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-muted small fw-bold">Preço de Venda (R$)</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-0 text-muted">R$</span>
                                <input type="number" name='preco_venda' step="0.01" class="form-control bg-light border-0 fw-bold text-dark" placeholder="0,00">
                            </div>
                        </div>
                        
                        <div class="col-12"><hr class="text-muted opacity-25"></div>
                        
                        <!--<div class="col-md-4">
                            <label class="form-label text-muted small fw-bold">SKU (Código)</label>
                            <input type="text" class="form-control bg-light border-0" placeholder="GERADO AUTO">
                        </div>-->
                        
                        <div class="col-md-4">
                            <label class="form-label text-muted small fw-bold">Estoque Inicial</label>
                            <input type="number" name='estoque_atual' class="form-control bg-light border-0" placeholder="0">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label text-muted small fw-bold">Estoque Mínimo</label>
                            <input type="number" name='estoque_minimo' class="form-control bg-light border-0" placeholder="5" title="Avisar quando chegar nesse valor">
                        </div>
                        
                        <div class="col-md-6">
                            <label class="form-label text-muted small fw-bold">Cor</label>
                            <input type="text" name='cor' class="form-control bg-light border-0" placeholder="Ex: Vermelho">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-muted small fw-bold">Tamanho</label>
                            <input type="text" name='tamanho' class="form-control bg-light border-0" placeholder="Ex: G ou 42">
                        </div>

                        <div class="col-12">
                            <label class="form-label text-muted small fw-bold">Descrição (Opcional)</label>
                            <textarea name="descricao" class="form-control bg-light border-0" rows="3" placeholder="Breve resumo da categoria..."></textarea>
                        </div>
                        
                        <!--<div class="col-12 mt-3">
                            <label class="form-label text-muted small fw-bold">Foto do Produto</label>
                            <input type="file" class="form-control bg-light border-0">
                        </div>-->
                    </div>
                    
                    <div class="modal-footer border-0 px-0 pb-0 mt-4">
                        <button type="button" class="btn btn-light text-muted fw-bold" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn text-white fw-bold px-4" style="background-color: var(--primary-green);">
                            <i class="fas fa-save me-2"></i> Salvar Produto
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
