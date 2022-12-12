<?php

class Movie
{
    // variabili d'istanza
    public $title;
    public $director;
    public $year;
    public $genre;
    public $rating;


    // constructor
    function __construct(string $_title, string $_director, int $_year, string $_genre, string $_rating)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->rating = $_rating;

        // effettua controllo età durante instanziamento
        $this->ageRestricted();
    }

    // metodo per controllare se esistono restrizioni di età
    public function ageRestricted()
    {
        if ($this->rating == "18+") {
            echo "Film vietato ai minori";
        } else {
            echo "Film adatto ai minori";
        }
    }
}


// oggetti istanziati e stampati a schermo
$theShining = new Movie("The Shining", "Stanley Kubrick", 1980, "Horror", "18+");
var_dump($theShining);

$fightClub = new Movie("Fight Club", "David Fincher", 1999, "Drammatico", "15+");
var_dump($fightClub);

$laGrandeBellezza = new Movie("La grande bellezza", "Paolo Sorrentino", 2013, "Drammatico", "17+");
var_dump($laGrandeBellezza);

?>