<?php
include_once("configuracion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vinylName = $_POST["vinylName"];
    $idBand = $_POST["banda"];
    $vinylDescription = $_POST["vinylDescription"];
    $vinylPrice = $_POST["vinylPrice"];
    $vinylStatus = "True";

    $uploadDir = "../img/";

    $imageName = basename($_FILES["vinylImage"]["name"]);
    $uploadFile = $uploadDir . $imageName;

    if (move_uploaded_file($_FILES["vinylImage"]["tmp_name"], $uploadFile)) {
        echo "Imagen subida correctamente.\n";
    } else {
        die("Error al subir la imagen.\n");
    }

    $sql = "INSERT INTO vinilos (tituloVinilo, idBanda, descripcionVinilo, precioVinilo, imagenVinilo, visible)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sisdss", $vinylName, $idBand, $vinylDescription, $vinylPrice, $uploadFile, $vinylStatus);
        if ($stmt->execute()) {
            echo "Vinilo añadido correctamente.";
            header("Location: catalogo.php");
        } else {
            echo "Error al añadir el vinilo: " . $stmt->error;
        }
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }
}
?>