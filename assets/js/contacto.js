$(document).ready(function() {
    $("#btnComentarios").click(function(e) {
        e.preventDefault();

        var name = $("#nombre").val().trim();
        var email = $("#correo").val().trim();
        var asunt = $("#asunto").val().trim();
        var msg = $("#mensaje").val().trim();

        console.log(name + " " + email + " " + asunt + " " + msg);

        registrarComentario();

    });


    async function registrarComentario() {
        const datos = new FormData(document.getElementById('coment'));

        await fetch('assets/data/contacto.php', {
                method: 'POST',
                body: datos
            })
            .then(response => response.json())
            .then(response => {
                //console.log(response.datos);
                if (response.dato == 'ok') {
                    location.href = "contacto.html";
                } else {
                    alert("Datos no validos, revisa tu información");
                }
            })
            .catch(err => {
                console.log(err);
            });
    }
});