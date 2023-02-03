<!-- Modal -->
<div class="modal fade " id="ingredientesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Alimento</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form" >
                    <div class="input-group mt-2">
                        <span class="input-group-text">Descripción:</span>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>

                    <div class="container d-flex justify-content-center">
                      <div class="row">
                        <div class="form-check mt-2 ml-2">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                              Ingrediente Extra
                          </label>
                        </div>
                        <div class="form-check mt-2">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                              Disponible
                          </label>
                      </div>
                      </div>
                      

                    
                    </div>


                    <div class="input-group mt-2">
                      <span class="input-group-text">Precio de venta $:</span>
                      <textarea class="form-control" aria-label="With textarea"></textarea>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Agregar</button>
            </div>
        </div>
    </div>
</div>
