<!DOCTYPE html>
<html lang="es">
<head>
    <style>
  
        body {          
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column; /* Cambia la dirección del flujo a vertical */
            align-items: center; /* Centra horizontalmente */
            justify-content: center; /* Centra verticalmente */
            height: 100vh;
            background-color: #f2f2f2;
           
        

        #text-container {
            margin-top: 20px; /* Espacio superior para separar del borde superior */
            text-align: center; /* Centra horizontalmente el texto */
        }

        h1 {
            font-size: 30px; /* Tamaño de fuente grande para el título */
            margin-bottom: 10px; /* Espacio inferior para separar del subtítulo */
        }

        h2 {
            font-size: 30px; /* Tamaño de fuente grande para el subtítulo */
            margin-bottom: 50px; /* Espacio inferior para separar del contenedor de botones */
        }

        /*///////////////////////////////////////////////////////////////////////////////////*/


/* Estilos básicos de los botones */

/* Estilos para el botón de estudiante */
.estudiante-button {
    /* Estilos específicos para el botón de estudiante */
    .button {
    width: 100px;
    height: 100px;
    margin: 30px;
    font-size: 25px; /* Tamaño de fuente para los botones */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border: 2px solid red; /* Esto aplicará un borde sólido de 2 píxeles de ancho y rojo */
    cursor: pointer;
    position: relative; /* Para posicionar el texto de manera absoluta */
}

.button img {
    width: 50px; /* Tamaño de la imagen */
    height: 50px; /* Tamaño de la imagen */
}

.button span {
    position: absolute;
    bottom: 10px; /* Coloca el texto 10px por encima del borde inferior del botón */
}

/* Estilo para el contenedor de botones */
#center-buttons-container {
    display: flex;
    justify-content: center; /* Centra los botones horizontalmente */
}

}
<!DOCTYPE html>
<html lang="es">
<head>
    <style>
    
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column; /* Cambia la dirección del flujo a vertical */
            align-items: center; /* Centra horizontalmente */
            justify-content: center; /* Centra verticalmente */
            height: 100vh;
            background-color: #f2f2f2;
        }
           

        #text-container {
            margin-top: 20px; /* Espacio superior para separar del borde superior */
            text-align: center; /* Centra horizontalmente el texto */
        }

        h1 {
            font-size: 30px; /* Tamaño de fuente grande para el título */
            margin-bottom: 10px; /* Espacio inferior para separar del subtítulo */
        }

        h2 {
            font-size: 30px; /* Tamaño de fuente grande para el subtítulo */
            margin-bottom: 50px; /* Espacio inferior para separar del contenedor de botones */
        }

        /* Estilos básicos de los botones */
        .button {
            width: 300px;
            height: 300px;
            margin: 30px;
            font-size: 25px; /* Tamaño de fuente para los botones */
            display: flex;
            flex-direction: column;
            justify-content: flex-end; /* Coloca el contenido en la parte inferior */
            align-items: center;
            border: solid black; /* Esto aplicará un borde sólido de 2 píxeles de ancho y rojo */
            cursor: pointer;
            position: relative; /* Para posicionar el texto de manera absoluta */
            
        }

        .button img {
            width: 300px; /* Tamaño de la imagen */
            height: 300px; /* Tamaño de la imagen */
        }

        .button span {
            position: absolute;
            top: 320px; /* Coloca el texto 10px por debajo del borde superior del botón */
            font-size: 20px; /* Tamaño de fuente para el texto */
        }

        /* Estilo para el contenedor de botones */
        #center-buttons-container {
            display: flex;
            justify-content: center; /* Centra los botones horizontalmente */
        }
    </style>
</head>
<body>

<div id="text-container">

    <h1>BIENVENIDOS AL SISTEMA DE REGISTRO DE MAPIFIP3D</h1>
    <h2>POR FAVOR SELECCIONA QUÉ TIPO DE USUARIO ERES</h2>
</div>

<!-- Contenedor de los botones -->
<div id="center-buttons-container">
    <a href="{{ route('formularios.estudiantes') }}" class="button">
        <img src="{{ asset('css/estudiante.jpg') }}" alt="Estudiante">
        <span>REGISTRAR ESTUDIANTE</span>
    </a>
    <a href="{{ route('formularios.funcionarios') }}" class="button">
        <img src="{{ asset('css/funcionario.jpg') }}" alt="Funcionario">
        <span>REGISTAR FUNCIONARIO</span>
    </a>
    <a href="{{ route('formularios.visitantes') }}" class="button">
        <img src="{{ asset('css/visitante.jpg') }}" alt="Visitante">
        <span>REGISTRAR VISITANTE</span>
    </a>
</div>

</body>
</html>
