<?php
    $parIniziale = 'Sto facendo delle prove per vedere se questo capolavoro di programma funziona correttamente';

    $lunghezzaParIniziale = strlen($parIniziale);


    $parolaCensurata = $_GET['censura'];


    $parCensurato = str_replace($parolaCensurata, '***' ,$parIniziale);

    
?>

<h1> <?php echo $parIniziale ?> </h1>
<h2>La lunghezza di questo paragrafo è di <?php echo($lunghezzaParIniziale) ?> caratteri </h2>
<h2> <?php echo $parCensurato ?> </h2>
