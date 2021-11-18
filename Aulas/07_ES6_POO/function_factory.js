//método de construção factory

let bicicleta = {
    cor:'Branca',
    marcha:'Única',
    aro: 12,
    pedalar() {console.log('pedalooou')} 
}

console.log(bicicleta) 

let BicicletaFactory = (cor, marcha, aro)=>{
    return{
        cor,
        marcha,
        aro,
        pedalar() {console.log('pedalooou')} 
    }
}

let bicicletaJuninho = BicicletaFactory('roxa', '45', 18)

console.log(bicicletaJuninho.cor)