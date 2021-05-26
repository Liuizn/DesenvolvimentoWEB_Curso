
function calcular(tipo, valor) {
//diferencia entre números e símbolos
    if (tipo === 'acao') {
        if (valor === 'c') { 
            //limpa o visor
            document.getElementById('resultado').value = '';
        }

        if (valor === '+' || valor === '-' || valor === '/' || valor === '*' || valor === '.') {
            //seleciona os símbolos
            document.getElementById('resultado').value += valor;
        }
        
        if (valor === '=') {
            //verifica se o valor é igual
            var valor_campo = eval(document.getElementById('resultado').value);
            
            document.getElementById('resultado').value = valor_campo
        }

    } else if (tipo === 'valor') {

        document.getElementById('resultado').value += valor;
    }
}