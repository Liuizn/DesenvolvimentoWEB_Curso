//Software de marcenária
//Cadeira e Sofá

//Paradigma Estruturado

 //cadeira

 //array de cadeiras

let cadeiras = Array()

cadeiras[0] = new Array()
cadeiras[0]['qtdPernas'] = 4 
cadeiras[0]['giratoria'] = false
cadeiras[0]['cor'] = 'lilás'

cadeiras[1] = new Array()
cadeiras[1]['qtdPernas'] = 29 
cadeiras[1]['giratoria'] = true
cadeiras[1]['cor'] = 'marrom'


 function girarCadeira(indice) {
    if (cadeiras[indice]['giratoria'] === true) {
        console.log('Girou')
    } else {
        console.log('Não girou')
    }
 }

 girarCadeira(1)

 function adicionarCadeira(qtdPernas, giratoria, cor) {
     let cadeira = Array()
     cadeira['qtdPernas'] = qtdPernas
     cadeira['giratoria'] = giratoria
     cadeira['cor'] = cor

     cadeiras.push(cadeira)
 }

 adicionarCadeira(8,true,'teste')

console.log(cadeiras[0])

//Paradigma 00

class Cadeira {
    constructor(qtdPernas, giratoria, cor) {
        this.qtdPernas = qtdPernas
        this.giratoria = giratoria
        this.cor = cor
    }

    girarCadeira () {
        if(this.giratoria === true) {
            console.log('girou')
        } else {
            console.log('Não girou')
        }
    }

}

let cadeira = new Cadeira(4, false, 'AZUL')
cadeira.girarCadeira()

