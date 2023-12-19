function cambiar_url(url) {
    let panel = document.getElementById('panel-docente');
    panel.src = url;
}

// Alumno
function panel_principal(id_docente) {
    cambiar_url(`../../../escuela/views/docente/panel-principal.php?${id_docente}`);
}
function ver_perfil(id_docente){
    cambiar_url(`../../../escuela/views/docente/perfil.php?${id_docente}`);
}
function ver_horario(id_docente){
    cambiar_url(`../../../escuela/views/docente/horarios.php?${id_docente}`);
}
function ver_materias(id_docente){
    cambiar_url(`../../../escuela/views/docente/materias.php?${id_docente}`);
}