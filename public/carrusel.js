const imagenPrincipal = document.getElementById('imagen-principal');

const miniaturas = document.querySelectorAll('.miniatura');

function cambiarImagen(element) {
    imagenPrincipal.src = element.src;

    miniaturas.forEach(miniatura => miniatura.classList.remove('selected'));

    element.classList.add('selected');

    const miniaturaContainer = document.querySelector('.miniaturas');
    miniaturaContainer.scrollLeft = element.offsetLeft - (miniaturaContainer.offsetWidth / 2) + (element.offsetWidth / 2);
}

miniaturas.forEach(miniatura => {
    miniatura.addEventListener('click', function () {
        cambiarImagen(this);
    });
});
