<?php

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


?>