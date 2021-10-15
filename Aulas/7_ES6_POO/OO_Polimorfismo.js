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

class Avestruz extends Passaro{
    constructor(){
        super('grange', 'preto', 45, 54)

    }
    enterrarCabeca(){
        console.log('Enterrei')
    }
    voar(){
        console.log('não sabe voar')
    }

}

const papagaio = new Papagaio(false, 'roxo', 50, 10)
console.log(papagaio)
papagaio.voar()

const avestruz = new Avestruz()
avestruz.enterrarCabeca()
avestruz.voar()
