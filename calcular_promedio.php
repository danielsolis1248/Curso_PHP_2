<?php
$CRCSP = $_POST['crcsp'] ?? null;
$COFE = $_POST['cofe'] ?? null;
$MOCA = $_POST['moca'] ?? null;
$CENG = $_POST['ceng'] ?? null;
$PNCP = $_POST['pncp'] ?? null;
$FEM_III = $_POST['fem-3'] ?? null;
$AFEO = $_POST['afeo'] ?? null;
$MCL = $_POST['mcl'] ?? null;

$promedio = ($CRCSP + $COFE + $MOCA + $CENG + $PNCP + $FEM_III + $AFEO + $MCL) / 8;
$promedio_redondeado = bcdiv($promedio, '1', 2);

if (empty($CRCSP + $COFE + $MOCA + $CENG + $PNCP + $FEM_III + $AFEO + $MCL)) {
    echo "<h3>Los campos estan vacios, ingresa las calificaciones de tus materias</h3>";
} elseif ($promedio_redondeado <= 6.9) {
    echo '<h3>Reprobaste 👎🏼tu calificacion es ' . $promedio_redondeado . '</h3>';
} elseif ($promedio_redondeado >= 7.0 && $promedio_redondeado <= 7.9) {
    echo '<h3>Pasaste el semestre 👍🏼 tu calificacion es ' . $promedio_redondeado . '</h3>';
} elseif ($promedio_redondeado >= 8.0 && $promedio_redondeado <= 8.9) {
    echo '<h3>Tienes un buen promedio 👍🏼✅ tu calificacion es ' . $promedio_redondeado . '</h3>';
} elseif ($promedio_redondeado >= 9.0) {
    echo '<h3>Tienes un excelente promedio 👍🏼🏆🌟 tu calificacion es ' . $promedio_redondeado . '</h3>';
}
?>