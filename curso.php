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

        h3 {
            font-family: 'Segoe UI';
            font-size: 20px;
            color: black;
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

    <h1 style="color:midnightblue">
        <center>
            <font face="Segoe UI">Calificaciones de la Conalep II 📃</font>
        </center>
    </h1>
    <hr>

    <h2 style="color:teal;">
        <font face="Segoe UI">Tabla de los puntajes de cada materia</font>
    </h2>

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
                <td><?php echo $español = $_POST['esp']; ?></td>
            </tr>
            <tr>
                <td>Matematicas 🧮</td>
                <td><?php echo $matematicas = $_POST['mat']; ?></td>
            </tr>
            <tr>
                <td>Ciencias Naturales 🧪</td>
                <td><?php echo $ciencias = $_POST['cien']; ?></td>
            </tr>
            <tr>
                <td>Historia 🎩</td>
                <td><?php echo $historia = $_POST['his']; ?></td>
            </tr>
            <tr>
                <td>Ingles 🌎</td>
                <td><?php echo  $ingles = $_POST['ing']; ?></td>
            </tr>
            <tr>
                <td>Artes 🎨</td>
                <td><?php echo $artes = $_POST['art']; ?></td>
            </tr>
            <tr>
                <td>Computación 💻</td>
                <td><?php echo $computo = $_POST['comp']; ?></td>
            </tr>
        </table>
    </div>
    <br>
</body>

<!--===== Codigo de PHP =======-->
<?php
function redondear_promedio ($promedio_redondeado) {
    $español = $_POST['esp'];
    $matematicas = $_POST['mat'];
    $ciencias = $_POST['cien'];
    $historia = $_POST['his'];
    $ingles = $_POST['ing'];
    $artes = $_POST['art'];
    $computo = $_POST['comp'];
    
    $promedio = ($español + $matematicas + $ciencias + $historia + $ingles + $artes + $computo) / 7;
    $promedio_redondeado = bcdiv($promedio, '1', 2);

    if ($promedio >= 7.0) {
        echo '<h3 style="color:teal;"><font face="Verdana">Aprobaste muchacho ✅ tu calificacion es ' . $promedio_redondeado . '</font></h3>';
    } else {
        echo '<h3 style="color:teal;"><font face="Verdana">Reprobaste wee tu calificacion es ' . $promedio_redondeado . '</font></h3>';
    }

    return $promedio_redondeado;
    }

    echo $promedio_redondeado;
?>

</html>