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
4. Dopo aver stilato un markup molto basico, spostare i dati in un array che verrà ciclato in modo tale da stamparli tutti dinamicamente
*/

require_once __DIR__ . '/models/Movie.php';

$movies = [
  new Movie('Spiderman', 'Sam Raimi', 'Supereroi'),
  new Movie('Inception', 'Cristopher Nolan', 'Thriller'),
  new Movie('American Psycho', 'Mary Harron', 'Horror'),
  new Movie('Inception', 'Cristopher Nolan', 'Thriller'),
  new Movie('Friday 13th', 'Sean S. Cunningham', 'Horror'),
  new Movie('Matrix', 'Lana e Lilly Wachowski', 'Fantascienza'),
  new Movie('Venom', 'Ruben Fleischer', 'Supereroi'),
  new Movie('Fast & Furious', 'Rob Cohen', 'Thriller'),
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <title>PHP OOP 1</title>
</head>
<body>
  <h1 class="text-center pt-5 pb-2">Lista film</h1>
  <div class="container">
      <table class="table border">

        <thead>
          <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Regista</th>
            <th scope="col">Genere</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach($movies as $movie):?>
            <tr>
              <th scope="row"> <?php echo $movie->title?> </th>
              <td> <?php echo $movie->author?> </td>
              <td> <?php echo $movie->type?> </td>
            </tr>
          <?php endforeach;  ?>
        </tbody>
        
      </table>
  </div>
</body>
</html>