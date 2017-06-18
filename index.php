<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Random movie</title>
</head>
<body>
<main>
    <h1>Random Movie</h1>
    <p class="description">
        You want to watch a movie but have no idea?<br/>Just click the button
    </p>
    <form action="random.php" method="POST">
        <input id="send" type="submit" value="Get a random movie!">
    </form>
</main>
<section class="popularMovies">
    <h2>Most popular movies</h2>
    <div class="popular">
        <?php
        $content = file_get_contents("https://api.themoviedb.org/3/discover/movie?sort_by=popularity.desc&api_key=387be639893de8792299f4ce3db41af0");
        $json = json_decode($content,true);
        $films = count($json['results']);
        for ($i=0; $i < 10; $i++) { 
            echo "<div class='movie".$i." movies'>";
            echo "<img class='poster' src='http://image.tmdb.org/t/p/w185/".$json['results'][$i]['poster_path']."' alt='movie poster'>";
            echo "<h4 class='movieTitle'>".$json['results'][$i]["title"]."</h4>";
            echo "</div>";
        }
        ?>
    </div>
</section>
</body>
</html>