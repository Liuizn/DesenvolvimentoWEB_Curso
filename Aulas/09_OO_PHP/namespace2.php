<?php 

    require "./blibiotecas/lib1/lib1.php";
    require "./blibiotecas/lib2/lib2.php";

    use A\Blibioteca as E1;

    $d = new E1();
    print_r($d);
    echo $d->__get('nome');



    use B\Blibioteca as E2;

    $c = new E2();
    print_r($c);
    echo $c->__get('nome');

?>