
$(function () {
    console.log("-------------");
    $(".acordeon-titulo").on("click", function () {
        let id = $(this).data("respuesta")
        $(".acordeon-contenido").removeClass("mostrarContenido");
        $(".acordeon-titulo .iconoAcordeon") .html("+");
       
        if($(this).hasClass("active")){ 
            $(this).removeClass("active"); 
            $("#renglon__" + id).removeClass("mostrarContenido");
            
        }else{
            $(".acordeon-titulo").removeClass("active");  
            $("#renglon__" + id).addClass("mostrarContenido");
            $(this).find("span").html("-");
            $(this).addClass("active");
            console.log("#renglon__" + id) 
        }
    });

    $("#btnMenu").on("click",function(){ 

        if($("#navMenu").hasClass("active")){
            $("#navMenu").removeClass("active");  
        }else{
            $("#navMenu").addClass("active"); 

        }

        if($("#navMenu_general").hasClass("active")){ 
            $("#navMenu_general").removeClass("active"); 
            $(".header_pagina").removeClass("menu_active")
        }else{ 
            $(".header_pagina").addClass("menu_active")
            $("#navMenu_general").addClass("active");

        }
    })
})