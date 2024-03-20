<?php

require_once __DIR__ . '/app/Models/Movie.php';
require_once __DIR__ . '/database/db.php';

// Create an istance of a class with 'new' keyword 
// $dune = new Movie('Dune', 'Paul Atreides, a brilliant and gifted young man...', 155, []);

// Write values to each property of the object or if they exists updates exising values
// $dune->title = 'Dune';
// $dune->overview = 'Paul Atreides, a brilliant and gifted young man...';
// $dune->duration = 155;
// $dune->cast = [];

// $dune->setCast([
//     "Timothée Chalamet",
//     "Rebecca Ferguson",
//     "Oscar Isaac",
//     "Josh Brolin",
//     "Stellan Skarsgård",
//     "Dave Bautista",
//     "Zendaya",
//     "Jason Momoa",
//     "Javier Bardem"
// ]);

// var_dump($dune);
// var_dump($dune->getCast());


// Create a second istance of movies
// $matrix = new Movie('Matrix', 'The Matrix tells the story of a computer hacker...', 136, [
//     "Keanu Reeves",
//     "Laurence Fishburne",
//     "Carrie-Anne Moss",
//     "Hugo Weaving",
//     "Joe Pantoliano",
//     "Gloria Foster",
//     "Marcus Chong",
//     "Julian Arahanga",
//     "Matt Doran"
// ]);

// Write values to each property of the object or if they exists updates exising values
// $matrix->title = 'Matrix';
// $matrix->overview = 'The Matrix tells the story of a computer hacker...';
// $matrix->duration = 136;

// var_dump($matrix);
// var_dump($matrix->getCast());




// $movies = [$dune, $matrix];

// var_dump($movies);

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header class="bg-dark text-white">
        <nav class="nav justify-content-center  ">
            <a class="nav-link active" href="#" aria-current="page">Active link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
        </nav>

    </header>

    <main class="mt-5">

        <section>
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-3 g-3">

                    <?php foreach ($movies as $movie) : ?>

                        <div class="col">

                            <div class="card">

                                <div class="card-body">
                                    <h3><?= $movie->title ?></h3>
                                    <p><?= $movie->overview ?></p>
                                </div>

                                <div class="card-footer">
                                    <ul class="d-flex gap-1 list-unstyled">
                                        <?php foreach ($movie->genres as $genre) : ?>

                                            <li><?= $genre->name ?></li>

                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>
            </div>
        </section>

    </main>

</body>

</html>