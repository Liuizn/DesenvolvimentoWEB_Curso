$(document).ready(() => {

	$("#suporte").click(()=>{ 
        $.post("suporte.html", (data) =>{
            $("#pagina").html(data)
        });
    });

    
    $("#documentacao").click(()=>{ 
        $.post("documentacao.html", (data) =>{
            $("#pagina").html(data)
        });
    });


    $('#selecao').change((e)=>{

        let condicao = $(e.target).val()

        $.ajax({
            type: "get",
            url: "app.php",
            data: `competencia=${condicao}`,
            dataType: 'json',
            success:  (response)=>{
                console.log(response)
                $('#numeroVendas').html(response.numeroVendas)
                $('#totalVendas').html(response.totalVendas)
            }
        });
    })

})


