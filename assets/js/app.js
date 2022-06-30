
$(function () {
    console.log("-------------");
    $(".acordeon-titulo").on("click", function () {
        let id = $(this).data("respuesta")
        $(".acordeon-contenido").hide();
        $(".acordeon-titulo .iconoAcordeon") .html("+");
        $("#renglon__" + id).show();
        $(this).find("span").html("-");
        console.log("#renglon__" + id)
    });
})