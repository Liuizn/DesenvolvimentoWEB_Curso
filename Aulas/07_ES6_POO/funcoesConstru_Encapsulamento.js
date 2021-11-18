let Carro = function () {
    this.modelo = 'Skyline R34'
    this.cor = 'Azul'
    this.velocidadeAtual = 0
    this.velocidadeMaxima = 400

    this.Acelerei = () => {
        let velocidade = this.getVelocidadeAtual() + 10
        this.setVelocidadeAtual(velocidade)
    }

    this.getVelocidadeAtual = () => {
        return this.velocidadeAtual
    }

    this.setVelocidadeAtual = (velocidadeAtual) => {
        this.velocidadeAtual = velocidadeAtual
    }
}

let carro = new Carro()


let Carro2 = function () {
    this.modelo = 'Skyline R34'
    this.cor = 'Azul'
    this.velocidadeAtual = 0
    var velocidadeMaxima = 400

    this.Acelerei = () => {
        let velocidade = this.getVelocidadeAtual() + 10
        if (velocidade > velocidadeMaxima) {
            velocidade = velocidadeMaxima
        }
    }

    this.getVelocidadeAtual = () => {
        return this.velocidadeAtual
    }

    this.setVelocidadeAtual = (velocidadeAtual) => {
        this.velocidadeAtual = velocidadeAtual
    }
}