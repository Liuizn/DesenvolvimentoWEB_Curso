//Avião
//Objeto Literal
let a1 = {
    cor: 'Branco',
    modelo: 'AirBus',
    levantarVOO: function(){console.log('Vooei ')}
}

//Função Contrutora
let AviaoF = function(){
    this.cor='Azul',
    this.modelo='Boeing 787',
    this.levantarVOO = ()=>{console.log('Vooei')}
}

const a2 = new AviaoF();

//Classe

class AviaoG {
    constructor(){
        this.cor='Verde'
        this.modelo='aviao GTA'
    }

    levantarVOO(){console.log('Vooei')}
}

const a3 = new AviaoG();

console.log(a1)
console.log(a2)
console.log(a3)
