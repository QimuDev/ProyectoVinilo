<?php
include_once("configuracion.php");

$idVinyl = $_GET['idVinyl'];

// Preparar la consulta
$stmt = $conn->prepare("UPDATE vinilos SET Visible = 'True' WHERE idVinilo = ?");
$stmt->bind_param("i", $idVinyl);

if ($stmt->execute()) {

    header("Location: catalogo.php");
    exit();
} else {
    echo "Error al actualizar el registro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>