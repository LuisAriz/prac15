<html>
<head>
<title>Problema</title>
<style>
body {
    background-color: #f0f0f0;
    color: #333;
}
</style>
</head>
<body>
<?php
echo "<h1 style='color: #0066cc;'>La fecha de hoy es:</h1>";
setlocale(LC_TIME, 'es_ES');
$fecha = strftime("%d de %B de %Y");
echo "<p style='color: #009900;'>$fecha</p>";
echo "<h1 style='color: #0066cc;'>La hora actual es:</h1>";
$hora = date("H:i:s");
echo "<p style='color: #009900;'>$hora</p>";
?>
<a href="fecha2.php" style="color: #cc0000;">Siguiente problema</a>
</body>
</html>
