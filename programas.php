<?php
include("conexion.php");
// Verificar si se ha enviado el formulario


if (isset ($_POST["programas"])){
if (isset($_POST["nombre"])>=1 && strlen($_POST)){
    // Obtener los datos ingresados por el usuario
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $ciudad = $_POST['ciudad'];
    $id = $_POST['id'];
    $email = $_POST ["email"];

}
    
    // Verificar si es mayor de edad
    if ($edad >= 18) {
        $mensaje = "El aspirante $nombre es mayor de edad y puede aplicar a programas.";

        $carreras = array(
            "Analisis y desarrollo de software",
            "Artes graficas",
            "Salud ocupacional",
            "Animacion 3D",
            "Desarrollo de Medios Gráficos Visuales.",
            "Desarrollo Multimedia y Web.",
            "Desarrollo de Colecciones para la Industria de la Moda."
        );

        $tecnicos = array(
            "Análisis de Sistemas IT.",
            "Producción multimedia.",
            "Comercialización de productos masivos",
            "Gestión de talento humano.",
            "Marketing digital",
            "Mecánica automotriz",
            "Seguridad digital.",
            "Desarrollo de software",
            "Desarrollo de productos electrónicos",
            "Coordinación de procesos logísticos"
        );

        $cursos = array(
            "Agroindustria del plátano",
            "Corte y porcionado de carnes.",
            "Aditivos: análisis y control de calidad en la industria alimentaria",
            "Aceites esenciales: extracción, usos y aplicaciones",
            "Buenas prácticas en la manipulación de la carne"
        );
    } else {
        $mensaje = "El aspirante $nombre es menor de edad y puede aplicar a técnicos y cursos.";

        $tecnicos = array(
            "Análisis de Sistemas IT.",
            "Producción multimedia.",
            "Comercialización de productos masivos",
            "Gestión de talento humano.",
            "Marketing digital",
            "Mecánica automotriz",
            "Seguridad digital.",
            "Desarrollo de software",
            "Desarrollo de productos electrónicos",
            "Coordinación de procesos logísticos"
        );

        $cursos = array(
            "Agroindustria del plátano",
            "Corte y porcionado de carnes.",
            "Aditivos: análisis y control de calidad en la industria alimentaria",
            "Aceites esenciales: extracción, usos y aplicaciones",
            "Buenas prácticas en la manipulación de la carne"
        );
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Aspirante al SENA</title>
</head>
<body>
    <h1>Formulario de Aspirante al SENA</h1>

    <?php if (isset($mensaje)): ?>
        <p><?php echo $mensaje; ?></p>
    <?php endif; ?>

    <?php if (isset($carreras)): ?>
        <h2>Carreras Tecnológicas</h2>
        <select>
            <?php foreach ($carreras as $carrera): ?>
                <option><?php echo $carrera; ?></option>
            <?php endforeach; ?>
        </select>
    <?php endif; ?>

    <?php if (isset($tecnicos)): ?>
        <h2>Técnicos</h2>
        <select>
            <?php foreach ($tecnicos as $tecnico): ?>
                <option><?php echo $tecnico; ?></option>
            <?php endforeach; ?>
        </select>
    <?php endif; ?>

    <?php if (isset($cursos)): ?>
        <h2>Cursos</h2>
        <select>
            <?php foreach ($cursos as $curso): ?>
                <option><?php echo $curso; ?></option>
            <?php endforeach; ?>
        </select>
    <?php endif; ?>

    <form method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br>

        <label for="ciudad">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad"><br>

        <label for="id">ID:</label>
        <input type="number" id="id" name="id"><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>