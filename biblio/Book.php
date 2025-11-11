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

    public static function fromArray($arr)
    {
        return new Book($arr['title'], $arr['author'], $arr['year'], $arr['price'], $arr['pages']);
    }
}
?>