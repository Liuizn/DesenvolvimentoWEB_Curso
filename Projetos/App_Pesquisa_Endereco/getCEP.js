function getCEP(cep) {


    let url = `https://viacep.com.br/ws/${cep}/json/unicode`
    console.log(url)
    
    let xmlHTTP = new XMLHttpRequest()
    xmlHTTP.open('GET', url)

    xmlHTTP.onreadystatechange = ()=>{
        if (xmlHTTP.readyState == 4 && xmlHTTP.status == 200 ){
            let dados = xmlHTTP.responseText
            let objDados = JSON.parse(dados)
            console.log(objDados)
            
            document.getElementById('endereco').value = objDados.logradouro
            document.getElementById('bairro').value = objDados.bairro
            document.getElementById('cidade').value = objDados.localidade
            document.getElementById('UF').value = objDados.uf
        }
    }
    xmlHTTP.send()
} 