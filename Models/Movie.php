<?php
class Movie
{
    // variabili d'istanza
    public $title;
    public $director;
    public $year;
    public $genres;
    public $rating;
    public $coverimg;


    // constructor
    function __construct(string $_title, string $_director, int $_year, string $_rating, array $_genres, $_coverimg)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->genres = $_genres;
        $this->rating = $_rating;
        $this->coverimg = $_coverimg;

        // effettua controllo età durante instanziamento - poi spostata in index per essere effettuata durante la creazione della card
        //$this->ageRestricted();
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


?>