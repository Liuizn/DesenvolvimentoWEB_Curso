class Animal {
    constructor(cor, tamanhoCm, peso) {
        this.cor = cor
        this.tamanhoCm = tamanhoCm
        this.peso = peso
    }

    dormir() {
        console.log('dormir')
    }
}

class Passaro extends Animal {
    constructor(bico, cor, tamanhoCm, peso) {
        super(cor, tamanhoCm, peso)
        this.bico = bico
    }

    voar() {
        console.log('voou')
    }
}

class Papagaio extends Passaro {
    constructor(sabeFalar, cor, tamanhoCm, peso) {
        super('gigante', cor, tamanhoCm, peso)
        this.sabeFalar = sabeFalar
    }

    falar() {
        console.log('falou')
    }
}

const papagaio = new Papagaio(false, 'roxo', 50, 10)
console.log(papagaio)
const papagaio2 = new Papagaio(true, 'laranja', 05, 01)
console.log(papagaio2)
