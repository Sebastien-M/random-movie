<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Random movie</title>
    <?php
    session_start();
    $_SESSION['page'] = "index.php";
    ?>
</head>
<body>
<?php
include_once("parts/header.php");
?>
<main>
    <h1>Random Movie</h1>
    <p class="description">
        You want to watch a movie but have no idea?<br/>Just click the button
    </p>
    <form action="random.php" method="POST">
        <input id="send" type="submit" value="Get a random movie!">
    </form>
    <!--<button class="popularbutton">See most popular movies</button>-->
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
            echo "<div class='details details".$i."'>";
            echo "<h4 class='movieTitle'>".$json['results'][$i]["title"]."</h4>";
            echo "<div class='note'>";
            echo "<p>".$json['results'][$i]['vote_average']."</p>";
            echo "<i class='fa fa-star' aria-hidden='true'></i>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
</section>
<script src="https://use.fontawesome.com/d0fbf177e4.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/index.js"></script>
</body>
</html>