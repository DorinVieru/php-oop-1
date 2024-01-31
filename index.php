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

        // FUNCTION CONSTRUCT
        function __construct($_name, $_genre, $_regista, $_year, $_duration)
        {
            $this->name = $_name;
            $this->genre = $_genre;
            $this->regista = $_regista;
            $this->year = $_year;
            $this->duration = $_duration;
        }

        // FUNZIONI PER MOSTRARE UNA FRASE A SCHERMO
        public function filmConsigliato()
        {
            return $this->name . " <span class='badge bg-success'>Da non perdere</span>";
        }

        public function filmRivedere()
        {
            return $this->name . " <span class='badge bg-warning'>Da rivedere</span>";
        }

        public function forgenre(){
            return implode(',', $this->genre);
        }
    }

    // CREO ISTANZA PER LA CLASSE MOVIE
    $movie_1 = new Movie("V per Vendetta", ["Azione, Drammatico, Thriller"], "James McTeigue", 2005, "132 min");
    $movie_2 = new Movie("La battaglia di Hacksaw Ridge", ["Biografico, Drammatico, Storico, Guerra"], "Mel Gibson", 2016, "131 min");
    $movie_3 = new Movie("The Place", ["Drammatico, Noir, Fantastico"], "Paolo Genovese", 2017, "105 min");

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
            <!-- MOVIE 1 -->
            <div class="col-4">
                <ul class="list-group">
                    <li class="list-group-item fw-bold">Titolo: <?php echo $movie_1->filmConsigliato(); ?></li>
                    <li class="list-group-item">Genere: <?php echo $movie_1->forgenre(); ?></li>
                    <li class="list-group-item">Anno di uscita: <?php echo $movie_1->year ?></li>
                    <li class="list-group-item">Lingua originale: <?php echo $movie_1->original_language ?></li>
                    <li class="list-group-item">Durata: <?php echo $movie_1->duration ?></li>
                    <li class="list-group-item">Regista: <?php echo $movie_1->regista ?></li>
                    <li class="list-group-item">Attore principale: <?php echo $movie_1->princ_actor ?></li>
                </ul>
            </div>
            <!-- MOVIE 2 -->
            <div class="col-4">
                <ul class="list-group">
                    <li class="list-group-item fw-bold">Titolo: <?php echo $movie_2->name ?></li>
                    <li class="list-group-item">Genere: <?php echo $movie_2->forgenre(); ?></li>
                    <li class="list-group-item">Anno di uscita: <?php echo $movie_2->year ?></li>
                    <li class="list-group-item">Lingua originale: <?php echo $movie_2->original_language ?></li>
                    <li class="list-group-item">Durata: <?php echo $movie_2->duration ?></li>
                    <li class="list-group-item">Regista: <?php echo $movie_2->regista ?></li>
                    <li class="list-group-item">Attore principale: <?php echo $movie_2->princ_actor ?></li>
                </ul>
            </div>
            <!-- MOVIE 3 -->
            <div class="col-4">
                <ul class="list-group">
                    <li class="list-group-item fw-bold">Titolo: <?php echo $movie_3->filmRivedere(); ?></li>
                    <li class="list-group-item">Genere: <?php echo $movie_3->forgenre(); ?></li>
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