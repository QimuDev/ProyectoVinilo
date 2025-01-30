$(document).ready(function () {
    $("#buscador").on("input", function () {
        let query = $(this).val();

        $.ajax({
            url: "tablaCatalogo.php",
            type: "GET",
            data: { q: query },
            success: function (data) {
                $(".tableContainer").html(data);
            },
            error: function () {
                $(".tableContainer").html("<p>Error al cargar los datos.</p>");
            }
        });
    });
});
