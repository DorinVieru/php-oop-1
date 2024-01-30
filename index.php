<!-- SEZIONE PHP LOGICA -->
<?php
// DEFICNIZIONE DELLA CLASSE MOVIE
class Movie
{
    public $name;
    public $genre;
    public $princ_actor;
    public $regista;
    public $year;
    public $duration;
    public $original_language;

    function __construct($_name, $_genre, $_regista, $_year, $_duration)
    {
        $this->name = $_name;
        $this->genre = $_genre;
        $this->regista = $_regista;
        $this->year = $_year;
        $this->duration = $_duration;
    }
}

// CREO ISTANZA PER LA CLASSE MOVIE
$movie_1 = new Movie("V per Vendetta", "Azione, Drammatico, Thriller", "James McTeigue", 2005, "132 min");
$movie_2 = new Movie("La battaglia di Hacksaw Ridge", "Biografico, Drammatico, Storico, Guerra", "Mel Gibson", 2016, "131 min");
$movie_3 = new Movie("The Place", "Drammatico, Noir, Fantastico", "Paolo Genovese", 2017, "105 min");

// ASSEGNO DEI VALORI AGLI ATTRIBUTI DELL'ISTANZA DI MOVIE 1
$movie_1->name = "V per Vendetta";
$movie_1->genre = "Azione, Drammatico, Thriller";
$movie_1->princ_actor = "Hugo Weaving";
$movie_1->regista = "James McTeigue";
$movie_1->year = 2005;
$movie_1->duration = "132 min";
$movie_1->original_language = "Inglese";

// ASSEGNO DEI VALORI AGLI ATTRIBUTI DELL'ISTANZA DI MOVIE 2
$movie_2->name = "La battaglia di Hacksaw Ridge";
$movie_2->genre = "Biografico, Drammatico, Storico, Guerra";
$movie_2->princ_actor = "Andrew Garfield";
$movie_2->regista = "Mel Gibson";
$movie_2->year = 2016;
$movie_2->duration = "131 min";
$movie_2->original_language = "Inglese";

// ASSEGNO DEI VALORI AGLI ATTRIBUTI DELL'ISTANZA DI MOVIE 3
$movie_3->name = "The Place";
$movie_3->genre = "Drammatico, Noir, Fantastico";
$movie_3->princ_actor = "Valerio Mastandrea";
$movie_3->regista = "Paolo Genovese";
$movie_3->year = "2017";
$movie_3->duration = "105 min";
$movie_3->original_language = "Italiano";


?>

<!-- SEZIONE HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Movie</title>
</head>

<body>
    <main class="container my-5">
        <div class="row">
            <div class="col-12 pb-4">
                <h1 class="text-center text-primary">The Best Movie Ever You Seen</h1>
            </div>
            <div class="col-4">
                <ul class="list-group">
                    <li class="list-group-item fw-bold">Titolo: <?php echo $movie_1->name ?></li>
                    <li class="list-group-item">Genere: <?php echo $movie_1->genre ?></li>
                    <li class="list-group-item">Anno di uscita: <?php echo $movie_1->year ?></li>
                    <li class="list-group-item">Lingua originale: <?php echo $movie_1->original_language ?></li>
                    <li class="list-group-item">Durata: <?php echo $movie_1->duration ?></li>
                    <li class="list-group-item">Regista: <?php echo $movie_1->regista ?></li>
                    <li class="list-group-item">Attore principale: <?php echo $movie_1->princ_actor ?></li>
                </ul>
            </div>
            <div class="col-4">
                <ul class="list-group">
                    <li class="list-group-item fw-bold">Titolo: <?php echo $movie_2->name ?></li>
                    <li class="list-group-item">Genere: <?php echo $movie_2->genre ?></li>
                    <li class="list-group-item">Anno di uscita: <?php echo $movie_2->year ?></li>
                    <li class="list-group-item">Lingua originale: <?php echo $movie_2->original_language ?></li>
                    <li class="list-group-item">Durata: <?php echo $movie_2->duration ?></li>
                    <li class="list-group-item">Regista: <?php echo $movie_2->regista ?></li>
                    <li class="list-group-item">Attore principale: <?php echo $movie_2->princ_actor ?></li>
                </ul>
            </div>
            <div class="col-4">
                <ul class="list-group">
                    <li class="list-group-item fw-bold">Titolo: <?php echo $movie_3->name ?></li>
                    <li class="list-group-item">Genere: <?php echo $movie_3->genre ?></li>
                    <li class="list-group-item">Anno di uscita: <?php echo $movie_3->year ?></li>
                    <li class="list-group-item">Lingua originale: <?php echo $movie_3->original_language ?></li>
                    <li class="list-group-item">Durata: <?php echo $movie_3->duration ?></li>
                    <li class="list-group-item">Regista: <?php echo $movie_3->regista ?></li>
                    <li class="list-group-item">Attore principale: <?php echo $movie_3->princ_actor ?></li>
                </ul>
            </div>
        </div>
    </main>
</body>

</html>