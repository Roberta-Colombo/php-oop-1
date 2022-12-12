<?php
include_once __DIR__ . '/Models/Movie.php';


$movies = [];

// oggetti istanziati e stampati a schermo
$theShining = new Movie("The Shining", "Stanley Kubrick", 1980, "18+", ["Horror", "Thriller"], "./img/shining.jpg");
// var_dump($theShining);
$movies[] = $theShining;

$fightClub = new Movie("Fight Club", "David Fincher", 1999, "15+", ["Drammatico"], "./img/fight-club.jpg");
// var_dump($fightClub);
$movies[] = $fightClub;

$laGrandeBellezza = new Movie("La grande bellezza", "Paolo Sorrentino", 2013, "17+", ["Drammatico", "Commedia"], "./img/grande-bellezza.jpg");
// var_dump($laGrandeBellezza);
$movies[] = $laGrandeBellezza;


?>