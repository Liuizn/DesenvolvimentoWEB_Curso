class Produto{
    constructor(descricao, preco){
        this.descricao = descricao
        this.preco = preco
    }
    verDescricao(){
        console.log(`${this.descricao} por apenas ${this.preco}`)
    }
}

const produto = new Produto('Notebook ASUS', 5000)
produto.verDescricao()

let produtoLiteral = {
    descricao: 'Geladeira',
    preco: 1800,
    verDescricao: function(){
        console.log(`${this.descricao} por apenas ${this.preco}`)
    }
}

produtoLiteral.verDescricao()