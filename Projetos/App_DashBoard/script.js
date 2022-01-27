$(document).ready(() => {

	$("#suporte").click(()=>{ 
        $.get("suporte.html", (data) =>{
            $("#pagina").html(data)
        });
    });

    
    $("#documentacao").click(()=>{ 
        $.get("documentacao.html", (data) =>{
            $("#pagina").html(data)
        });
    });

    $.ajax({
        type: "method",
        url: "url",
        data: "data",
        dataType: "dataType",
        success: function (response) {
            
        }
    });
})
