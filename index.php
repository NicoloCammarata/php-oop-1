<?php

class movie{
    public $nome;
    public $dataPubblicazione;
    public static $country = 'Italy';

    function __construct($dataPubblicazione) {
        $this->dataPubblicazione = $dataPubblicazione;
    }
    public function staticCountry(){
        return self::$country;
    }

}

$batman = new movie(1950);






?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?php
        echo $movie->nome;
    ?>

    </h1>
    <div>
        <?php
        echo $movie->staticCountry;
        echo $batman->dataPubblicazione;
        ?>
    </div>
    
</body>
</html>