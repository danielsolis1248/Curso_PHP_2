<!DOCTYPE html>
<html>

<head>
    <title>Calificaciones de la Conalep II 📃</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
</head>

<body>
    <div class="container">
        <h1>Calificaciones de la Conalep II 📃</h1>
        <hr>

        <h3>Ingresa las calificaciones para calcular el promedio ⬇</h3>

        <form method="post" action="">
            <label for="español">Español</label> 
            <input type="text" name="esp" required=""><br>

            <label for="matematicas">Matematicas</label> 
            <input type="text" name="mat"required=""><br>

            <label for="ciencias nat">Ciencias naturales</label> 
            <input type="text" name="cien" required=""><br>

            <label for="historia">Historia</label> 
            <input type="text" name="his"required=""><br>
            
            <label for="ingles">Ingles</label> 
            <input type="text" name="ing" required=""><br>
            
            <label for="artes">Artes</label> 
            <input type="text" name="art" required=""><br>
            
            <label for="computacion">Computacion</label> 
            <input type="text" name="comp" required=""><br>

            <button type="submit" name="calcular" value="calcular" class="button button1">Calcular promedio</button>
        </form>
    </div>

    <?php
    include 'calcular_promedio.php';
    ?>

    <div id="tabla_cal">
        <h2>Tabla de los puntajes de cada materia</h2>
        <table>
            <tr>
                <th>Materias</th>
                <th>Puntuacion</th>
            </tr>
            <tr>
                <td>Español 📙</td>
                <td><?php echo $español = $_POST['esp'] ?? null; ?></td>
            </tr>
            <tr>
                <td>Matematicas 🧮</td>
                <td><?php echo $matematicas = $_POST['mat'] ?? null; ?></td>
            </tr>
            <tr>
                <td>Ciencias Naturales 🧪</td>
                <td><?php echo $ciencias = $_POST['cien'] ?? null; ?></td>
            </tr>
            <tr>
                <td>Historia 🎩</td>
                <td><?php echo $historia = $_POST['his'] ?? null; ?></td>
            </tr>
            <tr>
                <td>Ingles 🌎</td>
                <td><?php echo  $ingles = $_POST['ing'] ?? null; ?></td>
            </tr>
            <tr>
                <td>Artes 🎨</td>
                <td><?php echo $artes = $_POST['art'] ?? null; ?></td>
            </tr>
            <tr>
                <td>Computación 💻</td>
                <td><?php echo $computo = $_POST['comp'] ?? null; ?></td>
            </tr>
        </table>
    </div>
    <br>

    

</body>

</html>