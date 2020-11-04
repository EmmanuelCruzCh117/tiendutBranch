$(document).ready(function() {
    $("#btnResgister").click(function(e) {
        e.preventDefault();

        var user = $("#newUser").val().trim();
        var pass = $("#newPassword").val().trim();
        var email = $("#newEmail").val().trim();
        var addres = $("#newAdress").val().trim();
        var tel = $("#newPhone").val().trim();
        var name = $("#newName").val().trim();
        console.log(user + " " + pass + " " + email + " " + addres + " " + tel + " " + name);

        registrarDato();

    });


    async function registrarDato() {
        const datos = new FormData(document.getElementById('register'));

        await fetch('assets/data/registro.php', {
                method: 'POST',
                body: datos
            })
            .then(response => response.json())
            .then(response => {
                //console.log(response.datos);
                if (response.dato == 'ok') {
                    location.href = "index.html";
                } else {
                    alert("Datos no validos, revisa tu información");
                }
            })
            .catch(err => {
                console.log(err);
            });
    }
});