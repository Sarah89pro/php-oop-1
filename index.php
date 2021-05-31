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
                $new_movie = new Movie($movie['title'], $movie['distribuited_by'], $movie['director'], $movie['plot']); ?>
            
                <article>
                    <h2> Titolo: <?php echo $new_movie->title; ?> </h2>
                    <h3> Distribuzione: <?php echo $new_movie->distribuited_by; ?> </h3>
                    <h3> Regista: <?php echo $new_movie->director; ?> </h3>
                    <p> Trama: <?php echo $new_movie->getExcerpt(); ?> (...) </p>
                </article>

            <?php } ?>
            
            
        </section>    
    </main>
</body>
</html>