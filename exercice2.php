<?php
/*
 * ÉNONCÉ :
 * Créez une classe Contact avec les propriétés protected name, email et phone.
 * Ajoutez les getters/setters et une méthode displayContact() qui affiche les infos du contact.
 * Instanciez un contact et affichez ses informations.
*/


class Contact {

    protected string $name;
    protected string $email;
    protected string $phone;

    public function __construct(string $name, string $email, string $phone) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function getName(): string {
        return $this->name;
    }
    public function setName(string $name): void {
        $this->name = $name;
    }
    public function getEmail(): string {
        return $this->email;
    }
    public function setEmail(string $email): void {
        $this->email = $email;
    }
    public function getPhone(): string {
        return $this->phone;
    }
    public function setPhone(string $phone): void {
        $this->phone = $phone;
    }

    public function displayContact(): void {
        echo "Name: " . $this->name . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Phone: " . $this->phone . "<br>";
    }


}


$contact = new Contact("John Doe", "john.doe@example.com", "0621345247");
$contact->displayContact();