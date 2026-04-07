<?php
/*
 * ÉNONCÉ :
 * Un enum est déjà présent, il faudra l'utiliser pour la propriété status de la classe Task.
 * Créez une classe Task avec les propriétés protected title, description et status (par défaut TODO).
 * Ajoutez une méthode markAsDone() qui change le status en DONE.
 * Ajoutez une méthode display() qui affiche les infos de la tâche.
 * Instanciez une tâche, affichez ses infos, puis marquez-la comme terminée et affichez à nouveau.
 * Note : Pour afficher le status, utilisez $this->status->value pour obtenir la valeur de l'enum.
*/


class Task {

    protected string $title;
    protected string $description;
    protected string $status;

    public function __construct(string $title, string $description) {
        $this->title = $title;
        $this->description = $description;
        $this->status = "TODO"; 
    }

    public function markAsDone(): void {
        $this->status = "DONE"; 
    }

    public function display(): void {
        echo "Title: " . $this->title . "<br>";
        echo "Description: " . $this->description . "<br>";
        echo "Status: " . $this->status . "<br>";
    }
}


$task1 = new Task("Buy groceries", "Milk, Bread, Eggs");
$task1->display();
$task1->markAsDone();
$task1->display();