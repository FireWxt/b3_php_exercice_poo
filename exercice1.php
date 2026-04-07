<?php
/*
 * ÉNONCÉ :
 * Créez une classe Book avec les propriétés protected title, author, et price.
 * Ajoutez une méthode displayInfo() qui affiche les informations du livre.
 * Instanciez un livre et affichez ses informations.
*/

class Book {
    protected string $title;
    protected string $author;
    protected float $price;
    
    public function __construct(string $title, string $author, float $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }


    public function displayInfo(): void {
        echo "Title: " . $this->title . "<br>";
        echo "Author: " . $this->author . "<br>";
        echo "Price: $" . $this->price . "<br>";
    }


}


$book = new Book("The Great Gatsby", "F. Scott Fitzgerald", 10.99);
$book->displayInfo();