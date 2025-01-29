<?php

include_once("configuracion.php");

$sql = "
    SELECT 
        v.imagenVinilo, 
        v.idVinilo, 
        v.tituloVinilo, 
        b.nombreBanda,  
        v.precioVinilo
    FROM vinilos v
    JOIN banda b ON v.idBanda = b.idBanda
";

$result = $conn->query($sql);

$tabla = "";

if ($result->num_rows > 0) {
    $tabla .= "<table class='styled-table'>";

    while ($row = $result->fetch_assoc()) {
        $tabla .= "<tr class='rowContainer'>";

        foreach ($row as $key => $value) {
            if ($key === 'imagenVinilo') {
                $tabla .= "<td><div class='vinylImage' style='background-image: url(" . htmlspecialchars($value) . ");'></div></td>";
                $tabla .= "<div class='bodyRow'>";
            } elseif ($key === 'idVinilo') {
                $tabla .= "<td style='display: none;'>" . htmlspecialchars($value) . "</td>";
            } elseif ($key === 'precioVinilo') {
                $tabla .= "<td>" . htmlspecialchars($value) . " €</td>";
            } else {
                $tabla .= "<td>" . htmlspecialchars($value) . "</td>";
            }
        }

        $tabla .= "</tr>";
    }

    $tabla .= "</table>";
}

echo $tabla;

?>