// let frutas =  ['Abacaxi', 'Pera', 'Uva', 'Mamão']
// let [ a, b, c ] = frutas

// let coisas = [['Abacaxi', 'Uva', 'Pera', 'Mamão'], ['José', 'Maria']]

// let[[,,n1]] = coisas

// // console.log(n1)

//Objeto
//token: array == []
//token: objeto == {}

// let produto = {
//     descricao: 'Notebook',
//     preco: 1800,
//     detalhes: {
//         fabricante: 'HP',
//         modelo: 'Pavilion dv7'
//     }
// }

// let {descricao: descricaoRepassado, preco: precoRepassado} = produto

// console.log(descricaoRepassado, precoRepassado)

// Funções

const arrray = [10, 20, 30, 40]

function teste([a, b, , ,c=100]) {
    console.log(a, b, c)
}

teste(arrray)