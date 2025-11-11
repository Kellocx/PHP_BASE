<?php
class Book
{
    public $title;
    public $author;
    public $year;
    public $price;
    public $pages;

    public function __construct($title, $author, $year, $price, $pages)
    {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->price = $price;
        $this->pages = $pages;
    }

    public function getDetails()
    {
        return "{$this->title} di {$this->author}, {$this->year}, €{$this->price}, {$this->pages} pagine";
    }
}
