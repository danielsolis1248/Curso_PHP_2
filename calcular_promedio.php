<?php
$español = $_POST['esp'] ?? null;
$matematicas = $_POST['mat'] ?? null;
$ciencias = $_POST['cien'] ?? null;
$historia = $_POST['his'] ?? null;
$ingles = $_POST['ing'] ?? null;
$artes = $_POST['art'] ?? null;
$computo = $_POST['comp'] ?? null;

$promedio = ($español + $matematicas + $ciencias + $historia + $ingles + $artes + $computo) / 7;
$promedio_redondeado = bcdiv($promedio, '1', 2);

if (empty($español && $matematicas && $ciencias && $historia && $ingles && $artes && $computo)) {
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