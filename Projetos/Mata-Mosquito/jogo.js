var altura = 0
var largura = 0 
var vidas = 1
var tempo = 10 

function ajustaTamanhoPalcoJogo() {
    altura= window.innerHeight
    largura = window.innerWidth
    
    console.log(altura, largura)
}

ajustaTamanhoPalcoJogo()

var cronometro = setInterval(function() {
    tempo -=1

    if (tempo < 0) {
        clearInterval(cronometro)
        clearInterval(criaMosquito)
        window.location.href = 'vitoria.html'
    }
    else {
        document.getElementById('cronometro').innerHTML = tempo
    }
}, 1000)

function posicaoRandom() {

    // Verifica se existe um mosquito e remove
    if (document.getElementById("mosquito")) {
        document.getElementById("mosquito").remove()
        
        if(vidas > 3) {
            window.location.href = 'fim_de_jogo.html '    
        }
        else {
        document.getElementById('v' + vidas).src= "pictures/coracao_vazio.png"
        vidas++
        }
    }

        
    var positionX = Math.floor(Math.random() * largura) - 90
    var positionY = Math.floor(Math.random() * altura) - 90

    positionX = positionX < 0 ? 0 : positionX
    positionY = positionY < 0 ? 0 : positionY

    console.log(positionX, positionY)

    //criação do elemento HTML
    var mosquito = document.createElement('img')
    mosquito.src = 'pictures/mosquito.png'
    mosquito.className = tamanhoRandom() + ' ' + ladoRandom()
    mosquito.style.left = positionX + 'px'
    mosquito.style.top = positionY + 'px'
    mosquito.style.position = 'absolute'
    mosquito.id = 'mosquito'
    mosquito.onclick = function() {
        this.remove()
        console.log('removido')
    }

    document.body.appendChild(mosquito)

}

function tamanhoRandom() {
    var classe = Math.floor(Math.random() * 3)

    switch (classe) {
        case 0: 
            return 'mosquito1'
        case 1:
            return 'mosquito2'
        case 2:
            return 'mosquito3'
                
    }
}

function ladoRandom() {
    var classe = Math.floor(Math.random() * 2)

    switch (classe) {
        case 0:
            return 'ladoA'
        case 1:
            return 'ladoB'
    }
}