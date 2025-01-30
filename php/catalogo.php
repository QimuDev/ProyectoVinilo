<?php
include_once("configuracion.php");

$sql2 = "SELECT idBanda, nombreBanda FROM banda";
$result2 = $conn->query($sql2);

$selectBanda = "<select name='banda' id='banda' required>";
$selectBanda .= "<option value='' disabled selected>Selecciona una banda</option>";

if ($result2->num_rows > 0) { 
    while ($row = $result2->fetch_assoc()) {
        $selectBanda .= "<option value='" . $row['idBanda'] . "' data-tipo='" . $row['idBanda'] . "'>" . $row['nombreBanda'] . "</option>";
    }
    $selectBanda .= "</select>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prata&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/catalogue.css" />
    <script
      src="https://code.jquery.com/jquery-3.7.1.js"
      integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
      crossorigin="anonymous"
    ></script>
    <title>OldVinylBack</title>
</head>
<body>
    <div class="catalogoContainer">
        <div class="buscadorContainer">
            <div class="exit"></div>
            <input type="text" class="buscador" name="buscador" id="buscador" placeholder="Busca tu vinilo">
            <div class="exit"><a href="../php/tienda.php">EXIT</a></div>
        </div>
        
     

        <div class="tableContainer">
            <?php include_once("tablaCatalogo.php"); ?>
        </div>

        <div class="addVinylContainer">
            <button type="button" id="addDisc" class="addDisc">+</button>
        </div>
    </div>

    <div class="formContainer">
        <form action="añadirVinilo.php" method="POST" enctype="multipart/form-data" class="addVinyl">
            <label for="name">NOMBRE</label>
            <input type="text" name="vinylName" id="vinylName" placeholder="Nombre del vinilo">
            <label for="name">BANDA</label>
            <?php echo $selectBanda; ?>
            <label for="name">DESCRIPCIÓN</label>
            <input type="text" name="vinylDescription" id="vinylDescription" placeholder="Descripción del vinilo">
            <label for="name">PRECIO</label>
            <input type="text" name="vinylPrice" id="vinylPrice" placeholder="Precio del vinilo">
            <label for="name">IMAGEN</label>
            <input type="file" class="fileImage" name="vinylImage" id="vinylImage" accept="image/*" required>
            <div class="addDiscContainer">
                <button type="submit">AÑADIR</button>
            </div>
            
        </form>
    </div>

    <script src="../js/añadirVinilo.js"></script>
</body>
</html>
