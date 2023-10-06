<!DOCTYPE html>
<html>

<head>
    <title>Calificaciones del semestre 📃</title>
    <!--===== Codigo CSS =======-->
    <style>
        table,th,
        td {
            border: 1px solid steelblue;
            border-collapse: collapse;
            padding: 3px;
        }

        th {
            font-family: 'Georgia';
            text-decoration: solid;
            font-size: 22px;
            color: darkblue;
        }

        td {
            font-family: 'Georgia';
            font-size: 20px;
            color: black;
        }

        h1 {
            font-family: 'Segoe UI';
            font-size: 35px;
            text-align: center;
            color: #0a4175;
        }

        h2 {
            font-family: 'Franklin Gothic Medium';
            font-size: x-large;
            text-align: left;
            color: #408818; 
        }

        h3 {
            font-family: 'Segoe UI Light';
            font-size: 20px;
            text-align: left;
            color: #0a4175;
        }

        form {
            border: 100px maroon;
            background-color: beige;
            border-collapse: separate;
            padding: 3px;
            font-family: 'Franklin Gothic Medium';
            font-size: 20px;
            line-height: 1.35;
            color: maroon;
        }

        button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 12px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 4px;
        }

        .button1 {
            background-color: #f6fff5;
            color: black;
            border: 2px solid #4CAF50;
        }

        .button1:hover {
            background-color: #4CAF50;
            color: white;
        }
    </style>

</head>

<body>
    <h1>Calificaciones de la Conalep II 📃</h1>
    <hr>

    <h2>Tabla de los puntajes de cada materia</h2>

    <h3>Ingresa las calificaciones para calcular el promedio ⬇</h3>

    <form method="post" action="">
        Español <input type="text" name="esp"><br>
        Matematicas <input type="text" name="mat"><br>
        Ciencias naturales <input type="text" name="cien"><br>
        Historia <input type="text" name="his"><br>
        Ingles <input type="text" name="ing"><br>
        Artes <input type="text" name="art"><br>
        Computacion <input type="text" name="comp"><br>

        <button type="submit" name="calcular" value="calcular" class="button button1">Calcular promedio</button>
    </form>
    <br>


    <div>
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

<!--===== Codigo de PHP =======-->
<?php
function redondear_promedio ($promedio_redondeado) {
    $español = $_POST['esp'] ?? null;
    $matematicas = $_POST['mat'] ?? null;
    $ciencias = $_POST['cien'] ?? null;
    $historia = $_POST['his'] ?? null;
    $ingles = $_POST['ing'] ?? null;
    $artes = $_POST['art'] ?? null;
    $computo = $_POST['comp'] ?? null;
    
    $promedio = ($español + $matematicas + $ciencias + $historia + $ingles + $artes + $computo) / 7;
    global $promedio_redondeado;
    $promedio_redondeado = bcdiv($promedio, '1', 2);

    if ($promedio_redondeado <= 6.9) {
        echo '<h3 style="color:teal;"><font face="Verdana">Reprobaste 👎🏼tu calificacion es '.$promedio_redondeado.'</font></h3>';
    } elseif ($promedio_redondeado >= 7.0 && $promedio_redondeado <=7.9) {
        echo '<h3 style="color:teal;"><font face="Verdana">Pasaste el semestre 👍🏼 tu calificacion es '.$promedio_redondeado.'</font></h3>';
    } elseif ($promedio_redondeado >= 8.0 && $promedio_redondeado <=8.9) {
        echo '<h3 style="color:teal;"><font face="Verdana">Tienes un buen promedio 👍🏼✅ tu calificacion es '.$promedio_redondeado.'</font></h3>';
    } elseif ($promedio_redondeado >= 9.0) {
        echo '<h3 style="color:teal;"><font face="Verdana">Tienes un excelente promedio 👍🏼🏆🌟 tu calificacion es '.$promedio_redondeado.'</font></h3>';
    }

    return $promedio_redondeado;
    }
    
    echo redondear_promedio($promedio_redondeado);
?>

</html>