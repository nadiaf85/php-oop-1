<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->


<?php

require_once __DIR__."/classes/Movie.php";

$film1 = [
    new Movie ("ritorno al futuro 1","fantascienza","1985"),
    new Movie ("ritorno al futuro 2","fantascienza","1989"),
    new Movie ("ritorno al futuro 3","fantascienza","1990"),
];


// var_dump($film1)

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<ul>
<?php

    foreach ($film1 as $elemento){
        echo "<li> {$elemento->getInfo()} </li>";
    }
?>
</ul>

</body>
</html>