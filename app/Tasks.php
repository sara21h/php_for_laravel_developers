<?php

class Task{ //objecte amb nom task
    protected $id;
    protected $title;
    protected $description;
    protected $completed;

    public function __construct($id, $title, $description, $completed) //ja que ho dira l'usuari
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->completed = $completed;
    }

}