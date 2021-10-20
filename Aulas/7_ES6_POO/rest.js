//rest

function soma(...param){
    let resultado = 0
    // console.log(param)

    param.forEach(v => resultado += v)
        return resultado
    
}

function multiplicacao(m, ...p){
    let resultado = 0
    p.forEach(v => resultado += m * v)

    console.log(resultado)
}

multiplicacao(2, 52,45)
