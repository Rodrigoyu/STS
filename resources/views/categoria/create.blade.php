<div class="modal fade" id="createCategoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4">
            
            <div class="modal-header border-0 p-4 pb-0">
                <h5 class="modal-title fw-bold text-dark d-flex align-items-center gap-2">
                    <span class="bg-success bg-opacity-10 text-success rounded-circle d-flex justify-content-center align-items-center" style="width: 40px; height: 40px;">
                        <i class="fas fa-tags"></i>
                    </span>
                    Nova Categoria
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-4">
                <form action="{{ route('cadastraCategoria') }}" method="POST">
                    @csrf
                    
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label text-muted small fw-bold">Nome da Categoria</label>
                            <input type="text" name="nome" class="form-control bg-light border-0" placeholder="Ex: Calçados, Eletrônicos..." required>
                        </div>

                        <div class="col-12">
                            <label class="form-label text-muted small fw-bold">Descrição (Opcional)</label>
                            <textarea name="descricao" class="form-control bg-light border-0" rows="3" placeholder="Breve resumo da categoria..."></textarea>
                        </div>
                    </div>

                    <div class="modal-footer border-0 px-0 pb-0 mt-4">
                        <button type="button" class="btn btn-light text-muted fw-bold" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn text-white fw-bold px-4" style="background-color: var(--primary-green);">
                            <i class="fas fa-save me-2"></i> Salvar Categoria
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>