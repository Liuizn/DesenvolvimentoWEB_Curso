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
        for (let i in this) {
            if ((this[i] == undefined) || (this[i] == null) || (this[i] == '')) {
                return false
            }
        }
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

}



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
    let bd = new BD() // Criando instância da Classe BD

    //lógica para chamar o registro da despesa no Local Storage
    if (despesa.validaDados()) {
        bd.gravar(despesa)
        $('#sucessoRegistro').modal('show')
    } else {
        $('#erroRegistro').modal('show')
    }
}