var altura
var largura

function ajustaTamanhoPalcoJogo() {
    altura= window.innerHeight;
    largura = window.innerWidth;
    
    console.log(altura, largura);
}

ajustaTamanhoPalcoJogo()

function posicaoRandom() {
        
    var positionX = Math.floor(Math.random() * largura) - 90
    var positionY = Math.floor(Math.random() * altura) - 90

    positionX = positionX < 0 ? 0 : positionX
    positionY = positionY < 0 ? 0 : positionY

    console.log(positionX, positionY)

    //criação do elemento HTML
    var mosquito = document.createElement('img');
    mosquito.src = 'pictures/mosquito.png';
    mosquito.className = 'mosquito1'
    mosquito.style.left = positionX + 'px'
    mosquito.style.top = positionY + 'px'
    mosquito.style.position = 'absolute'

    document.body.appendChild(mosquito);
}