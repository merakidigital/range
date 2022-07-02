
$(function () {
    console.log("-------------");
    $(".acordeon-titulo").on("click", function () {
        let id = $(this).data("respuesta")
        $(".acordeon-contenido").hide();
        $(".acordeon-titulo .iconoAcordeon") .html("+");
        $(".acordeon-titulo").removeClass("active");
        $("#renglon__" + id).show();
        $(this).find("span").html("-");
        $(this).addClass("active");
        console.log("#renglon__" + id)
    });

    $("#btnMenu").on("click",function(){ 
        if($("#navMenu").hasClass("active")){
            $("#navMenu").removeClass("active"); 
        }else{
            $("#navMenu").addClass("active");

        }
    })
})