<header>
    
    <link rel="stylesheet" href="css/header.css">
    <a href="index.php"><h1>Random Movie</h1></a>
    <form id="formother" action="random.php" method="POST">
        <button id="other" type="submit">
            Get another movie
            <span class="loading">
                <i class="fa fa-cog fa-spin fa-fw"></i>
                <span id="loading">Loading...</span>
            </span>
        </button>
    </form>
</header>