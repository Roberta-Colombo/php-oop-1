<?php

class Movie
{
    // variabili d'istanza
    public $title;
    public $director;
    public $year;
    public $genres;
    public $rating;


    // constructor
    function __construct(string $_title, string $_director, int $_year, string $_rating, $_genres = [])
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->genres = $_genres;
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
$theShining = new Movie("The Shining", "Stanley Kubrick", 1980, "18+", ["Horror", "Thriller"]);
var_dump($theShining);

$fightClub = new Movie("Fight Club", "David Fincher", 1999, "15+", ["Drammatico"]);
var_dump($fightClub);

$laGrandeBellezza = new Movie("La grande bellezza", "Paolo Sorrentino", 2013, "17+", ["Drammatico", "Commedia"]);
var_dump($laGrandeBellezza);

?>