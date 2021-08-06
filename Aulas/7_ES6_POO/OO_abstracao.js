//Modelo do objeto
class ContaBancaria {
    constructor() {
        this.agencia = 1075
        this.numeroConta = 545478
        this.saldo = 50
        this.limite = 500
    }

    depositar(vlrDeposito) {
        this.saldo += vlrDeposito
    }

    sacar(vlrSacar) {
        this.saldo -= vlrSacar
    }

    consultarSaldo() {
        return this.saldo
    }
}

let x = new ContaBancaria()

console.log (x.consultarSaldo()) 