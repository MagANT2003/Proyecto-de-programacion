// Validación del formulario de contacto
document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('contactForm');
    form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add('was-validated');
    }, false);
});

//Galeria
document.addEventListener('DOMContentLoaded', (event) => {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');

    document.querySelectorAll('.img-modal-trigger').forEach(img => {
        img.addEventListener('click', function() {
            const src = this.src;
            modalImage.src = src;
            $(modal).modal('show');
        });
    });
});



