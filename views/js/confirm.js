
function eliminar(e){
    e.preventDefault();
    swal({
        title: "Desea eliminar el registro",
        text: "",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            swal("Registro eliminado!!!", {
                icon: "success",
            })
            .then(() => {
                window.location.href = e.target.href; // Redirecciona a la URL del enlace
            });
            
        } else {
            swal("Se ha cancelado la accion!!!");
        }
    });
}
let linkDelete = document.querySelectorAll(".delete-reg");
for (let i=0; i<linkDelete.length; i++){
    linkDelete[i].addEventListener('click', eliminar);
}

// if(confirm('Desea eliminar el registro?')){
//     return true;
// }
// else{
//     e.preventDefault();
// }