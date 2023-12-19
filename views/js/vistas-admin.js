

function cambiar_url(url) {
    let panel = document.getElementById('panel-admin');
    panel.src = url;
}

// Administrador
function panel_principal() {
    cambiar_url('../../../escuela/views/admin/panel-principal.php');
}

function ver_alumnos() {
    cambiar_url('../../../escuela/views/admin/crud-alumnos.php');
}

function ver_docentes() {
    cambiar_url('../../../escuela/views/admin/crud-docentes.php');
}

function registrar_docente() {
    cambiar_url('../../../escuela/views/admin/registro-docentes.php');
}

function ver_admin() {
    cambiar_url('../../../escuela/views/admin/crud-admin.php');
}

function registrar_admin() {
    cambiar_url('../../../escuela/views/admin/registro-admin.php');
}

function ver_semestres() {
    cambiar_url('../../../escuela/views/admin/semestres.php');
}

function ver_aulas() {
    cambiar_url('../../../escuela/views/admin/aulas.php');
}

function ver_horarios() {
    cambiar_url('../../../escuela/views/admin/horarios.php');
}
