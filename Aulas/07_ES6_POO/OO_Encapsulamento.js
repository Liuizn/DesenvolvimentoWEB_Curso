class Televisao {
    constructor () {
        this._relacaoCanais = Array(2, 4, 5, 7, 12)
        this.canalAtivo = 12 
        this.volume = 5 
    }

    //get

    get canalAtivo() {
        return this._canalAtivo
    }

    set canalAtivo(canal) {
        this._canalAtivo = canal
    }
}

let tv = new Televisao()

console.log(tv.volume)

tv.volume = 10

console.log(tv.volume)
