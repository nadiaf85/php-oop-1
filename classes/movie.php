<?php

class Movie{
    private $titolo;
    private $genere;
    private $anno;

    public function __construct($_titolo, $_genere, $_anno){
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->anno = $_anno;
    }

    public function getInfo(){
        return "{$this->titolo} {$this->genere} [{$this->anno}]";
    }
}
?>