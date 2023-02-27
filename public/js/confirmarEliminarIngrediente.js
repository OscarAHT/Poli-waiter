Swal.fire({
    title: '¿Seguro que quieres eliminar este ingrediente?',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Cancelar',
    denyButtonText: `Eliminar`,
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      Swal.fire('Se ha eliminado el ingrediente!', '', 'success')
    } else if (result.isDenied) {
      Swal.fire('No se han realizado cambios', '', 'info')
    }
  })