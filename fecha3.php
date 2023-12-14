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
$dato = date("L");
echo "<h1 style='color: #0066cc;'>";
if ($dato == 1)
    echo "Año bisiesto";
else
    echo "Año no bisiesto";
echo "</h1>";
echo "<h1 style='color: #0066cc;'>Día de la semana:</h1>";
$dato = date("w");
switch ($dato) {
    case 0: echo "<p style='color: #009900;'>domingo</p>"; break;
    case 1: echo "<p style='color: #009900;'>lunes</p>"; break;
    case 2: echo "<p style='color: #009900;'>martes</p>"; break;
    case 3: echo "<p style='color: #009900;'>miércoles</p>"; break;
    case 4: echo "<p style='color: #009900;'>jueves</p>"; break;
    case 5: echo "<p style='color: #009900;'>viernes</p>"; break;
    case 6: echo "<p style='color: #009900;'>sábado</p>"; break;
}
?>
</body>
</html>
