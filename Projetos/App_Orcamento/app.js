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
                if (headerModal.classList.contains("text-success") && footerModal.classList.contains("btn-success")) {
                    headerModal.classList.remove("text-success")
                    footerModal.classList.remove("btn-success")
                }
                headerModal.innerHTML = "Erro ao Registrar :c"
                headerModal.classList.add("text-danger")
                bodyModal.innerHTML = "Faltou você preencher alguns campos."
                footerModal.innerHTML = "Corrigir"
                footerModal.classList.add("btn-danger")
                return false
            }
        }
        if (headerModal.classList.contains("text-danger") && footerModal.classList.contains("btn-danger")) {
            headerModal.classList.remove("text-danger")
            footerModal.classList.remove("btn-danger")
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

    recuperarRegistros() {
        let conjuntoRegistros = Array()

        let id = localStorage.getItem('id')
        //lógica para retornar registros
        for (let i = 0; i <= id; i++) {
            let registroDespesa = JSON.parse(localStorage.getItem(i))

            if (registroDespesa === null) {
                continue
            }
            registroDespesa.id = i
            conjuntoRegistros.push(registroDespesa)
        }
        return conjuntoRegistros
    }

    pesquisar(despesa) {
        let despesasFiltradas = []
        despesasFiltradas = this.recuperarRegistros()

        // Filtro Ano
        if (despesa.ano != '') {
            despesasFiltradas = despesasFiltradas.filter(d => d.ano == despesa.ano)
        }
        // Filtro Mês
        if (despesa.mes != '') {
            despesasFiltradas = despesasFiltradas.filter(d => d.mes == despesa.mes)
        }
        // Filtro Dia
        if (despesa.dia != '') {
            despesasFiltradas = despesasFiltradas.filter(d => d.dia == despesa.dia)
        }
        // Filtro Tipo
        if (despesa.tipo != '') {
            despesasFiltradas = despesasFiltradas.filter(d => d.tipo == despesa.tipo)
        }
        // Filtro Descrição
        if (despesa.descricao != '') {
            despesasFiltradas = despesasFiltradas.filter(d => d.descricao == despesa.descricao)
        }
        //Filtro Valor
        if (despesa.valor != '') {
            despesasFiltradas = despesasFiltradas.filter(d => d.valor == despesa.valor)
        }

        return despesasFiltradas
    }

    remover(id) {
        console.log(id)
        localStorage.removeItem(id)
        window.location.reload()
    }
}

let bd = new BD() // Criando instância da Classe BD


function cadastrarDespesa() {
    // Capturando valores contidos nos campos
    let ano = document.getElementById('ano')
    let mes = document.getElementById('mes')
    let dia = document.getElementById('dia')
    let tipo = document.getElementById('tipo')
    let descricao = document.getElementById('descricao')
    let valor = document.getElementById('valor')
    // criando novo Objeto e passando como parametros os valores acima
    const despesa = new Despesa(ano.value, mes.value, dia.value, tipo.value, descricao.value, valor.value)
    // criando novo Objeto da Classe BD

    //lógica para chamar o registro da despesa no Local Storage
    if (despesa.validaDados()) {
        bd.gravar(despesa)
        $('#modalRegistro').modal('show')
        ano.value = ""
        mes.value = ""
        dia.value = ""
        tipo.value = ""
        descricao.value = ""
        valor.value = ""
    } else {
        $('#modalRegistro').modal('show')
    }
}

function conjuntoDespesa() {
    excluirPesquisa()
    pesquisarDespesa()
}

function excluirPesquisa() {
    let corpo = document.querySelector("tbody")
    corpo.innerHTML = ''
}



function pesquisarDespesa() {
    let corpo = document.querySelector("tbody")
    let ano = document.getElementById('ano')
    let mes = document.getElementById('mes')
    let dia = document.getElementById('dia')
    let tipo = document.getElementById('tipo')
    let descricao = document.getElementById('descricao')
    let valor = document.getElementById('valor')

    const despesa = new Despesa(ano.value, mes.value, dia.value, tipo.value, descricao.value, valor.value);
    
    let despesas = bd.pesquisar(despesa)
    
    
    despesas.forEach(d => {
        let linha = corpo.insertRow()
        linha.insertCell(0).innerText = `${d.dia}/${d.mes}/${d.ano}`
        linha.insertCell(1).innerText = d.tipo
        linha.insertCell(2).innerText = d.descricao
        linha.insertCell(3).innerText = d.valor
        //Criando Botão de excluir
        let botao = document.createElement("button")
        botao.className = "btn btn-danger"
        botao.innerHTML = '<i class="fas fa-times"></i>'
        botao.id = "id_despesa_" + d.id
        botao.onclick = () => {
            bd.remover(d.id)
        }
        linha.insertCell(4).appendChild(botao)
    });
    console.log('LOG PESQUISA:' +  corpo.childElementCount)
    
    
}