<?php

// Class declaration
/**
 * Class Movie
 */
class Movie
{
    public $title;
    public $overview;
    public $duration;
    public $cast;

    public function __construct($title, $overview, $duration, $cast)
    {
        // Select an object property inside a class using the $this variable
        // The $this always refer to the objectin which it was used
        $this->title = $title;
        $this->overview = $overview;
        $this->duration = $duration;
        $this->cast = $cast;
    }

    // Setter for $cast
    public function setCast($cast)
    {
        $this->cast = $cast;
    }

    // Getter for $cast
    public function getCast()
    {
        return $this->cast;
    }
}
