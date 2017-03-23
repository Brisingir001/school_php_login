<?php

namespace App;
/*
 * Eigenschappen:
 * - fileLocation (string)
 * - input (string)
 *
 * Methodes:
 * + constructor(fileLocation)
 * + Save(input) : bool
 */
class FileWriter
{
    private $fileLocation;
    private $input;

    public function __construct($location)
    {
        $this->fileLocation = $location;
    }

    public function Save($input)
    {
        $this->input = $input;

        // input opslaan in bestand
        file_put_contents($this->fileLocation, $this->input . PHP_EOL, FILE_APPEND);
    }
}