<?php

require_once __DIR__ . '/../app/Models/Movie.php';
require_once __DIR__ . '/../app/Models/Genre.php';

$movies = [

    new Movie(
        'Dune',
        'Paul Atreides, a brilliant and gifted young man...',
        155,
        [
            new Genre('Molto-Azione', 'molto-azione'),
            new Genre('Molto-Fantasy', 'molto-fantasy')
        ],
        [
            "Timothée Chalamet",
            "Rebecca Ferguson",
            "Oscar Isaac",
            "Josh Brolin",
            "Stellan Skarsgård",
            "Dave Bautista",
            "Zendaya",
            "Jason Momoa",
            "Javier Bardem"
        ]
    ),

    new Movie(
        'Matrix',
        'The Matrix tells the story of a computer hacker...',
        136,
        [
            new Genre('Molto-Drammatico', 'molto-drammatico'),
            new Genre('Molto-Mafioso', 'molto-mafioso')
        ],
        [
            "Keanu Reeves",
            "Laurence Fishburne",
            "Carrie-Anne Moss",
            "Hugo Weaving",
            "Joe Pantoliano",
            "Gloria Foster",
            "Marcus Chong",
            "Julian Arahanga",
            "Matt Doran"
        ]
    )

];
