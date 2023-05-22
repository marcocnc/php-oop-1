<?php

/*Ripassate i primi concetti di classe, variabili e metodi d’istanza che abbiamo visto stamattina e create un file `index.php` in cui:
 - è definita una **classe ‘Movie’**
   => all’interno della classe sono dichiarate delle **variabili d’istanza**
   => all’interno della classe è definito **un costruttore**
   => all’interno della classe è definito almeno **un metodo**
- vengono **istanziati almeno due oggetti ‘Movie’** e stampati a schermo i valori delle relative proprietà


1. Creare la classe Movie con qualche variabile di istanza (esempio: title, author, type);
2. Creare il costruttore facendogli passare i 3 parametri;
3. Creare una funzione che mi restituisce tutte le informazioni del film
*/

class Movie {
  public $title;
  public $author;
  public $type;

  function __construct($_title, $_author, $_type){
    $this->title = $_title;
    $this->author = $_author;
    $this->type = $_type;
  }

  public function getFullMovieInfo(){
    return 'Titolo:' . ' ' . $this->title . ' ' . 'Regista:' . ' ' . $this->author . ' ' . 'Genere:' . ' ' . $this->type;
  }

}

$spiderman = new Movie('Spiderman', 'Sam Raimi', 'Supereroi');
$inception = new Movie('Inception', 'Cristopher Nolan', 'Thriller');
$americanPsycho = new Movie('American Psycho', 'Mary Harron', 'Horror');
$inception = new Movie('Inception', 'Cristopher Nolan', 'Thriller');

var_dump($spiderman->getFullMovieInfo());