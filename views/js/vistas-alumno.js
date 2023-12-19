function cambiar_url(url) {
    let panel = document.getElementById('panel-alumno');
    panel.src = url;
}

// Alumno
function panel_principal(id_alumno) {
    cambiar_url(`../../../escuela/views/alumno/panel-principal.php?${id_alumno}`);
}
function ver_perfil(id_alumno){
    cambiar_url(`../../../escuela/views/alumno/perfil.php?${id_alumno}`);
}
function ver_horario(id_alumno){
    cambiar_url(`../../../escuela/views/alumno/horarios.php?${id_alumno}`);
}
function ver_calificaciones(id_alumno){
    cambiar_url(`../../../escuela/views/alumno/calificaciones.php?${id_alumno}`);
}