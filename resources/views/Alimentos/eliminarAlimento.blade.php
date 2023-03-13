<!-- Modal -->
<div class="modal fade " id="eliminarAlimento{{ $Alimento->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Alimento</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="container d-flex justify-content-center">
                    <div class="row">
                        <h2>¿Seguro que quieres eliminar {{ $Alimento->descripcion }}?</h2>
                    </div>
                </div>
            </div>
            <form action="{{ route('alimento.destroy', $Alimento->id) }}" method="POST">
                <input type="hidden" name="_method" value="delete" />
                @csrf
                @method('delete')
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>
