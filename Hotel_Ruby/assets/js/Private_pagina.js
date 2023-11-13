        document.getElementById("formulario-login").addEventListener("submit", function (event) {
            event.preventDefault();
            // Realiza la verificación de credenciales aquí
            const usuarioValido = true; // Cambia esto según tu lógica de autenticación

            if (usuarioValido) {
                // Establece una marca de inicio de sesión en el almacenamiento de sesión
                sessionStorage.setItem("usuario_iniciado", "true");
                // Redirige al usuario a la página protegida
                window.location.href = "pagina_protegida.html"; // Reemplaza con la URL de tu página protegida
            } else {
                alert("Credenciales incorrectas. Inténtalo de nuevo.");
            }
        });