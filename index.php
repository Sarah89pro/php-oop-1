<?php 
require_once __DIR__ . '/movie.php';

require_once __DIR__ . '/movie-data.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Oop 1</title>
</head>
<body>
    
    <header>
        <h1>Little Movie DB</h1>
    </header>

    <main>
        <section class="movies">
            <?php 
            //Movies Lists
            foreach($movies as $movie) {
                $new_movie = new Movie($movie['title'], $movie['original_title'], $movie['cast'], $movie['genre'],
                $movie['duration'], $movie['year'], $movie['distribuited_by'], $movie['director'], $movie['poster'], $movie['plot'],); ?>
            
                <article>
                    <h2> Titolo: <?php echo $new_movie->title; ?> </h2>
                    <h2> Titolo Originale: <?php echo $new_movie->original_title; ?> </h2>
                    <h3> Cast: <?php echo $new_movie->cast; ?> </h3>
                    <h3> Genere: <?php echo $new_movie->genre; ?> </h3>
                    <h3>Durata: <?php echo $new_movie->duration; ?></h3>
                    <h3>Anno: <?php echo $new_movie->year; ?> </h3>
                    <h3>Distribuzione <?php echo $new_movie->distribuited_by; ?> </h3>
                    <h3> Regia: <?php echo $new_movie->director; ?> </h3>
                    <img src="<?php echo $new_movie->poster; ?>" alt="poster">
                    <p> Trama: <?php echo $new_movie->getExcerpt(); ?> (...) </p>
                    <br>
                </article>
            <?php } ?>
            
            
        </section>    
    </main>
</body>
</html>