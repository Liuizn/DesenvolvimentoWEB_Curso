<?php 

interface EquipamentoEletronicoInterface {
    public function ligar();
    public function desligar();
}

class Geladeira implements EquipamentoEletronicoInterface
{
    public function abrirGeladeira() {
        echo "abrir";
    }

    public function ligar(){
        echo "liguei";
    }

    public function desligar(){
        echo "desliguei";
    }
}

class TV implements EquipamentoEletronicoInterface
{
    
    public function trocarCanal(){
        echo "troquei";
    }

    public function ligar(){
        echo "liguei";
    }

    public function desligar(){
        echo "desliguei";
    }

}

$x = new Geladeira();
$y = new TV();


interface MamiferoInterface  {
    public function respirar();
}

interface TerrestreInterface {
    public function andar();
}

interface AquaticaInterface{
    public function nadar();
}


class Humano implements MamiferoInterface, TerrestreInterface
{
    public function respirar(){
        
    }

    public function andar(){

    } 

    protected function conversar(){

    }
}

class Baleia implements MamiferoInterface, AquaticaInterface
{
    public function respirar(){
        
    }

    public function nadar(){

    }

    protected function esguichar(){

    } 
}

Interface AnimalInterface {
    public function correr();
}

Interface AveInterface extends AnimalInterface {
    public function voar();
}


class Papagaio implements AnimalInterface {
    public function voar(){
        echo "vooei";
    }

    public function correr(){
        echo "corri";
    }
}












?>