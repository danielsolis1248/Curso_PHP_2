<!DOCTYPE html>
<html>

<head>
    <title>Calificaciones de la Conalep II 📃</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
</head>

<body>
    <h1>Calificaciones de la Conalep II 📃</h1>
    <hr>

    <div class="flex-container">
        <div class="formulario">
            <form method="post" action="">
                <h4>Ingresa las calificaciones para calcular el promedio</h4>
                <hr>
                <label for="crcsp">CRCSP</label>
                <input type="text" name="crcsp" required=""><br>

                <label for="cofe">COFE</label>
                <input type="text" name="cofe" required=""><br>

                <label for="moca">MOCA</label>
                <input type="text" name="moca" required=""><br>

                <label for="ceng">CENG</label>
                <input type="text" name="ceng" required=""><br>

                <label for="pncp">PNCP</label>
                <input type="text" name="pncp" required=""><br>

                <label for="fem-3">FEM III</label>
                <input type="text" name="fem-3" required=""><br>

                <label for="afeo">AFEO</label>
                <input type="text" name="afeo" required=""><br>

                <label for="mcl">MCL</label>
                <input type="text" name="mcl" required=""><br>

                <button type="submit" name="calcular" value="calcular" class="button button1">Calcular promedio</button>
            </form>
        </div>

        <div class="calificaciones">
            <div class="tabla-cal">
                <table>
                    <h2>Tabla de los puntajes de cada materia</h2>
                    <tr>
                        <th>Materias</th>
                        <th>Puntuacion</th>
                    </tr>
                    <tr>
                        <td>CRCSP 📙</td>
                        <td><?php echo $CRCSP = $_POST['crcsp'] ?? null; ?></td>
                    </tr>
                    <tr>
                        <td>COFE 🧮</td>
                        <td><?php echo $COFE = $_POST['cofe'] ?? null; ?></td>
                    </tr>
                    <tr>
                        <td>MOCA 🧪</td>
                        <td><?php echo $MOCA = $_POST['moca'] ?? null; ?></td>
                    </tr>
                    <tr>
                        <td>CENG 🧪</td>
                        <td><?php echo $CENG = $_POST['ceng'] ?? null; ?></td>
                    </tr>
                    <tr>
                        <td>PNCP 🎩</td>
                        <td><?php echo $PNCP = $_POST['pncp'] ?? null; ?></td>
                    </tr>
                    <tr>
                        <td>FEM_III 🌎</td>
                        <td><?php echo $FEM_III = $_POST['fem-3'] ?? null; ?></td>
                    </tr>
                    <tr>
                        <td>AFEO 🎨</td>
                        <td><?php echo $AFEO = $_POST['afeo'] ?? null; ?></td>
                    </tr>
                    <tr>
                        <td>MCL 💻</td>
                        <td><?php echo $MCL = $_POST['mcl'] ?? null; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <?php
    include 'calcular_promedio.php';
    ?>

</body>

</html>