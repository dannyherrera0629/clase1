<!DOCTYPE html>
<html>
<head>
    <title>MAPIFIP3D</title>
    <link href="{{ asset('css/styleinicio.css') }}" rel="stylesheet">
    <style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Cambiado a 100vh para ocupar toda la altura de la ventana */
        }
       
        .header {
            position: fixed; /* Fijar en la parte inferior */
            bottom: 0; /* Alineado en la parte inferior */
            width: 100%;
            background-color: rgba(255, 255, 255, 0.2); /* Fondo semitransparente */
            padding: 10px;
            box-sizing: border-box; /* Incluir padding en el tamaño */
            text-align: center;
            z-index: 1; /* Asegura que el menú esté encima de otros elementos */
        }

         .main {
            margin-top: auto; /* Cambiado */
            margin-bottom: 20px; /* Agregado */
            text-align: center;
            position: relative; /* Añadido para alinear el contenido con el menú */
            z-index: 2; /* Asegura que el contenido esté encima del menú */
        }

        .inicio-form {
            text-align: center;
        }
    </style>
</head>
<body>

<form action="{{ route('inicio.registrar') }}" method="POST">
    @csrf
    <!-- Agrega aquí tus campos de formulario -->
   


    <div class="main">
        <div class="inicio-form">
                <form id="inicioForm">
                <label for="password">DIGITE SU NUMERO DE IDENTIDAD</label>
                <input type="password" id="password" name="password" required>
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Recuérdame</label>
                <button type="submit">INICIO MAPIFIP3D</button>
                <a href="#">¿NO ESTAS REGISTRADO?</a>
                <a href="#">REGISTRATE EN EL BOTON DE LA PARTE DE ABAJO</a>
               
                <button type="submit">REGISTRARSE MAPIFIP 3D</button>
            </form>
        </div>
    </div>
    
</body>
</html>