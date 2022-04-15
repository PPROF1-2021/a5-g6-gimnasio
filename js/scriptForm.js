window.addEventListener('load', inicio);

function inicio() {

    document.getElementById('btn-form').addEventListener('click', llamarOtraPagina);
}

function llamarOtraPagina(e) {
    e.preventDefault();
    window.location = 'form_registro.html';
}