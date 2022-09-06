
function validar_formulario_reclamos() {
    event.preventDefault();
    Swal.fire({
        title: '¿Seguro de enviar el formulario?',
        icon: 'question',
        iconColor: '#a5dc86',
        showCancelButton: true,
        confirmButtonText: 'Si',
        cancelButtonText: 'No',
        confirmButtonColor: '#0d6efd',
        cancelButtonColor: '#6e7881',
    }).then((result) => {
        if (result.value) {
            document.formulario_reclamos.submit();
            
        }
        return false;
    })
    return false;
}


