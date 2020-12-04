<?php
namespace App;

class Results
{
    # Properties
    public $results = [];

    # Methods
    public function __construct($dataSource)
    {
        $json = file_get_contents($dataSource);
        $this->results = json_decode($json, true);
    }

    public function getAll()
    {
        return $this->results;
    }

    public function getById(int $id)
    {
        return $this->results[$id] ?? null;
    }
}