class Animal {
    constructor() {
        this.cor = 'marrom'
        this.tamanho = 40
    }

    dormir(){
        console.log('dormir')
    }
}


class Cachorro extends Animal{
    constructor() {
        super()
        this.orelhas = 2
    }

    correr(){
        console.log('correu')
    }

    rosnar(){
        console.log('rosnar')
    }
}

class Passaro extends Animal{
    constructor() {
        super()
        this.bico = 'pequeno'
    }

    voar(){
        console.log('voou')
    }
}

class Papagaio extends Passaro {
    constructor() {
        this.saberFalar = true
    }

    falar() {
        console.log('falou')
    }
}

let cachorro = new Cachorro()
let passaro = new Passaro()
let papagaio = new Papagaio()