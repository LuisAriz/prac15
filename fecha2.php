<html>
<head>
<title>Problemas</title>
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
$fecha = strftime("%i de %B de %y");
echo "<p style='color: #009900;'>$fecha</p>";
?>
<a href="fecha3.php" style="color: #cc0000;">Siguiente problema</a>
</body>
</html>
