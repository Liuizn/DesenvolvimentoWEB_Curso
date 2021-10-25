class Despesa {
    constructor(ano, mes, dia, tipo, descricao, valor) {
        this.ano = ano
        this.mes = mes
        this.dia = dia
        this.tipo = tipo
        this.descricao = descricao
        this.valor = valor
    }
    //Lógica para avaliar se os dados inseridos estão preenchidos corretamente
    validaDados() {
        const headerModal = document.querySelector("#exampleModalLabel")
        const bodyModal = document.querySelector(".modal-body")
        const footerModal = document.querySelector(".botao")
        // Se houver algum erro, essa lógica irá ser aplicada
        for (let i in this) {
            if ((this[i] == undefined) || (this[i] == null) || (this[i] == '')) {
                headerModal.innerHTML = "Erro ao Registrar :c"
                headerModal.classList.add("text-danger")
                bodyModal.innerHTML = "Faltou você preencher alguns campos."
                footerModal.innerHTML = "Corrigir"
                footerModal.classList.add("btn-danger")
                return false
                
            }
        }
        headerModal.innerHTML = "Registrado com sucesso! c:"
        headerModal.classList.add("text-success")
        bodyModal.innerHTML = "A despesa foi registrada!"
        footerModal.innerHTML = "Ok"
        footerModal.classList.add("btn-success")
        return true
    }
}

class BD {
    constructor() {
        let id = localStorage.getItem('id') //Puxa informação do ID
        // Se o id for Nulo atribui o Valor de 0.
        if (id === null) {
            localStorage.setItem('id', 0)
        }

    }
    //Lógica para gera o valor de uma chave para um possível novo registro
    getIdSegunite() {
        let idSeguinte = localStorage.getItem('id') // puxa o último valor 
        return parseInt(idSeguinte) + 1 // passa o valor da chave "id" para Int e acrescenta mais 1
    }
    //Lógica para registar 
    gravar(d) {
        let id = this.getIdSegunite()
        localStorage.setItem(id, JSON.stringify(d))
        localStorage.setItem('id', id)
    }

    recuperarRegistros(){
        let conjuntoRegistros = Array()

        let id = localStorage.getItem('id')
        //lógica para retornar registros
        for (let i = 0; i <= id; i++) {
            let registroDespesa = JSON.parse(localStorage.getItem(i))
            
            if (registroDespesa === null) {
                continue
            }

            conjuntoRegistros.push(registroDespesa) 
        }
        return conjuntoRegistros
    }

}

let bd = new BD() // Criando instância da Classe BD


function cadastrarDespesa() {
    // Capturando valores contidos nos campos
    let ano = document.getElementById('ano').value
    let mes = document.getElementById('mes').value
    let dia = document.getElementById('dia').value
    let tipo = document.getElementById('tipo').value
    let descricao = document.getElementById('descricao').value
    let valor = document.getElementById('valor').value
    // criando novo Objeto e passando como parametros os valores acima
    const despesa = new Despesa(ano, mes, dia, tipo, descricao, valor)
    // criando novo Objeto da Classe BD

    //lógica para chamar o registro da despesa no Local Storage
    if (despesa.validaDados()) {
        bd.gravar(despesa)
        $('#modalRegistro').modal('show')
    } else {
        $('#modalRegistro').modal('show')
    }
}

function carregaLista() {
    let despesas = Array()
    despesas = bd.recuperarRegistros()
    console.log(despesas)
}