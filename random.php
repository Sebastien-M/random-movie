<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/styleRandom.css">
    <title>Random movie</title>
    <?php
    session_start();
    $_SESSION['page'] = "random.php";
    ?>
</head>
<body>
    <?php include("parts/header.php"); ?>
    <main>
        <?php
            function get_http_response_code($url) {
                $headers = get_headers($url);
                return substr($headers[0], 9, 3);
            }
            function search(){
                $random = rand (0 ,100000);
                $api_key = file_get_contents("auth.txt");
                while(get_http_response_code("https://api.themoviedb.org/3/movie/".$random."?api_key=".$api_key) != "200"){
                    $random = rand (0 ,100000);
                }
                $json = file_get_contents("https://api.themoviedb.org/3/movie/".$random."?api_key=".$api_key);
                $obj = json_decode($json,true);
                return $obj;
            }
            $poster_path = "http://image.tmdb.org/t/p/w185/";
            $film = search();
            while($film["adult"] === true){
                $film = search();
            }
            $titre = $film["title"];
            $resume = $film["overview"];
            $note = $film["vote_average"];
            $votes = $film["vote_count"];
            $film_img = "http://image.tmdb.org/t/p/w185/".$film["poster_path"];
            echo "\n    <p class='titre'>".$titre."</p>";
            echo "\n    <p class='description'>".$resume."</p>";
            echo "\n    <p class='note'>Note : ".$note."/10</p>";
            echo "\n    <p class='votes'>Votes : ".$votes."</p>";
            echo "\n    <img src='".$film_img."' alt='No poster found fot the movie'>";
        ?>
    </main>
    <script src="https://use.fontawesome.com/d0fbf177e4.js"></script>
    <script src="js/header.js"></script>
</body>
</html>