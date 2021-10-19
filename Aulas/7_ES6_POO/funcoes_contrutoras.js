let Carro = function () {
    this.modelo = 'Skyline R34'
    this.cor = 'Azul'
    this.velocidadeAtual = 0
    this.velocidadeMaxima = 400

    this.Acelerei = ()=>{
        let velocidade = this.getVelocidadeAtual() + 10
        this.setVelocidadeAtual(velocidade)
    }

    this.getVelocidadeAtual = ()=>{
        return this.velocidadeAtual
    }

    this.setVelocidadeAtual = (velocidadeAtual)=>{
        this.velocidadeAtual = velocidadeAtual
    }
}

let carro = new Carro()

console.log(`Olá hoje irei falar sobre o meu carro. O ${carro.modelo}, ele tem a cor ${carro.cor} e sua velocidade máxima é ${carro.velocidadeMaxima} KM`)



carro.Acelerei()
carro.Acelerei()
carro.Acelerei()
carro.Acelerei()

console.log(carro.getVelocidadeAtual())