<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO VISITANTE</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center; /* Centrar horizontalmente */
            align-items: center; /* Centrar verticalmente */
            height: 100vh;
            background-color: #f2f2f2;
        }

        #main-container {
            width: 50%; /* Ancho del contenedor principal */
            text-align: center; /* Alinear el contenido al centro */
        }

        .form-container {
              
            width: 40%; /* Ancho de cada formulario */
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color:#14d6cc; /*color de fondo del formulario*/
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block; /* Mostrar los formularios en línea */
        }

        .form-container h4 {
            margin-top: 0; /* Eliminar margen superior del título */
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
        }

        .form-container input[type="text"] {
            width: 70%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container button {
            width: 70%;
            padding: 10px;
            background-color: #f5e06b;
            color: #;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #f4333c;
        }

        .alert {
            margin-left: 10%; /* Alinear las alertas a la izquierda */
        }
    </style>
</head>
<body>
    <div id="main-container">
        
        <div class="form-container">
           
            
            <h4>REGISTRAR NUEVO VISITANTE</h4>
            <form>
                <!-- Campos del formulario para visitantes -->
                     
                
                <label for="pname">NOMBRE COMPLETO</label>
                <input type="text" id="name" name="pname" required> 
                 @error('name')
                 <div class="alert alert-danger">{{$message}}</div>
                 @enderror 

                 <label for="papellido">APELLIDOS</label>
                <input type="text" id="name" name="papellido" required> 
                 @error('papellido')
                <div class="alert alert-danger">{{$message}}</div>
                 @enderror 

                <label for="cedula">DOCUMENTO DE IDENTIDAD</label>
                 <input type="text" id="name" name="cedula" required> 
                @error('cedula')
                <div class="alert alert-danger">{{$message}}</div>
                 @enderror 

 
                <label for="ciudad">CIUDAD DE RESIDENCIA</label>
                 <input type="text" id="name" name="ciudad" required>
                @error('ciudad')
                 <div class="alert alert-danger">{{$message}}</div>
                 @enderror 

                <button type="submit">REGISTRARSE EN MAPIFIP 3D</button>
                 </form>
                 @if(session()->has('correcto'))
                 <div class="alert alert-success"> {{ session()->get('correcto') }}</div>
                  @endif
                @if(session()->has('error'))
                 <div class="alert alert-success"> {{ session()->get('error') }}</div>
                 @endif

                 <script src="script.js"></script>
                    </body>
                     </html>
                     </form>
