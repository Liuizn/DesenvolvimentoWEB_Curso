// Contexto Spread


let TittleArtigo = 'Como podemos usar o operador spread/rest?'

console.log(TittleArtigo)// Normal
console.log(...TittleArtigo) //Efeito Spread
console.log([...TittleArtigo]) // Separando em índices dentro de um array



listaCurso1 = ['Analíse de sistemas', 'sistemas']
listaCurso2 = ['engenharia de sofware', 'hardware']
listaCompleta = ['garrafas de água', ...listaCurso1, ...listaCurso2]

console.log(listaCompleta)