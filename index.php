<?php

class Movie
{
    public $title;
    public $overview;
    public $duration;
    public $cast;

    public function __construct($title, $overview, $duration, $cast)
    {
        $this->title = $title;
        $this->overview = $overview;
        $this->duration = $duration;
        $this->cast = $cast;
    }
}


$dune = new Movie('Dune', 'Paul Atreides, a brilliant and gifted young man...', 155, [
    "Timothée Chalamet",
    "Rebecca Ferguson",
    "Oscar Isaac",
    "Josh Brolin",
    "Stellan Skarsgård",
    "Dave Bautista",
    "Zendaya",
    "Jason Momoa",
    "Javier Bardem"
]);

var_dump($dune);

$dune->title = 'Dune';
$dune->overview = 'Paul Atreides, a brilliant and gifted young man...';
$dune->duration = 155;
$dune->cast = [];
